# Outdoorland – projektnoter til Claude

Outdoorland (outdoorland.dk) er en affiliate-side, der ligner en webshop. Den samler outdoorudstyr – camping, friluftskøkken, rygsække, fodtøj, udstyr, fiskeri og jagt – fra over 30 danske shops via Partner-ads-produktfeeds. Man køber ikke på siden: "Gå til butik" sender brugeren videre til shoppen via et affiliate-link.

Ejer: Frederik Baastrup (Mondae). Al tekst på siden er på dansk.

**Samme kodebase som Kitzhen, Fitbase og Pizzalicious.** Outdoorland startede som en kopi af Pizzalicious 5. nov. 2026. Kodenavnene er bevidst de samme: mappenavne `playform`/`playform-feeds`, namespace `Playform\Feeds`, funktioner `playform_*`, metafelter `_pf_*`, shortcodes `[playform_produkter]` og `[fitbase_…]`. Så kan rettelser flyttes mellem sitesne. Omdøb dem ikke.

Alt, der er særligt for nichen, ligger i `wp-content/plugins/playform-feeds/src/Config.php`. Temaet læser navn, domæne m.m. via `playform_site()`. Skriv aldrig "Outdoorland" direkte i en skabelon.

## Opbygning (det, der er særligt for Outdoorland)

- `Config.php`
  - 33 shops (partnerid 14854), godkendt 5. nov. 2026. Seks programmer kræver en begrundelse og søges, når sitet er online: Outdoortid.dk, Northern Nights, Survivalstore, Jagt Jakt, Thehuntingshop, Sportdres Fiskegrej. Zeejuu (metaldetektorer) er ikke med – uden for nichen.
  - Kategorier: `camping`, `friluftskoekken`, `rygsaekke`, `fodtoej`, `udstyr`, `fiskeri`, `vandsport` (SurfMore + kajakker/SUP fra fiskebutikkerne), `jagt` – med underkategorier. Rækkefølgen betyder noget (specifikt udstyr før tøj).
  - `skip_uncategorized()` = true: varer, der ikke passer i en kategori, kommer slet ikke med (ikke "ukategoriseret").
  - `create_out_of_stock()` = false: nye, udsolgte varer oprettes ikke (tøjbutikkerne har titusindvis). Kendte varer bliver liggende som "ikke på lager".
  - `group_variants` + `variant_strip`: butikker med én række pr. størrelse/farve (Friluftsland, Outdoornu, Pro Outdoor, Friluftslageret, Wolf Tactical …) samles til ét produkt. `variant_strip` er regex, der fjerner størrelse/farve fra navnet (`Importer::strip_variant()`).
  - **Outdoortøj er fjernet** (ejerens valg 7. nov. 2026: fyldte meget – ca. 17.000 produkter – og ranker ikke mod de store tøjbutikker). Tøj, der ikke rammer en anden kategori (jagt, fiskeri …), kommer ikke med. Efter reclassify slettes kategorien med underkategorier (`playform_remove_dropped_categories()`), billeder af produkter uden aktive tilbud slettes (`ImageCache::purge_inactive()`), og gamle adresser sendes til forsiden (`playform_legacy_redirects()`).
  - Udelukket: skydevåben, ammunition og airsoft (luftpistoler og luftgeværer er med under jagt › luftvåben – ejerens ønske, den gamle guide ranker); militær/politi; ski, løb og cykling; campingvogne; have, pool og værksted.
  - Ændres Config.php, sorteres alle tilbud igen automatisk efter udrulningen (`playform_reclassify`, `Importer::reclassify()`; også `wp playform reclassify`).
  - Testet på feedsne 5. nov. 2026: ca. 60.000 produkter på lager i kategorierne (fiskeri ca. 18.000 – meget fluebinding; tøj ca. 17.000).
- `content/legacy-posts.php` + `playform_import_legacy_posts()` (`inc/setup.php`): det gamle outdoorland.dk kan ikke vise sine sider (WordPress-fejl), så artiklerne hentes fra **Internet Archive** (`web.archive.org/web/2026id_/…`): samme adresse, tekst, links, dato og billede (billeder hentes til egen server). Sponsorerede artikler fra før 2023 springes over (ejerens valg). Solgte artikler fra 2023+: tekst og links må aldrig ændres. `hidden` = vises ikke i lister. En kopi af den hentede HTML gemmes i `uploads/playform/legacy-posts/`.
- Købsguides (`content/best/<slug>.php`) ligger på de gamle adresser uden "bedste-" (fx `/gaskoeleskab/`, `/luftpistol/`, `/8-personers-telt/`, `/lille-grill-transportabel/`) – de ranker i dag (ejerens ønske). Kun `/bedste-luftmadras-test/` → `/bedste-luftmadras/`. Alle købsguides følger den normale skabelon. Gamle guides uden matchende produkter i feedsne (bålhytte, shelter i træ, parasoller, terrassevarmer, UV-telt til baby) er fjernet 7. nov. 2026 (ejerens valg) og viderestilles i `playform_legacy_redirects()`; udendørs pejs (→ bålfade) og babyhængekøje er skrevet om med produkter. `playform_seed_best()` erstatter en 1:1-flyttet artikel med den omskrevne guide på samme adresse. Nye telt-guides: 1–6 personers, familietelt, kuppeltelt, tunneltelt, tipitelt, bomuldstelt, letvægtstelt, festivaltelt. Gaskøleskab: ingen gaskøleskabe i feedsne endnu – guiden viser kompressor- og 12/230 V-kølebokse som alternativ.
- Accentfarve `#47763A` (klarere skovgrøn til knapper, ejerens ønske 7. nov. 2026; logoet bruger #627358 og "land" i #3E4A38) med hvid tekst. Alle primære knapper er grønne. Logoet er bredt (ca. 10:1), så det har lav højde i CSS (sidst i `main.css`).
- Forsiden: "Sæsonens udstyr" (skifter med måneden) i `template-parts/outdoor-front.php`. Menuikoner (`playform_menu_icons()`). Sidefod i mørk skovgrøn uden mønstre (ejeren fravalgte højdekurver, bjergkam og "Find udstyr til din tur" 5. nov. 2026). Gamle guides vises uden "test"-ord (`playform_no_test_claims()` i `inc/best.php`; solgte artikler røres ikke).
- Kategoribilleder fra Pexels: camping 4268094, friluftskoekken 4909071, rygsaekke 34207690, outdoortoej 35746663, fodtoej 32189248, udstyr 12106791, fiskeri 36917549, jagt 6204831, vandsport 5704472.
- Søgemaskiner er slået fra på det midlertidige domæne (`playform_launch()`) og slås til, når `playform_move_domain()` flytter sitet til outdoorland.dk.

## Vigtige regler

Samme som Kitzhen og Fitbase: butikkernes egne tilbud (højst 14 dage), AI må aldrig opfinde fakta, affiliate-links med `rel="sponsored nofollow"` gennem `playform_aff_url()`, ingen produkter uden billede, ingen tredjepartskald fra den offentlige side, redaktørens rettelser vinder, guides påstår aldrig egen test. Siden "Sådan fungerer Outdoorland" (`inc/how.php`) forklarer feeds, provision og lovgivning – til butikker og leverandører, der spørger.

## Udrulning

Hvert push til `main` udrulles via GitHub Actions (FTPS) til SiteGround: `frederikb12.sg-host.com/public_html`. Kræver secrets `FTP_SERVER`, `FTP_USERNAME`, `FTP_PASSWORD`. Når domænet skiftes til outdoorland.dk i SiteGround, finder udrulningen selv den nye mappe og FTP-kontoen (`@outdoorland.dk`).

Cronjobs på SiteGround:

```
30 5,17 * * *  cd /home/customer/www/frederikb12.sg-host.com/public_html && wp playform import --quiet
*/5 * * * *    cd /home/customer/www/frederikb12.sg-host.com/public_html && wp cron event run --due-now --quiet
```

## Statistik

Matomo via WordPress-pluginnet "Matomo Analytics" – `inc/consent.php` er klar (cookiefri indtil samtykke).

**SEO i købsguides (ejerens ønske 5. nov. 2026):** folk søger "bedste <søgeord>" og "<søgeord> test". `playform_guide_keyword()` (`keyword` i artikelfilen, ellers titlen før kolon) giver titlen "Bedste <søgeord>: …", sidetitlen "Bedste <søgeord> <år> → Se vores top N", "bedste <søgeord>" i kort-fortalt og sammenligningen, og nederst afsnittet "<Søgeord> test – er det her en test?" (`playform_guide_test_note()`), der ærligt siger, at det ikke er en test. Kun dér må ordet "test" stå; aldrig "testvinder", "bedst i test" som påstand eller lignende.
