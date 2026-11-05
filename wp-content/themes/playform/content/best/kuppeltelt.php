<?php
/**
 * Ny købsguide (5. nov. 2026). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'kuppeltelt',
	'title'    => 'Kuppeltelt: Vores bud på de 5 bedste – stabile og nemme at slå op',
	'excerpt'  => 'Kuppelteltet er stabilt, ofte fritstående og nemt at slå op. Her er vores bud på de 5 bedste kuppeltelte fra danske butikker.',
	'more_cat' => 'telte',
	'intro'    => <<<'HTML'
<p>Kuppelteltet er den klassiske teltform: stængerne krydser over teltet, så det står af sig selv og holder godt i vind fra alle sider. Det er nemt at slå op, og du kan flytte det, før du pløkker det fast.</p><p>Herunder er vores bud på de 5 bedste kuppeltelte hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '5709388165299',
			'price'   => 2584,
			'name'    => 'Robens Seeker 3 LW',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Prisvindende kuppeltelt i opdateret 2026-version – dansk teltudvikling i topklasse.',
			'why'     => <<<'HTML'
<p>Robens Seeker 3 LW er et kuppeltelt til tre, hvor lav vægt og god plads går op i en højere enhed.</p>
HTML,
			'good'    => [ 'Vandring og cykelture', 'To eller tre personer' ],
			'less'    => [ 'Lavt budget' ],
		],
		[
			'ean'     => '7323450243180',
			'price'   => 5791,
			'name'    => 'Fjällräven Abisko Dome 2',
			'role'    => 'Bedst i hårdt vejr',
			'reviews' => [],
			'verdict' => 'Teknisk avanceret kuppeltelt til to med høj stabilitet og ventilation.',
			'why'     => <<<'HTML'
<p>Abisko Dome 2 er bygget til at stå stabilt på fjeldet. Kuppelformen giver god plads og ventilation uden at gå på kompromis med vægt og holdbarhed.</p>
HTML,
			'good'    => [ 'Fjeld og blæst', 'Brug i mange år' ],
			'less'    => [ 'Lavt budget' ],
		],
		[
			'ean'     => '4960589851737',
			'price'   => 2162,
			'name'    => 'Snow Peak Land Nest Dome Medium',
			'role'    => 'Bedst til familien',
			'reviews' => [],
			'verdict' => 'Kuppeltelt til op til fire personer til basecampen.',
			'why'     => <<<'HTML'
<p>Land Nest Dome Medium er et kuppeltelt til familien og basecampen, hvor komfort og fleksibilitet vægter højest.</p>
HTML,
			'good'    => [ 'Familier', 'Basecamp' ],
			'less'    => [ 'Lange vandreture' ],
		],
		[
			'ean'     => '5709388157119',
			'price'   => 1090,
			'name'    => 'Easy Camp Rago 2',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Teknisk gennemført 2-personers kuppeltelt med lav vægt.',
			'why'     => <<<'HTML'
<p>Easy Camp Rago 2 er et let og holdbart kuppeltelt til to i tæt familie med Robens.</p>
HTML,
			'good'    => [ 'Første telt', 'Weekendture' ],
			'less'    => [ 'Krævende fjeldture' ],
		],
		[
			'ean'     => '4001690101646',
			'price'   => 319,
			'name'    => 'High Peak Monodome XL',
			'role'    => 'Billigst',
			'reviews' => [],
			'verdict' => 'Klassisk 4-personers kuppeltelt til festival og camping med vandsøjle på 1500 mm.',
			'why'     => <<<'HTML'
<p>High Peak Monodome XL er det helt billige kuppeltelt til festival og sommercamping. Vandsøjlen er 1500 mm, så det er bedst til godt vejr.</p>
HTML,
			'good'    => [ 'Festival', 'Meget lavt budget' ],
			'less'    => [ 'Regnvejr og blæst' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du et kuppeltelt</h2><p>Kuppeltelte er fritstående, så de kan slås op på hårdt underlag og flyttes, før de pløkkes fast. Til gengæld giver tunneltelte ofte mere plads for vægten.</p><h3>Vandsøjle</h3>
<p>Vandsøjlen fortæller, hvor meget vandtryk dugen kan holde til. 2000–3000 mm er nok til sommerbrug, mens 3000 mm og derover er godt til det danske vejr og ture i fjeldet.</p>
<h3>Vægt og pakstørrelse</h3>
<p>Skal du bære teltet, betyder hvert kilo noget. Holder bilen ved siden af, kan du vælge efter plads og komfort i stedet.</p>
<h3>Apsis og indgange</h3>
<p>Apsis er det overdækkede område uden for indertelten, hvor sko og oppakning kan ligge tørt. To indgange gør det lettere at komme ud om natten uden at kravle over hinanden.</p><p>Se også vores guides til <a href="/2-personers-telt/">2 personers telt</a>, <a href="/4-personers-telt/">4 personers telt</a>, <a href="/familietelt/">familietelt</a> og <a href="/8-personers-telt/">8 personers telt</a>, og se alle <a href="/camping/telte/">telte</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er et kuppeltelt?', 'Et telt, hvor stængerne krydser hinanden over teltet, så det står af sig selv.' ],
		[ 'Kuppeltelt eller tunneltelt?', 'Kuppelteltet er fritstående og stabilt fra alle sider. Tunnelteltet giver mere plads for vægten, men skal pløkkes ud.' ],
		[ 'Står et kuppeltelt godt i vind?', 'Ja, kuppelformen tager vind fra alle sider godt, især når teltet er bardunet.' ],
	],
];
