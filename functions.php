<?php
/**
 * Designify file includes and definitions
 *
 * @package Designify
 */

if ( ! defined( 'DESIGNIFY_VERSION' ) ) {
	define( 'DESIGNIFY_VERSION', 1.0 );
}
if ( ! defined( 'DESIGNIFY_TEMP_DIR' ) ) {
	define( 'DESIGNIFY_TEMP_DIR', untrailingslashit( get_template_directory() ) );
}
if ( ! defined( 'DESIGNIFY_BUILD_URI' ) ) {
	define( 'DESIGNIFY_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build' );
}
if ( ! defined( 'DESIGNIFY_BUILD_DIR' ) ) {
	define( 'DESIGNIFY_BUILD_DIR', untrailingslashit( get_template_directory() ) . '/assets/build' );
}

require_once DESIGNIFY_TEMP_DIR . '/inc/helpers/autoloader.php';
require_once DESIGNIFY_TEMP_DIR . '/inc/helpers/custom-functions.php';
require_once DESIGNIFY_TEMP_DIR . '/inc/helpers/template-tags.php';

/**
 * Undocumented function
 *
 * @return void
 */
function designify_s_scripts() {
	wp_enqueue_style( 'my-style', get_stylesheet_uri(), array(), '1.0' );
	wp_enqueue_style( 'fa-style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7' );
	wp_enqueue_script( 'my-script', get_template_directory_uri() . '/script.js', array(), 1.1, true );

}
add_action( 'wp_enqueue_scripts', 'designify_s_scripts' );


/**
 * Get designify instance.
 *
 * @return object \DESIGNIFY\Inc\DESIGNIFY
 */
function designify_get_theme_instance() {
	return DESIGNIFY\Inc\DESIGNIFY::get_instance();
}

designify_get_theme_instance();
