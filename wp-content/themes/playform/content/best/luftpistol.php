<?php
/**
 * Luftpistol (/luftpistol/) – samme adresse som på det gamle site (en af de mest besøgte sider).
 * Produkter fra Hunters' Point. Fakta kun fra butikkens produktdata. Ingen påstand om egne test.
 * Valg uden gyldig EAN findes via produktets adresse (slug).
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'luftpistol',
	'title'    => 'Luftpistol: Vores bud på de 5 bedste – også med magasin og flere skud',
	'excerpt'  => 'Find den rigtige luftpistol til skydning på skive i haven eller på banen. Vores bud på de 5 bedste luftpistoler fra de butikker, vi samarbejder med – fra den billige begynderpistol til kraftige PCP-pistoler med magasin.',
	'more_cat' => 'luftvaaben',
	'intro'    => <<<'HTML'
<p>Skydning med luftpistol er koncentration, ro på hånden og den gode lyd, når haglet rammer midt i skiven. Uanset om du vil træne præcision i haven, tage med på skydebanen eller bare have det sjovt med familien, findes der en luftpistol, der passer.</p>
<p>Den største forskel ligger i, hvordan pistolen får sit tryk: en fjeder- eller stempelpistol spændes før hvert skud, mens en PCP-pistol fyldes med trykluft og kan skyde mange skud i træk – ofte fra et magasin. Herunder er vores bud på de 5 bedste luftpistoler hos de butikker, vi samarbejder med.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '0401305',
			'slug'    => 'hatsan-velox-luftpistol-sort',
			'price'   => 3399,
			'name'    => 'Hatsan Velox',
			'role'    => 'Bedst med flere skud',
			'reviews' => [],
			'verdict' => 'Halvautomatisk PCP-pistol med aftagelig 55 cc luftcylinder og ekstra cylinder til mange skud i træk.',
			'why'     => <<<'HTML'
<p>Hatsan Velox er en moderne, halvautomatisk PCP-pistol: Du trykker af, og næste hagl er klar. Den aftagelige luftcylinder på 55 cc og den ekstra cylinder, der følger med, betyder, at du kan skyde længe, før der skal fyldes luft på.</p>
<p>Leder du efter en kraftig luftpistol med magasin, er det her, du skal starte.</p>
HTML,
			'good'    => [ 'Mange skud i træk', 'Erfarne skytter' ],
			'less'    => [ 'Begyndere med lavt budget' ],
		],
		[
			'ean'     => '0401300',
			'slug'    => 'hatsan-jet-i-rt-luftpistol-pcp-sort-197-m-s',
			'price'   => 3199,
			'name'    => 'Hatsan JET I RT PCP',
			'role'    => 'Kraftigste valg',
			'reviews' => [],
			'verdict' => 'PCP-pistol i 4,5 mm med 197 m/s, 250 bar maks. tryk og 7-skuds roterende magasin.',
			'why'     => <<<'HTML'
<p>Hatsan JET I RT har en udgangshastighed på 197 m/s og et maksimalt tryk på 250 bar i en luftcylinder på 40 cc. Det 7-skuds roterende magasin gør det hurtigt at skyde en serie mod skiven.</p>
<p>Den fås i flere farver – sort, rød, grøn og blå.</p>
HTML,
			'good'    => [ 'Høj hastighed og præcision', 'Skydning med magasin' ],
			'less'    => [ 'Dem, der ikke vil fylde trykluft' ],
		],
		[
			'slug'    => 'gamo-af-10-luftpistol-rekylfri-4-5-mm',
			'price'   => 1299,
			'name'    => 'Gamo AF-10',
			'role'    => 'Bedst til præcision på skive',
			'reviews' => [],
			'verdict' => 'Rekylfri luftpistol i 4,5 mm, der spændes ved at løfte toppen – lavet til præcisionsskydning på op til 15 meter.',
			'why'     => <<<'HTML'
<p>Gamo AF-10 er en for-komprimeret luftpistol med stempelmekanisme, som du spænder ved at løfte toppen. Den er rekylfri, så pistolen ligger roligt i hånden, når du trykker af – en stor fordel, når du træner præcision på skiver på op til 15 meter.</p>
HTML,
			'good'    => [ 'Træning i præcisionsskydning', 'Ingen trykluft at fylde' ],
			'less'    => [ 'Mange hurtige skud' ],
		],
		[
			'ean'     => '0401168',
			'slug'    => 'hatsan-model-25-luftpistol-saet',
			'price'   => 949,
			'name'    => 'Hatsan Model 25 luftpistolsæt',
			'role'    => 'Bedst til begyndere',
			'reviews' => [],
			'verdict' => 'Komplet sæt med luftpistol i 4,5 mm (150 m/s), skydekasse og skydeskiver.',
			'why'     => <<<'HTML'
<p>Hatsan Model 25 kommer som et komplet sæt med skydekasse og skydeskiver, så du kan gå i gang med det samme. Pistolen skyder 4,5 mm med 150 m/s og har et ergonomisk, syntetisk skæfte, der giver et godt greb.</p>
HTML,
			'good'    => [ 'Begyndere', 'Gave med alt, der skal bruges' ],
			'less'    => [ 'Skydning på længere afstand' ],
		],
		[
			'ean'     => '0793676031736',
			'price'   => 699,
			'name'    => 'Gamo P-900',
			'role'    => 'Lavest pris',
			'reviews' => [],
			'verdict' => 'Let luftpistol på 580 g i 4,5 mm med riflet løb – og hagl, skydekasse og skiver med i sættet.',
			'why'     => <<<'HTML'
<p>Gamo P-900 er til dig, der vil i gang med skiveskydning uden at bruge mange penge. Det er en enkeltskuds fjederstempelpistol: Du spænder den før hvert skud, og så er den klar. Der skal ikke fyldes trykluft eller købes CO2-patroner.</p>
<p>Løbet har riffelgang, så haglet får en stabil bane, og det bageste sigte kan indstilles, så du kan justere ind efter skiven. Pistolen skyder 4,5 mm med 105 m/s og vejer kun 580 g, så den er nem at holde roligt. En aftrækkersikring gør den tryggere at håndtere.</p>
<p>I sættet får du en dåse hagl, en skydekasse og skydeskiver, så du kan gå i gang med det samme.</p>
HTML,
			'good'    => [ 'Begyndere og skiveskydning', 'Lavt budget', 'Dig, der vil have alt med i sættet' ],
			'less'    => [ 'Mange skud i træk – den lades med ét hagl ad gangen' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en luftpistol</h2>
<h3>Fjeder, CO2 eller PCP?</h3>
<p><b>Fjeder- og stempelpistoler</b> spændes før hvert skud. De er billige i drift og altid klar, men skyder ét skud ad gangen. <b>CO2-pistoler</b> bruger små gaspatroner og kan skyde flere skud hurtigt, men trykket falder, når det er koldt. <b>PCP-pistoler</b> (Pre-Charged Pneumatic) fyldes med trykluft fra en pumpe eller dykkerflaske og giver et stabilt tryk og mange skud – ofte fra et magasin. Det er dem, der giver mest kraft.</p>
<h3>Kaliber</h3>
<p>4,5 mm (.177) er det mest almindelige til skiveskydning: haglene er billige og flyver fladt. 5,5 mm (.22) er tungere og bruges mest i luftgeværer.</p>
<h3>Magasin og flere skud</h3>
<p>Vil du skyde serier uden at lade efter hvert skud, skal du vælge en pistol med magasin – typisk en PCP- eller CO2-pistol. Et roterende magasin med 7–12 skud er almindeligt.</p>
<h3>Regler for luftpistoler</h3>
<p>Luftvåben er omfattet af våbenlovgivningen. Du skal være fyldt 18 år for at købe en luftpistol, og butikken vil bede dig dokumentere din alder. Skyd kun, hvor det er sikkert og lovligt – på egen grund med en forsvarlig kuglefang eller på en skydebane – og opbevar pistolen, så børn ikke kan få fat i den. Tjek de gældende regler hos politiet, før du køber.</p>
<p>Se alle <a href="/jagt/luftvaaben/">luftpistoler og luftgeværer</a> og tilbehør som hagl og skydekasser.</p>
HTML,
	'faq'      => [
		[ 'Hvad er den kraftigste type luftpistol?', 'PCP-pistoler, der fyldes med trykluft, giver typisk den højeste hastighed og flest skud i træk.' ],
		[ 'Hvilken luftpistol har magasin?', 'Mange PCP- og CO2-pistoler har magasin, fx et roterende magasin med 7 skud. Fjederpistoler lades som regel med ét hagl ad gangen.' ],
		[ 'Hvor gammel skal man være for at købe en luftpistol?', 'Du skal være fyldt 18 år for at købe en luftpistol i Danmark.' ],
		[ 'Må man skyde med luftpistol i haven?', 'Kun hvis det sker sikkert, med en forsvarlig kuglefang, så ingen mennesker, dyr eller naboer kan rammes. Tjek reglerne hos politiet.' ],
		[ 'Hvilken kaliber skal jeg vælge?', '4,5 mm er standard til skiveskydning og den mest udbredte kaliber til luftpistoler.' ],
	],
];
