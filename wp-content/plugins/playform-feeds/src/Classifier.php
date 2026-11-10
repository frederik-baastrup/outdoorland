<?php
namespace Playform\Feeds;

/**
 * Placerer et produkt i sitets kategoritræ (Config::categories()) ud fra navn og butikkens kategori.
 * Returnerer en kategori-slug, 'exclude' (skal ikke med) eller Config::uncategorized_slug().
 */
final class Classifier {

	public static function classify( array $offer ): string {
		$name = mb_strtolower( $offer['name'] );
		// Mærkenavnet må ikke styre kategorien (fx "American Barbell Squat Stand").
		$brand = mb_strtolower( trim( $offer['brand'] ) );
		$match_name = $brand !== '' && mb_strlen( $brand ) > 2 ? trim( str_replace( $brand, ' ', $name ) ) : $name;
		$cat  = mb_strtolower( $offer['shop_category'] );

		if ( $offer['price'] <= 0 ) {
			return 'exclude';
		}
		// Butikker med fast kategori-oversættelse (fx cykelbutikker): kun de nævnte butikskategorier kommer med.
		$shop = Config::shops()[ $offer['shop'] ] ?? [];
		$map  = $shop['category_map'] ?? null;
		if ( is_array( $map ) ) {
			$mapped = $map[ $cat ] ?? 'exclude';
			// '?': butikskategorien er med, men kun vores egne regler (inkl. udelukkelser) afgør placeringen.
			// '?:<regex>': som '?', men navnet skal også matche regex (fx kun bærbare grill fra en stor grillkategori).
			if ( is_string( $mapped ) && str_starts_with( $mapped, '?:' ) ) {
				if ( ! self::m( substr( $mapped, 2 ), $name ) ) {
					return 'exclude';
				}
				$mapped = '?';
			}
			if ( '?' === $mapped ) {
				foreach ( Config::exclude() as $pattern ) {
					if ( self::m( $pattern, $name ) ) {
						return 'exclude';
					}
				}
				return self::first_match( $match_name ) ?: 'exclude';
			}
			// 'refine': butikken sælger kun nichens varer – vores egne regler må placere varen mere præcist
			// (fx en pizzasaks i butikkens "Andet pizzaudstyr"), ellers bruges butikkens kategori.
			if ( 'exclude' !== $mapped && ! empty( $shop['refine'] ) ) {
				return self::first_match( $match_name ) ?: $mapped;
			}
			// Fast kategori: udelukkelserne gælder stadig for navnet (fx montager og batterier i en optikkategori).
			if ( 'exclude' !== $mapped ) {
				foreach ( Config::exclude() as $pattern ) {
					if ( self::m( $pattern, $name ) ) {
						return 'exclude';
					}
				}
			}
			return $mapped;
		}
		foreach ( Config::exclude() as $pattern ) {
			if ( self::m( $pattern, $name ) || self::m( $pattern, $cat ) ) {
				return 'exclude';
			}
		}

		$found = self::first_match( $match_name );
		if ( ! $found && ! in_array( $cat, Config::meaningless_shop_categories(), true ) && $cat !== mb_strtolower( $offer['brand'] ) ) {
			$found = self::first_match( $cat );
		}
		// Tilbehør til maskiner (reservedele, filtre …) placeres for sig (Config::machine_categories()).
		if ( $found && in_array( $found, Config::machine_categories(), true ) && self::m( Config::accessory_pattern(), $name ) ) {
			$found = Config::accessory_target();
		}
		// Mærker, der kun laver udstyr til nichen (fx Ooni til pizza): tilbehør uden kategoriord i navnet.
		if ( ! $found && $brand !== '' && method_exists( Config::class, 'brand_categories' ) ) {
			$found = Config::brand_categories()[ $brand ] ?? null;
		}
		if ( ! $found && method_exists( Config::class, 'skip_uncategorized' ) && Config::skip_uncategorized() ) {
			return 'exclude'; // fx Outdoorland: kun varer, der passer i en kategori, kommer med
		}
		return $found ?: Config::uncategorized_slug();
	}

	private static function first_match( string $text ): ?string {
		if ( $text === '' ) {
			return null;
		}
		foreach ( Config::categories() as $slug => $def ) {
			if ( self::m( $def['match'], $text ) && ( empty( $def['not'] ) || ! self::m( $def['not'], $text ) ) ) {
				return $slug;
			}
		}
		return null;
	}

	private static function m( string $pattern, string $text ): bool {
		return (bool) preg_match( '~' . $pattern . '~iu', $text );
	}
}
