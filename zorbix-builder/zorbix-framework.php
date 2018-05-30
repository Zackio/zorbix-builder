<?php
/*
Plugin Name: Zorbix Framework
Plugin URI: http://themeforest.net/user/zorbix/portfolio
Description: Framework & shortcodes for the pixo theme
Version: 0.3.3
Author: Zackary Allnutt
*/

register_activation_hook( __FILE__, 'zorbix_deactivate_old_version' );

function zorbix_deactivate_old_version() {
	$old_plugin = str_replace( 'zorbix-framework2', 'zorbix-framework', ZORBIX_PLUGIN_DIR );
	deactivate_plugins( $old_plugin . 'zorbix-framework.php' );
}
add_action( 'plugins_loaded', 'zorbix_framework' );

function zorbix_framework() {

	define( 'ZORBIX_VERSION', '0.3.3' );
	define( 'ZORBIX_PLUGIN_DIR', trailingslashit( plugin_dir_path( __FILE__ ) ) );
	define( 'ZORBIX_PLUGIN_URI', trailingslashit( plugin_dir_url( __FILE__ ) ) );
	define( 'ZORBIX_BUILDER_URI', ZORBIX_PLUGIN_URI . 'builder/' );
	define( 'ZORBIX_PLUGIN_SHORTCODE_DIR', ZORBIX_PLUGIN_DIR . 'sc/' );
	define( 'ZORBIX_PLUGIN_CLASSES_DIR', ZORBIX_PLUGIN_DIR . 'classes/' );
	define( 'ZORBIX_PLUGIN_CPT_CLASSES_DIR', ZORBIX_PLUGIN_DIR . 'post_types/classes/' );
	define( 'ZORBIX_NO_IMAGE', ZORBIX_PLUGIN_URI . 'img/no_image.png' );
	define( 'ZORBIX_IMG', ZORBIX_PLUGIN_URI . 'img/' );
	define( 'ZORBIX_IMG_DIR', ZORBIX_PLUGIN_DIR . 'img/' );
	define( 'ZORBIX_CSS', ZORBIX_PLUGIN_URI . 'css/' );
	define( 'ZORBIX_JS', ZORBIX_PLUGIN_URI . 'js/' );
	define( 'ZORBIX_DEBUG', false );
	define( 'ZORBIX_PREFIX', 'pixo_' );
	define( 'ZORBIX_THEMENAME', 'pixo' );


	require ZORBIX_PLUGIN_DIR . 'zx-functions.php';

	include ZORBIX_PLUGIN_CLASSES_DIR . 'zorbix.php';
	include ZORBIX_PLUGIN_CLASSES_DIR . 'maps.php';
	include ZORBIX_PLUGIN_CLASSES_DIR . 'zorbix_builder.php';
	include ZORBIX_PLUGIN_CLASSES_DIR . 'zorbix_update_checker.class.php';
	include ZORBIX_PLUGIN_CLASSES_DIR . 'zorbix_support.class.php';

	include ZORBIX_PLUGIN_CLASSES_DIR . 'zorbix_img.class.php';
	include ZORBIX_PLUGIN_CLASSES_DIR . 'zorbix_sc.class.php';


	zorbix_autoload_directories( array(
			ZORBIX_PLUGIN_SHORTCODE_DIR
	) );

	// Builder Maps
	include ZORBIX_PLUGIN_DIR . 'builder_maps/section.map.php';
	include ZORBIX_PLUGIN_DIR . 'builder_maps/text.map.php';
	include ZORBIX_PLUGIN_DIR . 'builder_maps/row.map.php';


// Load framework CSS
	if ( ! function_exists( 'zorbix_load_admin_scripts' ) ) {
		add_action( 'admin_enqueue_scripts', 'zorbix_load_admin_scripts' );
		function zorbix_load_admin_scripts() {
			wp_enqueue_style( 'font-awesome', ZORBIX_CSS . 'font-awesome.min.css' );
			wp_enqueue_style( 'zorbix_css', ZORBIX_CSS . 'framework.css', '', ZORBIX_VERSION );
			wp_enqueue_script( ZORBIX_PREFIX . 'zorbix_js', ZORBIX_JS . '/framework.js', array( 'jquery' ), ZORBIX_VERSION );
		}

	}

}
