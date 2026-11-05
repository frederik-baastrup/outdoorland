<?php
/**
 * Omskrevet fra det gamle outdoorland.dk (samme adresse). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'baalgryde-grydesaet-baal',
	'title'    => 'Bålgryde: Vores bud på de 4 bedste gryder og grydesæt til bål',
	'excerpt'  => 'Mad over bål smager bedst. Her er vores bud på de 4 bedste bålgryder og grydesæt fra danske butikker – i rustfrit stål og støbejern.',
	'more_cat' => 'kogegrej',
	'intro'    => <<<'HTML'
<p>Der er noget særligt ved mad lavet over åben ild: gryderet, der har simret i timevis, kaffe kogt i kedlen og pandekager på bålpanden. En god bålgryde kan tåle flammerne og bliver bedre med alderen.</p><p>Herunder er vores bud på de 4 bedste bålgryder og grydesæt hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '7330033903980',
			'price'   => 349,
			'name'    => 'Primus CampFire Pot 5 L',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Robust bålgryde på 5 liter i rustfrit 18/8-stål med låg med dørslag og indfældbar bærehank.',
			'why'     => <<<'HTML'
<p>Primus CampFire Pot er en robust gryde på 5 liter i rustfrit 18/8-stål. Låget har dørslag, og den indfældbare bærehank gør, at gryden kan hænge direkte over åben ild.</p>
HTML,
			'good'    => [ 'Mad til mange over bål', 'Pasta og suppe' ],
			'less'    => [ 'Vandreture' ],
		],
		[
			'ean'     => '4250435703502',
			'price'   => 499,
			'name'    => 'Petromax Dutch Oven Essential FT6',
			'role'    => 'Bedste støbejernsgryde',
			'reviews' => [],
			'verdict' => 'Dutch oven på 5,5 liter i præindbrændt støbejern – klar til brug med det samme.',
			'why'     => <<<'HTML'
<p>Petromax Dutch Oven FT6 er lavet af præindbrændt støbejern, så den er klar til brug med det samme og gradvist opbygger en naturlig non-stick-overflade. Den kan bruges til alt fra simreretter til brød.</p>
HTML,
			'good'    => [ 'Gryderetter og brød', 'Lang levetid' ],
			'less'    => [ 'Lav vægt' ],
		],
		[
			'ean'     => '7330033903942',
			'price'   => 672,
			'name'    => 'Primus CampFire Cookset Large',
			'role'    => 'Bedste grydesæt',
			'reviews' => [],
			'verdict' => 'Grydesæt med gryder på 1,8 og 3,0 liter og stegepande i rustfrit stål med aluminiumsbund.',
			'why'     => <<<'HTML'
<p>CampFire Cookset Large består af to gryder på 1,8 og 3,0 liter og en stegepande i rustfrit 18/8-stål med aluminium i bunden for en mere jævn varmefordeling.</p>
HTML,
			'good'    => [ 'Hele måltider på tur', 'Familien' ],
			'less'    => [ 'Den lette vandretur' ],
		],
		[
			'ean'     => '7315085012521',
			'price'   => 179,
			'name'    => 'Trangia Billy 2,5 L',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Klassisk bålgryde på 2,5 liter fra Trangia – også til stormkøkkenet.',
			'why'     => <<<'HTML'
<p>Trangia Billy er den klassiske bålgryde. Med 2,5 liter kan den bruges over bålet eller på Trangias stormkøkken, og Trangias 27-serie passer lige ned i den.</p>
HTML,
			'good'    => [ 'Kaffe og vand', 'Lavt budget' ],
			'less'    => [ 'Gryderetter til mange' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en bålgryde</h2><h3>Rustfrit stål eller støbejern?</h3><p>Rustfrit stål er let, robust og nemt at gøre rent. Støbejern holder varmen længe og er perfekt til gryderetter og brød, men vejer meget og skal plejes med olie.</p><h3>Hank eller ben</h3><p>En bålgryde med hank kan hænge i en trefod over bålet. En dutch oven med ben kan stå direkte i gløderne.</p><h3>Størrelse</h3><p>Regn med ca. 1 liter pr. person til gryderetter og suppe.</p><p>Se alle <a href="/friluftskoekken/kogegrej/">gryder og kogegrej</a> og <a href="/friluftskoekken/baal/">båludstyr</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er en dutch oven?', 'En tyk gryde i støbejern med låg, der bruges til gryderetter, brød og stege – ofte direkte i gløderne.' ],
		[ 'Kan man bruge en almindelig gryde over bål?', 'Kun gryder uden plasthåndtag, der tåler åben ild. Bunden bliver sort af sod.' ],
		[ 'Hvordan rengør man en støbejernsgryde?', 'Skyl med varmt vand uden sæbe, tør den helt, og smør et tyndt lag olie på.' ],
	],
];
