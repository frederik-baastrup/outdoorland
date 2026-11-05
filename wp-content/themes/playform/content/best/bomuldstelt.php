<?php
/**
 * Ny købsguide (5. nov. 2026). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bomuldstelt',
	'title'    => 'Bomuldstelt: Vores bud på de 5 bedste telte i bomuld og technical cotton',
	'excerpt'  => 'Bomuldstelte ånder, giver et behageligt indeklima og holder i mange år. Her er vores bud på de 5 bedste bomuldstelte fra danske butikker.',
	'more_cat' => 'telte',
	'intro'    => <<<'HTML'
<p>Et bomuldstelt er et telt, man bliver glad for. Dugen ånder, så der er køligt om dagen og lunt om natten, og der dannes mindre kondens end i et telt af polyester. Til gengæld vejer bomuld mere – og teltet skal tørre, før det pakkes væk.</p><p>Herunder er vores bud på de 5 bedste bomuldstelte hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '5703384028718',
			'price'   => 6383,
			'name'    => 'Nordisk Asgard 12.6 Technical Cotton',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Ekstra rummeligt bomuldstelt på 12,6 m² til op til 6 personer.',
			'why'     => <<<'HTML'
<p>Nordisk Asgard 12.6 er et af de mest kendte bomuldstelte. Grundarealet på 12,6 m² giver plads til familien eller en gruppe på op til seks.</p>
HTML,
			'good'    => [ 'Familier og glamping', 'Lange ophold' ],
			'less'    => [ 'Lav vægt' ],
		],
		[
			'ean'     => '5703384023959',
			'price'   => 5256,
			'name'    => 'Nordisk Alfheim 12.6 Technical Cotton',
			'role'    => 'Bedste tipi i bomuld',
			'reviews' => [],
			'verdict' => 'Lavvu i Technical Cotton med 12,6 m² grundareal.',
			'why'     => <<<'HTML'
<p>Alfheim 12.6 er Nordisks lavvu i Technical Cotton – klassisk tipi-facon og et stort, hyggeligt rum.</p>
HTML,
			'good'    => [ 'Hurtig opsætning', 'Godt indeklima' ],
			'less'    => [ 'Lav vægt' ],
		],
		[
			'ean'     => '5709388077462',
			'price'   => 6608,
			'name'    => 'Robens Klondike 6',
			'role'    => 'Bedste kuppel i bomuld',
			'reviews' => [],
			'verdict' => 'Bomuldstelt til 6 personer fra danske Robens.',
			'why'     => <<<'HTML'
<p>Robens Klondike 6 er et bomuldstelt til seks fra det danske Oase Outdoors – godt til den lange ferie, hvor indeklimaet betyder meget.</p>
HTML,
			'good'    => [ 'Familieferie', 'Varme sommerdage' ],
			'less'    => [ 'Ture, hvor teltet skal bæres' ],
		],
		[
			'ean'     => '5703384121198',
			'price'   => 7509,
			'name'    => 'Nordisk Utgard Sky 13.2 Technical Cotton',
			'role'    => 'Mest plads',
			'reviews' => [],
			'verdict' => 'Stort bomuldstelt på 13,2 m² til op til 6 personer.',
			'why'     => <<<'HTML'
<p>Utgard Sky 13.2 giver endnu mere plads end Asgard og er bygget til lange ophold i bomuldsteltets behagelige klima.</p>
HTML,
			'good'    => [ 'Lange ophold', 'Store familier' ],
			'less'    => [ 'Lavt budget' ],
		],
		[
			'ean'     => '7340001627411',
			'price'   => 10973,
			'name'    => 'Tentipi Onyx 7 CP',
			'role'    => 'Bedst året rundt',
			'reviews' => [],
			'verdict' => 'Tipitelt i bomuldsblandingen Cotpolmex Comfort til friluftsliv året rundt.',
			'why'     => <<<'HTML'
<p>Tentipi Onyx 7 CP er lavet til brug året rundt med en dug i bomuldsblanding, 4,6 meter grundplan og 270 cm højde.</p>
HTML,
			'good'    => [ 'Vinter og sommer', 'Grupper' ],
			'less'    => [ 'Lavt budget' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du et bomuldstelt</h2><h3>Bomuld, technical cotton og polycotton</h3><p>Ren bomuld ånder bedst. Technical cotton og polycotton er blandinger af bomuld og polyester, der er lettere og stærkere og tørrer hurtigere.</p><h3>Pas på skimmel</h3><p>Et bomuldstelt skal altid være helt tørt, før det pakkes væk i længere tid. Ellers kan det få skimmel.</p><h3>Første regn</h3><p>Bomuld svulmer op, når det bliver vådt første gang, og bliver derefter tæt. Slå gerne teltet op og vand det, før den første tur.</p><p>Se også vores guides til <a href="/2-personers-telt/">2 personers telt</a>, <a href="/4-personers-telt/">4 personers telt</a>, <a href="/familietelt/">familietelt</a> og <a href="/8-personers-telt/">8 personers telt</a>, og se alle <a href="/camping/telte/">telte</a>.</p>
HTML,
	'faq'      => [
		[ 'Er bomuldstelte bedre end polyester?', 'De giver et bedre indeklima og mindre kondens, men vejer mere og kræver mere pleje.' ],
		[ 'Kan et bomuldstelt tåle regn?', 'Ja. Bomulden svulmer op, når den bliver våd, og bliver tæt. Det skal bare tørre, før det pakkes væk.' ],
		[ 'Hvad er technical cotton?', 'En blanding af bomuld og polyester, der er lettere og stærkere end ren bomuld, men stadig ånder.' ],
	],
];
