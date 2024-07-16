<?php
/**
 * Mahdieh Template functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Mahdieh Ahmadi
 * @since Mahdieh Template
 */
if ( ! function_exists( 'MahdiehTemplate_support' ) ) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @since Twenty Twenty-Two 1.0
     *
     * @return void
     */
    function MahdiehTemplate_support() {

        // Add support for block styles.
        add_theme_support( 'wp-block-styles' );

        // Enqueue editor styles.
        add_editor_style( 'style.css' );
    }

endif;

add_action( 'after_setup_theme', 'MahdiehTemplate_support' );
