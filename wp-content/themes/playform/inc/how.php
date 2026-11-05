<?php
/**
 * Siden "Sådan fungerer {navn}" (/saadan-fungerer-det/): hvor produkterne kommer fra (butikkernes egne feeds via
 * Partner-ads), hvordan vi tjener penge, og hvad loven siger om at vise mærkevarer. Ejerens ønske 5. nov. 2026:
 * en side, han kan sende til butikker og leverandører, der spørger, om vi må vise produkterne.
 * Teksten ligger her i koden (ikke i databasen). Den er bevidst formuleret forskelligt på hvert site (samme fakta),
 * så søgemaskiner ikke ser dublet-indhold på tværs af domænerne. Ret fakta på alle sites, men kopiér ikke teksten.
 */

defined( 'ABSPATH' ) || exit;

const PLAYFORM_HOW_SLUG = 'saadan-fungerer-det';

function playform_how_url( string $anchor = '' ): string {
	return home_url( '/' . PLAYFORM_HOW_SLUG . '/' ) . ( $anchor !== '' ? '#' . $anchor : '' );
}

function playform_how_title(): string {
	return 'Sådan fungerer ' . playform_site( 'name' );
}

/** Opretter siden, hvis den mangler (kaldes efter hver udrulning). Indholdet skrives af skabelonen. */
function playform_ensure_how_page(): void {
	$page = get_page_by_path( PLAYFORM_HOW_SLUG );
	if ( ! $page ) {
		wp_insert_post(
			[
				'post_type'    => 'page',
				'post_status'  => 'publish',
				'post_name'    => PLAYFORM_HOW_SLUG,
				'post_title'   => playform_how_title(),
				'post_excerpt' => 'Sådan kommer udstyret på siden, sådan tjener vi penge, og derfor er det lovligt.',
				'post_content' => '',
			]
		);
	} else {
		$upd = [];
		if ( $page->post_title !== playform_how_title() ) {
			$upd['post_title'] = playform_how_title();
		}
		// Uddraget (bruges som metabeskrivelse) skiftes kun, hvis det stadig er den gamle fælles tekst.
		if ( $page->post_excerpt === 'Hvor produkterne kommer fra, hvordan vi tjener penge, og hvorfor vi må vise dem.' ) {
			$upd['post_excerpt'] = 'Sådan kommer udstyret på siden, sådan tjener vi penge, og derfor er det lovligt.';
		}
		if ( $upd ) {
			wp_update_post( [ 'ID' => $page->ID ] + $upd );
		}
	}
}

function playform_how_html(): string {
	$name   = esc_html( playform_site( 'name' ) );
	$niche  = esc_html( playform_site( 'niche' ) );
	$email  = sanitize_email( playform_site( 'email' ) );
	$mail   = '<a href="mailto:' . esc_attr( $email ) . '">' . esc_html( $email ) . '</a>';
	$shops  = function_exists( 'playform_shop_names' ) ? count( playform_shop_names() ) : 0;
	$shopsl = '<a href="' . esc_url( home_url( '/vores-butikker/' ) ) . '">' . ( $shops > 1 ? "$shops danske webshops" : 'danske webshops' ) . '</a>';
	$money  = esc_url( home_url( '/saadan-tjener-vi-penge/' ) );
	$co     = esc_html( playform_site( 'company' ) . ', CVR ' . playform_site( 'cvr' ) );

	return <<<HTML
<p class="lead">$name sammenligner $niche fra $shopsl – men vi er ikke selv en butik. Der er intet lager, ingen kasse og ingen import bag siden. Det, du ser, er tilbud fra butikkerne, og når du klikker på "Gå til butik", indgår du handlen direkte med den butik, der sælger varen.</p>

<h2 id="penge">Sådan tjener vi penge</h2>
<p>Det koster ikke noget at bruge $name. Køber du noget i en butik, efter at du har klikket videre herfra, får vi en provision af butikken. Den betaler du ikke for: Prisen er den samme for dig. Alle links til butikkerne er derfor annoncer, og vi gør tydeligt opmærksom på, at siden indeholder reklamelinks – læs mere under <a href="$money">Sådan tjener vi penge</a>.</p>
<p>Tilbud er hos os altid butikkernes egne, og de vises i højst 14 dage. Kender vi butikkens pris for de 30 dage før tilbuddet startede, er førprisen den laveste pris i den periode. Ellers står butikkens egen førpris der, tydeligt mærket som butikkens.</p>

<h2 id="feeds">Hvor kommer udstyret fra?</h2>
<p>Det er butikkerne, der leverer produkterne. De laver et produktfeed – en fil med navn, pris, lagerstatus, billeder og beskrivelse af de varer, de vil markedsføre – og sender det ud gennem det danske affiliate-netværk Partner-ads. Feedet findes, for at sider som $name kan vise varerne.</p>
<ul>
<li>Butikken skal have et affiliate-program med produktfeed og have godkendt $name som partner, før dens varer kommer med.</li>
<li>Der vises kun produkter, som butikken har lagt i feedet, og altid med feedets pris og lagerstatus.</li>
<li>Vi opdaterer to gange i døgnet. Retter butikken en pris eller tager den en vare ud af feedet, ses ændringen her efter næste opdatering.</li>
<li>Billeder og data er fra butikkens feed. Billederne ligger på vores egen server – det giver hurtigere sider, og dine besøg bliver ikke delt med andre.</li>
</ul>

<h2 id="leverandoerer">Til leverandører, distributører og mærkeejere</h2>
<p>Vi køber ikke ind og sælger ikke videre. Et produkt på $name er altid et tilbud fra en navngiven dansk butik, som selv har valgt at markedsføre det via sit feed. Hvorvidt en bestemt butik må forhandle en bestemt vare, er derfor noget, leverandøren og butikken må afklare indbyrdes. Forsvinder varen fra butikkens feed, forsvinder den også herfra ved næste opdatering.</p>
<p>Vi omtaler aldrig os selv som forhandler, officiel partner eller autoriseret af et mærke. Et mærkes navn nævnes kun for at gøre det klart, hvilken vare der er tale om.</p>

<h2 id="lovgivning">Hvad siger lovgivningen?</h2>
<p>Vi bliver nogle gange spurgt, om en importør eller distributør kan forhindre, at et mærke bliver vist eller solgt herhjemme. I korte træk: Mærkeejeren kan ikke styre videresalget af originale varer, når de først er solgt lovligt i EU. Her er reglerne, det bygger på:</p>
<h3>Videresalg af originale varer (konsumption)</h3>
<p>Når varemærkeindehaveren – eller en anden med dennes samtykke – har bragt en vare i omsætning i EU/EØS, er varemærkeretten til den konkrete vare opbrugt. Mærkeejeren kan dermed ikke bruge varemærket til at stoppe, at varen videresælges eller markedsføres med mærkets navn. Grundlaget er varemærkelovens § 10 a og artikel 15 i EU's varemærkedirektiv. Undtaget er tilfælde med en rimelig grund, eksempelvis hvis varen er ændret eller forringet.</p>
<h3>Fri bevægelighed i EU</h3>
<p>En vare, der er solgt lovligt i et EU-land, må som hovedregel også sælges i de andre medlemslande (artikel 34 i Traktaten om Den Europæiske Unions Funktionsmåde). Har en distributør eneret til Danmark i en aftale, binder aftalen kun dem, der har skrevet under. Distributøren kan ikke med den forhindre andre i at sælge varer, som er købt lovligt andetsteds i EU.</p>
<h3>Salg og annoncering online</h3>
<p>EU's konkurrenceregler for leverandøraftaler (gruppefritagelsesforordningen for vertikale aftaler, forordning 2022/720) indebærer, at en leverandør som udgangspunkt hverken må forbyde forhandlerne at sælge på nettet eller helt udelukke dem fra en hel annoncekanal, for eksempel prissammenligningstjenester. Kvalitetskrav til præsentationen af varen kan leverandøren godt stille, men det er en sag mellem leverandøren og butikken.</p>
<h3>Mærkenavne og billeder</h3>
<p>Du må gerne bruge et mærkenavn til at angive, hvilken vare der sælges, hvis brugen sker efter god markedsføringsskik og ikke får det til at se ud, som om der er en forbindelse til mærkeejeren, der ikke findes (artikel 14 i EU's varemærkedirektiv). Tekster og billeder hentes fra butikkens eget feed, som butikken stiller til rådighed netop til den slags brug.</p>
<h3>Markedsføring og priser</h3>
<p>Markedsføringsloven kræver, at reklame kan genkendes som reklame, og prismærkningsreglerne kræver, at førprisen ved et tilbud er den laveste pris i de 30 dage forud. Det overholder vi.</p>
<p class="note">Gennemgangen er vejledende og ikke juridisk rådgivning.</p>

<h2 id="kontakt">Skal et produkt fjernes fra siden?</h2>
<p>Mener du – som butik, leverandør eller rettighedshaver – at et produkt, et billede eller en tekst skal væk fra $name, så send en mail til $mail. Vedlæg et link til produktet, og skriv kort hvorfor. Du får hurtigt svar, og vi fjerner indholdet, hvis der er grund til det. Driver du en butik og vil gerne være med, så skriv også.</p>
<p>$name drives af $co.</p>
HTML;
}
