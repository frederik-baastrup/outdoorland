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
			'verdict' => 'Prisvindende kuppeltelt til tre i ny 2026-udgave – dansk teltudvikling i topklasse.',
			'why'     => <<<'HTML'
<p>Robens Seeker 3 LW er til dig, der vil have et kuppeltelt med plads til tre og stiller høje krav til dit udstyr. Teltet er udviklet i Danmark, og denne opdaterede 2026-version bygger videre på et kuppeltelt, der allerede har vundet priser.</p>
<p>Kuppelformen gør teltet selvstående, så du kan finde den bedste plads, før du pløkker det fast. Er I kun to, giver den ekstra plads godt albuerum og et tørt sted til oppakningen.</p>
HTML,
			'good'    => [ 'To eller tre personer', 'Dig, der vil have god plads i et kuppeltelt' ],
			'less'    => [ 'Lavt budget' ],
		],
		[
			'ean'     => '7323450243180',
			'price'   => 5791,
			'name'    => 'Fjällräven Abisko Dome 2',
			'role'    => 'Bedst i hårdt vejr',
			'reviews' => [],
			'verdict' => 'Selvstående helårskuppel til to med tre aluminiumsstænger, to apsisser og TripleRip-nylon uden PFAS.',
			'why'     => <<<'HTML'
<p>Abisko Dome 2 er kuppelteltet til dig, der tager på fjeldet eller vandrer i alle årstider. Tre stænger i DAC Featherlite-aluminium gør det selvstående, så du kan rejse det på ujævn grund og flytte det, før det pløkkes fast. Inder- og ydertelt sættes op i ét, så det tørre soverum ikke bliver vådt i regnvejr.</p>
<p>Med en dør og en stor apsis i hver side skal I ikke kravle over hinanden, og der er plads til både rygsække og madlavning. Luftåbninger i forskellige højder og myggenet sørger for et rart indeklima.</p>
<p>Ydersejlet i TripleRip-nylon er let og slidstærkt med 3000 mm vandsøjle, og bunden klarer 6000 mm. Hele pakken vejer 3160 g.</p>
HTML,
			'good'    => [ 'Fjeld og blæst', 'Vandring i alle årstider', 'Brug i mange år' ],
			'less'    => [ 'Lavt budget' ],
		],
		[
			'ean'     => '4960589851737',
			'price'   => 2162,
			'name'    => 'Snow Peak Land Nest Dome Medium',
			'role'    => 'Bedst til familien',
			'reviews' => [],
			'verdict' => 'Rummeligt kuppeltelt til fire på ca. 450 × 280 × 160 cm – med plads til både sove- og opholdszone.',
			'why'     => <<<'HTML'
<p>Snow Peak Land Nest Dome Medium er til familien eller vennerne, der slår lejr samme sted i flere dage og vil have plads til at bo. Teltet har plads til op til fire og måler cirka 450 × 280 × 160 cm, så I kan sidde oprejst og indrette en sovedel og et mindre område til ophold og udstyr.</p>
<p>Stængerne i A6061-aluminium gør teltet selvstående og stabilt i vind, og fordi de sidder udvendigt, kan du rejse det i regnvejr, uden at inderteltet bliver vådt. Yderteltet er i 75D polyester med PU-coating, mindst 1800 mm vandsøjle og UV-beskyttelse, og bunden er i kraftig 210D Oxford. Flere netpaneler mindsker kondens.</p>
<p>Barduner, pløkker og transporttasker følger med. Det vejer omkring 8,7 kg, så det hører til i bilen.</p>
HTML,
			'good'    => [ 'Familier', 'Basecamp og længere ophold', 'Dig, der vil kunne stå og sidde godt' ],
			'less'    => [ 'Vandreture – det er for tungt at bære' ],
		],
		[
			'ean'     => '5709388157119',
			'price'   => 1090,
			'name'    => 'Easy Camp Rago 2',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Let kuppeltelt til to fra Easy Camp med en særlig stangkonstruktion – et godt første telt.',
			'why'     => <<<'HTML'
<p>Easy Camp Rago 2 er kuppelteltet til jer, der vil have funktion og holdbarhed uden at betale for et fjeldtelt. Det er bygget til to personer og holdt nede i vægt, så det er nemt at tage med på tur.</p>
<p>Easy Camp hører til samme familie som Robens, og det mærkes i konstruktionen: Teltet har en særlig stangløsning, der adskiller det fra de helt billige kuppeltelte.</p>
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
			'verdict' => 'Klassisk og meget billigt 4-personers kuppeltelt til festival og sommercamping med 1500 mm vandsøjle.',
			'why'     => <<<'HTML'
<p>High Peak Monodome XL er det helt enkle kuppeltelt til fire, når det skal være billigt. Det er lavet til festival og camping, hvor I primært skal have et sted at sove.</p>
<p>Vandsøjlen er 1500 mm, så teltet er bedst i tørt sommervejr. Til gengæld behøver du ikke være ked af det, hvis det får en hård tur på festivalpladsen.</p>
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
