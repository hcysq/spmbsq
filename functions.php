<?php
/**
 * Theme bootstrap file for ysq-lp-theme.
 *
 * @package ysq-lp-theme
 */

define( 'YSQ_LP_THEME_VERSION', '1.0.0' );

define( 'YSQ_LP_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'YSQ_LP_THEME_URI', trailingslashit( get_template_directory_uri() ) );

require_once YSQ_LP_THEME_DIR . 'inc/helpers.php';

add_action( 'after_setup_theme', 'ysq_lp_setup_theme' );
/**
 * Set up theme defaults and supports.
 */
function ysq_lp_setup_theme() {
    load_theme_textdomain( 'ysq-lp-theme', YSQ_LP_THEME_DIR . 'languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'assets/css/landing.css' );
}

add_action( 'wp_enqueue_scripts', 'ysq_lp_enqueue_assets' );
/**
 * Enqueue landing page assets conditionally.
 */
function ysq_lp_enqueue_assets() {
    if ( is_page_template( 'templates/page-landing.php' ) ) {
        $cta_links = ysq_lp_get_cta_links();
        $video_url = ysq_lp_get_video_url();

        wp_enqueue_style(
            'ysq_lp_landing_css',
            YSQ_LP_THEME_URI . 'assets/css/landing.css',
            [],
            YSQ_LP_THEME_VERSION
        );

        wp_enqueue_script(
            'ysq_lp_landing_js',
            YSQ_LP_THEME_URI . 'assets/js/landing.js',
            [],
            YSQ_LP_THEME_VERSION,
            true
        );

        wp_script_add_data( 'ysq_lp_landing_js', 'defer', true );

        wp_localize_script(
            'ysq_lp_landing_js',
            'ysqLpTheme',
            [
                'cta'      => array_filter( $cta_links ),
                'videoUrl' => $video_url,
            ]
        );
    }
}

add_action( 'customize_register', 'ysq_lp_customize_register' );
/**
 * Register Customizer settings for landing page CTAs.
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function ysq_lp_customize_register( $wp_customize ) {
    $wp_customize->add_section(
        'ysq_lp_cta_section',
        [
            'title'       => __( 'Landing Page Settings', 'ysq-lp-theme' ),
            'priority'    => 30,
            'description' => __( 'Control CTA links and assets used by the landing page template.', 'ysq-lp-theme' ),
        ]
    );

    $settings = [
        'cta_whatsapp_url' => [
            'label' => __( 'CTA WhatsApp URL', 'ysq-lp-theme' ),
            'type'  => 'url',
        ],
        'cta_form_url'     => [
            'label' => __( 'CTA Form URL', 'ysq-lp-theme' ),
            'type'  => 'url',
        ],
        'video_url'        => [
            'label' => __( 'Video URL (optional)', 'ysq-lp-theme' ),
            'type'  => 'url',
        ],
        'footer_address'   => [
            'label' => __( 'Footer Address', 'ysq-lp-theme' ),
            'type'  => 'textarea',
        ],
        'footer_logo_url'       => [
            'label' => __( 'Footer Logo URL', 'ysq-lp-theme' ),
            'type'  => 'url',
        ],
        'footer_izin_badge_url' => [
            'label' => __( 'Izin Operasional Badge URL', 'ysq-lp-theme' ),
            'type'  => 'url',
        ],
    ];

    foreach ( $settings as $key => $args ) {
        $wp_customize->add_setting(
            'ysq_lp_' . $key,
            [
                'default'           => '',
                'sanitize_callback' => 'textarea' === $args['type'] ? 'wp_kses_post' : 'esc_url_raw',
            ]
        );

        $control_args = [
            'label'    => $args['label'],
            'section'  => 'ysq_lp_cta_section',
            'settings' => 'ysq_lp_' . $key,
            'type'     => $args['type'],
        ];

        $wp_customize->add_control( 'ysq_lp_' . $key, $control_args );
    }
}

add_action( 'init', 'ysq_lp_register_block_patterns' );
/**
 * Register pattern category and include pattern definitions.
 */
function ysq_lp_register_block_patterns() {
    if ( function_exists( 'register_block_pattern_category' ) ) {
        register_block_pattern_category(
            'ysq-lp-theme',
            [
                'label' => __( 'YSQ Landing Patterns', 'ysq-lp-theme' ),
            ]
        );
    }

    $pattern = YSQ_LP_THEME_DIR . 'patterns/landing-conversion.php';
    if ( file_exists( $pattern ) ) {
        require_once $pattern;
    }
}

add_filter( 'theme_page_templates', 'ysq_lp_register_page_template', 10, 3 );
/**
 * Ensure the landing page template is available in the page templates dropdown.
 *
 * @param array        $post_templates Existing templates.
 * @param WP_Theme     $theme          Current theme object.
 * @param WP_Post|null $post           Current post.
 *
 * @return array
 */
function ysq_lp_register_page_template( $post_templates, $theme, $post ) {
    $post_templates['templates/page-landing.php'] = __( 'YSQ Landing – Conversion (No Header/Footer)', 'ysq-lp-theme' );
    return $post_templates;
}
