<?php
/**
 * Omskrevet fra det gamle outdoorland.dk (samme adresse) med produkter fra feedsne. Bålfade har deres egen guide (/baalfad/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'udendoers-pejs-med-skorsten',
	'title'    => 'Udendørs pejs: Vores bud på de 2 bedste – og sådan vælger du',
	'excerpt'  => 'En udendørs pejs med skorsten leder røgen op og væk og giver varme og stemning på terrassen. Her er vores bud på de bedste havepejse fra danske butikker – og hvad du skal tænke på.',
	'more_cat' => 'baal',
	'intro'    => <<<'HTML'
<p>En udendørs pejs – også kaldet havepejs eller terrassepejs – samler ilden i et lukket brændkammer og sender røgen op gennem skorstenen. Det giver en roligere ild end et åbent bål, mindre røg i øjnene og et flot fokuspunkt på terrassen, også når aftenerne bliver kølige.</p><p>Udvalget af udendørs pejse hos de danske outdoorbutikker er lille lige nu, så her er de to modeller, vi kan anbefale – og en guide til, hvad du skal kigge efter, hvis du vil finde din egen.</p>
HTML,
	'picks'    => [
		[
			'slug'    => 'havepejs-med-ildrager-38x38x122-cm-stal',
			'price'   => 1156,
			'name'    => 'Havepejs med ildrager 38x38x122 cm',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Klassisk havepejs i stål med skorsten, netlåge og ildrager.',
			'why'     => <<<'HTML'
<p>Den høje havepejs er bygget som en rigtig udendørs pejs: et lukket brændkammer i stål med skorsten, så røgen ledes op over hovederne på jer, der sidder omkring den. Stålet optager varmen og stråler den ud igen, og netlågen holder gnisterne inde.</p><p>Ildrageren følger med, så du kan rode i gløderne og lægge brænde på uden at komme for tæt på.</p>
HTML,
			'good'    => [ 'Terrassen', 'Mindre røg i øjnene' ],
			'less'    => [ 'Bål, man sidder hele vejen rundt om' ],
		],
		[
			'ean'     => '8719883782614',
			'price'   => 433,
			'name'    => 'Ildsted 35x35x99 cm i stål',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Ildsted i pyramideform på fire ben – et billigt alternativ til en havepejs.',
			'why'     => <<<'HTML'
<p>Ildstedet har en klassisk pyramidefacon og står på et stativ med fire ben, så ilden er løftet op fra jorden. Det er lavet af pulverlakeret stål og passer ind på både moderne og enkle terrasser.</p><p>Det er ikke en lukket pejs med skorsten, men den høje, åbne form giver noget af den samme stemning til en lavere pris.</p>
HTML,
			'good'    => [ 'Lavt budget', 'Små terrasser' ],
			'less'    => [ 'Dem, der vil have en lukket pejs' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en udendørs pejs</h2><p>En <b>udendørs pejs med skorsten</b> har et lukket brændkammer og en skorsten, der trækker røgen opad. Den står fast et sted i haven eller på terrassen og varmer især til den side, hvor åbningen vender. Vil du hellere samles hele vejen rundt om ilden, er et <a href="/baalfad/">bålfad</a> et bedre valg.</p><h3>Materiale</h3><p>Stål er robust og holder godt på varmen. Cortenstål får en rustfarvet overflade, der beskytter metallet, mens pulverlakeret stål holder farven. Støbejern er tungt og meget holdbart. Ler- og terrakottapejse (chimenea) er dekorative, men tåler ikke frost og skal stå i ly om vinteren.</p><h3>Højde og skorsten</h3><p>Jo højere skorstenen er, jo bedre trækker pejsen, og jo højere over hovederne ledes røgen. Tjek også, om der er en gnistskærm eller netlåge foran åbningen.</p><h3>Placering og sikkerhed</h3><p>Stil pejsen på et ikke-brændbart underlag som fliser eller sten, og hold god afstand til huset, hække, træer og parasoller. Hav en spand vand eller et brandtæppe i nærheden, og tjek kommunens regler for afbrænding – især i tørre perioder.</p><h3>Brænde</h3><p>Brug tørt, rent brænde. Vådt træ ryger meget, giver mindre varme og sværter pejsen til.</p><p>Se også vores guide til <a href="/baalfad/">bålfade</a> og alle <a href="/friluftskoekken/baal/">bålfade og ildsteder</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er forskellen på en udendørs pejs og et bålfad?', 'En udendørs pejs har et lukket brændkammer og en skorsten, der leder røgen opad. Et bålfad er åbent, så man kan sidde hele vejen rundt om ilden.' ],
		[ 'Må man have en udendørs pejs i haven?', 'Det må man som regel, men kommunen kan have regler og indføre afbrændingsforbud i tørre perioder. Tjek altid hos din kommune.' ],
		[ 'Hvad skal en havepejs stå på?', 'På et ikke-brændbart underlag som fliser, sten eller grus – aldrig direkte på et trædæk.' ],
		[ 'Kan en udendørs pejs stå ude om vinteren?', 'En pejs i stål eller støbejern kan stå ude, men en overdækning forlænger levetiden. Pejse i ler eller terrakotta skal i ly, fordi de kan revne i frost.' ],
	],
];
