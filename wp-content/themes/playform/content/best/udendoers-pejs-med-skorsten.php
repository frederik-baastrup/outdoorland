<?php
/**
 * Omskrevet fra det gamle outdoorland.dk (samme adresse) med produkter fra feedsne. Butikkerne har ingen havepejse med skorsten, så guiden viser bålfade og bålsteder. Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'udendoers-pejs-med-skorsten',
	'title'    => 'Udendørs pejs og bålfad: Vores bud på de 5 bedste til haven og terrassen',
	'excerpt'  => 'Drømmer du om knitrende flammer i haven? Her er vores bud på de 5 bedste bålfade og bålsteder fra danske butikker – og hvad du skal vide om udendørs pejse med skorsten.',
	'more_cat' => 'baal',
	'intro'    => <<<'HTML'
<p>Der er ikke noget som et levende bål en kølig aften i haven. En udendørs pejs med skorsten leder røgen op og væk, mens et bålfad giver det åbne lejrbål, man kan samles om hele vejen rundt. Begge dele forlænger sæsonen på terrassen med mange uger.</p><p>Butikkerne i vores udvalg har ingen havepejse med skorsten lige nu, men de har en række flotte bålfade og bålsteder. Herunder er vores bud på de 5 bedste.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '0850003383354',
			'price'   => 2140,
			'name'    => 'BioLite FirePit+',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Bålfad, der giver varmen, lyden og hyggen fra et rigtigt bål – uden den irriterende røg.',
			'why'     => <<<'HTML'
<p>BioLite FirePit+ er bygget til at give et rigtigt bål med knitrende flammer, men uden den røg, der normalt får alle til at flytte stolen. Det er en opgraderet udgave af den prisvindende FirePit.</p><p>Den er et oplagt valg, hvis du har lyst til en udendørs pejs, men vil kunne flytte bålet rundt i haven.</p>
HTML,
			'good'    => [ 'Terrasser tæt på huset', 'Hygge uden røg i øjnene' ],
			'less'    => [ 'Lavt budget' ],
		],
		[
			'ean'     => '4250435742204',
			'price'   => 2252,
			'name'    => 'Petromax Tyropit',
			'role'    => 'Mest stemning',
			'reviews' => [],
			'verdict' => 'Ildfad, der bringer lejrbålshyggen hjem i haven eller på terrassen.',
			'why'     => <<<'HTML'
<p>Petromax Tyropit er lavet til at skabe ægte vildmarksstemning i haven – til sociale aftener med venner eller en stille aften ved bålet. Petromax er kendt for robust udstyr til madlavning over ild.</p>
HTML,
			'good'    => [ 'Store selskaber', 'Haven hele året' ],
			'less'    => [ 'Små altaner' ],
		],
		[
			'ean'     => '4250435701720',
			'price'   => 600,
			'name'    => 'Petromax Griddle & Fire Bowl FS48',
			'role'    => 'Bedst til madlavning',
			'reviews' => [],
			'verdict' => 'Robust bålpande i pladestål, der både er bålfad og stegeplade.',
			'why'     => <<<'HTML'
<p>Griddle & Fire Bowl FS48 er en kraftig bålpande i pladestål. Materialet holder på varmen, og kanten bliver en anden temperatur end midten – så du kan stege og holde maden varm samtidig.</p>
HTML,
			'good'    => [ 'Madlavning over ild', 'Fornuftigt budget' ],
			'less'    => [ 'Dem, der kun vil have flammer' ],
		],
		[
			'ean'     => '8712013185002',
			'price'   => 559,
			'name'    => 'Bo-Camp bålfad',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Stilfuldt bålfad med rist.',
			'why'     => <<<'HTML'
<p>Bo-Camp bålfadet er et enkelt og stilfuldt bålfad, og risten gør, at du også kan grille pølser og skumfiduser over gløderne.</p>
HTML,
			'good'    => [ 'Lavt budget', 'Bål og grill' ],
			'less'    => [ 'Røgfri hygge' ],
		],
		[
			'ean'     => '4021504283719',
			'price'   => 489,
			'name'    => 'Origin Outdoors Hexagon',
			'role'    => 'Bedst til turen',
			'reviews' => [],
			'verdict' => 'Sekskantet, foldbart grill- og bålsted med stor grillflade og minimal pakkestørrelse.',
			'why'     => <<<'HTML'
<p>Hexagon fra Origin Outdoors kan foldes helt sammen og pakkes småt, så det kan komme med i bilen til sommerhuset, stranden eller campingpladsen.</p>
HTML,
			'good'    => [ 'Camping og sommerhus', 'Lille pakkestørrelse' ],
			'less'    => [ 'Fast plads i haven' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Udendørs pejs eller bålfad?</h2><p>En <b>udendørs pejs med skorsten</b> – også kaldet havepejs – har et lukket brændkammer og en skorsten, der leder røgen opad. Den står fast og giver et hyggeligt fokuspunkt på terrassen. Et <b>bålfad</b> eller bålsted er åbent, så I kan sidde hele vejen rundt om ilden. Det er lettere at flytte og ofte billigere.</p><h3>Materiale</h3><p>Cortenstål får en rustfarvet overflade, der beskytter metallet. Pladestål og støbejern er robuste og holder på varmen. Rustfrit stål er let at holde pænt.</p><h3>Placering og sikkerhed</h3><p>Stil bålfadet på et ikke-brændbart underlag og i god afstand til huset, træer og hække. Hold en spand vand eller et brandtæppe klar, og tjek reglerne for afbrænding i din kommune – især i tørre perioder, hvor der kan være forbud mod åben ild.</p><h3>Brænde</h3><p>Brug tørt brænde. Vådt træ ryger meget og giver mindre varme.</p><p>Se alle <a href="/friluftskoekken/baal/">bålfade og båludstyr</a> og vores guide til <a href="/baalgryde-grydesaet-baal/">bålgryder</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er forskellen på en havepejs og et bålfad?', 'En havepejs har et lukket brændkammer og en skorsten, der leder røgen væk. Et bålfad er åbent, så man kan sidde hele vejen rundt om ilden.' ],
		[ 'Må man have bål i haven?', 'Det afhænger af kommunens regler. Mange kommuner tillader bålfade, men der kan være afbrændingsforbud i tørre perioder. Tjek altid hos din kommune.' ],
		[ 'Hvad skal bålfadet stå på?', 'På et ikke-brændbart underlag som fliser, grus eller en brandsikker måtte.' ],
	],
];
