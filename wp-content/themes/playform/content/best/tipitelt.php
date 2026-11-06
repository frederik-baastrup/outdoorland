<?php
/**
 * Ny købsguide (5. nov. 2026). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'tipitelt',
	'title'    => 'Tipitelt: Vores bud på de 5 bedste tipitelte og lavvuer',
	'excerpt'  => 'Tipitelte og lavvuer er hurtige at slå op og giver ét stort rum med plads til ildsted. Her er vores bud på de 5 bedste fra danske butikker.',
	'more_cat' => 'telte',
	'intro'    => <<<'HTML'
<p>Tipiteltet – eller lavvuen, som den nordiske udgave hedder – er en af de ældste teltformer. Én midterstang og pløkker hele vejen rundt, og så står teltet. Det runde rum giver plads til mange, og i mange modeller kan der fyres i en teltovn.</p><p>Herunder er vores bud på de 5 bedste tipitelte hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '7340001627411',
			'price'   => 10973,
			'name'    => 'Tentipi Onyx 7 CP',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Helårstipi med 4,6 meter grundplan, 270 cm loftshøjde og åndbar dug i bomuld og polyester.',
			'why'     => <<<'HTML'
<p>Tentipi Onyx 7 CP er til jer, der vil bo i naturen – hele året og i al slags vejr. Den klassiske nordiske tipiform rejses om én central stang, og med et grundplan på 4,6 meter og 270 cm til toppen kan I stå oprejst og samles om maden, når vejret driver jer indenfor. Der er plads til syv sovende, men med fire til fem får I god plads til ophold og udstyr.</p>
<p>Dugen er Tentipis Cotpolmex Comfort i bomuld og polyester, der ånder og giver et behageligt indeklima. Ventilationshætten i toppen lader dig regulere luften, og døren har myggenet til de lyse sommernætter.</p>
<p>Barduner og pløkker følger med, mens gulv og indertelt købes separat, så I kan bygge teltet op efter behov. Pakket vejer det 13 kg og måler 62 x 26 cm.</p>
HTML,
			'good'    => [ 'Brug året rundt', 'Familier og grupper på 4-5', 'Basecamp og lange ophold' ],
			'less'    => [ 'Lavt budget', 'Dig, der vil have gulv med fra start' ],
		],
		[
			'ean'     => '5703384023959',
			'price'   => 5256,
			'name'    => 'Nordisk Alfheim 12.6 Technical Cotton',
			'role'    => 'Bedste bomuldstipi',
			'reviews' => [],
			'verdict' => 'Lavvu i Nordisks Technical Cotton med 12,6 m² grundareal, 275 cm højde og minimal kondens – sommer som vinter.',
			'why'     => <<<'HTML'
<p>Nordisk Alfheim 12.6 er den rummelige lavvu til familien eller gruppen på op til seks, der vil have et telt til både varme sommerture og krævende vinterbrug. Grundarealet er 12,6 m², diameteren 400 cm og højden 275 cm, så der er god plads til både at sove og hygge.</p>
<p>Dugen er Technical Cotton, en blanding af 65 % polyester og 35 % bomuld. Den giver et langt bedre indeklima og meget mindre kondens end et traditionelt telt, og den tåler solen bedre end nylon. Toppen kan reguleres indefra og har myggenet, og alle bardun- og pløkfæster er ekstra forstærkede.</p>
<p>Teltet rejses hurtigt om én midterstang i aluminium, og døren har en omvendt T-lynlås med myggenet. Du kan tilkøbe Zip-In Floor og en sovekabine. Perforerede V-pløkke i aluminium bider godt i blødt underlag.</p>
HTML,
			'good'    => [ 'Glamping og lange ophold', 'Godt indeklima uden kondens', 'Både sommer- og vinterture' ],
			'less'    => [ 'Dig, der skal bære teltet langt – det vejer 13,4 kg' ],
		],
		[
			'ean'     => '5703384087746',
			'price'   => 2279,
			'name'    => 'Grand Canyon Indiana 8',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Klokkeformet tipitelt til op til 8 personer med 3.000 mm vandsøjle – fra Nordisks prisvenlige mærke Grand Canyon.',
			'why'     => <<<'HTML'
<p>Grand Canyon Indiana 8 er til dig, der vil have masser af plads uden at betale for et bomuldstelt. Det er et klokkeformet tipitelt med plads til op til otte personer, så det passer til familien på weekendcamping eller som ekstra soveplads til gæsterne derhjemme og i sommerhuset.</p>
<p>Oversejlet har en vandsøjle på 3.000 mm, så I kan sove trygt, selv når sommervejret skifter.</p>
<p>Grand Canyon er Nordisks budgetmærke, så du får plads til mange for pengene.</p>
HTML,
			'good'    => [ 'Weekendcamping med familien', 'Ekstra soveplads til gæster', 'Fornuftigt budget' ],
			'less'    => [ 'Hårdt vejr og vintercamping' ],
		],
		[
			'ean'     => '7029981040433',
			'price'   => 1800,
			'name'    => 'Helsport Pasvik 6-8',
			'role'    => 'Bedst til lejrbål',
			'reviews' => [],
			'verdict' => 'Helsports letteste lavvu: kun 4,72 kg, flammehæmmende dug og plads til Helsports brændeovn eller brænder.',
			'why'     => <<<'HTML'
<p>Helsport Pasvik 6-8 er lavvuen til jer, der vil have plads til hele gruppen uden at slæbe et tungt telt. Den vejer kun 4,72 kg og pakkes ned til 65 x 22 cm, så den kan bæres i rygsækken på lange ture.</p>
<p>Dugen er flammehæmmende, så du kan fyre op i Helsports lavvu-brændeovn eller bruge en brænder indenfor – oplagt til kolde aftener og efterårsture. Indeklimaet styres med justerbare ventiler, Helsports AirFlow II-ventilation og en top hat, som du kan regulere indefra. Den store, brede indgang har fuldt myggenet.</p>
<p>Snorene kan rulles op og holdes på plads med elastik. Stangen følger med, mens bund skal købes separat, hvis du vil have en.</p>
HTML,
			'good'    => [ 'Spejdere og grupper', 'Ture med brændeovn', 'Lange ture med teltet på ryggen' ],
			'less'    => [ 'Dig, der vil have fast bund fra start' ],
		],
		[
			'ean'     => '5709388144560',
			'price'   => 1344,
			'name'    => 'Easy Camp Rands Tipi',
			'role'    => 'Billigst',
			'reviews' => [],
			'verdict' => 'Rummeligt tipitelt til op til 8 personer fra Easy Camp – klassisk form og moderne materialer til en lav pris.',
			'why'     => <<<'HTML'
<p>Easy Camp Rands Tipi er den billige vej ind i tipiteltets verden. Det kombinerer den klassiske tipiform med moderne materialer og gennemtænkte detaljer, så det fungerer til både campingturen, glamping i haven og andre eventyr udendørs.</p>
<p>Der er plads til op til otte personer, så hele familien eller vennegruppen kan sove under samme dug.</p>
HTML,
			'good'    => [ 'Lavt budget', 'Festival og havecamping', 'Glamping' ],
			'less'    => [ 'Vintercamping' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du et tipitelt</h2><h3>Med eller uden bund</h3><p>Uden bund kan du have ildsted eller teltovn i midten. Med bund er teltet lunere og holder insekter ude.</p><h3>Bomuld eller polyester</h3><p>Bomuld ånder og tåler gnister bedre, men vejer mere. Polyester og nylon er lette og tørrer hurtigt.</p><p>Se også vores guides til <a href="/2-personers-telt/">2 personers telt</a>, <a href="/4-personers-telt/">4 personers telt</a>, <a href="/familietelt/">familietelt</a> og <a href="/8-personers-telt/">8 personers telt</a>, og se alle <a href="/camping/telte/">telte</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er forskellen på en tipi og en lavvu?', 'En lavvu er den nordiske, samiske udgave af tipiteltet. Formen er den samme: én midterstang og pløkker rundt i kanten.' ],
		[ 'Kan man fyre i et tipitelt?', 'I nogle modeller med røghætte og brandsikker dug kan du bruge en teltovn. Følg altid producentens anvisninger.' ],
		[ 'Er et tipitelt let at slå op?', 'Ja, de fleste står med én stang og pløkker rundt i kanten.' ],
	],
];
