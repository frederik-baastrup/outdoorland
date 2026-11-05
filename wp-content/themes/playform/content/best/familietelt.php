<?php
/**
 * Ny købsguide (5. nov. 2026). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'familietelt',
	'title'    => 'Familietelt: Vores bud på de 5 bedste telte til familieferien',
	'excerpt'  => 'Et godt familietelt har plads, ståhøjde og et rum til at samles. Her er vores bud på de 5 bedste familietelte fra danske butikker.',
	'more_cat' => 'telte',
	'intro'    => <<<'HTML'
<p>Den gode familieferie i telt starter med et telt, hvor alle kan være. Ståhøjde, et stort fællesrum og sovekabiner, så børnene kan sove i ro, gør hele forskellen.</p><p>Herunder er vores bud på de 5 bedste familietelte hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '7029981040778',
			'price'   => 3998,
			'name'    => 'Helsport Gimle Family 4+',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Letvægts familietelt på ca. 7,8 kg med fuld ståhøjde i midten.',
			'why'     => <<<'HTML'
<p>Gimle Family 4+ vejer kun ca. 7,8 kg og har alligevel fuld ståhøjde i midten. Det store indertelt på 210 x 240 cm giver plads til hele familien.</p>
HTML,
			'good'    => [ 'Familier på tur', 'Lav vægt for størrelsen' ],
			'less'    => [ 'Lavt budget' ],
		],
		[
			'ean'     => '0841487153786',
			'price'   => 5406,
			'name'    => 'Big Agnes Bunk House 6',
			'role'    => 'Mest plads',
			'reviews' => [],
			'verdict' => 'Rummeligt familietelt med stor frontapsis og god ståhøjde.',
			'why'     => <<<'HTML'
<p>Bunk House 6 er bygget til camping hele sæsonen med god ståhøjde og en stor frontapsis, der fungerer som overdækket opholdsrum.</p>
HTML,
			'good'    => [ 'Store familier', 'Lange ferier' ],
			'less'    => [ 'Ture, hvor teltet skal bæres' ],
		],
		[
			'ean'     => '5709388159182',
			'price'   => 8636,
			'name'    => 'Outwell Florida 5 lufttelt',
			'role'    => 'Hurtigst at slå op',
			'reviews' => [],
			'verdict' => 'Moderne lufttelt til familier med Dual Front-system.',
			'why'     => <<<'HTML'
<p>Florida 5 er et lufttelt, så bøjlerne pustes op i stedet for at blive samlet. Det gør opsætningen hurtig – rart, når børnene venter.</p>
HTML,
			'good'    => [ 'Hurtig opsætning', 'Komfort' ],
			'less'    => [ 'Lavt budget' ],
		],
		[
			'ean'     => '5703384087715',
			'price'   => 2738,
			'name'    => 'Grand Canyon Helena 6',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Prisgunstigt familietelt til 6 fra Grand Canyon.',
			'why'     => <<<'HTML'
<p>Helena 6 giver masser af plads for pengene og er et godt telt til familiens første campingferier.</p>
HTML,
			'good'    => [ 'Fornuftigt budget', 'Campingferie' ],
			'less'    => [ 'Hårdt vejr' ],
		],
		[
			'ean'     => '5709388144546',
			'price'   => 1736,
			'name'    => 'Easy Camp Orsa Cabin',
			'role'    => 'Bedst til store familier',
			'reviews' => [],
			'verdict' => 'Robust kabinetelt til op til 8 personer.',
			'why'     => <<<'HTML'
<p>Orsa Cabin har plads til op til 8 personer og en rummelig indretning, så selv den store familie kan være her.</p>
HTML,
			'good'    => [ 'Store familier', 'Lavt budget' ],
			'less'    => [ 'Lange vandreture' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du et familietelt</h2><h3>Antal personer</h3><p>Vælg et telt til lidt flere personer, end I er. Så er der plads til tasker og legetøj.</p><h3>Sovekabiner</h3><p>To sovekabiner giver voksne og børn hvert sit rum. Mørklagte kabiner hjælper børnene med at sove, når solen står tidligt op.</p><h3>Vandsøjle</h3>
<p>Vandsøjlen fortæller, hvor meget vandtryk dugen kan holde til. 2000–3000 mm er nok til sommerbrug, mens 3000 mm og derover er godt til det danske vejr og ture i fjeldet.</p>
<h3>Vægt og pakstørrelse</h3>
<p>Skal du bære teltet, betyder hvert kilo noget. Holder bilen ved siden af, kan du vælge efter plads og komfort i stedet.</p>
<h3>Apsis og indgange</h3>
<p>Apsis er det overdækkede område uden for indertelten, hvor sko og oppakning kan ligge tørt. To indgange gør det lettere at komme ud om natten uden at kravle over hinanden.</p><p>Se også vores guides til <a href="/2-personers-telt/">2 personers telt</a>, <a href="/4-personers-telt/">4 personers telt</a>, <a href="/familietelt/">familietelt</a> og <a href="/8-personers-telt/">8 personers telt</a>, og se alle <a href="/camping/telte/">telte</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvor stort et familietelt skal man have?', 'Vælg et telt til 1–2 personer mere end jer, så der er plads til bagage.' ],
		[ 'Er et lufttelt bedre til familier?', 'Det er hurtigere at slå op, men tungere og dyrere. Et telt med stænger er lettere og billigere.' ],
		[ 'Hvor meget koster et godt familietelt?', 'Fra omkring 2.000 kr. for et godt telt til prisen og op til 8.000–10.000 kr. for lufttelte og bomuldstelte.' ],
	],
];
