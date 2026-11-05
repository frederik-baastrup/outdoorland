<?php
/**
 * Ny købsguide (5. nov. 2026). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'letvaegtstelt',
	'title'    => 'Letvægtstelt: Vores bud på de 5 bedste ultralette telte til vandring',
	'excerpt'  => 'Når du selv skal bære teltet, tæller hvert gram. Her er vores bud på de 5 bedste letvægtstelte fra danske butikker.',
	'more_cat' => 'telte',
	'intro'    => <<<'HTML'
<p>På en lang vandretur mærker du hvert gram. Et letvægtstelt gør turen lettere – bogstaveligt talt – og giver energi til flere kilometer og bedre udsigter.</p><p>Herunder er vores bud på de 5 bedste letvægtstelte hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '0811666036933',
			'price'   => 3754,
			'name'    => 'NEMO Hornet Elite OSMO 2P',
			'role'    => 'Lettest til to',
			'reviews' => [],
			'verdict' => 'Kompromisløst ultralight backpackingtelt til to.',
			'why'     => <<<'HTML'
<p>Hornet Elite OSMO 2P er bygget til gramjægere og thru-hikere, der vil have så lidt vægt som muligt på ryggen.</p>
HTML,
			'good'    => [ 'Lange vandreture', 'Gramjægere' ],
			'less'    => [ 'Dem, der vil have meget plads' ],
		],
		[
			'ean'     => '0811666036926',
			'price'   => 3379,
			'name'    => 'NEMO Hornet Elite OSMO 1P',
			'role'    => 'Lettest solo',
			'reviews' => [],
			'verdict' => 'Ultralight soloteltsted til minimalister.',
			'why'     => <<<'HTML'
<p>Soloversionen af Hornet Elite er til dig, der går alene og vil skære i vægten overalt.</p>
HTML,
			'good'    => [ 'Solovandring', 'Thru-hiking' ],
			'less'    => [ 'To personer' ],
		],
		[
			'ean'     => '0811666036360',
			'price'   => 3720,
			'name'    => 'NEMO Dagger OSMO 2P',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Let backpackingtelt med god plads og komfort til to.',
			'why'     => <<<'HTML'
<p>Dagger OSMO 2P er det gode kompromis: let nok til lange ture og med plads nok til at to kan være der i regnvejr.</p>
HTML,
			'good'    => [ 'Vandring for to', 'Komfort' ],
			'less'    => [ 'Lavt budget' ],
		],
		[
			'ean'     => '0811666038647',
			'price'   => 4999,
			'name'    => 'Nemo Dragonfly OSMO 2P',
			'role'    => 'Bedst fritstående',
			'reviews' => [],
			'verdict' => 'Fritstående letvægtstelt med to indgange og to apsisser.',
			'why'     => <<<'HTML'
<p>Dragonfly OSMO 2P er fritstående og har to indgange og to rummelige apsisser, så hver person har sin egen plads til oppakningen.</p>
HTML,
			'good'    => [ 'To på tur', 'Hårdt underlag' ],
			'less'    => [ 'Lavt budget' ],
		],
		[
			'ean'     => '9327868169238',
			'price'   => 3004,
			'name'    => 'Sea to Summit Ikos Evo TR3',
			'role'    => 'Mest plads for vægten',
			'reviews' => [],
			'verdict' => 'Let 3-personers telt med stænger fra DAC, der laver nogle af markedets stærkeste teltstænger.',
			'why'     => <<<'HTML'
<p>Sea to Summit Ikos Evo TR3 er udviklet sammen med grundlæggeren af DAC Pole Company, der laver nogle af markedets stærkeste teltstænger. Et let telt med plads til tre.</p>
HTML,
			'good'    => [ 'Par, der vil have plads', 'Små familier på tur' ],
			'less'    => [ 'Solovandring' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du et letvægtstelt</h2><p>Et letvægtstelt er et kompromis: Jo lettere, jo tyndere dug og mindre plads. Vælg efter turens længde og vejret, du forventer.</p><h3>Vandsøjle</h3>
<p>Vandsøjlen fortæller, hvor meget vandtryk dugen kan holde til. 2000–3000 mm er nok til sommerbrug, mens 3000 mm og derover er godt til det danske vejr og ture i fjeldet.</p>
<h3>Vægt og pakstørrelse</h3>
<p>Skal du bære teltet, betyder hvert kilo noget. Holder bilen ved siden af, kan du vælge efter plads og komfort i stedet.</p>
<h3>Apsis og indgange</h3>
<p>Apsis er det overdækkede område uden for indertelten, hvor sko og oppakning kan ligge tørt. To indgange gør det lettere at komme ud om natten uden at kravle over hinanden.</p><p>Se også vores guides til <a href="/2-personers-telt/">2 personers telt</a>, <a href="/4-personers-telt/">4 personers telt</a>, <a href="/familietelt/">familietelt</a> og <a href="/8-personers-telt/">8 personers telt</a>, og se alle <a href="/camping/telte/">telte</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvor let er et letvægtstelt?', 'Et let 2-personers telt vejer typisk 1–2 kg. Ultralette telte kan veje under 1 kg.' ],
		[ 'Er letvægtstelte holdbare?', 'Ja, men den tynde dug kræver lidt mere omhu. Brug et footprint under teltet for at skåne bunden.' ],
		[ 'Hvad er et footprint?', 'Et ekstra underlag, der passer til teltets bund og beskytter mod slid og fugt.' ],
	],
];
