<?php
namespace Playform\Feeds;

/**
 * Al opsætning for nichen ét sted: sitets navn, shops, kategoritræ, sorteringsregler og filtre.
 * Outdoorland (outdoorudstyr, fiskeri og jagt). Samme kode som Kitzhen, Fitbase og Pizzalicious; kun denne fil er særlig for nichen.
 */
final class Config {

	/** Sitets navn og kontaktoplysninger. Bruges af temaet (playform_site()) og importens tekster. */
	public static function site(): array {
		return [
			'name'     => 'Outdoorland',
			'domain'   => 'outdoorland.dk',
			'email'    => 'kontakt@outdoorland.dk',
			'niche'    => 'outdoorudstyr', // "Find outdoorudstyr fra …"
			'tagline'  => 'Outdoorudstyr til camping, vandring, fiskeri og jagt fra danske webshops samlet ét sted',
			'company'  => 'Mondae',
			'cvr'      => '37208329',
			'address'  => 'Rønnevej 19 B, kl., 5270 Odense N',
			'owner'    => 'Frederik Baastrup',
			'accent'   => '#627358', // den grønne fra logoet
		];
	}

	/**
	 * Nye produkter, der er udsolgt i feedet, oprettes ikke (de store tøjbutikker har tusindvis af udsolgte varer).
	 * Produkter, vi allerede har, bliver liggende som "ikke på lager" som altid.
	 */
	public static function create_out_of_stock(): bool {
		return false;
	}

	/** Produkter, der ikke matcher en kategori, kommer slet ikke med (i stedet for "ukategoriseret"). */
	public static function skip_uncategorized(): bool {
		return true;
	}

	/**
	 * Partner-ads feeds (partnerid 14854). Godkendte outdoor-, fiskeri- og jagtprogrammer 5. nov. 2026.
	 * 'group_variants': butikken har én række pr. størrelse med samme navn – samles til ét produkt.
	 * Kan overstyres med option 'playform_shops'.
	 */
	public static function shops(): array {
		// Størrelse sidst i navnet: "Jakke - XL", "Støvle - EU 42,5", "Strømper - Str. 40-42 - Strømper", "Waders - 42/43".
		$size     = [ '/\s+-\s+(?:str\.?\s*)?(?:EU\s*)?(?:\d?X{0,3}[SML]|XXL|\dXL|one ?size|\d{1,3}(?:[.,]5)?(?:\s*[\/-]\s*\d{1,3})?|[SML]\/[SML]|[SML]\/XL|L\/XL|XS\/S)(?:\s+-\s+[^-]{1,25})?$/iu' ];
		$b        = 'https://www.partner-ads.com/dk/feed_udlaes.php?partnerid=14854';
		$defaults = [
			// Friluftsland har én række pr. farve: "Jakke (Rød (RED))" – samles til ét produkt.
			'friluftsland'     => [ 'name' => 'Friluftsland.dk', 'url' => "$b&bannerid=52894&feedid=867", 'group_variants' => true, 'variant_strip' => [ '/\\s*\\((?:[^()]|\\([^()]*\\))*\\)\\s*$/u' ] ],
			'prooutdoor'       => [ 'name' => 'Pro Outdoor', 'url' => "$b&bannerid=42818&feedid=523", 'group_variants' => true , 'variant_strip' => $size ],
			// Outdoornu: "Jakke Women, dark grey mel.-L" – størrelse efter bindestreg og farve efter komma fjernes.
			'outdoornu'        => [ 'name' => 'Outdoornu.dk', 'url' => "$b&bannerid=96182&feedid=2641", 'group_variants' => true, 'variant_strip' => [ '/-(?:\\d?X{0,3}[SML]|\\d{1,3}(?:[.,]\\d)?(?:\\/\\d+)?|one ?size)$/iu', '/,\\s*[^,\\d]+$/u' ] ],
			// Friluftslageret: "Scarpa Mojito EU 42 Blå Vandresko", "SmartWool Tee Herre M Sort" – størrelsen midt i navnet.
			'friluftslageret'  => [ 'name' => 'Friluftslageret', 'url' => "$b&bannerid=72752&feedid=1571", 'group_variants' => true, 'variant_strip' => [ '/\\s+EU\\s*\\d{2}(?:½|[.,]5)?(?=\\s|$)/u', '/(?<=Herre|Dame|Unisex|Junior|Børn)\\s+(?:\\d?X{0,3}[SML]|XXL|\\dXL|O\\/S)(?=\\s|$)/u' ] ],
			'outmore'          => [ 'name' => 'Outmore.dk', 'url' => "$b&bannerid=44269&feedid=565" , 'group_variants' => true, 'variant_strip' => $size ],
			'aktivvinter'      => [ 'name' => 'AktivVinter.dk', 'url' => "$b&bannerid=56997&feedid=1026", 'group_variants' => true , 'variant_strip' => $size ],
			'backpackerlife'   => [ 'name' => 'Backpackerlife.dk', 'url' => "$b&bannerid=65841&feedid=1318" ],
			'outdoor-i-centrum' => [ 'name' => 'Outdoor i Centrum', 'url' => "$b&bannerid=117229&feedid=4361" ],
			'wolf-tactical'    => [ 'name' => 'Wolf Tactical', 'url' => "$b&bannerid=105676&feedid=3250" , 'group_variants' => true, 'variant_strip' => $size ],
			'scandihills'      => [ 'name' => 'ScandiHills.dk', 'url' => "$b&bannerid=70528&feedid=1493" ],
			'nordic-hike'      => [ 'name' => 'Nordic Hike', 'url' => "$b&bannerid=115848&feedid=4199" ],
			'venturepack'      => [ 'name' => 'Venturepack.dk', 'url' => "$b&bannerid=118233&feedid=4460" ],
			'topoutdoor'       => [ 'name' => 'TopOutdoor', 'url' => "$b&bannerid=117963&feedid=4436" ],
			'fritidsshop'      => [ 'name' => 'Fritidsshop', 'url' => "$b&bannerid=104009&feedid=3148" ],
			// Specialbutikker (samme ejer): telte, soveposer, hængekøjer, rygsække, lygter, knive, kikkerter, termo.
			'nyttelt'          => [ 'name' => 'Nyttelt.dk', 'url' => "$b&bannerid=84254&feedid=2050" ],
			'soveposesalg'     => [ 'name' => 'Soveposesalg.dk', 'url' => "$b&bannerid=84256&feedid=2051" ],
			'haengekoejesalg'  => [ 'name' => 'Hængekøjesalg.dk', 'url' => "$b&bannerid=72505&feedid=1555" ],
			'rygsaeksalg'      => [ 'name' => 'Rygsæksalg.dk', 'url' => "$b&bannerid=82647&feedid=1991" ],
			'vandrestaven'     => [ 'name' => 'Vandrestaven.dk', 'url' => "$b&bannerid=84264&feedid=2052" ],
			'pande-lampe'      => [ 'name' => 'Pande-lampe.dk', 'url' => "$b&bannerid=36837&feedid=370" ],
			'lommelygtesalg'   => [ 'name' => 'Lommelygtesalg.dk', 'url' => "$b&bannerid=47793&feedid=688" ],
			'knivsalg'         => [ 'name' => 'Knivsalg.dk', 'url' => "$b&bannerid=64890&feedid=1290" ],
			'kikkert-salg'     => [ 'name' => 'Kikkert-salg.dk', 'url' => "$b&bannerid=64891&feedid=1291" ],
			'koeletaske'       => [ 'name' => 'Køletaske.dk', 'url' => "$b&bannerid=64889&feedid=1289" ],
			// Fiskeri
			'nordic-anglers'   => [ 'name' => 'Nordic Anglers', 'url' => "$b&bannerid=117588&feedid=4406", 'group_variants' => true ],
			'fluer'            => [ 'name' => 'Fluer.dk', 'url' => "$b&bannerid=117291&feedid=4384", 'group_variants' => true ],
			'minflue'          => [ 'name' => 'Minflue.dk', 'url' => "$b&bannerid=117505&feedid=4395" ],
			'fisk-paa-krogen'  => [ 'name' => 'Fisk på krogen', 'url' => "$b&bannerid=50681&feedid=783", 'group_variants' => true ],
			'fishnote'         => [ 'name' => 'Fishnote', 'url' => "$b&bannerid=97436&feedid=2699" ],
			// Jagt
			'hunterspoint'     => [ 'name' => "Hunters' Point", 'url' => "$b&bannerid=66913&feedid=1360", 'group_variants' => true , 'variant_strip' => $size ],
			'almas'            => [ 'name' => 'Almas Park & Fritid', 'url' => "$b&bannerid=99713&feedid=2844", 'group_variants' => true , 'variant_strip' => $size ],
			// Vandsport (SUP, kajak, våddragter, redningsveste) – vinterdelen (ski, snowboard) kommer ikke med.
			'surfmore'         => [ 'name' => 'SurfMore', 'url' => "$b&bannerid=63626&feedid=1238" ],
			'profgear'         => [ 'name' => 'ProfGear', 'url' => "$b&bannerid=109619&feedid=3592" ],
			// Proshop (elektronik, 276.000 varer): kun tre butikskategorier, og kun det, vores egne regler kan placere ('?').
			'proshop'          => [ 'name' => 'Proshop.dk', 'url' => "$b&bannerid=67757&feedid=1399", 'category_map' => [ 'camping' => '?', 'lommelygter og pandelamper' => '?', 'kikkert' => '?' ] ],
		];
		$custom = get_option( 'playform_shops' );
		return is_array( $custom ) && $custom ? $custom : $defaults;
	}

	/**
	 * Outdoorlands kategorier. 'match' testes først mod produktnavnet, derefter mod butikkens kategori.
	 * Rækkefølgen betyder noget: den første kategori, der matcher, vinder. Specifikt udstyr står før tøj,
	 * så fx en fiskevest havner under fiskeri og en pandelampe ikke under tøj. Alt, der ikke matcher, kommer
	 * ikke med (skip_uncategorized). Slugs må aldrig starte med "bedste-" (forbeholdt guides på roden).
	 */
	public static function categories(): array {
		return [
			'fiskeri'         => [ 'name' => 'Fiskeri', 'match' => 'fiske|fishing|\bfly (tying|fishing)|fluebind|fluestang|flueline|fluehjul|\bfluer?\b|rørflue|spinnestang|spinnehjul|fastspolehjul|multihjul|haspelhjul|endegrej|wobler|wobbler|\bblink\b|spinner|gennemløber|jigs?\b|softbait|soft ?plastic|swimbait|crankbait|jerkbait|pirk|forfang|fletline|monofil|fluorocarbon|\bwaders?\b|vadestøvle|vadebukser|fiskekrog|madding|boilies|put ?(&amp;|&|and) ?take|kyst ?(&amp;|&) ?hav|havørred|gedde|karpe|\bangling|\blure|dubbing|hackle|marabou|tinsel|chenille|bindestik|fluebinding|fly tying|landingsnet|fangstnet|rygeovn|stangholder|line ?spole|bulkspole|single fishing hooks|fishing hooks', 'not' => 'krus\\b|\\bmug\\b|\\bkop\\b|fiskeben|fiskeskæl|fiskesuppe|fiskeolie|fiskebens|fisketaske(?! til)|magnetfisk|flue section|flue kit|drain flue|tilbehør til ovne' ],
			'vandsport'       => [ 'name' => 'Vandsport', 'match' => '\\bkano|canoe|kajak|kayak|\\bsup\\b|sup ?board|stand.?up ?paddle|paddle ?board|padleboard|pagaj|dobbeltpaddel|\\bpaddle\\b|redningsvest|svømmevest|\\bsecumar\\b|våddragt|wetsuit|neopren|shorty|badesko|belly ?boat|flydering|gummibåd|vandski|wakeboard|kitesurf|windsurf|surfboard|bodyboard', 'not' => 'stangholder|rod holder|net\\b|lommekniv|bog|dagbog|kayak \\d+oz|neopren ?(waders|støvle|handske)|vade' ],
			'jagt'            => [ 'name' => 'Jagt', 'match' => 'luftpistol|luftgevær|hagl til luft|skydekasse|jagt|hunting|\bhunt\b|\bcamo\b|camouflage|realtree|mossy oak|optifade|lokkefløjte|lokkefugl|vildtkamera|trail ?cam|skydestok|skydeskive|riffelkikkert|sigtekikkert|termisk (kikkert|kamera|sigte)|night ?vision|nattesyn|termokamera|sporline|hundehalsbånd|hundevest|apportbuk|hundefløjte|jagtfløjte|dummy|vildtsæk|vildttrug|sneglekikkert|anstand|skjul\b|tårnstol|jagtstol|deerhunter|härkila|harkila|seeland|chevalier|blaser|\bpinewood|swedteam' ],
			'camping'         => [ 'name' => 'Camping', 'match' => '\btelte?\b|teltet|tunneltelt|kuppeltelt|geodætisk|1-personers|2-personers|3-personers|4-personers|5-personers|6-personers|8-personers|ydertelt|indertelt|footprint|teltunderlag|teltpløk|pløkker?\b|bardun|teltstang|\btarp\b|shelter\b|bivi\b|bivvy|myggenet|sovepose|lagenpose|liggeunderlag|sovemåtte|luftmadras|selvoppustelig|oppusteligt? underlag|feltseng|hængekøje|haengekoeje|hammock|campingstol|campingbord|campingmøbel|klapstol|foldestol|festivalstol|campingseng|feltseng|sleeping ?bag|sleeping ?pad|\btent\b', 'not' => 'tent green|tent grey|tent gray|tent blue|tent brown|campingvogn|fortelt|markise|autocamper|telttæppe|cykel|parasol|pavillon|festtelt|partytelt|pop-?up telt til (bil|tag)|biltelt|tagtelt|reservedel|teltlampe' ],
			'friluftskoekken' => [ 'name' => 'Friluftskøkken', 'match' => 'havepejs|terrassepejs|gasgrill|campinggrill|camping grill|bordgrill|minigrill|grilliput|o-grill|safari chef|camp grill|pack grill|tri-pod grill|kulgrill|transportabel grill|bærbar grill|grill i transportabel|kompressorkøl|absorptionskøl|gaskøleskab|stormkøkken|stormkokker|trangia|jetboil|msr (pocket|whisper|wind)|primus|kogesæt|kogegrej|kogeudstyr|campingkøkken|gasbrænder|brænder\b|gaskogeapparat|spritbrænder|turkøkken|feltkøkken|gaspatron|gasdåse|bålgryde|baalgryde|kedel\b|percolator|pocket rocket|dobbeltkogesæt|turmad|frysetørret|trekking ?mad|real turmat|drytech|termoflaske|termokande|termokrus|termo ?drik|drikkedunk|drikkeflaske|vandflaske|feltflaske|vandfilter|vandrensning|lifestraw|sawyer|katadyn|køletaske|køleboks|kølebox|cool ?box|cooler|madkasse|spork|spisebestik|campingbestik|campingservice|turbestik|kuksa|feltspisesæt|madbeholder|\bkrus\b|baal|bål(?!ed)|fyrfad|bålfad|bålpande|bålsted|ildsted|tændstål|firesteel|ildstål|campingservice|campinggryde', 'not' => 'campingvogn|fortelt|markise|autocamper|reservedel|alde|truma|thetford(?!.*absorptionskøleskab)|stik|stikdåse|vandpumpe|vandtank|toilet|kassettetoilet|spejl|træktøj|stabilisator|nødgenerator|(?<!have)(?<!terrasse)pejs|terrassevarmer|parasol|havemøbel|campingvognsspejl|lampe|lys' ],
			'rygsaekke'       => [ 'name' => 'Rygsække & tasker', 'match' => 'rygsæk|rygsaek|backpack|daypack|vandrerygsæk|trekkingrygsæk|dagsrygsæk|turrygsæk|duffel|drybag|dry ?bag|vandtæt pose|pakkepose|kompressionspose|packing cube|bæltetaske|hoftetaske|regnslag til rygsæk|rygsækregnslag|væskeblære|hydration|camelbak|vandreryg', 'not' => 'skoletaske|skolerygsæk|skoletasker|computertaske|laptop|pc-taske|kuffert|trolley|toilettaske|pung|gymnastikpose|børnehave' ],
			'udstyr'          => [ 'name' => 'Udstyr', 'match' => 'pandelampe|headlamp|hovedlygte|lommelygte|flashlight|lanterne|campinglampe|teltlampe|led lygte|lygte\b|kniv\b|knive\b|jagtkniv|foldekniv|outdoorkniv|bushcraft|mora(kniv)?\b|multitool|multi-tool|leatherman|victorinox|økse|\bsav\b|foldesav|kikkert|binocular|monokular|afstandsmåler|vandrestav|trekkingstav|nordic walking stav|stave\b|kompas|gps\b|pejling|førstehjælp|nødtæppe|overlevelse|survival|prepping|nødradio|powerbank|solcellepanel|solcellelader|myggemiddel|insektmiddel|myggespray|myggestift|flåttang|reparationssæt|repair|imprægnering|imprægner|nikwax|grangers|vaskemiddel|\\bwash\\b|vask & pleje|tøjvask|karabin', 'not' => 'cykellygte|cykel|køkkenkniv|kokkekniv|brødkniv|mikroskop|laboratorie|lup\b|drone|metaldetektor|skistav|ski stav|skistave|batteri\b|ledning|pære\b|filter\b|lygteholder|oplader til cykel|dykkerlygte|arbejdslampe|bilkompas' ],
			'fodtoej'         => [ 'name' => 'Fodtøj', 'match' => 'vandrestøvle|vandrestovle|vandresko|trekkingsko|trekkingstøvle|hiking ?(boot|shoe)|trail ?sko|trailsko|trail ?runner|approach ?sko|gummistøvle|gummistovle|vinterstøvle|termostøvle|outdoorstøvle|outdoorsko|trekking ?sandal|vandresandal|fodtøj|footwear|støvler?\b|\bsko\b|\bboots?\b|gore-?tex sko|\bgtx\b.*(mid|low)|\bmid gtx|\blow gtx', 'not' => 'neopren|skisko|skistøvle|støvlespray|skosnøre|snørebånd|sål(er)?\b|indlægssål|skocreme|skovoks|skoimprægnering|hverdagssko|ballerina|stilet|pumps|sneaker(?!.*trail)|hjemmesko|tøffel|klipklap|badesandal|cykelsko|golfsko|fodboldstøvle|indendørssko|\bspray\b|skoholder|skotaske' ],
			// Outdoortøj er fjernet (ejerens valg 7. nov. 2026): fylder meget og ranker ikke mod de store tøjbutikker.
		];
	}

	/**
	 * Underkategorier = egne landingssider, fx /camping/telte/. 'match' testes mod produktnavnet,
	 * 'desc' mod butikkens beskrivelse, 'not' udelukker ud fra navnet. Et produkt kan ligge i flere.
	 */
	public static function subcategories(): array {
		return [
			'camping' => [
				'telte'            => [ 'name' => 'Telte', 'match' => '\btelte?\b|teltet|tunneltelt|kuppeltelt|personers|\btent\b', 'not' => 'pløk|bardun|footprint|underlag|stang|myggenet|reparation|lampe|tæppe|tent green|tent grey|tent gray|jacket|vest|pants' ],
				'tarp-shelter'     => [ 'name' => 'Tarp & shelter', 'match' => '\btarp\b|shelter|bivi\b|bivvy' ],
				'soveposer'        => [ 'name' => 'Soveposer', 'match' => 'sovepose|sleeping ?bag|lagenpose|quilt' ],
				'liggeunderlag'    => [ 'name' => 'Liggeunderlag', 'match' => 'liggeunderlag|sovemåtte|luftmadras|selvoppustelig|sleeping ?pad|oppusteligt? underlag|feltseng|campingseng' ],
				// Vinterudgaver (står også under Soveposer/Liggeunderlag): navnet skal sige vinter, frostgrad eller høj R-værdi.
				'vintersoveposer'      => [ 'name' => 'Vintersoveposer', 'match' => '^(?=.*(sovepose|sleeping ?bag)).*(vinter|winter|arctic|polar|ekspedition|expedition|-\s?(1[0-9]|[2-4][0-9]|[5-9])\s?°|komfort\s?-\s?\d)', 'not' => 'underlag|måtte|madras|lagen' ],
				'vinterliggeunderlag'  => [ 'name' => 'Vinterliggeunderlag', 'match' => '^(?=.*(liggeunderlag|sovemåtte|sleeping ?(pad|mat)|selvoppustelig|oppusteligt? underlag)).*(vinter|winter|xtherm|x-therm|downmat|4[- ]?sæson|4[- ]?season|\br[- ]?(værdi|value)?:?\s?[4-9])' ],
				'haengekoejer'     => [ 'name' => 'Hængekøjer', 'match' => 'hængekøje|hammock' ],
				'campingmoebler'   => [ 'name' => 'Campingmøbler', 'match' => 'campingstol|campingbord|campingmøbel|klapstol|foldestol|festivalstol|\bstol\b|\bbord\b' ],
				'telttilbehoer'    => [ 'name' => 'Telttilbehør', 'match' => 'pløk|bardun|footprint|teltunderlag|teltstang|myggenet|ydertelt|indertelt' ],
			],
			'friluftskoekken' => [
				'stormkoekken'     => [ 'name' => 'Stormkøkken & brændere', 'match' => 'stormkøkken|trangia|jetboil|brænder|primus|pocket rocket|gaskoge|whisper|spritbrænder' ],
				'kogegrej'         => [ 'name' => 'Gryder & kogegrej', 'match' => 'kogesæt|kogegrej|gryde|pande|kedel|percolator|kasserolle|kaffe' ],
				'termoflasker'     => [ 'name' => 'Termoflasker & drikkedunke', 'match' => 'termo|drikkedunk|drikkeflaske|vandflaske|feltflaske|krus|kop\b|kuksa' ],
				'vandfilter'       => [ 'name' => 'Vandfilter', 'match' => 'vandfilter|vandrensning|lifestraw|sawyer|katadyn' ],
				'koeletasker'      => [ 'name' => 'Køletasker, kølebokse & køleskabe', 'match' => 'køletaske|køleboks|kølebox|cool ?box|cooler|køleskab' ],
				'grill'            => [ 'name' => 'Grill til camping', 'match' => 'grill', 'not' => 'tang|børste|rist til|overtræk|termometer|handske|spyd|stick' ],
				'turmad'           => [ 'name' => 'Turmad', 'match' => 'turmad|frysetørret|trekking ?mad|real turmat|drytech|måltid|morgenmad|dessert' ],
				'baal'             => [ 'name' => 'Bål & ildsted', 'match' => 'bål|baal|fyrfad|ildsted|havepejs|terrassepejs|tændstål|firesteel|ildstål|optænding' ],
			],
			'rygsaekke' => [
				'vandrerygsaekke'  => [ 'name' => 'Vandrerygsække', 'match' => 'vandrerygsæk|trekking|\b(4\d|5\d|6\d|7\d|8\d) ?l(iter)?\b|\b(4\d|5\d|6\d|7\d|8\d)\b(?!.*cm)', 'not' => 'drybag|pose' ],
				'dagsrygsaekke'    => [ 'name' => 'Dagsrygsække', 'match' => 'daypack|dagsrygsæk|\b(1\d|2\d|3\d) ?l(iter)?\b', 'not' => 'drybag|pose' ],
				'drybags'          => [ 'name' => 'Drybags & pakkeposer', 'match' => 'drybag|dry ?bag|pakkepose|kompressionspose|packing cube|vandtæt pose' ],
				'duffelbags'       => [ 'name' => 'Duffelbags', 'match' => 'duffel' ],
			],
			'udstyr' => [
				'pandelamper'      => [ 'name' => 'Pandelamper', 'match' => 'pandelampe|headlamp|hovedlygte' ],
				'lommelygter'      => [ 'name' => 'Lommelygter & lanterner', 'match' => 'lommelygte|flashlight|lanterne|campinglampe|teltlampe|lygte' , 'not' => 'pandelampe' ],
				'knive'            => [ 'name' => 'Knive & økser', 'match' => 'kniv|økse|\bsav\b|foldesav|mora\b|bushcraft' ],
				'multitools'       => [ 'name' => 'Multitools', 'match' => 'multitool|multi-tool|leatherman' ],
				'kikkerter'        => [ 'name' => 'Kikkerter', 'match' => 'kikkert|binocular|monokular|afstandsmåler' ],
				'vandrestave'      => [ 'name' => 'Vandrestave', 'match' => 'vandrestav|trekkingstav|nordic walking|stave?\b' ],
				'foerstehjaelp'    => [ 'name' => 'Førstehjælp & overlevelse', 'match' => 'førstehjælp|nødtæppe|overlevelse|survival|prepping|nødradio' ],
			],
			'fodtoej' => [
				'vandrestoevler'   => [ 'name' => 'Vandrestøvler', 'match' => 'vandrestøvle|trekkingstøvle|hiking ?boot|\bmid\b|støvle|boot', 'not' => 'gummistøvle|vinterstøvle|termostøvle|jagtstøvle' ],
				'vandresko'        => [ 'name' => 'Vandresko', 'match' => 'vandresko|trekkingsko|hiking ?shoe|approach|\blow\b|\bsko\b', 'not' => 'trail' ],
				'trailsko'         => [ 'name' => 'Trailsko', 'match' => 'trail' ],
				'gummistoevler'    => [ 'name' => 'Gummistøvler', 'match' => 'gummistøvle|gummistovle|rubber boot' ],
				'vinterstoevler'   => [ 'name' => 'Vinterstøvler', 'match' => 'vinterstøvle|termostøvle|snow ?boot|winter' ],
				'sandaler'         => [ 'name' => 'Sandaler', 'match' => 'sandal' ],
			],
			'fiskeri' => [
				'fiskestaenger'    => [ 'name' => 'Fiskestænger', 'match' => 'stang|rod\b|rods\b', 'not' => 'holder|tasker?|rør|stangholder' ],
				'fiskehjul'        => [ 'name' => 'Fiskehjul', 'match' => 'hjul|reel', 'not' => 'spole til|ekstraspole' ],
				'endegrej'         => [ 'name' => 'Endegrej & agn', 'match' => 'wobler|wobbler|blink|spinner|gennemløber|jig|softbait|soft ?plastic|swimbait|crankbait|jerkbait|pirk|\bflue\b|\bfluer\b|lure|bait' ],
				'fiskeline'        => [ 'name' => 'Fiskeline & forfang', 'match' => 'line\b|fletline|monofil|fluorocarbon|forfang|leader|braid' ],
				'waders'           => [ 'name' => 'Waders & fisketøj', 'match' => 'wader|vadestøvle|vadebukser|fiskejakke|fiskevest|wading' ],
				'fluebinding'      => [ 'name' => 'Fluebinding', 'match' => 'fly tying|fluebind|dubbing|hackle|marabou|tinsel|chenille|bindestik|fjer\b|saddle' ],
				'fluefiskeri'      => [ 'name' => 'Fluefiskeri', 'match' => 'flue|fly\b|fly fishing', 'not' => 'fly tying|fluebind' ],
			],
			'vandsport' => [
				'kajak-kano'       => [ 'name' => 'Kajak & kano', 'match' => 'kano|canoe|kajak|kayak|gummibåd|belly ?boat|flydering' ],
				'sup'              => [ 'name' => 'SUP-boards', 'match' => '\\bsup\\b|stand.?up|paddle ?board|padleboard' ],
				'pagajer'          => [ 'name' => 'Pagajer', 'match' => 'pagaj|paddel|\\bpaddle\\b(?!.?board)' ],
				'redningsveste'    => [ 'name' => 'Redningsveste', 'match' => 'redningsvest|svømmevest|secumar|flydevest' ],
				'vaaddragter'      => [ 'name' => 'Våddragter & neopren', 'match' => 'våddragt|wetsuit|neopren|shorty|badesko|bootie' ],
			],
			'jagt' => [
				'jagttoej'         => [ 'name' => 'Jagttøj', 'match' => 'jakke|jacket|bukser|trousers|vest|skjorte|trøje|hue|handske|camo|beklædning|\btøj\b|strømper|sokker' ],
				'jagtstoevler'     => [ 'name' => 'Jagtstøvler', 'match' => 'støvle|boot|sko\b' ],
				'jagtoptik'        => [ 'name' => 'Optik & vildtkameraer', 'match' => 'kikkert|optik|afstandsmåler|vildtkamera|trail ?cam|termisk|nattesyn|night ?vision' ],
				'luftvaaben'       => [ 'name' => 'Luftpistoler & luftgeværer', 'match' => 'luftpistol|luftgevær|hagl til luft|skydekasse' ],
				'jagthund'         => [ 'name' => 'Til jagthunden', 'match' => 'hund|halsbånd|apport|dummy|fløjte|sporline' ],
			],
		];
	}

	/** Mærker, der kun laver nichens udstyr: deres produkter uden et kategoriord i navnet lander her. */
	public static function brand_categories(): array {
		return [ 'trangia' => 'friluftskoekken', 'jetboil' => 'friluftskoekken', 'primus' => 'friluftskoekken', 'helinox' => 'camping', 'thermarest' => 'camping', 'therm-a-rest' => 'camping', 'exped' => 'camping', 'nordisk' => 'camping', 'hilleberg' => 'camping', 'msr' => 'friluftskoekken', 'petzl' => 'udstyr', 'led lenser' => 'udstyr', 'ledlenser' => 'udstyr', 'fenix' => 'udstyr', 'morakniv' => 'udstyr', 'leatherman' => 'udstyr' ];
	}

	/** Produkter, der aldrig skal med (navn eller butikkens kategori). */
	public static function exclude(): array {
		return [
			'gavekort|gift ?card|gebyr|fragt\b',
			'reservedel|spare ?part|replacement part',
			// Våben og ammunition, airsoft og softguns (ejerens site viser udstyr, ikke våben)
			'airsoft|softgun|soft ?air|\bbb\b|ammunition|patroner|haglpatron|\briffel\b(?!kikkert)|(?<!luft)gevær|kaliber|\bpistol\b|signalpistol|krydsbue|armbrøst|slangebøsse|kastekniv|knojern|teleskopstav|peberspray|skjold',
			// Ski, snowboard, løb og cykling (ikke Outdoorlands emner)
			'\bski\b|skiudstyr|skistøvle|skibinding|alpinski|langrend|snowboard|skihjelm|skibrille|skijakke|skibukser|skisko|cykelhjelm|cykellygte|cykel|løbetøj|løbesko|løbestrømper|løbetights|alt til løb',
			// Andet uden for nichen
			'campingvogn|fortelt|markise|autocamper|alde\b|truma|thetford(?!.*absorptionskøleskab)|kassettetoilet|træktøj|stabilisator|trailer|presenning',
			'nødgenerator|generator|pool|spa\b|sauna|græsplæne|havemøbel|parasol|terrassevarmer|automatisk grill|grillbakke|reservelåg|(?<!have)(?<!terrasse)pejs|mikroskop|laboratorie|metaldetektor|magnetfiskeri|tromlemaskine|ravlygte|drone|legetøj|kørelegetøj|fitness',
			'skoletaske|skolerygsæk|hverdagssko|sixpence|kjole|nederdel|bikini|badetøj|pyjamas|parfume|smykke',
			'\bbatteri(er)?\b|ledning|oplader\b|pære\b|vandperler',
			// Have, værksted og arbejde (Almas, Wolf Tactical)
			'automower|plæneklipper|robotplæne|ukrudtsbrænder|beskæresaks|møtrik|låseplade|højbed|insektnet|kålnet|afgrænsningskabel|sikkerhedsstøvle|sikkerhedssko|arbejdshandske|arbejdstøj|arbejdsbuks|arbejdsjakke|erhvervsmaskine|motorsav|buskrydder|trimmer|løvblæser|havetraktor|kædesav',
			// Militær- og politiudstyr (Wolf Tactical)
			'militær|military|\bmil-tec|tactical|taktisk|politi|police|security|plate ?carrier|molle|hylster|holster|magasin|chest ?rig|kampbuks|kampskjorte|uniform',
		];
	}

	/** Butikskategorier, hvor kun vores egne regler må afgøre placeringen (de siger intet om produktet). */
	public static function meaningless_shop_categories(): array {
		return [ 'brands', 'mærker', 'tilbud', 'udsalg', 'nyheder', 'gaveideer', 'gaver', 'alle produkter', 'black friday', 'black month', 'diverse', 'kampagner', 'restsalg', 'outlet', 'efterårsferie', 'julegaveideer', 'udsalg', 'sportsudstyr > friluftsliv' ];
	}

	/**
	 * Maskinkategorier, hvor tilbehør (filtre, reservedele, låg …) i stedet skal til 'accessory_target'.
	 * Fitbase bruger det til løbebånd m.m.; Pizzalicious bruger det ikke.
	 */
	public static function machine_categories(): array {
		return [];
	}

	public static function accessory_pattern(): string {
		return 'reservedel|filter til|kande til|skål til|knivblad til|tilbehør til';
	}

	public static function accessory_target(): string {
		return 'tilbehoer';
	}

	/**
	 * Hvilke filteregenskaber Attributes skal udtrække fra teksten (se Attributes::extract()).
	 * Fitbase: foldable, incline, max_speed, max_weight, weight_kg. Outdoorland: ingen endnu.
	 */
	public static function attributes(): array {
		return [];
	}

	/** Prisintervaller i filtre og mega-menu: nøgle => [ label, min, max ]. */
	public static function price_bands(): array {
		return [
			'0-200'     => [ 'Under 200 kr', 0, 200 ],
			'200-500'   => [ '200–500 kr', 200, 500 ],
			'500-1500'  => [ '500–1.500 kr', 500, 1500 ],
			'1500-3000' => [ '1.500–3.000 kr', 1500, 3000 ],
			'3000-6000' => [ '3.000–6.000 kr', 3000, 6000 ],
			'6000-'     => [ 'Over 6.000 kr', 6000, PHP_INT_MAX ],
		];
	}

	public static function uncategorized_slug(): string {
		return 'ukategoriseret';
	}
}
