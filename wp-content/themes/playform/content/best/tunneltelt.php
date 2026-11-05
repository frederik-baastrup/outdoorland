<?php
/**
 * Ny købsguide (5. nov. 2026). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'tunneltelt',
	'title'    => 'Tunneltelt: Vores bud på de 5 bedste – meget plads for vægten',
	'excerpt'  => 'Tunnelteltet giver mest plads for vægten. Her er vores bud på de 5 bedste tunneltelte fra danske butikker.',
	'more_cat' => 'telte',
	'intro'    => <<<'HTML'
<p>Et tunneltelt har parallelle buer, der danner en tunnel. Det giver meget indvendig plads og høje vægge i forhold til vægten – derfor er tunnelteltet populært på både vandreture og campingferien.</p><p>Herunder er vores bud på de 5 bedste tunneltelte hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '5703384121488',
			'price'   => 3229,
			'name'    => 'Nordisk Oppland 4 PU',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Populært tunneltelt fra Nordisk med øget vinkel på tunnelbuen for mere plads.',
			'why'     => <<<'HTML'
<p>Oppland-serien er opdateret, så vinklen på tunnelbuen er øget markant. Det giver mere plads i teltet – og Nordisk er et af de mest kendte danske teltmærker.</p>
HTML,
			'good'    => [ 'Vandring og kano for fire', 'Plads for vægten' ],
			'less'    => [ 'Lavt budget' ],
		],
		[
			'ean'     => '5709388157140',
			'price'   => 1442,
			'name'    => 'Easy Camp Pasvik 4',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Teknisk tunneltelt til fire aktive campister.',
			'why'     => <<<'HTML'
<p>Pasvik 4 er et teknisk tunneltelt til cykel- og vandreture for fire, der giver meget plads for pengene.</p>
HTML,
			'good'    => [ 'Aktive familier', 'Fornuftigt budget' ],
			'less'    => [ 'Hårdt underlag' ],
		],
		[
			'ean'     => '5709388157133',
			'price'   => 1254,
			'name'    => 'Easy Camp Pasvik 3',
			'role'    => 'Bedst til tre',
			'reviews' => [],
			'verdict' => 'Teknisk optimeret tunneltelt til tre.',
			'why'     => <<<'HTML'
<p>Pasvik 3 er den lidt mindre udgave til tre personer – god til par, der vil have plads til oppakningen.</p>
HTML,
			'good'    => [ 'Par og små familier', 'Cykelture' ],
			'less'    => [ 'Hårdt underlag' ],
		],
		[
			'ean'     => '0197642979594',
			'price'   => 3899,
			'name'    => 'The North Face Wawona 6P',
			'role'    => 'Bedst til familien',
			'reviews' => [],
			'verdict' => 'Tunnellignende familietelt med stort overdækket frontområde.',
			'why'     => <<<'HTML'
<p>Wawona 6P har en tunnellignende konstruktion med et stort frontområde, der fungerer som overdækket opholdsrum for hele familien.</p>
HTML,
			'good'    => [ 'Familiecamping', 'Opholdsrum' ],
			'less'    => [ 'Ture, hvor teltet skal bæres' ],
		],
		[
			'ean'     => '5902194521635',
			'price'   => 1036,
			'name'    => 'Bushmen Core-Tent Lodger',
			'role'    => 'Mest alsidigt',
			'reviews' => [],
			'verdict' => 'Tarp-kompatibelt 2-personers tunneltelt i insektnet med god ventilation.',
			'why'     => <<<'HTML'
<p>Core-Tent Lodger er et 2-personers tunneltelt af insektnet, der er lavet til at blive brugt under en tarp. Det giver stor alsidighed: luftigt på varme nætter og beskyttet under tarpen, når det regner.</p>
HTML,
			'good'    => [ 'Bushcraft med tarp', 'Varme sommernætter' ],
			'less'    => [ 'Dem uden tarp' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du et tunneltelt</h2><p>Tunneltelte skal pløkkes ud for at stå, og de skal helst slås op med enden mod vinden. Til gengæld giver de mest plads for vægten.</p><h3>Vandsøjle</h3>
<p>Vandsøjlen fortæller, hvor meget vandtryk dugen kan holde til. 2000–3000 mm er nok til sommerbrug, mens 3000 mm og derover er godt til det danske vejr og ture i fjeldet.</p>
<h3>Vægt og pakstørrelse</h3>
<p>Skal du bære teltet, betyder hvert kilo noget. Holder bilen ved siden af, kan du vælge efter plads og komfort i stedet.</p>
<h3>Apsis og indgange</h3>
<p>Apsis er det overdækkede område uden for indertelten, hvor sko og oppakning kan ligge tørt. To indgange gør det lettere at komme ud om natten uden at kravle over hinanden.</p><p>Se også vores guides til <a href="/2-personers-telt/">2 personers telt</a>, <a href="/4-personers-telt/">4 personers telt</a>, <a href="/familietelt/">familietelt</a> og <a href="/8-personers-telt/">8 personers telt</a>, og se alle <a href="/camping/telte/">telte</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er et tunneltelt?', 'Et telt med parallelle buer, der danner en tunnel. Det skal pløkkes ud for at stå.' ],
		[ 'Står et tunneltelt godt i vind?', 'Ja, når enden vender mod vinden, og teltet er godt bardunet.' ],
		[ 'Er et tunneltelt godt til familier?', 'Ja, mange familietelte er tunneltelte, fordi formen giver plads til flere sovekabiner og et fællesrum.' ],
	],
];
