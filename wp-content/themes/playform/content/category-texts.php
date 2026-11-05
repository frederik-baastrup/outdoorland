<?php
/**
 * Introtekster til Outdoorlands kategorier og underkategorier (landingssiderne).
 * Kun generel købsrådgivning – ingen påstande om konkrete produkter (projektregel 2).
 * Seedes af playform_seed_category_texts() og kan derefter rettes under Produkter › Kategorier.
 * Tomme felter udfyldes ved næste udrulning, felter med tekst røres aldrig (redaktørens rettelser vinder).
 *
 * @return array<string,array{intro?:string,seo?:string,faq?:array<int,array{0:string,1:string}>}>
 */

defined( 'ABSPATH' ) || exit;

return [
	// Hovedkategorier.
	'camping'         => [ 'intro' => 'Telte, soveposer, liggeunderlag, hængekøjer og campingmøbler til alt fra festivalen til den lange vandretur. Se udvalget fra danske outdoorbutikker samlet ét sted.' ],
	'friluftskoekken' => [ 'intro' => 'Stormkøkkener, gryder, termoflasker, drikkedunke, køletasker, turmad og båludstyr – alt til maden og kaffen på turen. Se udvalget fra danske webshops.' ],
	'rygsaekke'       => [ 'intro' => 'Vandrerygsække, dagsrygsække, duffelbags og drybags. Vælg volumen efter turens længde, og prøv bæresystemet med vægt i. Se udvalget fra danske outdoorbutikker.' ],
	'outdoortoej'     => [ 'intro' => 'Skaljakker, regntøj, fleece, uldundertøj og vandrebukser – tøj efter lag-princippet, så du kan klæde dig efter vejret. Se udvalget fra danske outdoorbutikker.' ],
	'fodtoej'         => [ 'intro' => 'Vandrestøvler, vandresko, trailsko, gummistøvler og sandaler til tur og terræn. Se udvalget fra danske outdoorbutikker samlet ét sted.' ],
	'udstyr'          => [ 'intro' => 'Pandelamper, lommelygter, knive, multitools, kikkerter, vandrestave og førstehjælp – det små udstyr, der gør turen tryggere. Se udvalget fra danske webshops.' ],
	'fiskeri'         => [ 'intro' => 'Fiskestænger, fiskehjul, liner, endegrej, waders og alt til fluebinding fra danske fiskeforhandlere. Se udvalget samlet ét sted.' ],
	'vandsport'       => [ 'intro' => 'Kajakker, kanoer, SUP-boards, pagajer, redningsveste og våddragter – alt til livet på vandet. Se udvalget fra danske webshops samlet ét sted.' ],
	'jagt'            => [ 'intro' => 'Jagttøj, jagtstøvler, optik, vildtkameraer og udstyr til jagthunden fra danske jagt- og outdoorbutikker. Se udvalget samlet ét sted.' ],
	// Underkategorier.
	'telte'           => [ 'intro' => 'Telte til en til otte personer: lette telte til vandring, tunneltelte med plads og familietelte til campingpladsen. Kig på vægt, vandsøjle og hvor hurtigt teltet er slået op.' ],
	'soveposer'       => [ 'intro' => 'Dun- og fibersoveposer til sommer, forår, efterår og vinter. Vælg efter komforttemperaturen – ikke ekstremtemperaturen – og efter vægt og pakstørrelse.' ],
	'vintersoveposer' => [ 'intro' => 'Soveposer til vinter og frost i dun og fiber. Vælg en komforttemperatur et par grader under den koldeste nat, du forventer – og husk et isolerende liggeunderlag.' ],
	'vinterliggeunderlag' => [ 'intro' => 'Liggeunderlag til vinter med høj R-værdi, så kulden fra frossen jord eller sne ikke trænger op. Til vintercamping bør R-værdien være mindst 4–5.' ],
	'liggeunderlag'   => [ 'intro' => 'Liggeunderlag, selvoppustelige måtter og luftmadrasser. R-værdien fortæller, hvor godt underlaget isolerer mod kulden fra jorden.' ],
	'haengekoejer'    => [ 'intro' => 'Hængekøjer til haven og turen – med og uden myggenet, plus stropper og tarp til at sove ude.' ],
	'vandrerygsaekke' => [ 'intro' => 'Vandrerygsække til ture over flere dage. Et justerbart bæresystem og et godt hoftebælte flytter vægten fra skuldrene til hofterne.' ],
	'dagsrygsaekke'   => [ 'intro' => 'Dagsrygsække til dagture, pendling og byferie – typisk 15 til 35 liter.' ],
	'vandrestoevler'  => [ 'intro' => 'Vandrestøvler med høj skaft, der støtter anklen i ujævnt terræn. Prøv dem med de strømper, du skal gå i, og gå dem til før den lange tur.' ],
	'jakker'          => [ 'intro' => 'Skaljakker, softshell, dunjakker og isolerede jakker til tur og hverdag.' ],
	'regntoej'        => [ 'intro' => 'Regnjakker, regnbukser og ponchoer. Vandsøjle og åndbarhed afgør, hvor tør du holder dig – både udefra og indefra.' ],
	'pandelamper'     => [ 'intro' => 'Pandelamper til løb, camping og vandring – med genopladeligt batteri eller almindelige batterier.' ],
	'stormkoekken'    => [ 'intro' => 'Stormkøkkener, gasbrændere og spritbrændere til madlavning på tur.' ],
	'fiskestaenger'   => [ 'intro' => 'Spinnestænger, fluestænger, havstænger og teleskopstænger. Vælg længde og kastevægt efter fiskeriet og agnen.' ],
];
