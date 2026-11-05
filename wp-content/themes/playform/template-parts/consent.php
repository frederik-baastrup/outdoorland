<?php
/**
 * Cookie-samtykke: en lille boks i bunden. Vises af JavaScript, kun hvis der ikke er et gyldigt valg.
 * Uden JavaScript sættes og køres intet ikke-nødvendigt.
 */
defined( 'ABSPATH' ) || exit;
$cookie_url = home_url( '/cookies/' );
?>
<div class="cc" id="cookie-banner" data-cc data-version="<?php echo (int) PLAYFORM_CONSENT_VERSION; ?>" tabindex="-1" role="dialog" aria-labelledby="cc-title" aria-describedby="cc-text" hidden>
	<div class="cc__view" data-cc-view="main">
		<h2 class="cc__title" id="cc-title">Cookies på <?php echo esc_html( playform_site( 'name' ) ); ?></h2>
		<p class="cc__text" id="cc-text">De nødvendige cookies sørger for, at siden virker. Cookies til statistik og markedsføring kræver dit ja, før vi sætter dem. Du kan altid ændre valget senere. Læs mere i vores <a href="<?php echo esc_url( $cookie_url ); ?>">cookiepolitik</a>.</p>
		<div class="cc__btns">
			<button type="button" class="cc__btn cc__btn--solid" data-cc-act="reject">Kun nødvendige</button>
			<button type="button" class="cc__btn cc__btn--solid" data-cc-act="accept">Acceptér alle</button>
			<button type="button" class="cc__btn cc__btn--line" data-cc-act="settings">Tilpas</button>
		</div>
	</div>
	<div class="cc__view" data-cc-view="settings" hidden>
		<h2 class="cc__title">Dine cookie-valg</h2>
		<ul class="cc__list">
			<li>
				<span><b>Nødvendige</b><small>Nødvendige for, at siden fungerer – og for at huske dit valg. Kan ikke fravælges.</small></span>
				<span class="cc__sw is-locked" aria-hidden="true"></span>
			</li>
			<li>
				<label for="cc-stat"><b>Statistik</b><small><?php echo class_exists( 'WpMatomo' ) ? 'Vi tæller besøg med Matomo på vores egen server for at se, hvad der bliver brugt. Der deles ingen data med tredjepart.' : 'Hjælper os med at se, hvad der bliver brugt, så siden kan blive bedre. Bruges ikke lige nu.'; ?></small></label>
				<input type="checkbox" id="cc-stat" class="cc__sw" data-cc-cat="statistik" role="switch">
			</li>
			<li>
				<label for="cc-mark"><b>Markedsføring</b><small>Annoncer og målretning. Bruges ikke lige nu.</small></label>
				<input type="checkbox" id="cc-mark" class="cc__sw" data-cc-cat="marketing" role="switch">
			</li>
		</ul>
		<p class="cc__note">Trykker du "Gå til butik", sætter Partner-ads og butikken deres egne cookies på deres egne sider. Det bestemmer du via deres politikker.</p>
		<div class="cc__btns">
			<button type="button" class="cc__btn cc__btn--solid" data-cc-act="reject">Afvis alle</button>
			<button type="button" class="cc__btn cc__btn--solid" data-cc-act="accept">Acceptér alle</button>
			<button type="button" class="cc__btn cc__btn--line" data-cc-act="save">Gem mine valg</button>
		</div>
	</div>
</div>
