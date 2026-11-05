<?php
/**
 * Ny købsguide (5. nov. 2026). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => '1-personers-telt',
	'title'    => '1 personers telt: Vores bud på de 3 bedste solotelte til vandring og bikepacking',
	'excerpt'  => 'Et godt soloteltsted er let, hurtigt at slå op og stærkt nok til vejret. Her er vores bud på de 3 bedste 1-personers telte fra danske butikker.',
	'more_cat' => 'telte',
	'intro'    => <<<'HTML'
<p>Alene på tur betyder, at du selv bærer det hele. Et 1-personers telt skal derfor være let, pakke småt og være hurtigt at slå op, når du kommer træt frem – og samtidig give dig ly, når vejret skifter.</p><p>Herunder er vores bud på de 3 bedste soloteltsteder hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '0811666036926',
			'price'   => 3379,
			'name'    => 'NEMO Hornet Elite OSMO 1P',
			'role'    => 'Lettest',
			'reviews' => [],
			'verdict' => 'Kompromisløst ultralight backpackingtelt til gramjægere og thru-hikere.',
			'why'     => <<<'HTML'
<p>NEMO Hornet Elite OSMO 1P er lavet til dig, der tæller gram. Det er et ekstremt let backpackingtelt til lange vandreture, hvor hver eneste ting i rygsækken skal gøre sig fortjent til pladsen.</p>
HTML,
			'good'    => [ 'Lange vandreture', 'Gramjægere' ],
			'less'    => [ 'Dem, der vil have meget plads' ],
		],
		[
			'ean'     => '0811666038630',
			'price'   => 4499,
			'name'    => 'Nemo Dragonfly OSMO 1P',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Fritstående soloteltsted med OSMO-dug, der holder sig stram i fugtigt vejr, og en rummelig apsis.',
			'why'     => <<<'HTML'
<p>Dragonfly OSMO 1P er fritstående, så det kan slås op næsten overalt. OSMO-dugen holder sig stram, når det er fugtigt, og den rummelige apsis giver plads til oppakningen.</p>
HTML,
			'good'    => [ 'Vandring i skiftende vejr', 'Hurtig opsætning' ],
			'less'    => [ 'Lavt budget' ],
		],
		[
			'ean'     => '0811666037572',
			'price'   => 4999,
			'name'    => 'Nemo Dragonfly OSMO Bikepack 1P',
			'role'    => 'Bedst til cykelturen',
			'reviews' => [],
			'verdict' => 'Soloteltsted med minimal pakkestørrelse til bikepacking.',
			'why'     => <<<'HTML'
<p>Bikepack-udgaven af Dragonfly er bygget til at blive spændt på cyklen: korte stænger og en meget lille pakkestørrelse, uden at komforten går tabt. OSMO-materialet er 100 % genanvendt.</p>
HTML,
			'good'    => [ 'Bikepacking', 'Lille pakkestørrelse' ],
			'less'    => [ 'Ture til fods med stor rygsæk' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du et 1 personers telt</h2><p>Et soloteltsted er et kompromis mellem vægt, plads og vejrbeskyttelse. Ultralette telte er ofte ikke fritstående og kræver gode pløkker, mens fritstående telte kan slås op på klippe og sand.</p><h3>Vandsøjle</h3>
<p>Vandsøjlen fortæller, hvor meget vandtryk dugen kan holde til. 2000–3000 mm er nok til sommerbrug, mens 3000 mm og derover er godt til det danske vejr og ture i fjeldet.</p>
<h3>Vægt og pakstørrelse</h3>
<p>Skal du bære teltet, betyder hvert kilo noget. Holder bilen ved siden af, kan du vælge efter plads og komfort i stedet.</p>
<h3>Apsis og indgange</h3>
<p>Apsis er det overdækkede område uden for indertelten, hvor sko og oppakning kan ligge tørt. To indgange gør det lettere at komme ud om natten uden at kravle over hinanden.</p><p>Se også vores guides til <a href="/2-personers-telt/">2 personers telt</a>, <a href="/4-personers-telt/">4 personers telt</a>, <a href="/familietelt/">familietelt</a> og <a href="/8-personers-telt/">8 personers telt</a>, og se alle <a href="/camping/telte/">telte</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvor meget skal et 1 personers telt veje?', 'Et let soloteltsted vejer omkring 1 kg eller mindre. Under 1,5 kg er stadig let nok til lange vandreture.' ],
		[ 'Skal jeg vælge et 2 personers telt, selv om jeg er alene?', 'Mange vælger et 2-personers telt for pladsens skyld. Det vejer lidt mere, men giver plads til oppakningen inde i teltet.' ],
		[ 'Hvad betyder fritstående?', 'Et fritstående telt står af sig selv, før det er pløkket fast. Det gør det lettere at slå op på hårdt underlag.' ],
	],
];
