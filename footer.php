<?php
/**
 * Theme footer template.
 *
 * @package ysq-lp-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$footer_info = function_exists( 'ysq_lp_get_footer_info' ) ? ysq_lp_get_footer_info() : [];
$yayasan_logo = $footer_info['yayasan_logo'] ?? $footer_info['logo'] ?? '';
$izin_badge   = $footer_info['izin_badge'] ?? '';
$address      = $footer_info['address'] ?? '';
?>
    <footer class="ysq-lp-footer" role="contentinfo">
        <div class="ysq-lp-footer__inner">
            <?php if ( ! empty( $yayasan_logo ) ) : ?>
                <img class="ysq-lp-footer__logo" src="<?php echo esc_url( $yayasan_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
            <?php endif; ?>

            <?php if ( ! empty( $izin_badge ) ) : ?>
                <img class="ysq-lp-footer__badge" src="<?php echo esc_url( $izin_badge ); ?>" alt="<?php esc_attr_e( 'Izin Operasional', 'ysq-lp-theme' ); ?>">
            <?php endif; ?>

            <?php if ( ! empty( $address ) ) : ?>
                <div class="ysq-lp-footer__address">
                    <?php echo wp_kses_post( $address ); ?>
                </div>
            <?php endif; ?>
        </div>
    </footer>
</div><!-- .ysq-lp-page -->
<?php wp_footer(); ?>
</body>
</html>
