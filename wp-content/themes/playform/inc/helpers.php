<?php
/**
 * Små hjælpefunktioner til skabelonerne.
 */

defined( 'ABSPATH' ) || exit;

function playform_asset( string $file ): string {
	return get_template_directory_uri() . '/assets/img/' . $file;
}

/**
 * srcset til temaets store billeder: findes en "-800.jpg"-udgave ved siden af, får mobilen den (ca. 1/3 af filstørrelsen).
 */
function playform_srcset( string $url, string $sizes = '(max-width: 760px) 100vw, 50vw' ): string {
	$base = get_template_directory_uri() . '/assets/img/';
	if ( ! str_starts_with( $url, $base ) || ! str_ends_with( $url, '.jpg' ) ) {
		return '';
	}
	$small = substr( $url, 0, -4 ) . '-800.jpg';
	if ( ! is_file( get_template_directory() . '/assets/img/' . substr( $small, strlen( $base ) ) ) ) {
		return '';
	}
	return ' srcset="' . esc_url( $small ) . ' 800w, ' . esc_url( $url ) . ' 1600w" sizes="' . esc_attr( $sizes ) . '"';
}

function playform_kr( float $amount ): string {
	return number_format( round( $amount ), 0, ',', '.' ) . ' kr';
}

/** Tynde linjeikoner (stroke 1.4–1.6) i samme stil som designet. */
function playform_icon( string $name, int $size = 20, float $stroke = 1.6 ): string {
	$paths = [
		'arrow-right' => '<path d="M9 5l7 7-7 7"/>',
		'arrow-left'  => '<path d="M15 5l-7 7 7 7"/>',
		'chevron'     => '<path d="M6 9l6 6 6-6"/>',
		'search'      => '<circle cx="11" cy="11" r="7"/><path d="M20 20l-3.5-3.5"/>',
		'external'    => '<path d="M7 17L17 7M9 7h8v8"/>',
		'check'       => '<path d="M5 12l5 5 9-10"/>',
		'close'       => '<path d="M6 6l12 12M18 6L6 18"/>',
		'plus'        => '<path d="M12 5v14M5 12h14"/>',
		'grid'        => '<rect x="4" y="4" width="7" height="7" rx="1.5"/><rect x="13" y="4" width="7" height="7" rx="1.5"/><rect x="4" y="13" width="7" height="7" rx="1.5"/><rect x="13" y="13" width="7" height="7" rx="1.5"/>',
		'refresh'     => '<path d="M21 12a9 9 0 1 1-2.6-6.4"/><path d="M21 4v5h-5"/>',
		'tag'         => '<path d="M3 12V4h8l9 9-8 8-9-9z"/><circle cx="7.5" cy="7.5" r="1.2"/>',
		'store'       => '<path d="M3 9l1.5-5h15L21 9"/><path d="M3 9v11h18V9"/><path d="M3 9h18"/><path d="M9 20v-6h6v6"/>',
		'filter'      => '<path d="M4 6h16M7 12h10M10 18h4"/>',
		'menu'        => '<path d="M4 7h16M4 12h16M4 17h16"/>',
		'truck'       => '<path d="M2.5 6.5h11v9.5h-11z"/><path d="M13.5 9.5h4l3 3v3.5h-7"/><circle cx="7" cy="17.5" r="1.8"/><circle cx="17" cy="17.5" r="1.8"/>',
		'clock'       => '<circle cx="12" cy="12" r="8.5"/><path d="M12 7.5V12l3 2"/>',
		'calendar'    => '<rect x="4" y="5.5" width="16" height="14" rx="2"/><path d="M4 10h16M8.5 3.5v4M15.5 3.5v4"/>',
		'tent'        => '<path d="M2.5 20h19"/><path d="M12 4L4 20M12 4l8 16"/><path d="M12 11l-2.5 9M12 11l2.5 9"/>',
		'pot'         => '<path d="M5 10h14v5.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 5 15.5z"/><path d="M3 10h18M9.5 7c0-1.2 1-1.6 1-2.8M13.5 7c0-1.2 1-1.6 1-2.8"/>',
		'backpack'    => '<path d="M6.5 9a5.5 5.5 0 0 1 11 0v10.5a1 1 0 0 1-1 1h-9a1 1 0 0 1-1-1z"/><path d="M10 3.5h4M9 13.5h6v3.5H9z"/>',
		'jacket'      => '<path d="M9 3.5l3 2 3-2 4 2.5 1.5 6.5-2.5 1v7H6v-7l-2.5-1L5 6z"/><path d="M12 5.5v15"/>',
		'boot'        => '<path d="M7 3.5h5v8l5.5 2.3a3 3 0 0 1 2 2.8V19h-15v-3.5L7 13z"/><path d="M4.5 19v1.5h15V19M12 8h-2M12 11h-2"/>',
		'flashlight'  => '<path d="M6 3.5h12l-2 5H8z"/><path d="M8 8.5h8v12H8z"/><path d="M12 12v3"/>',
		'fish'        => '<path d="M3 12c3-4.5 8.5-6 12.5-4L20.5 5v14l-5-3c-4 2-9.5.5-12.5-4z"/><circle cx="8" cy="11" r=".6"/>',
		'kayak'       => '<path d="M2.5 15c4-2.6 15-2.6 19 0-4 2.6-15 2.6-19 0z"/><path d="M6.5 4.5l11 15"/><path d="M5 3l2 2.5M17 19l2 2.5"/>',
		'binoculars'  => '<circle cx="7" cy="16" r="3.5"/><circle cx="17" cy="16" r="3.5"/><path d="M4 14.5l2-8.5h3l1 6M20 14.5l-2-8.5h-3l-1 6M10 12h4"/>',
		'mountain'    => '<path d="M2.5 19.5l6.5-11 4 6.5 2.5-3.5 6 8z"/>',
		'fire'        => '<path d="M12 3c1 3 5 5 5 10a5 5 0 0 1-10 0c0-2.5 1.5-3.5 2-5 .5 1.5 1.5 2.5 2.5 2.5C12 8 11 6 12 3z"/><path d="M5 21h14"/>',
		'snow'        => '<path d="M12 3v18M4.2 7.5l15.6 9M4.2 16.5l15.6-9"/><path d="M9.5 4.5L12 6.5l2.5-2M9.5 19.5L12 17.5l2.5 2"/>',
		'sun'         => '<circle cx="12" cy="12" r="4"/><path d="M12 2.5v2.5M12 19v2.5M2.5 12H5M19 12h2.5M5.3 5.3l1.8 1.8M16.9 16.9l1.8 1.8M5.3 18.7l1.8-1.8M16.9 7.1l1.8-1.8"/>',
		'leaf'        => '<path d="M5 19c0-8 5-13.5 14.5-14.5C18.5 14 13 19 5 19z"/><path d="M5 19l8-8"/>',
		'product'     => '<rect x="3.5" y="5" width="17" height="14" rx="2.5"/><circle cx="9" cy="10" r="1.6"/><path d="M20.5 15.5l-4.5-4.5-8 8"/>',
	];
	return sprintf(
		'<svg width="%1$d" height="%1$d" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="%2$s" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">%3$s</svg>',
		$size,
		$stroke,
		$paths[ $name ] ?? ''
	);
}

function playform_shop_name( string $key ): string {
	$shops = class_exists( '\Playform\Feeds\Config' ) ? \Playform\Feeds\Config::shops() : [];
	return $shops[ $key ]['name'] ?? $key;
}

function playform_shop_names(): array {
	return class_exists( '\Playform\Feeds\Config' ) ? array_column( \Playform\Feeds\Config::shops(), 'name' ) : [];
}

/** Data til et produktkort, så kortet ser ens ud overalt. */
function playform_card_data( WC_Product $p ): array {
	$id       = $p->get_id();
	$shops    = (int) get_post_meta( $id, '_pf_shop_count', true );
	$shop     = playform_shop_name( (string) get_post_meta( $id, '_pf_best_shop', true ) );
	$drop     = (int) get_post_meta( $id, '_pf_drop_percent', true );
	$ref      = (float) get_post_meta( $id, '_pf_reference_price', true );
	$in_stock = (bool) get_post_meta( $id, '_pf_in_stock', true );
	$attrs    = (array) get_post_meta( $id, '_pf_attributes', true );
	$brand    = (string) get_post_meta( $id, '_pf_brand', true );
	$was     = 0.0;
	$was_src = '';
	if ( $in_stock && get_post_meta( $id, '_pf_shop_sale', true ) ) {
		$was     = (float) get_post_meta( $id, '_pf_sale_ref', true );
		$was_src = $was > 0 ? 'ref' : '';
		if ( ! $was ) {
			$was     = (float) get_post_meta( $id, '_pf_sale_list', true );
			$was_src = $was > 0 ? 'shop' : '';
		}
	}
	return [
		'url'      => get_permalink( $id ),
		'name'     => $p->get_name(),
		'brand'    => $brand,
		'image'    => class_exists( '\\Playform\\Feeds\\Frontend' ) ? \Playform\Feeds\Frontend::image_url( $id ) : (string) get_post_meta( $id, '_pf_image', true ),
		'price'    => (float) $p->get_price(),
		'drop'     => $drop,
		'ref'      => $ref,
		'in_stock' => $in_stock,
		'sale'     => $in_stock && (bool) get_post_meta( $id, '_pf_shop_sale', true ),
		// Førpris: helst vores kontrollerede (laveste pris de 30 dage før tilbuddet, se Sales::reference),
		// ellers butikkens egen førpris – mærket som sådan ('was_src' => 'shop').
		'was'      => $was,
		'was_src'  => $was_src,
		'foldable' => ! empty( $attrs['foldable'] ),
		'shop'     => $shop,
		'shops'    => $shops,
	];
}

function playform_product_card( WC_Product $p, string $class = 'pcard' ): void {
	static $n = 0;
	++$n;
	$d    = playform_card_data( $p );
	$lazy = $n > 2 ? 'loading="lazy" decoding="async"' : 'decoding="async"'; // de første kort ses uden scroll – ikke udskudt
	?>
	<a href="<?php echo esc_url( $d['url'] ); ?>" class="<?php echo esc_attr( $class ); ?>">
		<span class="pcard__img">
			<?php if ( $d['image'] ) : ?>
				<img src="<?php echo esc_url( $d['image'] ); ?>" alt="<?php echo esc_attr( $d['name'] ); ?>" <?php echo $lazy; // phpcs:ignore ?>>
			<?php else : ?>
				<span class="pcard__ph"><?php echo playform_icon( 'product', 72, 1.2 ); // phpcs:ignore ?></span>
			<?php endif; ?>
			<span class="pcard__badges">
				<?php $pct = playform_save_pct( (float) $d['price'], (float) $d['was'] ); ?>
				<?php if ( $d['sale'] ) : ?><span class="badge badge--sale"><?php echo $pct ? esc_html( '−' . $pct . ' %' ) : 'Tilbud'; ?></span><?php endif; ?>
				<?php if ( $d['foldable'] ) : ?><span class="badge">Foldbar</span><?php endif; ?>
				<?php if ( ! $d['in_stock'] ) : ?><span class="badge badge--muted">Ikke på lager</span><?php endif; ?>
			</span>
		</span>
		<span class="pcard__body">
			<?php if ( $d['brand'] ) : ?><span class="pcard__brand"><?php echo esc_html( $d['brand'] ); ?></span><?php endif; ?>
			<span class="pcard__name"><?php echo esc_html( $d['name'] ); ?></span>
			<span class="pcard__price">
				<?php if ( $d['was'] > $d['price'] ) : ?>
					<span class="is-sale"><?php echo esc_html( playform_kr( $d['price'] ) ); ?></span>
					<s title="<?php echo 'shop' === $d['was_src'] ? esc_attr( 'Butikkens førpris' ) : 'Laveste pris de 30 dage før tilbuddet'; ?>"><?php echo esc_html( playform_kr( $d['was'] ) ); ?></s>
				<?php else : ?>
					<span><?php echo esc_html( playform_kr( $d['price'] ) ); ?></span>
				<?php endif; ?>
			</span>
			<span class="pcard__shop">
				<?php
				echo esc_html(
					$d['sale']
						? sprintf( 'Tilbud hos %s', $d['shop'] )
						: ( $d['shops'] > 1
						? sprintf( 'Billigst hos %s · %d butikker', $d['shop'], $d['shops'] )
						: sprintf( 'Hos %s', $d['shop'] ) )
				);
				?>
			</span>
		</span>
	</a>
	<?php
}

function playform_breadcrumbs( array $items ): void {
	echo '<nav class="crumbs" aria-label="Brødkrummer">';
	$last = count( $items ) - 1;
	foreach ( $items as $i => [ $label, $url ] ) {
		if ( $i > 0 ) {
			echo '<span aria-hidden="true">/</span>';
		}
		if ( $i === $last || ! $url ) {
			echo '<span aria-current="page">' . esc_html( $label ) . '</span>';
		} else {
			echo '<a href="' . esc_url( $url ) . '">' . esc_html( $label ) . '</a>';
		}
	}
	echo '</nav>';

	// Brødkrummer som strukturerede data (vises som sti i Googles resultater).
	$list = [];
	foreach ( array_values( $items ) as $i => [ $label, $url ] ) {
		$li = [ '@type' => 'ListItem', 'position' => $i + 1, 'name' => wp_specialchars_decode( (string) $label ) ];
		if ( $url ) {
			$li['item'] = $url;
		}
		$list[] = $li;
	}
	if ( count( $list ) > 1 && function_exists( 'playform_json_ld' ) ) {
		playform_json_ld( [ '@type' => 'BreadcrumbList', 'itemListElement' => $list ] );
	}
}

/**
 * Besparelse i procent i forhold til førprisen (kontrolleret førpris, ellers butikkens egen – se playform_card_data()).
 * 0, når der ingen førpris er.
 */
function playform_save_pct( float $price, float $was ): int {
	return ( $was > $price && $price > 0 ) ? (int) floor( ( $was - $price ) / $was * 100 ) : 0;
}

/** Hvornår priserne sidst blev opdateret, fx "i dag kl. 05:30". */
function playform_last_update_label(): string {
	$last = get_option( 'playform_feeds_last_run' );
	if ( empty( $last['finished'] ) ) {
		return '';
	}
	$ts   = strtotime( $last['finished'] . ' UTC' );
	$day  = wp_date( 'Y-m-d', $ts ) === wp_date( 'Y-m-d' ) ? 'i dag' : wp_date( 'j. F', $ts );
	return $day . ' kl. ' . wp_date( 'H:i', $ts );
}

/** FAQ som strukturerede data til Google. */
function playform_faq_schema( array $faq ): void {
	$data = [
		'@context'   => 'https://schema.org',
		'@type'      => 'FAQPage',
		'mainEntity' => array_map(
			static fn( $qa ) => [ '@type' => 'Question', 'name' => $qa[0], 'acceptedAnswer' => [ '@type' => 'Answer', 'text' => $qa[1] ] ],
			$faq
		),
	];
	echo '<script type="application/ld+json">' . wp_json_encode( $data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . '</script>';
}

/** Product-schema til Google. Én butik = Offer, flere = AggregateOffer. */
function playform_product_schema( WC_Product $product, array $offers, array $d ): void {
	$data = [
		'@context' => 'https://schema.org',
		'@type'    => 'Product',
		'name'     => $product->get_name(),
		'url'      => get_permalink( $product->get_id() ),
	];
	if ( $d['image'] ) {
		$data['image'] = $d['image'];
	}
	if ( $d['brand'] ) {
		$data['brand'] = [ '@type' => 'Brand', 'name' => $d['brand'] ];
	}
	$ean = (string) get_post_meta( $product->get_id(), '_pf_ean', true );
	if ( in_array( strlen( $ean ), [ 8, 12, 13, 14 ], true ) && ctype_digit( $ean ) ) {
		$data[ 'gtin' . strlen( $ean ) ] = $ean;
	}
	$data['sku'] = $ean ?: (string) get_post_field( 'post_name', $product->get_id() );
	$cat         = function_exists( 'playform_product_term' ) ? playform_product_term( $product->get_id() ) : null;
	if ( $cat ) {
		$data['category'] = wp_specialchars_decode( $cat->name );
	}
	$desc = wp_strip_all_tags( get_the_content( null, false, $product->get_id() ) ); // kun vores egen tekst, ikke butikkens (duplicate content)
	if ( $desc ) {
		$data['description'] = mb_substr( $desc, 0, 500 );
	} else {
		// Uden egen tekst: en neutral beskrivelse, kun ud fra data vi har (navn, mærke, kategori).
		$data['description'] = trim( $product->get_name() . ( $d['brand'] ? ' fra ' . $d['brand'] : '' ) . ( $cat ? ' i kategorien ' . wp_specialchars_decode( $cat->name ) : '' ) . '. Se pris og lagerstatus hos danske butikker.' );
	}
	if ( $offers ) {
		$in     = array_values( array_filter( $offers, static fn( $o ) => ! empty( $o['in_stock'] ) ) ) ?: $offers;
		$prices = array_column( $in, 'price' ); // kun tilbud på lager tæller i lav/høj pris
		$avail  = ! empty( array_filter( array_column( $offers, 'in_stock' ) ) ) ? 'https://schema.org/InStock' : 'https://schema.org/OutOfStock';
		if ( count( $offers ) === 1 ) {
			$data['offers'] = [ '@type' => 'Offer', 'price' => number_format( $offers[0]['price'], 2, '.', '' ), 'priceCurrency' => 'DKK', 'itemCondition' => 'https://schema.org/NewCondition', 'availability' => $avail, 'url' => $data['url'], 'seller' => [ '@type' => 'Organization', 'name' => $offers[0]['shop'] ] ];
			if ( isset( $offers[0]['shipping'] ) && $offers[0]['shipping'] !== null && $offers[0]['shipping'] !== '' ) {
				$data['offers']['shippingDetails'] = [
					'@type'               => 'OfferShippingDetails',
					'shippingRate'        => [ '@type' => 'MonetaryAmount', 'value' => number_format( (float) $offers[0]['shipping'], 2, '.', '' ), 'currency' => 'DKK' ],
					'shippingDestination' => [ '@type' => 'DefinedRegion', 'addressCountry' => 'DK' ],
				];
			}
		} else {
			$data['offers'] = [ '@type' => 'AggregateOffer', 'lowPrice' => number_format( min( $prices ), 2, '.', '' ), 'highPrice' => number_format( max( $prices ), 2, '.', '' ), 'offerCount' => count( $in ), 'priceCurrency' => 'DKK', 'itemCondition' => 'https://schema.org/NewCondition', 'availability' => $avail, 'url' => $data['url'] ];
		}
	}
	echo '<script type="application/ld+json">' . wp_json_encode( $data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . '</script>';
}

/** Danske måneds- og dagnavne, også hvis WordPress' danske sprogpakke ikke er installeret. */
add_filter(
	'wp_date',
	static function ( $date ) {
		return strtr(
			(string) $date,
			[
				'January' => 'januar', 'February' => 'februar', 'March' => 'marts', 'April' => 'april', 'May' => 'maj', 'June' => 'juni',
				'July' => 'juli', 'August' => 'august', 'September' => 'september', 'October' => 'oktober', 'November' => 'november', 'December' => 'december',
				'Jan' => 'jan.', 'Feb' => 'feb.', 'Mar' => 'mar.', 'Apr' => 'apr.', 'Jun' => 'jun.', 'Jul' => 'jul.', 'Aug' => 'aug.', 'Sep' => 'sep.', 'Oct' => 'okt.', 'Nov' => 'nov.', 'Dec' => 'dec.',
				'Monday' => 'mandag', 'Tuesday' => 'tirsdag', 'Wednesday' => 'onsdag', 'Thursday' => 'torsdag', 'Friday' => 'fredag', 'Saturday' => 'lørdag', 'Sunday' => 'søndag',
			]
		);
	}
);

/**
 * Indlæggets udvalgte billede – men kun hvis det er stort nok til at stå skarpt.
 * Et lille billede strakt ud bliver pixeleret; så hellere intet billede (eller et reservebillede).
 */
function playform_post_image( $post, int $min_width, string $size = 'large' ): string {
	$id = get_post_thumbnail_id( $post );
	if ( ! $id ) {
		return '';
	}
	$meta = wp_get_attachment_metadata( $id );
	if ( (int) ( $meta['width'] ?? 0 ) < $min_width ) {
		return '';
	}
	return (string) wp_get_attachment_image_url( $id, $size );
}

/**
 * Partner-ads-sporing: uid (produktet) og uid2 (hvor klikket kom fra, fx købsguidens adresse eller "produktside")
 * sættes på klik-linket, så klik og salg kan følges i Partner-ads' statistik. Parametrene sættes ind før htmlurl=,
 * fordi butikkens adresse i htmlurl ikke er kodet og skal stå til sidst.
 */
function playform_aff_url( string $url, string $uid, string $uid2 = '' ): string {
	if ( ! str_contains( $url, 'partner-ads.com' ) || str_contains( $url, 'uid=' ) ) {
		return $url;
	}
	$clean = static fn( string $v ): string => substr( sanitize_title( $v ), 0, 50 );
	$add   = '&uid=' . rawurlencode( $clean( $uid ) ) . ( '' !== $uid2 ? '&uid2=' . rawurlencode( $clean( $uid2 ) ) : '' );
	$pos   = strpos( $url, '&htmlurl=' );
	if ( false === $pos ) {
		$pos = strpos( $url, '&amp;htmlurl=' );
		$add = str_replace( '&', '&amp;', $add );
	}
	return false === $pos ? $url . $add : substr( $url, 0, $pos ) . $add . substr( $url, $pos );
}

/**
 * WordPress giver body klassen "search" på søgesiden – samme navn som søgefeltets form (.search), så søgefeltets
 * regler ramte hele siden (på mobil blev siden helt usynlig). Klassen omdøbes.
 */
add_filter(
	'body_class',
	static fn( array $classes ): array => array_map( static fn( $c ) => 'search' === $c ? 'is-search-page' : $c, $classes )
);
