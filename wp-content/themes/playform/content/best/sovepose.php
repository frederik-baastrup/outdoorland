<?php
/**
 * Købsguide: sovepose. Fakta kun fra butikkernes produktdata.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'sovepose',
	'keyword'  => 'sovepose',
	'title'    => 'Sovepose: Vores bud på de 5 bedste soveposer til camping, vandring og vinter',
	'excerpt'  => 'En god nats søvn i teltet starter med den rigtige sovepose. Her er vores bud på de 5 bedste soveposer fra de butikker, vi samarbejder med – fra sommerpose til vintersovepose.',
	'more_cat' => 'soveposer',
	'intro'    => <<<'HTML'
<p>Du kan have det bedste telt og den blødeste liggepude, men lige så meget som soveposen afgør, om natten bliver varm og behagelig, eller om du ligger og tæller timer til daggry. Den rigtige sovepose passer til årstiden, til din krop og til den måde, du rejser på.</p><p>Her er fem soveposer til forskellige behov og budgetter. Fælles for dem er, at de er fibersoveposer, som tåler fugt bedre end dun og er nemme at holde.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '5709388149626',
			'price'   => 673,
			'name'    => 'Robens Moraine III -2°C Long',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Alsidig fibersovepose med MicroThermo-isolering og en lang pasform til tre sæsoner.',
			'why'     => <<<'HTML'
<p>Robens Moraine III er en alsidig og komfortabel sovepose til dig, der vil have pålidelig varme og fleksibilitet på turen. Den effektive MicroThermo-isolering holder på varmen, og soveposen kan pakkes lille, så den ikke fylder meget i rygsækken.</p>
<p>Mærkningen -2 °C viser, at den er tænkt til kolde nætter i forår og efterår. Du får den i den lange udgave, som passer til dig, der er høj eller vil have lidt ekstra plads at strække benene på.</p>
HTML,
			'good'    => [ 'Tre-sæsonsture', 'Høje friluftsfolk', 'Dig, der vil pakke småt' ],
			'less'    => [ 'Midvinter og arktiske forhold' ],
		],
		[
			'ean'     => '5703384138653',
			'eans'    => [ '5703384084554', '5703384087838' ],
			'price'   => 223,
			'name'    => 'Grand Canyon Whistler 190',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Mumiemodel i fiber, mærket til sommer (over 3 °C), til en meget lav pris.',
			'why'     => <<<'HTML'
<p>Grand Canyon Whistler 190 er den enkle sommerpose til festival, sommerhus og de første teltture. Det er en mumiemodel i fiber, mærket til sommerbrug over 3 °C,.</p>
<p>Prisen er lav, så den er oplagt som ekstra pose til gæster eller børn, der er vokset til en voksenpose. Grand Canyon er Nordisks budgetlinje, hvor der er sparet på materialer og detaljer for at holde prisen nede.</p>
HTML,
			'good'    => [ 'Sommer og festival', 'Gæsteovernatning', 'Det lille budget' ],
			'less'    => [ 'Kolde nætter uden for sommeren' ],
		],
		[
			'ean'     => '4001690230858',
			'price'   => 336,
			'name'    => 'High Peak Redwood -3',
			'role'    => 'Bedst til forår og efterår',
			'reviews' => [],
			'verdict' => 'Tre-sæsoners sovepose i to længder, til personer op til 190 cm (M) eller 200 cm (L).',
			'why'     => <<<'HTML'
<p>High Peak Redwood -3 er en tre-sæsoners sovepose, der kan bruges fra forår til efterår, og den er en af de billigste i guiden, der er beregnet til køligere nætter. Den fås i to længder: M til personer op til 190 cm og L til op til 200 cm.</p>
<p>Det gør den til et godt valg, hvis du vil have en pose, der passer, uden at du behøver at købe en dyr model. Vælg længden efter din højde, så der ikke er unødigt luft i bunden af posen.</p>
HTML,
			'good'    => [ 'Teltture fra forår til efterår', 'Valg mellem to længder', 'Fornuftigt budget' ],
			'less'    => [ 'Meget lave temperaturer' ],
		],
		[
			'ean'     => '9327868161799',
			'price'   => 858,
			'name'    => 'Sea to Summit Boab -1°C',
			'role'    => 'Mest plads',
			'reviews' => [],
			'verdict' => 'Rummelig syntetisk sovepose med lynlås i fuld længde, blødt inderstof og stor hætte med snøre.',
			'why'     => <<<'HTML'
<p>Sea to Summit Boab er til dig, der ikke kan sove i en smal mumie. Posen er ekstra rummelig, så du kan ligge på siden eller trække benene op, og den har lynlås i fuld længde, så den også kan luftes eller bruges som dyne.</p>
<p>Inderstoffet er blødt, og hætten har snørelukning, så du kan lukke varmen om hovedet. Isoleringen er syntetisk, og posen er mærket -1 °C, så den passer til forår, sommer og efterår.</p>
HTML,
			'good'    => [ 'Dig, der vender dig meget om natten', 'Bilcamping og telttur', 'Dig, der kan lide dynefølelsen' ],
			'less'    => [ 'Meget lav vægt og lille pakkemål' ],
		],
		[
			'ean'     => '5703384129705',
			'eans'    => [ '5703384129712', '5703384129729' ],
			'price'   => 1019,
			'name'    => 'Nordisk Bjarni -10° Mummy',
			'role'    => 'Bedst til vinter',
			'reviews' => [],
			'verdict' => 'Vintersovepose i fiber til kulde under -8 °C, lavet af Nordisk, i tre størrelser.',
			'why'     => <<<'HTML'
<p>Nordisk Bjarni -10° er skabt til friluftsfolk, der ikke vil lade kulde eller skiftende vejr sætte grænser. Det er en prisgunstig og alligevel avanceret fibersovepose til vinterbrug under -8 °C.</p>
<p>Du kan vælge mellem størrelserne Medium, Large og X-Large, så posen passer til din højde. Mumieformen holder varmen tæt på kroppen, når nætterne bliver rigtig kolde.</p>
HTML,
			'good'    => [ 'Vinterture', 'Frostnætter i telt og hytte', 'Dig, der fryser nemt' ],
			'less'    => [ 'Sommer, hvor den bliver for varm' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en sovepose</h2><h3>Temperatur</h3><p>Soveposer mærkes med temperaturer. Vælg efter de koldeste nætter, du forventer, og husk, at du sover bedre, hvis du er lidt varm end lidt kold. Fryser du let, så vælg en pose med en lavere temperaturmærkning, end du tror, du har brug for.</p><h3>Fiber eller dun</h3><p>Fiber er billigere og tåler fugt bedre. Dun er lettere og kan pakkes mindre, men er dyrere og kræver mere pleje. Alle soveposerne i denne guide har fiberfyld.</p><h3>Form</h3><p>En mumiepose følger kroppen og holder varmen bedst. En rektangulær pose giver mere albuerum og kan ofte åbnes helt som en dyne.</p><h3>Længde</h3><p>Vælg en pose, der passer til din højde. Er den for lang, skal din krop varme unødig luft. Er den for kort, bliver fødderne kolde.</p><h3>Pakkemål og vægt</h3><p>Skal posen med i rygsækken, så tæller hver gram. Er du bilcamper, kan du vælge bredere og blødere.</p><p>Se alle <a href="/camping/soveposer/">soveposer</a> og <a href="/camping/vintersoveposer/">vintersoveposer</a>, og find et <a href="/camping/liggeunderlag/">liggeunderlag</a> til under posen.</p>
HTML,
	'faq'      => [
		[ 'Hvilken sovepose skal jeg vælge til camping?', 'En tre-sæsoners fibersovepose rækker langt. Den kan bruges fra forår til efterår og er billigere end en vinterpose.' ],
		[ 'Hvad betyder temperaturmærkningen?', 'Den fortæller, hvornår posen er beregnet til at holde dig varm. Tjek, om tallet er komfort- eller ekstremtemperatur, da der kan være stor forskel.' ],
		[ 'Skal jeg vælge dun eller fiber?', 'Fiber er billigere og klarer fugt godt. Dun er lettere og mere kompakt, men dyrere. Til almindelig camping er fiber ofte det bedste valg.' ],
		[ 'Hvordan holder jeg varmen i soveposen?', 'Brug et godt liggeunderlag, så kulden ikke trænger op nedefra. Tag tørt undertøj på, og luk hætten omkring hovedet.' ],
	],
];
