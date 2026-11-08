<?php
/**
 * Omskrevet fra det gamle outdoorland.dk (samme adresse). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'lommelygte',
	'title'    => 'Lommelygte: Vores bud på de 5 bedste kraftige lommelygter',
	'excerpt'  => 'En god lommelygte er lys i mørket på turen, i bilen og derhjemme. Her er vores bud på de 5 bedste kraftige lommelygter fra de butikker, vi samarbejder med.',
	'more_cat' => 'lommelygter',
	'intro'    => <<<'HTML'
<p>En god lommelygte er en af de ting, du først savner, når den mangler: når strømmen går, når bilen skal tjekkes i mørke, eller når du skal finde vej tilbage til teltet. Moderne LED-lygter er små, kraftige og ofte genopladelige.</p><p>Herunder er vores bud på de 5 bedste lommelygter hos de butikker, vi samarbejder med.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '4058205037372',
			'price'   => 953,
			'name'    => 'LED Lenser P7R',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => '2000 lumen, 320 meters rækkevidde og op til 80 timers brændetid – i en vandtæt IP68-lygte.',
			'why'     => <<<'HTML'
<p>LED Lenser P7R er lygten til dig, der vil have masser af lys og fuld kontrol – på jagt, på vandreturen eller i arbejdet. Med op til 2000 lumen og en rækkevidde på 320 meter lyser den langt ind i skoven, og med fokusringen skifter du hurtigt mellem bredt nærlys og et skarpt, langt spot.</p>
<p>Ringen bruger du også til at vælge lysstyrke og slå transportlåsen til, så lygten ikke tænder i tasken. På laveste trin holder batteriet op til 80 timer, og på 1200 lumen omkring 2,5 time. Den lades med det medfølgende USB-C-kabel på cirka tre timer.</p>
<p>Huset er i aluminium, hvor mindst 75 % er genanvendt. Lygten er IP68-tæt mod støv og vand, tåler fald fra 2 meter og virker fra -20 til +40 °C. Den vejer 197 g, er 15,9 cm lang, og du får op til syv års garanti, når du registrerer den.</p>
HTML,
			'good'    => [ 'Friluftsliv og jagt', 'Kraftigt lys med lang rækkevidde', 'Regn, kulde og hård brug' ],
			'less'    => [ 'Lavt budget', 'Den lille inderlomme' ],
		],
		[
			'ean'     => '5031863420617',
			'price'   => 702,
			'name'    => 'Lifesystems Intensity 545',
			'role'    => 'Bedst til turen',
			'reviews' => [],
			'verdict' => 'Let lygte på 113 g med op til 545 lumen, justerbar lyskegle og fem lystilstande inkl. blink.',
			'why'     => <<<'HTML'
<p>Lifesystems Intensity 545 er turlygten til camping, vandreturen og strømsvigtet derhjemme. Den vejer kun 113 g og måler 13,3 cm, så den fylder næsten intet i rygsækken – men giver alligevel op til 545 lumen og lyser op til 200 meter.</p>
<p>Du justerer lyskeglen efter behov og vælger mellem fem tilstande: lav, mellem, høj, turbo og blink. Nichia-LED'erne giver et klart, hvidt lys. På turbo holder batteriet halvanden time, og på lavt lys op til 16 timer.</p>
<p>Huset er i robust aluminium af flykvalitet, og lygten er IPX6-tæt, så et regnvejr ikke stopper den. Det indbyggede batteri lades via micro-USB fra en powerbank, en vægoplader eller computeren, og et indikatorlys viser, når det er fuldt opladet.</p>
HTML,
			'good'    => [ 'Camping og vandring', 'Dig, der vil spare på vægten', 'Opladning fra powerbank' ],
			'less'    => [ 'Meget lang rækkevidde', 'Lader med micro-USB, ikke USB-C' ],
		],
		[
			'ean'     => '0015286303301',
			'price'   => 577,
			'name'    => 'COAST XP6R',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Kun 9,5 cm lang, men med 400 lumen, 180 meters rækkevidde og skydefokus fra bredt lys til spot.',
			'why'     => <<<'HTML'
<p>COAST XP6R er lommelygten, du rent faktisk har på dig. Den er knap 10 cm lang og let, så den forsvinder i lommen eller tasken og er klar, når du får brug for den – på arbejdet, i bilen eller på tur.</p>
<p>Med 400 lumen lyser den op til 180 meter frem. Du vælger mellem lav, mellem og høj, og med skydefokus går du fra bredt lys til et samlet spot på et øjeblik. På højeste trin holder batteriet knap to timer, og på lavt lys op til 10 timer.</p>
<p>Det indbyggede Zithion-X-batteri lades op, så du slipper for at købe nye batterier. Løber det tørt, kan lygten også køre på et CR123-litiumbatteri, som du dog selv skal købe. Den er IP54-beskyttet mod støv og vandsprøjt.</p>
HTML,
			'good'    => [ 'Allround til lommen og tasken', 'Fornuftigt budget', 'Backup med CR123-batteri' ],
			'less'    => [ 'Kraftig regn og vand – den er kun stænktæt' ],
		],
		[
			'ean'     => '0038739530420',
			'price'   => 512,
			'name'    => 'Maglite Mini LED 2xAA',
			'role'    => 'Klassikeren',
			'reviews' => [],
			'verdict' => 'Den klassiske Mini Maglite i anodiseret aluminium – kører op til 24 timer på to AA-batterier.',
			'why'     => <<<'HTML'
<p>Mini Maglite LED er klassikeren, der hører hjemme i skuffen, handskerummet og nødkassen. Den kører på to almindelige AA-batterier, som følger med, og som du kan købe næsten overalt – en stor fordel, når strømmen er gået, eller turen er lang.</p>
<p>Lygten giver op til 63 lumen og lyser 63 meter frem. Der er fire lysindstillinger, blandt andet en sparetilstand, så batterierne holder op til 24 timer på lavt lys og 9,5 timer på højt.</p>
<p>Huset er i anodiseret aluminium og tåler både stød og vandsprøjt. Den er 17 cm lang, vejer ikke meget, og en bælteholder følger med, så du kan have den i bæltet.</p>
HTML,
			'good'    => [ 'Nødberedskab', 'Almindelige batterier', 'Handskerum og værktøjskasse' ],
			'less'    => [ 'Meget kraftigt lys' ],
		],
		[
			'ean'     => '9010109537421',
			'price'   => 449,
			'name'    => 'Nitecore EDC31',
			'role'    => 'Mest lys i lommen',
			'reviews' => [],
			'verdict' => 'Kompakt EDC-lygte med op til 3500 lumen og 380 meters rækkevidde – guidens kraftigste lygte.',
			'why'     => <<<'HTML'
<p>Nitecore EDC31 er til dig, der vil have rigtig meget lys med i lommen hver dag. EDC står for every day carry: Lygten er kompakt nok til jakken eller tasken, men giver op til 3500 lumen og når 380 meter frem. Det er mere lys og længere rækkevidde end de andre lygter i guiden.</p>
<p>Lyset kommer fra en UHi 20 MAX-diode med Nitecores LUMIN SHIELD, og lygten har Nitecores Rapid Lock. Strømmen kommer fra et indbygget batteri på 3800 mAh, så du slipper for at købe nye batterier.</p>
<p>Lygten er bygget som en taktisk lygte, så den passer lige så godt til vagt- og sikkerhedsarbejde som til aftenturen i skoven og bilens handskerum.</p>
HTML,
			'good'    => [ 'Hverdagslygte i lommen', 'Meget lys og lang rækkevidde', 'Vagt- og sikkerhedsarbejde' ],
			'less'    => [ 'Dig, der vil kunne skifte batteriet selv' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en lommelygte</h2><h3>Lumen</h3><p>Lumen er lysstyrken. 100–300 lumen er nok til at finde vej og læse kort. 500–1000 lumen lyser godt op på stier og i skoven. Over 1000 lumen er til lang rækkevidde og søgning.</p><h3>Genopladelig eller batterier</h3><p>Genopladelige lygter er billige i drift og kan ofte lades via USB. Lygter på almindelige batterier er praktiske i nødberedskabet og på lange ture uden strøm.</p><h3>Vandtæthed</h3><p>Kig efter IPX4 eller derover, hvis lygten skal bruges i regnvejr.</p><p>Se alle <a href="/udstyr/lommelygter/">lommelygter og lanterner</a> og <a href="/udstyr/pandelamper/">pandelamper</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvor mange lumen skal en god lommelygte have?', '500–1000 lumen er godt til de fleste formål udendørs.' ],
		[ 'Er genopladelige lommelygter bedst?', 'De er billige i drift. Til nødberedskab er en lygte på almindelige batterier dog praktisk.' ],
		[ 'Hvad betyder IPX4?', 'At lygten tåler vandsprøjt fra alle retninger, fx regn.' ],
	],
];
