<?php
/**
 * Købsguide: vildtkamera. Fakta kun fra butikkernes produktdata.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'vildtkamera',
	'keyword'  => 'vildtkamera',
	'title'    => 'Vildtkamera: Vores bud på de 5 bedste vildtkameraer til jagt og overvågning',
	'excerpt'  => 'Se, hvad der færdes i skoven, når du ikke er der. Her er vores bud på de 5 bedste vildtkameraer fra de butikker, vi samarbejder med – fra enkle modeller til 4G-kameraer med app.',
	'more_cat' => 'jagtoptik',
	'intro'    => <<<'HTML'
<p>Et vildtkamera giver dig indblik i, hvad der sker i skoven, ved foderpladsen og på markkanten, hver dag og hver nat. Du kan se, hvilke dyr der kommer, hvornår de kommer, og om der er andre besøgende, end du havde regnet med. Mange bruger kameraerne til jagt, nogle til naturobservation og andre til at holde øje med ejendommen.</p><p>Her er fem kameraer, der dækker de forskellige behov: det enkle kamera uden abonnement, kameraet med solpanel og de mobile 4G-kameraer, der sender billederne direkte til din telefon.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '6974004642686',
			'price'   => 1695,
			'name'    => 'Hikmicro M15 4G',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Robust 4G-vildtkamera med app, hurtig bevægelsessensor og skarpe billeder og videoer dag og nat.',
			'why'     => <<<'HTML'
<p>Hikmicro M15 4G er et robust mobilt vildtkamera, som sender dine billeder direkte til telefonen, så du ikke skal gå ud i skoven for at hente hukommelseskortet. Du følger med via en app.</p>
<p>Kameraet har en lynhurtig PIR-bevægelsessensor, så det ikke misser dyret, der springer forbi. Om dagen tager det skarpe billeder og videoklip, og om natten får du meget klare sort-hvide billeder og videoer.</p>
HTML,
			'good'    => [ 'Dig, der vil have billeder direkte på telefonen', 'Foderplads og vildtbane', 'Hurtig udløsning' ],
			'less'    => [ 'Dig, der ikke vil have SIM-kort og mobildækning' ],
		],
		[
			'ean'     => '5744006970657',
			'price'   => 399,
			'name'    => 'Hunters Choice Basic Trailcam',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Enkelt og driftssikkert vildtkamera til billeder og video dag og nat – uden app, SIM-kort eller abonnement.',
			'why'     => <<<'HTML'
<p>Hunters Choice Basic Trailcam er den enkle vej ind i vildtkameraernes verden. Det er et driftssikkert kamera, der tager billeder og video både dag og nat, og du behøver hverken app, SIM-kort eller abonnement.</p>
<p>Det er et godt valg til dig, der vil prøve, hvad et vildtkamera kan, eller som vil have flere kameraer ud i terrænet uden at bruge for mange penge.</p>
HTML,
			'good'    => [ 'Begyndere', 'Flere kameraer i terrænet', 'Ingen abonnement' ],
			'less'    => [ 'Dig, der vil have billeder direkte i telefonen' ],
		],
		[
			'ean'     => '8718127036124',
			'price'   => 655,
			'name'    => 'Stealth Gear Racoon Solar 4K',
			'role'    => 'Bedst med solpanel',
			'reviews' => [],
			'verdict' => '4K-video, kraftfuldt nattesyn og indbygget solpanel, så kameraet altid er klar.',
			'why'     => <<<'HTML'
<p>Stealth Gear Racoon Solar 4K er kameraet til dig, der vil ud og glemme det i lang tid. Det har indbygget solpanel, så det er klar, selv når du ikke har været forbi længe, og du slipper for at skifte batterier så ofte.</p>
<p>Videoen optages i 4K Ultra HD, og kameraet har kraftfuldt nattesyn. Det passer til dig, der vil observere dyrelivet eller holde øje med din ejendom.</p>
HTML,
			'good'    => [ '4K-video', 'Længere tid i marken', 'Observation af dyreliv og ejendom' ],
			'less'    => [ 'Steder, hvor solen aldrig når ind' ],
		],
		[
			'ean'     => '74166510',
			'price'   => 799,
			'name'    => 'KeepGuard KW571',
			'role'    => 'Bedst til billedkvalitet',
			'reviews' => [],
			'verdict' => 'Vildtkamera med 30 megapixel og hurtig reaktionstid til dig, der kræver driftssikkerhed og højopløselige billeder.',
			'why'     => <<<'HTML'
<p>KeepGuard KW571 er til dig, der stiller krav om driftssikkerhed og gode billeder i høj opløsning. Kameraet har en opløsning på 30 megapixel og en hurtig reaktionstid, så du får billedet, mens dyret stadig er i feltet.</p>
<p>Du kan også finde det under navnet KG571, men det er den samme model.</p>
HTML,
			'good'    => [ 'Billeder i høj opløsning', 'Hurtig reaktion', 'Fast opsætning i marken' ],
			'less'    => [ 'Dig, der vil have billederne direkte på telefonen' ],
		],
		[
			'ean'     => '34119549',
			'price'   => 3195,
			'name'    => 'Spromise S688 4G med GPS',
			'role'    => 'Mest avanceret',
			'reviews' => [],
			'verdict' => '4G-vildtkamera med sort IR (940 nm), GPS-position og robust hus af ABS-materiale.',
			'why'     => <<<'HTML'
<p>Spromise S688 er det mest avancerede kamera i guiden. Det har sort IR (940 nm), så kameraet ikke afslører sig med synligt flash, og et 4G-sendemodul, så billederne kommer direkte til dig.</p>
<p>GPS-funktionen viser præcist, hvor kameraet er, hvilket er et godt værn mod tyveri. Huset er lavet af robust ABS-materiale.</p>
HTML,
			'good'    => [ 'Kameraer, der skal sikres mod tyveri', 'Observation af dyr og ejendom', 'Dig, der vil have det hele' ],
			'less'    => [ 'Mindre budget' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du et vildtkamera</h2><h3>Mobilt eller med hukommelseskort</h3><p>Et kamera med hukommelseskort er enkelt og uden abonnement, men du skal ud og hente billederne. Et 4G-kamera sender billederne til din telefon, men kræver SIM-kort og dækning.</p><h3>Nattesyn</h3><p>Sort IR (ca. 940 nm) afslører ikke kameraet med synligt lys og skræmmer ikke dyrene. Glødende IR giver ofte længere rækkevidde, men er synlig for nogle dyr.</p><h3>Udløsningstid</h3><p>Jo hurtigere kameraet reagerer, jo større er chancen for at få dyret med på billedet. Kig efter en kort udløsningstid.</p><h3>Strøm</h3><p>Batterier, genopladelige batterier og solpanel er mulighederne. Et solpanel er en fordel, når kameraet skal stå ude længe.</p><h3>Placering</h3><p>Sæt kameraet i cirka brysthøjde og undgå, at solen skinner direkte ind i linsen. Fastgør det, så det ikke kan tages let, og husk reglerne om overvågning og tilladelse fra grundejeren.</p><p>Se alle <a href="/jagt/jagtoptik/">vildtkameraer og jagtoptik</a>.</p>
HTML,
	'faq'      => [
		[ 'Skal et vildtkamera have SIM-kort?', 'Nej, ikke altid. Enkle kameraer gemmer billederne på et hukommelseskort. Kun 4G-kameraer bruger SIM-kort til at sende billederne.' ],
		[ 'Hvad er forskellen på sort IR og glødende IR?', 'Sort IR giver intet synligt lys og skræmmer dyrene mindre. Glødende IR kan give længere rækkevidde, men lyser svagt rødt.' ],
		[ 'Hvor højt skal et vildtkamera sidde?', 'Cirka i brysthøjde og med let hældning nedad, så det fanger dyr i den størrelse, du ønsker at se.' ],
		[ 'Må jeg sætte et vildtkamera op overalt?', 'Du skal have grundejerens tilladelse, og der gælder regler for overvågning af steder, hvor andre færdes. Tjek reglerne, før du sætter kameraet op.' ],
	],
];
