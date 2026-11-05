<?php
/**
 * Artikler fra det gamle outdoorland.dk, der flyttes 1:1 (samme adresse, tekst, links, dato og billede).
 * Kilden er Internet Archive, da det gamle site ikke længere kan vise sine sider (se playform_import_legacy_posts()).
 * Linkbuilding-artikler (sponsoreret) fra før 2023 springes automatisk over (ejerens valg 5. nov. 2026).
 * Solgte artikler fra 2023 og senere: tekst og links må aldrig ændres, og adressen skal blive.
 * 'hidden' => true: står på sin adresse og i sitemap, men vises ikke i lister (emnet ligger uden for outdoor).
 * Gamle købsguides, som butikkerne ikke har produkter til (bålhytte, shelter, parasoller …), flyttes også 1:1 (ejerens ønske
 * 5. nov. 2026: alt genbruges). Guides med produkter fra feedsne er skrevet om i content/best/ på samme adresse.
 * 'gode-raad-til-at-lave-mad-paa-baal' var WordPress' tomme eksempelindlæg og er fjernet (playform_legacy_cleanup()).
 */
defined( 'ABSPATH' ) || exit;

return [
	// Viden og gode råd
	'saadan-laver-du-ild-uden-en-lighter'                => [ 'hidden' => false ],
	'saadan-bygger-du-en-toemmerflaade'                  => [ 'hidden' => false ],
	'vandretur-med-din-hund-dette-udstyr-skal-du-have-med' => [ 'hidden' => false ],
	'guide-saadan-vaelger-du-den-rigtige-festivalstol'   => [ 'hidden' => false ],
	// Gamle købsguides uden produkter i feedsne (samme adresse, samme tekst). Babyhængekøje og udendørs pejs er
	// skrevet om i content/best/ med produkter fra feedsne.
	'baalhytte'                                          => [ 'hidden' => false, 'cat' => 'Købsguides' ],
	'shelter'                                            => [ 'hidden' => false, 'cat' => 'Købsguides' ],
	'uv-telt-baby'                                       => [ 'hidden' => false, 'image' => false, 'cat' => 'Købsguides' ],
	'parasol-firkantet'                                  => [ 'hidden' => false, 'image' => false, 'cat' => 'Købsguides' ],
	'parasol-med-tilt'                                   => [ 'hidden' => false, 'image' => false, 'cat' => 'Købsguides' ],
	'terrassevarmer'                                     => [ 'hidden' => false, 'cat' => 'Købsguides' ],
	// Solgte artikler (2023 og senere) – outdoor-emner vises, andre emner skjules
	'vandring-i-naturen-en-guide-til-uforglemmelige-oplevelser' => [ 'hidden' => false, 'image' => false ],
	'faa-store-udendoersoplevelser-ogsaa-selvom-du-ikke-kan-bevaege-dig-udenfor' => [ 'hidden' => false ],
	'find-det-drivhus-som-daekker-dine-behov'            => [ 'hidden' => true ],
	'aktiv-ferie-og-luksus-sommerhus-i-naturskonne-omgivelser' => [ 'hidden' => true ],
	'alt-du-behover-at-vide-om-bilforsikring-i-danmark'  => [ 'hidden' => true ],
];
