<?php
/**
 * Håndskrevne produkttekster (content/product-texts.php): skrevet ud fra feed-data efter de samme regler som
 * AiWriter (kun fakta fra dataene, kort og unik tekst). Lægges på produkterne efter udrulning i portioner via cron.
 * Produktet findes via EAN i tilbudstabellen. En tekst, der allerede er godkendt (fra AI-jobbet eller redaktøren),
 * røres ikke; AI-jobbet springer produkter med tekst over (_pf_ai_status = approved).
 */

defined( 'ABSPATH' ) || exit;

const PLAYFORM_PRODUCT_TEXTS_HOOK = 'playform_apply_product_texts';

/** Planlæg en kørsel, når filen er ny eller ændret. */
add_action(
	'init',
	static function (): void {
		$file = get_template_directory() . '/content/product-texts.php';
		if ( ! is_readable( $file ) ) {
			return;
		}
		$stamp = (string) filemtime( $file ) . ':' . filesize( $file );
		if ( get_option( 'playform_product_texts_stamp' ) === $stamp ) {
			return; // billig kontrol pr. visning – md5 kun når filen er ændret
		}
		$hash = md5_file( $file );
		update_option( 'playform_product_texts_stamp', $stamp, false );
		if ( get_option( 'playform_product_texts_hash' ) === $hash ) {
			return;
		}
		update_option( 'playform_product_texts_hash', $hash, false );
		update_option( 'playform_product_texts_pos', 0, false );
		if ( ! wp_next_scheduled( PLAYFORM_PRODUCT_TEXTS_HOOK ) ) {
			wp_schedule_single_event( time() + 60, PLAYFORM_PRODUCT_TEXTS_HOOK );
		}
	},
	30
);

add_action(
	PLAYFORM_PRODUCT_TEXTS_HOOK,
	static function (): void {
		$file = get_template_directory() . '/content/product-texts.php';
		if ( ! is_readable( $file ) || ! class_exists( '\Playform\Feeds\Offers' ) ) {
			return;
		}
		$list  = (array) require $file;
		$pos   = (int) get_option( 'playform_product_texts_pos', 0 );
		global $wpdb;
		$table = \Playform\Feeds\Offers::table();
		$done  = (int) get_option( 'playform_product_texts_applied', 0 );
		$t0    = microtime( true );
		// Portioner, der kun består af tekster, som allerede er lagt på, springes over i samme kørsel (højst ca. 20 sek.),
		// så nye tekster sidst i filen ikke venter på én cron-kørsel pr. portion.
		do {
		$before = $done;
		$batch  = array_slice( $list, $pos, 150 );
		foreach ( $batch as $t ) {
			$eans = array_values( array_filter( array_map( 'strval', (array) ( $t['eans'] ?? [] ) ) ) );
			if ( ! $eans || empty( $t['html'] ) ) {
				continue;
			}
			$in  = implode( ',', array_fill( 0, count( $eans ), '%s' ) );
			$pid = (int) $wpdb->get_var( $wpdb->prepare( "SELECT product_id FROM $table WHERE ean IN ($in) AND product_id > 0 ORDER BY id LIMIT 1", ...$eans ) ); // phpcs:ignore
			if ( ! $pid || get_post_meta( $pid, '_pf_ai_status', true ) === 'approved' ) {
				continue;
			}
			$html = wp_kses( (string) $t['html'], [ 'p' => [], 'ul' => [], 'li' => [], 'strong' => [] ] );
			wp_update_post( [ 'ID' => $pid, 'post_content' => $html ] );
			update_post_meta( $pid, '_pf_ai_status', 'approved' );
			update_post_meta( $pid, '_pf_ai_version', 3 );
			update_post_meta( $pid, '_pf_ai_date', current_time( 'mysql' ) );
			update_post_meta( $pid, '_pf_text_source', 'redaktion' );
			if ( method_exists( '\Playform\Feeds\AiWriter', 'index_text' ) ) {
				\Playform\Feeds\AiWriter::index_text( $pid, $html );
			}
			++$done;
		}
		update_option( 'playform_product_texts_applied', $done, false );
		$pos += count( $batch );
		update_option( 'playform_product_texts_pos', $pos, false );
		} while ( $pos < count( $list ) && $done === $before && ( microtime( true ) - $t0 ) < 20 );
		if ( $pos < count( $list ) ) {
			wp_schedule_single_event( time() + 30, PLAYFORM_PRODUCT_TEXTS_HOOK );
		}
	}
);
