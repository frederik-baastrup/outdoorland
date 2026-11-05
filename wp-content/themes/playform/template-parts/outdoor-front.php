<?php
/**
 * Outdoorland-forsiden: "Sæsonens udstyr" (skifter med måneden). ("Find udstyr til din tur" er fjernet efter
 * ejerens ønske 5. nov. 2026.)
 */
defined( 'ABSPATH' ) || exit;

$cat_link = static function ( string $slug ): string {
	return playform_category_url( $slug );
};

// Sæsonens udstyr: skifter automatisk med måneden.
$m       = (int) wp_date( 'n' );
$seasons = [
	'vinter' => [ [ 12, 1, 2 ], 'Vinter', 'snow', 'Kolde nætter og korte dage kræver varmt udstyr: en sovepose til frost, uldundertøj og en god pandelampe.', [ 'vintersoveposer' => [ 'Vintersoveposer', 600 ], 'vinterliggeunderlag' => [ 'Vinterliggeunderlag', 400 ], 'uldundertoej' => [ 'Uldundertøj', 300 ], 'pandelamper' => [ 'Pandelamper', 250 ], 'jakker' => [ 'Jakker', 900 ] ] ],
	'foraar' => [ [ 3, 4, 5 ], 'Forår', 'leaf', 'Sæsonen starter: gå de nye vandrestøvler til, tjek teltet, og find regntøjet frem til aprilsbygerne.', [ 'vandrestoevler' => [ 'Vandrestøvler', 900 ], 'telte' => [ 'Telte', 1000 ], 'regntoej' => [ 'Regntøj', 400 ], 'vandrerygsaekke' => [ 'Vandrerygsække', 700 ] ] ],
	'sommer' => [ [ 6, 7, 8 ], 'Sommer', 'sun', 'Lange lyse aftener i telt og hængekøje, på vandet og ved bålet. Husk køletasken og myggenettet.', [ 'telte' => [ 'Telte', 800 ], 'haengekoejer' => [ 'Hængekøjer', 200 ], 'sup' => [ 'SUP-boards', 1500 ], 'koeletasker' => [ 'Køletasker', 300 ] ] ],
	'efteraar' => [ [ 9, 10, 11 ], 'Efterår', 'leaf', 'Svampeture, fiskeri og blæsende vandreture. Varme lag, regntøj og en god pandelampe til de mørke aftener.', [ 'regntoej' => [ 'Regntøj', 400 ], 'fleece' => [ 'Fleece & mellemlag', 300 ], 'pandelamper' => [ 'Pandelamper', 250 ], 'fiskestaenger' => [ 'Fiskestænger', 400 ], 'vintersoveposer' => [ 'Vintersoveposer', 600 ], 'vinterliggeunderlag' => [ 'Vinterliggeunderlag', 400 ] ] ],
];
foreach ( $seasons as $key => [ $months, $name, $icon, $text, $cats ] ) {
	if ( in_array( $m, $months, true ) ) {
		break;
	}
}
$first   = array_key_first( $cats );
$prod    = function_exists( 'playform_front_category_products' ) ? playform_front_category_products( $first, $cats[ $first ][1] ) : [];
?>
<section class="wrap section season season--<?php echo esc_attr( $key ); ?>">
	<div class="season__card">
		<span class="season__icon"><?php echo playform_icon( $icon, 26, 1.4 ); // phpcs:ignore ?></span>
		<div class="season__text">
			<span class="season__kicker">Sæsonens udstyr</span>
			<h2><?php echo esc_html( $name ); ?> i naturen</h2>
			<p><?php echo esc_html( $text ); ?></p>
		</div>
		<nav class="season__chips" aria-label="<?php echo esc_attr( 'Sæsonens udstyr: ' . $name ); ?>">
			<?php foreach ( $cats as $slug => [ $label ] ) : ?>
				<a href="<?php echo esc_url( $cat_link( $slug ) ); ?>"><?php echo esc_html( $label ); ?></a>
			<?php endforeach; ?>
		</nav>
	</div>
</section>
<?php
if ( count( $prod ) >= 4 ) {
	get_template_part( 'template-parts/slider', null, [ 'title' => $cats[ $first ][0] . ' til ' . [ 'vinter' => 'vinteren', 'foraar' => 'foråret', 'sommer' => 'sommeren', 'efteraar' => 'efteråret' ][ $key ], 'products' => $prod, 'id' => 'slider-season', 'link' => $cat_link( $first ), 'link_label' => 'Se alle ' . mb_strtolower( $cats[ $first ][0] ) ] );
}
