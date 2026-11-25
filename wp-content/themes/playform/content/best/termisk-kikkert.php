<?php
/**
 * Købsguide: termisk kikkert. Fakta kun fra butikkernes produktdata.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'termisk-kikkert',
	'keyword'  => 'termisk kikkert',
	'title'    => 'Termisk kikkert: Vores bud på de 5 bedste termiske kikkerter til jagt',
	'excerpt'  => 'Varmebilleder gør det muligt at se dyr i mørke, tåge og tæt bevoksning. Her er vores bud på de 5 bedste termiske kikkerter til jagt fra de butikker, vi samarbejder med.',
	'more_cat' => 'jagtoptik',
	'intro'    => <<<'HTML'
<p>En termisk kikkert ser varme, ikke lys. Et dyr fremstår lyst mod en kold baggrund, selv når det er mørkt, tåge ligger over marken, eller det står bag løv. Derfor er varmesøgende optik blevet et af de mest ønskede redskaber hos jægere, der vil kunne observere og vurdere vildt bedre.</p><p>Her er fem termiske kikkerter i forskellige prisklasser og typer: håndspottere, kompakte modeller og sigtekikkerter. Det er store investeringer, så læs vejledningen nedenfor, før du vælger. Husk også at sætte dig ind i de gældende regler for, hvad du må bruge under selve jagten.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '6974004644079',
			'price'   => 7445,
			'name'    => 'Hikmicro Lynx 2.0',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Termisk håndspotter, der slukker selv, når du tager den fra øjet, optager direkte i enheden og kører på 18650-batteri.',
			'why'     => <<<'HTML'
<p>Hikmicro Lynx 2.0 er den termiske håndspotter, der gør det nemt at komme i gang. Den slukker selv, når du tager den væk fra øjet, så du sparer på batteriet, og du kan optage sekvenser direkte i enheden.</p>
<p>Strømmen kommer fra et 18650-batteri, og den nyeste version har fået endnu bedre følsomhed end sin forgænger. Den er det oplagte første skridt, hvis du vil spotte vildt i mørket og ikke har brug for at skyde med termisk optik.</p>
HTML,
			'good'    => [ 'Spotting af vildt', 'Dig, der vil starte med termisk optik', 'Optagelse af observationer' ],
			'less'    => [ 'Dig, der skal bruge optikken som sigte på riflen' ],
		],
		[
			'ean'     => '6974004649456',
			'price'   => 8999,
			'name'    => 'Hikmicro Neos LRF NH25L',
			'role'    => 'Bedst som sigtekikkert',
			'reviews' => [],
			'verdict' => 'Termisk sigtekikkert med laserafstandsmåler og ballistisk beregning til jægere, der vil have høj billedkvalitet og lang batteritid.',
			'why'     => <<<'HTML'
<p>Hikmicro Neos LRF NH25L er en moderne termisk sigtekikkert, udviklet til jægere, der vil have høj billedkvalitet, præcis afstandsmåling og lang batteritid i ét samlet produkt.</p>
<p>Den har en indbygget laserafstandsmåler og ballistisk beregning, så du ser, hvor langt der er til dyret, og hvordan du skal sigte. Det er et af de mest komplette valg i guiden.</p>
HTML,
			'good'    => [ 'Termisk sigtekikkert', 'Afstandsmåling og ballistik', 'Lange vagter' ],
			'less'    => [ 'Dig, der kun skal bruge en håndspotter' ],
		],
		[
			'ean'     => '4779022926129',
			'price'   => 13399,
			'name'    => 'Pulsar Axion XG Compact',
			'role'    => 'Bedst og kompakt',
			'reviews' => [],
			'verdict' => 'Lille og let termisk spotter fremstillet i Europa, i et solidt hus, ikke meget større end mindre afstandsmålere.',
			'why'     => <<<'HTML'
<p>Pulsar Axion XG fra Compact-serien er en lille og let termisk spotter, som er fremstillet i Europa. Den er ikke meget større end de mindre afstandsmålere og er designet til dig, der ønsker lethed og et godt billede i et solidt hus.</p>
<p>Den fås som XG30 og XG35, og den kan nemt følge med i lommen, når du går på jagt eller på vagt.</p>
HTML,
			'good'    => [ 'Lav vægt og lille format', 'Skovjagt og pirsk', 'Dig, der vil have den i lommen' ],
			'less'    => [ 'Dig, der vil have laserafstandsmåler' ],
		],
		[
			'ean'     => '4779022925337',
			'price'   => 19998,
			'name'    => 'Pulsar Thermion 2 XQ35 Pro',
			'role'    => 'Bedst til præcision',
			'reviews' => [],
			'verdict' => 'Termisk riffelkikkert med 384x288 chip, 35 mm linse og under 25 mK for hurtigt og præcist billede.',
			'why'     => <<<'HTML'
<p>Pulsar Thermion 2 XQ35 Pro er en ny version i Thermion-serien med en termisk chip på 384x288, en 35 mm linse og en følsomhed på under 25 mK. Det giver et hurtigt og meget præcist billede.</p>
<p>Den er en termisk riffelkikkert, bygget til dig, der vil bruge varmebilledet som sigte. Læs de gældende regler for, hvad du må bruge under selve jagten, før du vælger.</p>
HTML,
			'good'    => [ 'Præcist billede', 'Riffelkikkert', 'Lange vagter' ],
			'less'    => [ 'Mindre budget' ],
		],
		[
			'ean'     => '0308345100651',
			'price'   => 27498,
			'name'    => 'AGM Protector TM50 384',
			'role'    => 'Premiumvalget',
			'reviews' => [],
			'verdict' => 'Termisk monokulær i flyvealuminium og magnesiumlegering med 384-sensor og høj optisk kvalitet.',
			'why'     => <<<'HTML'
<p>AGM Protector TM50 384 er en termisk monokulær i premiumklassen. Huset er lavet af flyvealuminium og magnesiumlegering, og optikken er af høj kvalitet, så enheden er let at bære og solid at holde i hånden.</p>
<p>Den har en 384-sensor og er den dyreste i guiden. Den er til dig, der vil have en robust håndspotter, som kan følge med år efter år.</p>
HTML,
			'good'    => [ 'Håndspotting', 'Robust konstruktion', 'Dig, der vil have høj kvalitet' ],
			'less'    => [ 'Mindre budget' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en termisk kikkert</h2><h3>Håndspotter, sigtekikkert eller clip-on</h3><p>En håndspotter bruger du til at finde og bedømme vildt. En termisk sigtekikkert erstatter den almindelige kikkert på riflen. En clip-on sættes foran din eksisterende optik. Tænk over, hvad du primært skal bruge den til.</p><h3>Sensor</h3><p>Opløsningen på sensoren fortæller, hvor detaljeret billedet er. 384x288 er et godt udgangspunkt til jagt, og en højere opløsning giver mere detalje på lang afstand.</p><h3>Følsomhed (mK)</h3><p>Jo lavere tal, jo bedre kan kikkerten skelne små forskelle i varme. Under 25 mK er et godt niveau i dag.</p><h3>Linse og synsfelt</h3><p>En større linse giver længere rækkevidde, men et smallere synsfelt. En mindre linse er bedre til skov og nærhed.</p><h3>Batteri og vægt</h3><p>Se efter batteritid, hvis du skal sidde lang tid på post. Vægten betyder noget, hvis du skal gå langt med den.</p><h3>Regler</h3><p>Reglerne for at bruge termisk udstyr under jagten kan være strenge. Læs jagtloven, før du køber, og spørg om rådgivning hos butikken.</p><p>Se alle <a href="/jagt/jagtoptik/">jagtoptik og vildtkameraer</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er forskellen på termisk kikkert og nattekikkert?', 'En termisk kikkert ser varme og virker i fuldstændigt mørke. En nattekikkert forstærker det lys, der er, og har brug for noget lys eller en IR-lampe.' ],
		[ 'Hvad betyder 384x288?', 'Det er sensorens opløsning i pixels. Jo flere pixels, jo mere detaljeret er varmebilledet.' ],
		[ 'Må jeg bruge termisk optik på jagt?', 'Reglerne er skarpe, og de kan ændre sig. Læs de gældende regler hos myndighederne, før du bruger optikken til selve jagten.' ],
		[ 'Hvor langt kan en termisk kikkert se?', 'Det afhænger af sensoren og linsen. Der er forskel på, hvor langt du kan opdage et dyr, og hvor langt du kan se, hvad det er – læs derfor butikkens beskrivelse af den enkelte model.' ],
	],
];
