<?php
/**
 * Ny købsguide (5. nov. 2026) – udskilt fra guiden om udendørs pejs, så hvert søgeord har sin egen side. Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'baalfad',
	'title'    => 'Bålfad: Vores bud på de 5 bedste til haven og terrassen',
	'keyword'  => 'bålfad',
	'excerpt'  => 'Et bålfad samler familie og venner om ilden hele vejen rundt. Her er vores bud på de 5 bedste bålfade fra danske butikker – fra røgreducerende bålfad til store bålfade med ildrager.',
	'more_cat' => 'baal',
	'intro'    => <<<'HTML'
<p>Et bålfad er den nemmeste vej til lejrbålsstemning i haven. Ilden er samlet i et fad, der står sikkert, og I kan sidde hele vejen rundt – med en kop kaffe, en pølse på en pind eller bare udsigten til flammerne.</p><p>Herunder er vores bud på de 5 bedste bålfade hos danske butikker lige nu, fra det helt enkle til modeller, der også kan bruges som grill.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '0850003383354',
			'price'   => 2140,
			'name'    => 'BioLite FirePit+',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Næsten røgfrit bål med justerbare flammer via app, indbygget powerbank og grillrist – på kun 8,9 kg.',
			'why'     => <<<'HTML'
<p>BioLite FirePit+ er til dig, der elsker lejrbålets varme og knitren, men er træt af røg i øjnene og tøj, der lugter bagefter. En indbygget luftstrøm giver en effektiv forbrænding med meget lidt røg, og de netformede sider lader dig se flammerne fra alle sider af bålet.</p>
<p>Du skruer op og ned for flammerne med et greb eller fra mobilen via BioLites gratis app til iOS og Android. På lav indstilling kører den op til 30 timer. Batteriet på 12.800 mAh kan samtidig lade din telefon op via USB-A. Løft brændeholderen, fyld kul i, og læg den medfølgende grillrist på – så har du en hibachi-grill.</p>
<p>Med 8,9 kg og ben, der kan klappes sammen, er den nem at tage med i sommerhuset. Den kraftige emalje tåler vejret, men opbevar den tørt, og tøm asken efter brug. Brændestativ og USB-kabel følger med.</p>
HTML,
			'good'    => [ 'Terrasser tæt på huset og naboer', 'Dig, der vil grille over bålet', 'Sommerhus og tur i bil' ],
			'less'    => [ 'Dig, der vil have et bål helt uden teknik og strøm' ],
		],
		[
			'ean'     => '4250435742204',
			'price'   => 2252,
			'name'    => 'Petromax Tyropit',
			'role'    => 'Mest stemning',
			'reviews' => [],
			'verdict' => 'Dobbeltvægget ildfad i rustfrit stål med sekundær forbrænding, der giver næsten røgfri flammer og meget lidt aske.',
			'why'     => <<<'HTML'
<p>Petromax Tyropit er til dig, der vil have et solidt bålsted i haven, som kan samle familie og venner aften efter aften. Med en diameter på 62,3 cm er der plads til et ordentligt bål og mange stole rundt om.</p>
<p>Den dobbelte væg og Petromax' Tyropit Dome-system sender ekstra luft ind til flammerne, så brændet brænder rent med næsten ingen røg og lidt aske – det gør også oprydningen let. Et indbygget varmeskjold i bunden beskytter terrassen eller græsset, og tre kraftige ben holder fadet stabilt, også på ujævnt underlag.</p>
<p>Det rustfri stål får med tiden en flot patina. Tyropit kan udvides med en grillplade og bruges sammen med Petromax' gryder, perkolatorer, vaffeljern og grillspyd. Den vejer 14,4 kg, så den bliver stående, hvor du sætter den.</p>
HTML,
			'good'    => [ 'Store selskaber i haven', 'Mad over åben ild', 'Træterrasser, hvor underlaget skal skånes' ],
			'less'    => [ 'Små altaner', 'Dig, der vil flytte bålfadet tit' ],
		],
		[
			'ean'     => '8720845652333',
			'price'   => 875,
			'name'    => 'Bålfad med ildrager 50 cm XXL',
			'role'    => 'Mest bålfad for pengene',
			'reviews' => [],
			'verdict' => 'Stort og dybt bålfad i stål på 50 x 50 cm med gnistnet og ildrager – til lange aftener i haven.',
			'why'     => <<<'HTML'
<p>Dette XXL-bålfad fra vidaXL er til dig, der vil have et stort bål i haven uden at bruge en formue. Skålen er stor og dyb, så du kan fyre godt op og holde bålet i gang i flere timer, mens familien og gæsterne varmer sig rundt om.</p>
<p>Netlåget lukker om ilden og holder gnister og glødende rester inde, men du kan stadig se flammerne. Der er en ring på låget, så du kan løfte det, og den medfølgende ildrager kan både tage låget af og skubbe brændet på plads. Stålet optager varmen og stråler den ud til dem, der sidder omkring.</p>
<p>Fadet måler 50 x 50 x 36 cm og vejer 6,15 kg, så det er let at flytte, når det er koldt. Det samles efter den medfølgende vejledning og må kun bruges udendørs.</p>
HTML,
			'good'    => [ 'Mange omkring bålet', 'Fornuftigt budget', 'Dig, der vil have gnistnet' ],
			'less'    => [ 'Dig, der vil undgå røg' ],
		],
		[
			'ean'     => '8712013185002',
			'price'   => 559,
			'name'    => 'Bo-Camp bålfad',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Stilfuldt bålfad fra Bo-Camp med rist, så du både kan hygge ved bålet og grille.',
			'why'     => <<<'HTML'
<p>Bo-Camps bålfad er til dig, der vil have et enkelt og pænt bålfad uden at bruge mange penge. Det passer fint ind på terrassen eller i haven og giver hurtigt hyggen fra et rigtigt bål.</p>
<p>Risten følger med, så bålfadet også kan bruges til mad. Når bålet er brændt ned til gløder, kan du grille pølser, brød på pind eller skumfiduser til børnene – og så er aftensmaden og desserten klaret samme sted.</p>
HTML,
			'good'    => [ 'Lavt budget', 'Bål og grill i ét', 'Hyggeaftener for familien' ],
			'less'    => [ 'Dig, der vil undgå røg' ],
		],
		[
			'ean'     => '8720286185704',
			'price'   => 447,
			'name'    => '2-i-1 bålfad og grill 34x34x48 cm',
			'role'    => 'Bedst som bålfad og grill',
			'reviews' => [],
			'verdict' => 'Bålfad og kulgrill i ét: 34 x 34 x 48 cm, stort og dybt fad, medfølgende grillrist og kun 4,2 kg.',
			'why'     => <<<'HTML'
<p>Dette 2-i-1 bålfad fra vidaXL er til dig, der vil have både varme og aftensmad fra samme ildsted – og som ikke har plads til både en grill og et bålfad. Fadet er stort og dybt, så du kan holde et godt bål i gang i mange timer.</p>
<p>Med den medfølgende grillrist bliver bålfadet til en kulgrill, og det kan stilles op på to forskellige måder, alt efter hvad du skal bruge det til. Stålet optager varmen og stråler den ud igen, så du har det lunt, også når solen er gået ned.</p>
<p>Med 34 x 34 x 48 cm og en vægt på kun 4,2 kg fylder det ikke meget på en lille terrasse og er nemt at flytte rundt, når det er kølet af.</p>
HTML,
			'good'    => [ 'Små terrasser', 'Mad over ild', 'Lavt budget' ],
			'less'    => [ 'Store selskaber' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du det bedste bålfad</h2><h3>Størrelse</h3><p>Et bålfad på 50–60 cm i diameter er en god størrelse til en familie og nogle venner. Skal I være mange, eller vil I have et stort bål, så gå efter et bredere fad. Til en lille terrasse eller altan er et kompakt bålfad nok.</p><h3>Materiale</h3><p>Stål er robust og holder på varmen. Cortenstål får en rustfarvet overflade, der beskytter metallet, og rustfrit stål er let at holde pænt. Et tykt materiale slår sig mindre, når det bliver meget varmt.</p><h3>Røg</h3><p>Almindelige bålfade ryger, især når ilden tændes, og når brændet er fugtigt. Røgreducerende bålfade som BioLite FirePit+ tilfører ekstra luft til flammerne, så forbrændingen bliver mere fuldstændig og røgen mindre.</p><h3>Grill og tilbehør</h3><p>Mange bålfade kan bruges som grill med en rist. Et låg eller en gnistskærm er en god idé, hvis børn eller dyr færdes omkring bålet, og en ildrager gør det nemt at lægge brænde på.</p><h3>Placering og sikkerhed</h3><p>Stil bålfadet på et ikke-brændbart underlag og i god afstand til huset, hække og træer. Hav vand eller et brandtæppe klar, og tjek kommunens regler for afbrænding.</p><p>Drømmer du om en lukket pejs med skorsten, så se vores guide til <a href="/udendoers-pejs-med-skorsten/">udendørs pejs</a>. Se også alle <a href="/friluftskoekken/baal/">bålfade og ildsteder</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvilket bålfad ryger mindst?', 'Bålfade, der er bygget til at tilføre ekstra luft til flammerne, som BioLite FirePit+, ryger markant mindre end et almindeligt åbent bålfad. Tørt brænde gør også en stor forskel.' ],
		[ 'Hvor stort skal et bålfad være?', 'Omkring 50–60 cm i diameter passer til de fleste haver og en familie med gæster. Til en lille terrasse kan et kompakt bålfad være nok.' ],
		[ 'Må man have bålfad i haven?', 'Det afhænger af kommunens regler. Mange steder er det tilladt, men der kan være afbrændingsforbud i tørre perioder.' ],
		[ 'Kan man grille på et bålfad?', 'Ja, hvis bålfadet har en rist eller er bygget som 2-i-1 bålfad og grill. Vent, til flammerne har lagt sig, og grill over gløderne.' ],
	],
];
