<?php
/**
 * Omskrevet fra det gamle outdoorland.dk (samme adresse) med produkter fra feedsne. Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'baby-haengekoeje',
	'keyword'  => 'babyhængekøje',
	'title'    => 'Babyhængekøje og børnehængekøje: Vores bud på de 3 bedste',
	'excerpt'  => 'En hængekøje til de mindste giver en hyggelig hule at gynge og slappe af i. Her er vores bud på de 3 bedste børnehængekøjer og hængekøjehuler fra danske butikker.',
	'more_cat' => 'haengekoejer',
	'intro'    => <<<'HTML'
<p>Børn elsker at gynge. En børnehængekøje eller en hængekøjehule bliver hurtigt et yndlingssted – til at læse, lege og falde til ro i, inde på børneværelset eller ude i haven.</p><p>Herunder er vores bud på de 3 bedste hængekøjer til børn hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '4025122935128',
			'price'   => 805,
			'name'    => 'La Siesta Moki børnehængekøje',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Børnehængekøje i økologisk bomuld med ophæng.',
			'why'     => <<<'HTML'
<p>La Siesta Moki er en børnehængekøje i økologisk bomuld, og ophænget følger med, så den er klar til at blive hængt op. La Siesta er specialister i hængekøjer.</p>
HTML,
			'good'    => [ 'Børneværelset og haven', 'Økologisk bomuld' ],
			'less'    => [ 'Voksne' ],
		],
		[
			'ean'     => '4025122935135',
			'price'   => 1210,
			'name'    => 'La Siesta Moki Max børnehængekøje',
			'role'    => 'Mest plads',
			'reviews' => [],
			'verdict' => 'Større udgave af Moki-børnehængekøjen i økologisk bomuld med ophæng.',
			'why'     => <<<'HTML'
<p>Moki Max er den større udgave af La Siestas børnehængekøje, så der er plads til, at barnet kan bruge den i flere år.</p>
HTML,
			'good'    => [ 'Større børn', 'Lang levetid' ],
			'less'    => [ 'Små rum' ],
		],
		[
			'ean'     => '4025122935074',
			'price'   => 1095,
			'name'    => 'La Siesta Joki hængekøjehule',
			'role'    => 'Mest hygge',
			'reviews' => [],
			'verdict' => 'Hængekøjehule i økologisk bomuld – en lun hule at gynge i.',
			'why'     => <<<'HTML'
<p>Joki er en hængekøjehule: en lukket, rund hængekøje, som barnet kan kravle ind i og gemme sig i. Den fås med forskellige dyremotiver.</p>
HTML,
			'good'    => [ 'Leg og ro', 'Børneværelset' ],
			'less'    => [ 'Udendørs brug i regnvejr' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en hængekøje til børn</h2><h3>Alder og vægt</h3><p>Følg altid producentens anvisninger for alder og maksimal vægt. Til de helt små findes der særlige babygynger og vugger – en almindelig hængekøje er ikke beregnet til spædbørn.</p><h3>Ophæng</h3><p>Hængekøjen skal hænge sikkert i en loftkrog, et stativ eller mellem to solide træer. Tjek ophænget jævnligt, og hæng den ikke højere, end at barnet sikkert kan komme ind og ud.</p><h3>Materiale</h3><p>Økologisk bomuld er blødt og behageligt mod huden. Bomuld bør tages ind, når det regner, så det ikke bliver muggent.</p><p>Se alle <a href="/camping/haengekoejer/">hængekøjer</a> og vores guide til <a href="/outdoor-haengekoeje-med-myggenet/">hængekøjer med myggenet</a>.</p>
HTML,
	'faq'      => [
		[ 'Må babyer sove i en hængekøje?', 'Følg altid producentens anvisninger for alder og vægt. Almindelige hængekøjer er ikke beregnet til spædbørn.' ],
		[ 'Hvad er en hængekøjehule?', 'En rund, lukket hængekøje, som børn kan kravle ind i – en blanding af hængekøje og hule.' ],
		[ 'Kan en børnehængekøje hænge indendørs?', 'Ja, med en solid loftkrog eller et stativ. Tjek, at loftet kan bære vægten.' ],
	],
];
