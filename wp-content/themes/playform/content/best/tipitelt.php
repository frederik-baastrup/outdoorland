<?php
/**
 * Ny købsguide (5. nov. 2026). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'tipitelt',
	'title'    => 'Tipitelt: Vores bud på de 5 bedste tipitelte og lavvuer',
	'excerpt'  => 'Tipitelte og lavvuer er hurtige at slå op og giver ét stort rum med plads til ildsted. Her er vores bud på de 5 bedste fra danske butikker.',
	'more_cat' => 'telte',
	'intro'    => <<<'HTML'
<p>Tipiteltet – eller lavvuen, som den nordiske udgave hedder – er en af de ældste teltformer. Én midterstang og pløkker hele vejen rundt, og så står teltet. Det runde rum giver plads til mange, og i mange modeller kan der fyres i en teltovn.</p><p>Herunder er vores bud på de 5 bedste tipitelte hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '7340001627411',
			'price'   => 10973,
			'name'    => 'Tentipi Onyx 7 CP',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Tipitelt til friluftsliv året rundt med 4,6 meter grundplan og 270 cm højde.',
			'why'     => <<<'HTML'
<p>Tentipi Onyx 7 CP har én central stang, et grundplan på 4,6 meter og 270 cm højde, så der er god plads til sovepladser, udstyr og socialt samvær. Dugen er i bomuldsblandingen Cotpolmex Comfort.</p>
HTML,
			'good'    => [ 'Brug året rundt', 'Grupper og basecamp' ],
			'less'    => [ 'Lavt budget' ],
		],
		[
			'ean'     => '5703384023959',
			'price'   => 5256,
			'name'    => 'Nordisk Alfheim 12.6 Technical Cotton',
			'role'    => 'Bedste bomuldstipi',
			'reviews' => [],
			'verdict' => 'Robust lavvu i Technical Cotton med 12,6 m² grundareal.',
			'why'     => <<<'HTML'
<p>Alfheim 12.6 er en lavvu i Nordisks Technical Cotton med et grundareal på 12,6 m² og klassisk tipi-facon – et lækkert og robust telt til familien eller gruppen.</p>
HTML,
			'good'    => [ 'Glamping og lange ophold', 'Godt indeklima' ],
			'less'    => [ 'Lav vægt' ],
		],
		[
			'ean'     => '5703384087746',
			'price'   => 2279,
			'name'    => 'Grand Canyon Indiana 8',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Rummeligt tipitelt til 8 personer fra Grand Canyon.',
			'why'     => <<<'HTML'
<p>Indiana 8 er et rummeligt tipitelt til en fornuftig pris – godt til weekendcamping og ekstra soveplads i haven.</p>
HTML,
			'good'    => [ 'Weekend og festival', 'Fornuftigt budget' ],
			'less'    => [ 'Hårdt vejr' ],
		],
		[
			'ean'     => '7029981040433',
			'price'   => 1800,
			'name'    => 'Helsport Pasvik 6-8',
			'role'    => 'Bedst til lejrbål',
			'reviews' => [],
			'verdict' => 'Klassisk lavvu til 6-8 personer. Bund kan tilkøbes.',
			'why'     => <<<'HTML'
<p>Pasvik 6-8 er en klassisk lavvu fra Helsport. Uden bund er der plads til at samles om et ildsted – og vil du have bund i, kan den tilkøbes.</p>
HTML,
			'good'    => [ 'Spejdere og grupper', 'Lejrbål' ],
			'less'    => [ 'Fast bund fra start' ],
		],
		[
			'ean'     => '5709388144560',
			'price'   => 1344,
			'name'    => 'Easy Camp Rands Tipi',
			'role'    => 'Billigst',
			'reviews' => [],
			'verdict' => 'Tipitelt til op til 8 personer til en lav pris.',
			'why'     => <<<'HTML'
<p>Easy Camp Rands Tipi er den billige vej ind i tipiteltets verden – godt til festival, haven og sommerens campingtur.</p>
HTML,
			'good'    => [ 'Lavt budget', 'Festival' ],
			'less'    => [ 'Vintercamping' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du et tipitelt</h2><h3>Med eller uden bund</h3><p>Uden bund kan du have ildsted eller teltovn i midten. Med bund er teltet lunere og holder insekter ude.</p><h3>Bomuld eller polyester</h3><p>Bomuld ånder og tåler gnister bedre, men vejer mere. Polyester og nylon er lette og tørrer hurtigt.</p><p>Se også vores guides til <a href="/2-personers-telt/">2 personers telt</a>, <a href="/4-personers-telt/">4 personers telt</a>, <a href="/familietelt/">familietelt</a> og <a href="/8-personers-telt/">8 personers telt</a>, og se alle <a href="/camping/telte/">telte</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er forskellen på en tipi og en lavvu?', 'En lavvu er den nordiske, samiske udgave af tipiteltet. Formen er den samme: én midterstang og pløkker rundt i kanten.' ],
		[ 'Kan man fyre i et tipitelt?', 'I nogle modeller med røghætte og brandsikker dug kan du bruge en teltovn. Følg altid producentens anvisninger.' ],
		[ 'Er et tipitelt let at slå op?', 'Ja, de fleste står med én stang og pløkker rundt i kanten.' ],
	],
];
