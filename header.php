<?php
/**
 * Theme header template.
 *
 * @package ysq-lp-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

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
    <a class="skip-link screen-reader-text" href="#main-content"><?php esc_html_e( 'Skip to content', 'ysq-lp-theme' ); ?></a>
    <header class="ysq-lp-header" role="banner">
        <div class="ysq-lp-header__inner">
            <div class="ysq-lp-header__branding">
                <?php
                if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
                    the_custom_logo();
                } else {
                    ?>
                    <a class="ysq-lp-header__title" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php bloginfo( 'name' ); ?>
                    </a>
                    <?php
                }
                ?>
            </div>
        </div>
    </header>

