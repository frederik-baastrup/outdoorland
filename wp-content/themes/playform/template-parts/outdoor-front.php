<?php
/**
 * Outdoorland-forsiden: "Find udstyr til din tur" (aktiviteter) og "Sæsonens udstyr" (skifter med måneden).
 * $args['part']: 'activities' eller 'season'.
 */
defined( 'ABSPATH' ) || exit;

$cat_link = static function ( string $slug ): string {
	return playform_category_url( $slug );
};

if ( 'activities' === ( $args['part'] ?? '' ) ) :
	$acts = [
		[ 'vandring', 'Vandring', 'mountain', [ [ 'Vandrerygsække', $cat_link( 'vandrerygsaekke' ) ], [ 'Vandrestøvler', $cat_link( 'vandrestoevler' ) ], [ 'Vandrestave', $cat_link( 'vandrestave' ) ], [ 'Guide: Vandrerygsæk', home_url( '/vandrerygsaek/' ) ] ] ],
		[ 'camping', 'Camping', 'tent', [ [ 'Telte', $cat_link( 'telte' ) ], [ 'Soveposer', $cat_link( 'soveposer' ) ], [ 'Liggeunderlag', $cat_link( 'liggeunderlag' ) ], [ 'Guide: 2 personers telt', home_url( '/2-personers-telt/' ) ] ] ],
		[ 'baal', 'Bål & friluftskøkken', 'fire', [ [ 'Stormkøkkener', $cat_link( 'stormkoekken' ) ], [ 'Gryder & kogegrej', $cat_link( 'kogegrej' ) ], [ 'Bål & ildsted', $cat_link( 'baal' ) ], [ 'Guide: Bålgryde', home_url( '/baalgryde-grydesaet-baal/' ) ] ] ],
		[ 'fiskeri', 'Fiskeri', 'fish', [ [ 'Fiskestænger', $cat_link( 'fiskestaenger' ) ], [ 'Fiskehjul', $cat_link( 'fiskehjul' ) ], [ 'Endegrej & agn', $cat_link( 'endegrej' ) ], [ 'Waders', $cat_link( 'waders' ) ] ] ],
		[ 'vandsport', 'Kajak & SUP', 'kayak', [ [ 'Kajak & kano', $cat_link( 'kajak-kano' ) ], [ 'SUP-boards', $cat_link( 'sup' ) ], [ 'Redningsveste', $cat_link( 'redningsveste' ) ], [ 'Våddragter', $cat_link( 'vaaddragter' ) ] ] ],
		[ 'vinter', 'Vintertur', 'snow', [ [ 'Soveposer', $cat_link( 'soveposer' ) ], [ 'Uldundertøj', $cat_link( 'uldundertoej' ) ], [ 'Pandelamper', $cat_link( 'pandelamper' ) ], [ 'Guide: Letvægtstelt', home_url( '/letvaegtstelt/' ) ] ] ],
	];
	?>
	<section class="wrap section acts">
		<div class="section__head">
			<h2>Find udstyr til din tur</h2>
			<span class="section__line"></span>
		</div>
		<div class="acts__grid">
			<?php foreach ( $acts as [ $slug, $title, $icon, $links ] ) : ?>
				<div class="act">
					<img class="act__img" src="<?php echo esc_url( playform_asset( "act-$slug.jpg" ) ); ?>" alt="" loading="lazy" width="640" height="800">
					<span class="act__shade"></span>
					<a class="act__main" href="<?php echo esc_url( $links[0][1] ); ?>" aria-label="<?php echo esc_attr( $title ); ?>"></a>
					<div class="act__body">
						<span class="act__icon"><?php echo playform_icon( $icon, 20, 1.5 ); // phpcs:ignore ?></span>
						<span class="act__title"><?php echo esc_html( $title ); ?></span>
						<nav class="act__links" aria-label="<?php echo esc_attr( $title ); ?>">
							<?php foreach ( $links as [ $label, $url ] ) : ?>
								<a href="<?php echo esc_url( $url ); ?>"><?php echo esc_html( $label ); ?></a>
							<?php endforeach; ?>
						</nav>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</section>
	<?php
	return;
endif;

// Sæsonens udstyr: skifter automatisk med måneden.
$m       = (int) wp_date( 'n' );
$seasons = [
	'vinter' => [ [ 12, 1, 2 ], 'Vinter', 'snow', 'Kolde nætter og korte dage kræver varmt udstyr: en sovepose til frost, uldundertøj og en god pandelampe.', [ 'soveposer' => [ 'Soveposer', 600 ], 'uldundertoej' => [ 'Uldundertøj', 300 ], 'pandelamper' => [ 'Pandelamper', 250 ], 'jakker' => [ 'Jakker', 900 ] ] ],
	'foraar' => [ [ 3, 4, 5 ], 'Forår', 'leaf', 'Sæsonen starter: gå de nye vandrestøvler til, tjek teltet, og find regntøjet frem til aprilsbygerne.', [ 'vandrestoevler' => [ 'Vandrestøvler', 900 ], 'telte' => [ 'Telte', 1000 ], 'regntoej' => [ 'Regntøj', 400 ], 'vandrerygsaekke' => [ 'Vandrerygsække', 700 ] ] ],
	'sommer' => [ [ 6, 7, 8 ], 'Sommer', 'sun', 'Lange lyse aftener i telt og hængekøje, på vandet og ved bålet. Husk køletasken og myggenettet.', [ 'telte' => [ 'Telte', 800 ], 'haengekoejer' => [ 'Hængekøjer', 200 ], 'sup' => [ 'SUP-boards', 1500 ], 'koeletasker' => [ 'Køletasker', 300 ] ] ],
	'efteraar' => [ [ 9, 10, 11 ], 'Efterår', 'leaf', 'Svampeture, fiskeri og blæsende vandreture. Varme lag, regntøj og en god pandelampe til de mørke aftener.', [ 'regntoej' => [ 'Regntøj', 400 ], 'fleece' => [ 'Fleece & mellemlag', 300 ], 'pandelamper' => [ 'Pandelamper', 250 ], 'fiskestaenger' => [ 'Fiskestænger', 400 ] ] ],
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
