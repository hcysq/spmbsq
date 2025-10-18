<?php
/**
 * Helper functions for ysq-lp-theme.
 *
 * @package ysq-lp-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Retrieve a theme option stored via the Customizer.
 *
 * @param string $key     Option key suffix.
 * @param mixed  $default Default fallback value.
 *
 * @return string
 */
function ysq_lp_get_option( $key, $default = '' ) {
    $value = get_theme_mod( 'ysq_lp_' . $key, $default );

    if ( is_string( $value ) ) {
        return trim( $value );
    }

    return $value;
}

/**
 * Retrieve CTA URLs with graceful defaults.
 *
 * @return array
 */
function ysq_lp_get_cta_links() {
    return [
        'whatsapp' => esc_url( ysq_lp_get_option( 'cta_whatsapp_url' ) ),
        'form'     => esc_url( ysq_lp_get_option( 'cta_form_url' ) ),
    ];
}

/**
 * Retrieve the footer information used across the landing page template.
 *
 * @return array
 */
function ysq_lp_get_footer_info() {
    $yayasan_logo = esc_url( ysq_lp_get_option( 'footer_logo_url' ) );

    return [
        'address'      => wp_kses_post( ysq_lp_get_option( 'footer_address' ) ),
        'logo'         => $yayasan_logo,
        'yayasan_logo' => $yayasan_logo,
        'izin_badge'   => esc_url( ysq_lp_get_option( 'footer_izin_badge_url' ) ),
    ];
}

/**
 * Get the configured video URL for hero or gallery sections.
 *
 * @return string
 */
function ysq_lp_get_video_url() {
    return esc_url( ysq_lp_get_option( 'video_url' ) );
}
