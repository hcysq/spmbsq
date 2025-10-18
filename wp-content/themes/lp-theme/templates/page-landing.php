<?php
/**
 * Template Name: YSQ Landing – Conversion (No Header/Footer)
 * Template Post Type: page
 *
 * Full-width landing page template without the default header/footer.
 *
 * @package ysq-lp-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$cta_links    = ysq_lp_get_cta_links();
$footer_info  = ysq_lp_get_footer_info();
$pattern_html = function_exists( 'ysq_lp_get_landing_pattern_content' ) ? ysq_lp_get_landing_pattern_content() : '';
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class( 'ysq-lp-body' ); ?>>
<?php wp_body_open(); ?>
<div class="ysq-lp-page">
    <main class="ysq-lp-main" id="main-content">
        <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();

                $content = trim( get_the_content() );

                if ( '' === $content && $pattern_html ) {
                    echo apply_filters( 'the_content', $pattern_html ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                } else {
                    the_content();
                }
            }
        }
        ?>
    </main>

    <aside class="ysq-lp-sticky-cta" role="complementary" aria-label="Quick actions">
        <div class="ysq-lp-sticky-cta__inner">
            <span class="ysq-lp-sticky-cta__title"><?php esc_html_e( 'Siap bergabung?', 'ysq-lp-theme' ); ?></span>
            <div class="ysq-lp-sticky-cta__buttons">
                <?php if ( ! empty( $cta_links['form'] ) ) : ?>
                    <a class="btn btn-primary cta-form-button" href="<?php echo esc_url( $cta_links['form'] ); ?>" data-track="form">
                        <?php esc_html_e( 'Isi Form Minat', 'ysq-lp-theme' ); ?>
                    </a>
                <?php endif; ?>
                <?php if ( ! empty( $cta_links['whatsapp'] ) ) : ?>
                    <a class="btn btn-outline cta-wa-button" href="<?php echo esc_url( $cta_links['whatsapp'] ); ?>" data-track="whatsapp" target="_blank" rel="noopener">
                        <?php esc_html_e( 'Konsultasi WA', 'ysq-lp-theme' ); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </aside>

    <footer class="ysq-lp-footer" role="contentinfo">
        <div class="ysq-lp-footer__inner">
            <?php if ( ! empty( $footer_info['logo'] ) ) : ?>
                <img class="ysq-lp-footer__logo" src="<?php echo esc_url( $footer_info['logo'] ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
            <?php endif; ?>
            <div class="ysq-lp-footer__address">
                <?php echo wp_kses_post( $footer_info['address'] ); ?>
            </div>
        </div>
    </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
