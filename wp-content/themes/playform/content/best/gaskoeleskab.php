<?php
/**
 * Gaskøleskab (/gaskoeleskab/) – det gamle sites mest besøgte side, samme adresse. Butikkerne har ingen gaskøleskabe
 * i deres feeds lige nu, så guiden forklarer gaskøleskabe og viser de køleløsninger, butikkerne har (kompressor og 12/230 V).
 * Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'gaskoeleskab',
	'title'    => 'Gaskøleskab: Sådan vælger du – og 5 stærke alternativer til camping og kolonihave',
	'excerpt'  => 'Skal køleskabet køre på gas, 12 V eller 230 V? Her er alt det vigtige om gaskøleskabe – og vores bud på de 5 bedste kølebokse fra danske butikker, når du ikke har strøm hele tiden.',
	'more_cat' => 'koeletasker',
	'intro'    => <<<'HTML'
<p>Et gaskøleskab er genialt, når der ikke er strøm: i kolonihavehuset, i campingvognen eller i sommerhuset uden el. Det køler med en lille gasflamme og er næsten lydløst. Men et gaskøleskab er også en investering, og til mange ture er en moderne kompressorkøleboks på 12 V og 230 V både billigere og mere fleksibel.</p>
<p>Herunder er vores bud på de bedste køleløsninger hos danske butikker lige nu – fra den lille køleboks til bilen til kompressormodeller, der kan fryse ned. Længere nede forklarer vi, hvornår et rigtigt gaskøleskab er det rigtige valg.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '5709388149329',
			'price'   => 4355,
			'name'    => 'Outwell Arctic Frost 55',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Stor, kompressordrevet og støjsvag køleboks på 55 liter – det tætteste, du kommer på et rigtigt køleskab på farten.',
			'why'     => <<<'HTML'
<p>Arctic Frost 55 er Outwells kompressordrevne topmodel. En kompressor køler langt kraftigere end en almindelig elektrisk køleboks og holder den temperatur, du indstiller, også på varme dage. Med 55 liter er der plads til en hel families mad til en forlænget weekend.</p>
<p>Den er et godt valg, hvis du overvejer et gaskøleskab til campingvognen eller teltet, men vil kunne tage køleskabet med i bilen.</p>
HTML,
			'good'    => [ 'Lange ferier og familier', 'Varme dage, hvor køling skal holde' ],
			'less'    => [ 'Steder helt uden strøm' ],
		],
		[
			'ean'     => '5709388158000',
			'price'   => 3003,
			'name'    => 'Outwell Arctic Chill 41 Dual Zone',
			'role'    => 'Bedst med køl og frys',
			'reviews' => [],
			'verdict' => 'Kompressorkøleboks på 41 liter med to zoner, der hver kan indstilles for sig – køl i den ene, frys i den anden.',
			'why'     => <<<'HTML'
<p>Mange, der søger efter et gaskøleskab med fryser, vil i virkeligheden bare kunne holde is og frost kold på turen. Arctic Chill 41 Dual Zone har to separate temperaturzoner, så du kan køle drikkevarer i den ene ende og holde frostvarer frosne i den anden.</p>
HTML,
			'good'    => [ 'Køl og frys på samme tid', 'Bil, båd og campingvogn' ],
			'less'    => [ 'Lavt budget' ],
		],
		[
			'ean'     => '5709388149299',
			'price'   => 2478,
			'name'    => 'Outwell Arctic Chill 50',
			'role'    => 'Mest køl for pengene',
			'reviews' => [],
			'verdict' => 'Kompressordrevet køleboks på 50 liter til en pris, der er til at have med at gøre.',
			'why'     => <<<'HTML'
<p>Arctic Chill 50 giver dig kompressorkøling og 50 liters plads til betydeligt mindre end topmodellen. Den er et oplagt alternativ til et lille gaskøleskab i telt eller forhus, når du har strøm fra bilen eller campingpladsen.</p>
HTML,
			'good'    => [ 'Campingferie med strøm på pladsen', 'Mange drikkevarer' ],
			'less'    => [ 'Steder helt uden strøm' ],
		],
		[
			'ean'     => '5709388149251',
			'price'   => 1126,
			'name'    => 'Outwell ECOcool 35 12V/230V',
			'role'    => 'Bedst til bilen',
			'reviews' => [],
			'verdict' => 'Elektrisk køleboks på 35 liter, der kører på både 12 V i bilen og 230 V på campingpladsen.',
			'why'     => <<<'HTML'
<p>ECOcool 35 er den enkle løsning: sæt den i bilens 12 V-stik på vejen og i 230 V, når I er fremme. Med 35 liter er der god plads til mad og drikke til et par dage.</p>
<p>En elektrisk køleboks som denne køler i forhold til omgivelserne, så den er bedst til at holde allerede kolde varer kolde – ikke til at fryse ned.</p>
HTML,
			'good'    => [ 'Roadtrips og weekendture', 'Lavt budget' ],
			'less'    => [ 'Frostvarer og hedebølge' ],
		],
		[
			'ean'     => '4251702501494',
			'price'   => 1032,
			'name'    => 'Zorn 29L 12/230V/USB',
			'role'    => 'Bedst til kolonihaven',
			'reviews' => [],
			'verdict' => 'Kompakt elektrisk køleboks på 29 liter med 12 V, 230 V og USB.',
			'why'     => <<<'HTML'
<p>Zorn-køleboksen på 29 liter kan tilsluttes både 12 V, 230 V og USB, så den er let at flytte mellem bil, kolonihavehus og terrasse. Den fylder ikke meget og er god til drikkevarer og pålæg til dagen.</p>
HTML,
			'good'    => [ 'Kolonihave og terrasse med strøm', 'Små pladsforhold' ],
			'less'    => [ 'Store indkøb til hele familien' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan fungerer et gaskøleskab</h2>
<p>Et gaskøleskab – også kaldet et absorptionskøleskab – køler uden kompressor. En lille gasflamme varmer en væske, der cirkulerer i et lukket system og trækker varmen ud af skabet. Derfor er det næsten lydløst og kan køre uden strøm. De fleste modeller er 3-vejs køleskabe, der kan køre på gas, 12 V og 230 V, og vælger selv eller lader dig skifte energikilde.</p>
<h3>Hvornår er et gaskøleskab det rigtige valg?</h3>
<ul>
<li><b>Kolonihave og sommerhus uden el:</b> Her er gaskøleskabet svært at slå. Det kører på en almindelig gasflaske i ugevis.</li>
<li><b>Campingvogn:</b> De fleste campingvogne har et indbygget 3-vejs køleskab, der kører på gas under kørsel og pauser og på 230 V på pladsen.</li>
<li><b>Telt og bil:</b> Her er en kompressorkøleboks som regel mere praktisk. Den køler hurtigere, kan fryse ned og kan tåle at blive flyttet rundt.</li>
</ul>
<h3>Det skal du kigge efter</h3>
<p><b>Volumen:</b> 30–40 liter rækker til et par personer på weekendtur. En familie på ferie har glæde af 50 liter eller mere. <b>Fryser:</b> Vil du have is og frost med, skal du vælge en model med frostboks eller to zoner. <b>Støj:</b> Gaskøleskabe og elektriske kølebokse er stort set lydløse; en kompressor høres, når den kører. <b>Placering:</b> Et gaskøleskab skal stå i vater og have frisk luft til flammen – det må aldrig bruges i et lukket telt.</p>
<h3>Sikkerhed med gas</h3>
<p>Brug kun gaskøleskabet, hvor der er god udluftning, og tjek slanger og regulator jævnligt. Et gaskøleskab til indbygning i campingvognen skal installeres efter producentens anvisninger, og gasinstallationer i fx kolonihavehuse kan være omfattet af regler for gasinstallationer – spørg en autoriseret gasinstallatør, hvis du er i tvivl.</p>
<p>Se alle <a href="/friluftskoekken/koeletasker/">køletasker, kølebokse og køleskabe</a>, og se også vores guide til en <a href="/lille-grill-transportabel/">lille, transportabel grill</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvordan virker et gaskøleskab?', 'Et gaskøleskab (absorptionskøleskab) bruger en lille gasflamme til at drive et lukket kølesystem uden kompressor. Det er næsten lydløst og kan køre helt uden strøm.' ],
		[ 'Kan et gaskøleskab også køre på strøm?', 'Ja, de fleste er 3-vejs køleskabe, der kan køre på gas, 12 V og 230 V.' ],
		[ 'Må man bruge et gaskøleskab indendørs?', 'Kun hvis det er beregnet til det og står med god udluftning. Brug aldrig et gaskøleskab i et lukket telt.' ],
		[ 'Hvad er alternativet til et gaskøleskab?', 'En kompressorkøleboks på 12 V og 230 V. Den køler hurtigt, kan ofte fryse ned og er let at tage med i bilen.' ],
		[ 'Hvad er bedst til kolonihaven?', 'Er der ikke strøm, er et gaskøleskab det oplagte valg. Er der strøm, er en elektrisk køleboks eller et lille køleskab billigere i drift.' ],
	],
];
