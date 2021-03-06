<?php
/**
 * @Packge       : Colorlib
 * @Version      : 1.0
 * @Author       : Colorlib
 * @Author       URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */

// Base URI
if ( ! defined( 'FINLOANS_DIR_URI' ) ) {
	define( 'FINLOANS_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'FINLOANS_DIR_ASSETS_URI' ) ) {
	define( 'FINLOANS_DIR_ASSETS_URI', FINLOANS_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'FINLOANS_DIR_CSS_URI' ) ) {
	define( 'FINLOANS_DIR_CSS_URI', FINLOANS_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'FINLOANS_DIR_JS_URI' ) ) {
	define( 'FINLOANS_DIR_JS_URI', FINLOANS_DIR_ASSETS_URI . 'js/' );
}

// Images URI
if ( ! defined( 'FINLOANS_DIR_IMGS_URI' ) ) {
	define( 'FINLOANS_DIR_IMGS_URI', FINLOANS_DIR_ASSETS_URI . 'img/' );
}

// Icon Images
if ( ! defined( 'FINLOANS_DIR_ICON_IMG_URI' ) ) {
	define( 'FINLOANS_DIR_ICON_IMG_URI', FINLOANS_DIR_ASSETS_URI . 'img/icon/' );
}

// Base Directory
if ( ! defined( 'FINLOANS_DIR_PATH' ) ) {
	define( 'FINLOANS_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'FINLOANS_DIR_PATH_INC' ) ) {
	define( 'FINLOANS_DIR_PATH_INC', FINLOANS_DIR_PATH . 'inc/' );
}

//Finloans Libraries Folder Directory
if ( ! defined( 'FINLOANS_DIR_PATH_LIBS' ) ) {
	define( 'FINLOANS_DIR_PATH_LIBS', FINLOANS_DIR_PATH_INC . 'libraries/' );
}

//Classes Folder Directory
if ( ! defined( 'FINLOANS_DIR_PATH_CLASSES' ) ) {
	define( 'FINLOANS_DIR_PATH_CLASSES', FINLOANS_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'FINLOANS_DIR_PATH_HOOKS' ) ) {
	define( 'FINLOANS_DIR_PATH_HOOKS', FINLOANS_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function finloans_admin_script(){
    wp_enqueue_style( 'finloans-admin', get_template_directory_uri().'/assets/css/finloans-admin.css', false, '1.0.0' );
    // wp_enqueue_script( 'finloans_admin', get_template_directory_uri().'/assets/js/finloans-admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'finloans_admin_script' );



/**
 * Include File
 *
 */
require_once( FINLOANS_DIR_PATH_INC . 'finloans-breadcrumbs.php' );
require_once( FINLOANS_DIR_PATH_INC . 'finloans-widgets-reg.php' );
require_once( FINLOANS_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( FINLOANS_DIR_PATH_INC . 'post-like.php' );
require_once( FINLOANS_DIR_PATH_INC . 'finloans-functions.php' );
require_once( FINLOANS_DIR_PATH_INC . 'finloans-commoncss.php' );
require_once( FINLOANS_DIR_PATH_INC . 'support-functions.php' );
require_once( FINLOANS_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( FINLOANS_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( FINLOANS_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( FINLOANS_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( FINLOANS_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( FINLOANS_DIR_PATH_HOOKS . 'hooks.php' );
require_once( FINLOANS_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( FINLOANS_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( FINLOANS_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );



/**
 * Instantiate Finloans object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$Finloans = new Finloans();