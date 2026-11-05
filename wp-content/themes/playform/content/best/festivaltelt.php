<?php
/**
 * Ny købsguide (5. nov. 2026). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'festivaltelt',
	'title'    => 'Festivaltelt: Vores bud på de 4 bedste billige telte til festival',
	'excerpt'  => 'Et festivaltelt skal være billigt, hurtigt at slå op og holde sig tørt. Her er vores bud på de 4 bedste festivaltelte fra danske butikker.',
	'more_cat' => 'telte',
	'intro'    => <<<'HTML'
<p>På festival er teltet stedet, hvor du sover (lidt), skifter tøj og holder tasken tør. Det behøver ikke koste meget – men det skal kunne slås op hurtigt, og det skal kunne klare en regnbyge.</p><p>Herunder er vores bud på de 4 bedste festivaltelte hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '5703384084325',
			'price'   => 732,
			'name'    => 'Grand Canyon Robson 2',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Prisgunstigt 2-personers telt fra Nordisks mærke Grand Canyon.',
			'why'     => <<<'HTML'
<p>Robson 2 er et prisvenligt telt, hvor der er sparet på detaljerne, men ikke på holdbarheden – så det kan bruges igen efter festivalen.</p>
HTML,
			'good'    => [ 'Festival for to', 'Weekendture bagefter' ],
			'less'    => [ 'Fjeldture' ],
		],
		[
			'ean'     => '4001690102902',
			'price'   => 489,
			'name'    => 'High Peak Vision 3 Pop Up',
			'role'    => 'Hurtigst at slå op',
			'reviews' => [],
			'verdict' => 'Kompakt pop up-telt til 2-3 personer med vandsøjle på 2000 mm.',
			'why'     => <<<'HTML'
<p>Vision 3 er et pop up-telt, der næsten slår sig selv op. Der er plads til 2-3 personer og en vandsøjle på 2000 mm.</p>
HTML,
			'good'    => [ 'Hurtig opsætning', 'Festival' ],
			'less'    => [ 'Lange ture' ],
		],
		[
			'ean'     => '4001690101646',
			'price'   => 319,
			'name'    => 'High Peak Monodome XL',
			'role'    => 'Billigst',
			'reviews' => [],
			'verdict' => 'Klassisk 4-personers kuppeltelt med vandsøjle på 1500 mm.',
			'why'     => <<<'HTML'
<p>Monodome XL er det helt billige kuppeltelt til fire. Vandsøjlen på 1500 mm er bedst til godt vejr.</p>
HTML,
			'good'    => [ 'Meget lavt budget', 'Vennegruppen' ],
			'less'    => [ 'Meget regn' ],
		],
		[
			'ean'     => '5703384087647',
			'price'   => 795,
			'name'    => 'Grand Canyon Topeka 3',
			'role'    => 'Mest plads for pengene',
			'reviews' => [],
			'verdict' => 'Prisgunstigt 3-personers telt.',
			'why'     => <<<'HTML'
<p>Topeka 3 giver plads til tre – eller to og al bagagen – til en lav pris.</p>
HTML,
			'good'    => [ 'Plads til bagage', 'Lavt budget' ],
			'less'    => [ 'Hårdt vejr' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du et festivaltelt</h2><p>Vælg et lyst telt, hvis du vil sove længere om morgenen – det bliver ikke så varmt i solen. Tag ekstra pløkker med, og sæt en lille hængelås på lynlåsen, hvis du vil holde ubudne gæster ude.</p><p>Se også vores guides til <a href="/2-personers-telt/">2 personers telt</a>, <a href="/4-personers-telt/">4 personers telt</a>, <a href="/familietelt/">familietelt</a> og <a href="/8-personers-telt/">8 personers telt</a>, og se alle <a href="/camping/telte/">telte</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er et godt festivaltelt?', 'Et billigt, robust telt, der er hurtigt at slå op og har en vandsøjle på mindst 1500–2000 mm.' ],
		[ 'Er pop up-telte gode til festival?', 'Ja, de er hurtige at slå op. De kan dog være svære at folde sammen igen og fylder meget pakket.' ],
		[ 'Hvor stort skal festivalteltet være?', 'Vælg et telt til én person mere end jer, så der er plads til tasker.' ],
	],
];
