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
function  my_theme_enqueue_styles() {
	/* style bootstrap */
	wp_enqueue_style( 'bootstrap-css',  get_template_directory_uri() .'assets/css/bootstrap.min.css' );
	/* font css bootstrap */
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() .'assets/css/font-awesome.min.css' );
	/* js bootstrap*/
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

