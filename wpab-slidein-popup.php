<?php
/**
 * Plugin Name: WP Attention Bar
 * Plugin URI: https://github.com/actuallymentor/
 * Description: A pretty attention bar effect for signups
 * Version: 1.0.0
 * Author: Mentor Palokaj
 * Author URI: https://www.skillcollector.com
 * License: MIT
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

$wpab_config = include( __DIR__ . '/wpab_vars.php');

if ( is_admin() ){
	/////////////////////////
	//// options page
	/////////////////////////
	include( __DIR__ . '/functions/admin.php');
}

////////////////
//// Admin and print css
////////////////
include( __DIR__ . '/functions/css.php');

////////////////
//// Cookie js
////////////////
function wpab_cookieJs() {
	wp_enqueue_script( 'cookie-js', plugins_url('/includes/js.cookie.js', __FILE__), array(), '2.0.3', true );
}
add_action( 'wp_enqueue_scripts', 'wpab_cookieJs' );

////////////////
//// Popper
////////////////
function wpab_pop() {
	wp_enqueue_script( 'wbap-pop', plugins_url('/includes/popper.js', __FILE__), ['jquery'], '2.0.3', true );
}
add_action( 'wp_enqueue_scripts', 'wpab_pop' );


////////////////
//// Functionality
////////////////
include( __DIR__ . '/functions/popper.php');
?>