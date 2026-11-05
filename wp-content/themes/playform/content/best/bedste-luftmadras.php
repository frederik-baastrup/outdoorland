<?php
/**
 * Omskrevet fra det gamle outdoorland.dk (/bedste-luftmadras-test/ → /bedste-luftmadras/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-luftmadras',
	'title'    => 'Luftmadras: Vores bud på de 4 bedste til telt, gæster og festival',
	'excerpt'  => 'En god luftmadras kan redde nattesøvnen i teltet og når gæsterne kommer. Her er vores bud på de 4 bedste luftmadrasser fra danske butikker.',
	'more_cat' => 'liggeunderlag',
	'intro'    => <<<'HTML'
<p>En god nats søvn i teltet starter med det, du ligger på. En luftmadras løfter dig væk fra den kolde, ujævne jord, og når den ikke er i brug, fylder den næsten ingenting.</p><p>Herunder er vores bud på de 4 bedste luftmadrasser hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '5709388158123',
			'price'   => 533,
			'name'    => 'Outwell Superior Single',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Luksuriøs luftmadras på 195 x 90 cm med 45 cm sovehøjde, 3-lags konstruktion og indbygget pumpe.',
			'why'     => <<<'HTML'
<p>Outwell Superior Single er 195 x 90 cm og har en sovehøjde på 45 cm, så du ligger højt over det kolde underlag. Den robuste 3-lags konstruktion og den indbyggede pumpe gør den både slidstærk og nem at puste op.</p>
HTML,
			'good'    => [ 'Campingferie', 'Gæstemadras' ],
			'less'    => [ 'Vandreture' ],
		],
		[
			'ean'     => '5709388137579',
			'price'   => 461,
			'name'    => 'Robens HybridCore 80',
			'role'    => 'Bedst isoleret',
			'reviews' => [],
			'verdict' => 'Isoleret luftmadras med tre isoleringslag og MicroThermo Highloft til tre årstider.',
			'why'     => <<<'HTML'
<p>Robens HybridCore 80 har tre isoleringslag – to lag genanvendt polyester adskilt af et folielag – og er isoleret med MicroThermo Highloft til brug forår, sommer og efterår.</p>
HTML,
			'good'    => [ 'Kølige nætter i telt', 'Tre årstider' ],
			'less'    => [ 'Vinter' ],
		],
		[
			'ean'     => '5740000800198',
			'price'   => 299,
			'name'    => 'NordicHike luftmadras med fodpumpe',
			'role'    => 'Bedst til vandring og festival',
			'reviews' => [],
			'verdict' => 'Let oppusteligt liggeunderlag med indbygget fodpumpe.',
			'why'     => <<<'HTML'
<p>NordicHikes luftmadras kombinerer lav vægt og komfort, og den indbyggede fodpumpe gør den nem at puste op – på fjeldet, til festival eller på roadtrip.</p>
HTML,
			'good'    => [ 'Festival og vandring', 'Lavt budget' ],
			'less'    => [ 'Gæsteseng derhjemme' ],
		],
		[
			'ean'     => '3138522082611',
			'price'   => 330,
			'name'    => 'Coleman Maxi Comfort Single',
			'role'    => 'Billigst',
			'reviews' => [],
			'verdict' => 'Komfortabel og holdbar enkelt luftmadras, 198 x 82 x 22 cm.',
			'why'     => <<<'HTML'
<p>Coleman Maxi Comfort Single er en enkel og holdbar luftmadras på 198 x 82 x 22 cm til teltet, sommerhuset eller gæsteværelset.</p>
HTML,
			'good'    => [ 'Lavt budget', 'Telt og sommerhus' ],
			'less'    => [ 'Kolde nætter' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en luftmadras</h2><h3>Luftmadras eller liggeunderlag?</h3><p>En luftmadras er tyk og blød og god til campingpladsen og gæsteværelset. Et liggeunderlag er lettere og isolerer bedre – det er bedst til vandreture og kolde nætter.</p><h3>Isolering</h3><p>Luft leder kulden fra jorden op. Sov du koldt på en almindelig luftmadras, så læg et tæppe eller et skumunderlag under, eller vælg en isoleret model.</p><h3>Pumpe</h3><p>En indbygget pumpe sparer dig for at medbringe en ekstra pumpe. Ellers er en elpumpe til bilens 12 V-stik en god investering.</p><p>Se alle <a href="/camping/liggeunderlag/">liggeunderlag og luftmadrasser</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvorfor fryser man på en luftmadras?', 'Luften i madrassen bliver kold af jorden. Læg et isolerende lag under eller over, eller vælg en isoleret madras.' ],
		[ 'Hvor tyk skal en luftmadras være?', 'Til camping er 20–25 cm almindeligt. Højere madrasser er mere som en rigtig seng.' ],
		[ 'Hvordan finder man et hul i en luftmadras?', 'Pust den op, og pensl sæbevand på overfladen. Der hvor der kommer bobler, er hullet.' ],
	],
];
