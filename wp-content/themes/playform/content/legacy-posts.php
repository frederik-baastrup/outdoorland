<?php
/**
 * Artikler fra det gamle outdoorland.dk, der flyttes 1:1 (samme adresse, tekst, links, dato og billede).
 * Kilden er Internet Archive, da det gamle site ikke længere kan vise sine sider (se playform_import_legacy_posts()).
 * Linkbuilding-artikler (sponsoreret) fra før 2023 springes automatisk over (ejerens valg 5. nov. 2026).
 * Solgte artikler fra 2023 og senere: tekst og links må aldrig ændres, og adressen skal blive.
 * 'sponsored' => true: solgt artikel, der vises i lister – får mærket "Annonce" øverst.
 * 'hidden' => true: står på sin adresse og i sitemap, men vises ikke i lister (emnet ligger uden for outdoor).
 * Bålhytte, shelter (træ-byggesæt), UV-telt til baby, parasoller og terrassevarmer er fjernet 7. nov. 2026 (ingen produkter i feedsne; ejerens valg) og viderestilles. Guides med produkter fra feedsne er skrevet om i content/best/ på samme adresse.
 * 'gode-raad-til-at-lave-mad-paa-baal' var WordPress' tomme eksempelindlæg og er fjernet (playform_legacy_cleanup()).
 */
defined( 'ABSPATH' ) || exit;

return [
	// Viden og gode råd
	'saadan-laver-du-ild-uden-en-lighter'                => [ 'hidden' => false ],
	'saadan-bygger-du-en-toemmerflaade'                  => [ 'hidden' => false ],
	'vandretur-med-din-hund-dette-udstyr-skal-du-have-med' => [ 'hidden' => false ],
	'guide-saadan-vaelger-du-den-rigtige-festivalstol'   => [ 'hidden' => false ],
	// Solgte artikler (2023 og senere) – outdoor-emner vises, andre emner skjules
	'vandring-i-naturen-en-guide-til-uforglemmelige-oplevelser' => [ 'hidden' => false, 'sponsored' => true, 'image' => false ],
	'faa-store-udendoersoplevelser-ogsaa-selvom-du-ikke-kan-bevaege-dig-udenfor' => [ 'hidden' => false, 'sponsored' => true ],
	'find-det-drivhus-som-daekker-dine-behov'            => [ 'hidden' => true ],
	'aktiv-ferie-og-luksus-sommerhus-i-naturskonne-omgivelser' => [ 'hidden' => true ],
	'alt-du-behover-at-vide-om-bilforsikring-i-danmark'  => [ 'hidden' => true ],
];
