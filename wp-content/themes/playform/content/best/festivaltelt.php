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
			'verdict' => 'Let tunneltelt til to fra Nordisks budgetmærke Grand Canyon – med 3.000 mm vandsøjle og apsis til bagagen.',
			'why'     => <<<'HTML'
<p>Grand Canyon Robson 2 er til jer, der vil have et ordentligt telt til festivalen, som også kan holde til weekendturene bagefter. Grand Canyon er Nordisks prisvenlige mærke: Der er sparet på materialer og detaljer for at holde prisen nede.</p>
<p>Teltet er et let tunneltelt med ét sovekammer til to personer. Oversejlet har en vandsøjle på 3.000 mm, så et festivalregnvejr ikke behøver at ødelægge natten. Foran er en apsis med løs bund, hvor I kan stille støvler, tasker og køletaske i læ. Ventilationsåbningerne i oversejlet lufter ud, så der ikke bliver så klamt indenfor om morgenen.</p>
HTML,
			'good'    => [ 'Festival for to', 'Weekendture efter festivalen', 'Dig, der vil have god vandsøjle for pengene' ],
			'less'    => [ 'Fjeldture og hårdt vejr' ],
		],
		[
			'ean'     => '4001690102902',
			'price'   => 489,
			'name'    => 'High Peak Vision 3 Pop Up',
			'role'    => 'Hurtigst at slå op',
			'reviews' => [],
			'verdict' => 'Kompakt pop up-telt til 2-3 personer, der står klar på ingen tid, når I ankommer til festivalpladsen.',
			'why'     => <<<'HTML'
<p>High Peak Vision 3 er teltet til dig, der hellere vil i gang med festen end bruge tid på stænger og vejledninger. Som pop up-telt folder det sig næsten selv ud, så du hurtigt kan pløkke det fast og komme videre.</p>
<p>Der er plads til to personer med bagage eller tre, der ligger tæt. Teltet er kompakt, så det er nemt at have med i bilen eller på vej fra parkeringspladsen til campingområdet.</p>
HTML,
			'good'    => [ 'Hurtig opsætning', 'Festival og weekendcamping', 'Dig, der aldrig har slået telt op før' ],
			'less'    => [ 'Lange ture med teltet på ryggen' ],
		],
		[
			'ean'     => '4001690101646',
			'price'   => 319,
			'name'    => 'High Peak Monodome XL',
			'role'    => 'Billigst',
			'reviews' => [],
			'verdict' => 'Klassisk kuppeltelt til fire personer fra High Peak – det billigste valg til festival og camping.',
			'why'     => <<<'HTML'
<p>High Peak Monodome XL er det oplagte valg, når budgettet er stramt, men der skal være plads til hele vennegruppen. Det er et klassisk kuppeltelt til fire personer, lavet til festival og camping.</p>
<p>Kuppelformen gør teltet enkelt at slå op, og det står af sig selv, så du kan flytte det rundt, før det bliver pløkket fast. Vandsøjlen på 1500 mm klarer sig bedst i en sommer med pænt vejr – tjek prognosen, og tag eventuelt en ekstra presenning med.</p>
HTML,
			'good'    => [ 'Meget lavt budget', 'Vennegruppen på festival', 'Sommercamping i godt vejr' ],
			'less'    => [ 'Mange dage med kraftig regn' ],
		],
		[
			'ean'     => '5703384087647',
			'price'   => 795,
			'name'    => 'Grand Canyon Topeka 3',
			'role'    => 'Mest plads for pengene',
			'reviews' => [],
			'verdict' => 'Kuppeltelt med 125 cm til loftet, apsis til tasker og ventilation, der holder morgenvarmen nede.',
			'why'     => <<<'HTML'
<p>Grand Canyon Topeka 3 er til jer, der vil have rigtig plads på festivalen uden at betale meget. Grand Canyon er Nordisks budgetmærke, hvor der er sparet på materialer og detaljer, men kvaliteten er fornuftig til en uge på campingpladsen.</p>
<p>Med 125 cm til loftet kan I sidde op og klæde om, og bag den store fordør er en apsis til tasker og støvler. Når solen står på om morgenen, kan I rulle oversejlet op bagtil og åbne ventilationen, så luften kan strømme igennem. En regnbyge klarer oversejlet med 3000 mm vandsøjle.</p>
<p>Stængerne hægtes i kroge på inderteltet, så teltet står hurtigt, og alt pakkes i en pose med stålpløkker.</p>
HTML,
			'good'    => [ 'Festival for tre', 'To med meget bagage', 'Lavt budget' ],
			'less'    => [ 'Dig, der skal bære teltet langt – det vejer 3900 g' ],
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
