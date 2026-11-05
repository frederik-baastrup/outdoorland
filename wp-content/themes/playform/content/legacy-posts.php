<?php
/**
 * Artikler fra det gamle outdoorland.dk, der flyttes 1:1 (samme adresse, tekst, links, dato og billede).
 * Kilden er Internet Archive, da det gamle site ikke længere kan vise sine sider (se playform_import_legacy_posts()).
 * Linkbuilding-artikler (sponsoreret) fra før 2023 springes automatisk over (ejerens valg 5. nov. 2026).
 * Solgte artikler fra 2023 og senere: tekst og links må aldrig ændres, og adressen skal blive.
 * 'hidden' => true: står på sin adresse og i sitemap, men vises ikke i lister (emnet ligger uden for outdoor).
 * De gamle købsguides (telte, hængekøjer, rygsække …) er ikke med her: de skrives om som content/best/ med
 * rigtige produkter fra feedsne, og indtil da peger de gamle adresser på kategorisiderne (playform_legacy_redirects()).
 */
defined( 'ABSPATH' ) || exit;

return [
	// Viden og gode råd
	'gode-raad-til-at-lave-mad-paa-baal'                 => [ 'hidden' => false ],
	'saadan-laver-du-ild-uden-en-lighter'                => [ 'hidden' => false ],
	'saadan-bygger-du-en-toemmerflaade'                  => [ 'hidden' => false ],
	'vandretur-med-din-hund-dette-udstyr-skal-du-have-med' => [ 'hidden' => false ],
	'guide-saadan-vaelger-du-den-rigtige-festivalstol'   => [ 'hidden' => false ],
	// Solgte artikler (2023 og senere) – outdoor-emner vises, andre emner skjules
	'vandring-i-naturen-en-guide-til-uforglemmelige-oplevelser' => [ 'hidden' => false ],
	'faa-store-udendoersoplevelser-ogsaa-selvom-du-ikke-kan-bevaege-dig-udenfor' => [ 'hidden' => false ],
	'find-det-drivhus-som-daekker-dine-behov'            => [ 'hidden' => true ],
	'aktiv-ferie-og-luksus-sommerhus-i-naturskonne-omgivelser' => [ 'hidden' => true ],
	'alt-du-behover-at-vide-om-bilforsikring-i-danmark'  => [ 'hidden' => true ],
];
