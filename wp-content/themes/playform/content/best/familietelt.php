<?php
/**
 * Ny købsguide (5. nov. 2026). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'familietelt',
	'title'    => 'Familietelt: Vores bud på de 5 bedste telte til familieferien',
	'excerpt'  => 'Et godt familietelt har plads, ståhøjde og et rum til at samles. Her er vores bud på de 5 bedste familietelte fra danske butikker.',
	'more_cat' => 'telte',
	'intro'    => <<<'HTML'
<p>Den gode familieferie i telt starter med et telt, hvor alle kan være. Ståhøjde, et stort fællesrum og sovekabiner, så børnene kan sove i ro, gør hele forskellen.</p><p>Herunder er vores bud på de 5 bedste familietelte hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '7029981040778',
			'price'   => 3998,
			'name'    => 'Helsport Gimle Family 4+',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Rummeligt familietelt til 4–6 på kun ca. 7,8 kg – med fuld ståhøjde i midten.',
			'why'     => <<<'HTML'
<p>Helsport Gimle Family 4+ er til familien, der vil have plads uden at slæbe på et tungt telt. Med omkring 7,8 kg er det en letvægtsmodel blandt de rummelige familietelte, så det er nemmere at have med på tur end de fleste telte i samme størrelse.</p>
<p>Der er plads til 4–6 personer, og inderteltet måler 210 × 240 cm, så der er god plads til liggeunderlag og soveposer til hele familien. I midten af teltet er der fuld ståhøjde, så I kan klæde om og pakke tasker uden at sidde på knæ.</p>
HTML,
			'good'    => [ 'Familier på tur', 'Lav vægt for størrelsen', 'Dig, der vil kunne stå oprejst' ],
			'less'    => [ 'Lavt budget' ],
		],
		[
			'ean'     => '0841487153786',
			'price'   => 5406,
			'name'    => 'Big Agnes Bunk House 6',
			'role'    => 'Mest plads',
			'reviews' => [],
			'verdict' => 'Familietelt med en stor frontapsis, der kan rulles helt op – jeres overdækkede stue på campingpladsen.',
			'why'     => <<<'HTML'
<p>Big Agnes Bunk House 6 er til familien, der bruger teltet som base i flere dage ad gangen. Ud over soveområdet har det en ekstra rummelig frontapsis med langt mere overdækket plads end et almindeligt kuppeltelt. Her er der plads til campingmøbler, køkkengrej og våde støvler, så sovekabinen forbliver ren og ryddelig.</p>
<p>På varme dage ruller I fronten helt op, så apsissen bliver en forlængelse af pladsen udenfor. Når vejret skifter, lukker I den, og så giver den læ mod regn og blæst. Der er god ståhøjde, så både børn og voksne kan bevæge sig frit.</p>
<p>Store mesh-paneler i inderteltet, højt placerede ventiler og dobbeltvæggen giver et behageligt indeklima, selv når hele familien sover der flere nætter i træk.</p>
HTML,
			'good'    => [ 'Familier på lange campingophold', 'Spisning og ophold i ly', 'Børnefamilier, der vil have orden' ],
			'less'    => [ 'Ture, hvor teltet skal bæres' ],
		],
		[
			'ean'     => '5709388159182',
			'price'   => 8636,
			'name'    => 'Outwell Florida 5 lufttelt',
			'role'    => 'Hurtigst at slå op',
			'reviews' => [],
			'verdict' => 'Lufttelt til fem med mørklagte soverum, indbygget dæmpbart lys og 6.000 mm vandsøjle.',
			'why'     => <<<'HTML'
<p>Outwell Florida 5 er lufteltet til familien, der vil have komfort og en hurtig opsætning. Luftkanalerne pumpes op hver for sig gennem ventiler udvendigt, og pumpen følger med. Med Dual Front-systemet kan fronten lynes af, så I får et åbent fortelt på varme dage – eller et lukket telt med tre zoner, når vejret skifter.</p>
<p>Dugen er Outtex 6000 Express RS: et let, rivefast ripstop-stof med 6.000 mm vandsøjle og tapede sømme. Teltet er bygget til at klare vindstyrke 9. Soverummene er 230 cm dybe med fuld ståhøjde og mørklagte sider, så børnene sover, selvom solen står op. Det indbyggede, dæmpbare LED-lys drives af en USB-C-enhed.</p>
<p>Magnetdøre gør det muligt at gå ud og ind uden lynlåslarm om natten, og den fastsyede bund holder fugt, skidt og insekter ude.</p>
HTML,
			'good'    => [ 'Hurtig opsætning', 'Børnefamilier, der vil sove længe', 'Blæsende campingpladser' ],
			'less'    => [ 'Lavt budget', 'Stort og tungt – ikke til ture, hvor teltet skal bæres' ],
		],
		[
			'ean'     => '5703384087715',
			'price'   => 2738,
			'name'    => 'Grand Canyon Helena 6',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'To adskilte sovekabiner og et opholdsrum med plads til bord, stole og cykler – til en lav pris.',
			'why'     => <<<'HTML'
<p>Grand Canyon Helena 6 er familieteltet til jer, der vil have plads til alle uden at bruge hele feriebudgettet. Med to sovekabiner kan forældre og børn sove hver for sig, og det store opholdsrum har plads til spisebord, stole og cykler. Teltet er også oplagt i haven, når der kommer gæster, der skal overnatte.</p>
<p>Vinduerne giver lys og udsigt, og markiserne kan trækkes for, når I vil have skygge eller lidt privatliv. Store ventilationsåbninger sørger for frisk luft, og myggenetsdøren holder insekterne ude.</p>
<p>Fordi inder- og ydertelt rejses samtidig, bliver soverummet ikke vådt, hvis I ankommer i regnvejr. Grand Canyon er Nordisks prisvenlige mærke, og teltet er lavet til campingferien og turen i ny og næ.</p>
HTML,
			'good'    => [ 'Familiens første telt', 'Sommerferie i bil', 'Gæster i haven' ],
			'less'    => [ 'Hyppig eller hård brug' ],
		],
		[
			'ean'     => '5709388144546',
			'price'   => 1736,
			'name'    => 'Easy Camp Orsa Cabin',
			'role'    => 'Bedst til store familier',
			'reviews' => [],
			'verdict' => 'Kabinetelt til op til 8 personer med kraftige stålstænger, 3.000 mm vandsøjle og opsætning i én arbejdsgang.',
			'why'     => <<<'HTML'
<p>Easy Camp Orsa Cabin er til den store familie eller vennegruppen, der vil have masser af plads uden at betale meget. Det rummelige kabinetelt måler 270 × 365 cm og har plads til op til otte personer, så det passer til både sommerferien, weekendturen og længere ophold.</p>
<p>Stængerne er EnduraMax-stål på 19, 22 og 25 mm og giver en stabil ramme. Oversejlet er WeatherGuard 3000 i PU-belagt polyester med tapede sømme og 3.000 mm vandsøjle, og den fastsyede bund i polyethylen holder fugten fra jorden ude. Teltet rejses i én arbejdsgang, så I hurtigt er klar.</p>
<p>Mesh i døren og overdækkede ventiler langs siderne giver god luft. Seks lommer og ophængningspunkter foran, bagpå og på midterstangen giver plads til lys og udstyr. Det vejer ca. 9,4 kg.</p>
HTML,
			'good'    => [ 'Store familier', 'Lavt budget', 'Grupper af venner' ],
			'less'    => [ 'Lange vandreture' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du et familietelt</h2><h3>Antal personer</h3><p>Vælg et telt til lidt flere personer, end I er. Så er der plads til tasker og legetøj.</p><h3>Sovekabiner</h3><p>To sovekabiner giver voksne og børn hvert sit rum. Mørklagte kabiner hjælper børnene med at sove, når solen står tidligt op.</p><h3>Vandsøjle</h3>
<p>Vandsøjlen fortæller, hvor meget vandtryk dugen kan holde til. 2000–3000 mm er nok til sommerbrug, mens 3000 mm og derover er godt til det danske vejr og ture i fjeldet.</p>
<h3>Vægt og pakstørrelse</h3>
<p>Skal du bære teltet, betyder hvert kilo noget. Holder bilen ved siden af, kan du vælge efter plads og komfort i stedet.</p>
<h3>Apsis og indgange</h3>
<p>Apsis er det overdækkede område uden for indertelten, hvor sko og oppakning kan ligge tørt. To indgange gør det lettere at komme ud om natten uden at kravle over hinanden.</p><p>Se også vores guides til <a href="/2-personers-telt/">2 personers telt</a>, <a href="/4-personers-telt/">4 personers telt</a>, <a href="/familietelt/">familietelt</a> og <a href="/8-personers-telt/">8 personers telt</a>, og se alle <a href="/camping/telte/">telte</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvor stort et familietelt skal man have?', 'Vælg et telt til 1–2 personer mere end jer, så der er plads til bagage.' ],
		[ 'Er et lufttelt bedre til familier?', 'Det er hurtigere at slå op, men tungere og dyrere. Et telt med stænger er lettere og billigere.' ],
		[ 'Hvor meget koster et godt familietelt?', 'Fra omkring 2.000 kr. for et godt telt til prisen og op til 8.000–10.000 kr. for lufttelte og bomuldstelte.' ],
	],
];
