<?php
/**
 * Omskrevet fra det gamle outdoorland.dk (samme adresse). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'lommelygte',
	'title'    => 'Lommelygte: Vores bud på de 5 bedste kraftige lommelygter',
	'excerpt'  => 'En god lommelygte er lys i mørket på turen, i bilen og derhjemme. Her er vores bud på de 5 bedste kraftige lommelygter fra danske butikker.',
	'more_cat' => 'lommelygter',
	'intro'    => <<<'HTML'
<p>En god lommelygte er en af de ting, du først savner, når den mangler: når strømmen går, når bilen skal tjekkes i mørke, eller når du skal finde vej tilbage til teltet. Moderne LED-lygter er små, kraftige og ofte genopladelige.</p><p>Herunder er vores bud på de 5 bedste lommelygter hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '4058205037372',
			'price'   => 953,
			'name'    => 'LED Lenser P7R',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Kraftfuld og elegant lommelygte til friluftsliv, jagt og professionelt brug.',
			'why'     => <<<'HTML'
<p>LED Lenser P7R er lavet til dig, der vil have høj ydelse, solidt design og fuld kontrol over lyset. Den er genopladelig og bruges både i friluftslivet, på jagt og professionelt.</p>
HTML,
			'good'    => [ 'Friluftsliv og jagt', 'Kraftigt lys' ],
			'less'    => [ 'Lavt budget' ],
		],
		[
			'ean'     => '5031863420617',
			'price'   => 702,
			'name'    => 'Lifesystems Intensity 545',
			'role'    => 'Bedst til turen',
			'reviews' => [],
			'verdict' => 'Genopladelig lommelygte i aluminium med op til 545 lumen og 5 lystilstande.',
			'why'     => <<<'HTML'
<p>Intensity 545 er en genopladelig lygte i aluminium med op til 545 lumen og 5 lystilstande, så du kan vælge mellem kraftigt lys og lang brændetid.</p>
HTML,
			'good'    => [ 'Camping og vandring', 'Genopladelig' ],
			'less'    => [ 'Meget lang rækkevidde' ],
		],
		[
			'ean'     => '4058205009911',
			'price'   => 695,
			'name'    => 'Ledlenser P14',
			'role'    => 'Bedst til lang rækkevidde',
			'reviews' => [],
			'verdict' => 'Stor og kraftig lommelygte fra Ledlenser.',
			'why'     => <<<'HTML'
<p>Ledlenser P14 er en af de større lygter i P-serien. Den ligger godt i hånden og er god, når du skal lyse langt – i skoven, på marken eller ved bilen.</p>
HTML,
			'good'    => [ 'Lang rækkevidde', 'Bil og hjem' ],
			'less'    => [ 'Lommen' ],
		],
		[
			'ean'     => '0015286303301',
			'price'   => 577,
			'name'    => 'COAST XP6R',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Genopladelig lommelygte fra COAST.',
			'why'     => <<<'HTML'
<p>COAST XP6R er en genopladelig lommelygte til en fornuftig pris – en god allround-lygte til hjem, bil og tur.</p>
HTML,
			'good'    => [ 'Allround', 'Fornuftigt budget' ],
			'less'    => [ 'Professionelt brug' ],
		],
		[
			'ean'     => '0038739530420',
			'price'   => 512,
			'name'    => 'Maglite Mini LED 2xAA',
			'role'    => 'Klassikeren',
			'reviews' => [],
			'verdict' => 'Den klassiske Maglite i LED-udgave på to AA-batterier.',
			'why'     => <<<'HTML'
<p>Maglite Mini er en klassiker. LED-udgaven kører på to almindelige AA-batterier, som du kan købe overalt – praktisk i nødsituationer og på lange ture.</p>
HTML,
			'good'    => [ 'Nødberedskab', 'Almindelige batterier' ],
			'less'    => [ 'Meget kraftigt lys' ],
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
