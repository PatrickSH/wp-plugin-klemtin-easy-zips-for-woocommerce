<?php
/**
 * Plugin Name: Klementin Woo Zips
 * Description: This plugin prefills woocommerce cities based on the inputted zip code.
 * Version: 1.0
 * Author: Klementin
 * Author URI: https://klementin.dk
 */

//No direct calls allowed
if ( ! function_exists( 'add_action' ) ) {
	exit;
}

require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

define( 'KLEMENTIN_WOO_ZIP_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
require_once( KLEMENTIN_WOO_ZIP_PLUGIN_DIR . 'includes/klementin-wp-autoloader.php' );

require_once( KLEMENTIN_WOO_ZIP_PLUGIN_DIR . 'class-klementin-woo-zips-search.php' );
require_once( KLEMENTIN_WOO_ZIP_PLUGIN_DIR . 'class-klementin-woo-zips-init.php' );

Klementin_Woo_Zips_init::init();