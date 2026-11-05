<?php
/**
 * Omskrevet fra det gamle outdoorland.dk (samme adresse). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'vandrerygsaek',
	'title'    => 'Vandrerygsæk: Vores bud på de 5 bedste til lange vandreture',
	'excerpt'  => 'Den rigtige vandrerygsæk gør turen lettere. Her er vores bud på de 5 bedste vandrerygsække fra danske butikker – fra 45 til 75 liter.',
	'more_cat' => 'vandrerygsaekke',
	'intro'    => <<<'HTML'
<p>På en vandretur over flere dage bærer du alt på ryggen: telt, sovepose, mad og tøj. En god vandrerygsæk flytter vægten ned på hofterne, så skuldrene ikke brænder efter de første kilometer.</p><p>Herunder er vores bud på de 5 bedste vandrerygsække hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '7323451017537',
			'price'   => 2416,
			'name'    => 'Fjällräven Kajka 65',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Opdateret udgave af en af de mest anerkendte vandrerygsække til krævende brug.',
			'why'     => <<<'HTML'
<p>Fjällräven Kajka-serien er blandt de mest anerkendte vandrerygsække overhovedet og rost af både brugere og fagpresse. Kajka 65 er den opdaterede udgave til de krævende ture.</p>
HTML,
			'good'    => [ 'Lange ture med tung oppakning', 'Mange års brug' ],
			'less'    => [ 'Lette dagture' ],
		],
		[
			'ean'     => '0843820108866',
			'price'   => 1441,
			'name'    => 'Osprey Aether 55',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Vandrerygsæk på 55 liter fra amerikanske Osprey, der er specialiseret i vandrerygsække.',
			'why'     => <<<'HTML'
<p>Osprey er et af de mærker, der har specialiseret sig i vandre- og turrygsække og skiller sig ud med deres tilgang til produktudvikling og materialer. Aether 55 er en god størrelse til ture på 3–5 dage.</p>
HTML,
			'good'    => [ 'Ture på 3–5 dage', 'God pasform' ],
			'less'    => [ 'Ekspeditioner' ],
		],
		[
			'ean'     => '7045952820651',
			'price'   => 1320,
			'name'    => 'Lundhags Padje Light 60 L',
			'role'    => 'Lettest',
			'reviews' => [],
			'verdict' => 'Ekstremt let vandrerygsæk på 60 liter fra Lundhags’ letvægtsserie.',
			'why'     => <<<'HTML'
<p>Padje Light 60 L er en del af Lundhags’ letvægtsserie, hvor kunsten er at holde vægten så langt nede som muligt uden at gå på kompromis med funktionen.</p>
HTML,
			'good'    => [ 'Letvægtsvandring', 'Lange ture' ],
			'less'    => [ 'Meget tung oppakning' ],
		],
		[
			'ean'     => '7323451155642',
			'price'   => 2102,
			'name'    => 'Fjällräven Kajka X-Lätt 45',
			'role'    => 'Bedste lette Kajka',
			'reviews' => [],
			'verdict' => 'Letvægtsorienteret trekkingrygsæk på 45 liter med balance mellem slidstyrke og lav vægt.',
			'why'     => <<<'HTML'
<p>Kajka X-Lätt 45 er en letvægtsudgave af Kajka, der balancerer slidstyrke, funktion og lav vægt uden at gå på kompromis med komforten.</p>
HTML,
			'good'    => [ 'Ture på 2–4 dage', 'Let oppakning' ],
			'less'    => [ 'Vinterture' ],
		],
		[
			'ean'     => '7045952820613',
			'price'   => 2200,
			'name'    => 'Lundhags Saruk Pro 75 L',
			'role'    => 'Mest plads',
			'reviews' => [],
			'verdict' => 'Stor vandrerygsæk på 75 liter fra Lundhags.',
			'why'     => <<<'HTML'
<p>Saruk Pro 75 L har plads til den lange tur eller vinterturen, hvor der skal mere udstyr med.</p>
HTML,
			'good'    => [ 'Lange ture og vinter', 'Meget udstyr' ],
			'less'    => [ 'Korte ture' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en vandrerygsæk</h2><h3>Størrelse</h3><p>30–45 liter rækker til ture med overnatning i hytter. 50–65 liter er standard til ture i telt på 3–7 dage. 70 liter og derover er til lange ture, vinter og ekspeditioner.</p><h3>Pasform</h3><p>Rygsækken skal passe til din rygs længde. Mange modeller fås i flere størrelser eller har justerbar ryg. Hoftebæltet skal sidde på hoftekammen og bære det meste af vægten.</p><h3>Prøv med vægt</h3><p>Prøv rygsækken med 10–15 kg i, før du tager på tur, og justér skulderstropper, hoftebælte og load lifters.</p><p>Se alle <a href="/rygsaekke/vandrerygsaekke/">vandrerygsække</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvor stor skal en vandrerygsæk være?', '50–65 liter til ture i telt på 3–7 dage. Mindre, hvis du sover i hytter.' ],
		[ 'Hvor meget må en vandrerygsæk veje pakket?', 'En tommelfingerregel er højst 20–25 % af din kropsvægt.' ],
		[ 'Hvad er load lifters?', 'Små stropper fra skulderstropperne til rygsækkens top, der trækker vægten ind mod kroppen.' ],
	],
];
