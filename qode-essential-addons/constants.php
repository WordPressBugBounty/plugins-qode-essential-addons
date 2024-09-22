<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

define( 'QODE_ESSENTIAL_ADDONS_VERSION', '1.6.3' );
define( 'QODE_ESSENTIAL_ADDONS_ABS_PATH', __DIR__ );
define( 'QODE_ESSENTIAL_ADDONS_REL_PATH', dirname( plugin_basename( __FILE__ ) ) );
define( 'QODE_ESSENTIAL_ADDONS_URL_PATH', plugin_dir_url( __FILE__ ) );
define( 'QODE_ESSENTIAL_ADDONS_ASSETS_PATH', QODE_ESSENTIAL_ADDONS_ABS_PATH . '/assets' );
define( 'QODE_ESSENTIAL_ADDONS_ASSETS_URL_PATH', QODE_ESSENTIAL_ADDONS_URL_PATH . 'assets' );
define( 'QODE_ESSENTIAL_ADDONS_INC_PATH', QODE_ESSENTIAL_ADDONS_ABS_PATH . '/inc' );
define( 'QODE_ESSENTIAL_ADDONS_INC_URL_PATH', QODE_ESSENTIAL_ADDONS_URL_PATH . 'inc' );
define( 'QODE_ESSENTIAL_ADDONS_ADMIN_PATH', QODE_ESSENTIAL_ADDONS_INC_PATH . '/admin' );
define( 'QODE_ESSENTIAL_ADDONS_ADMIN_URL_PATH', QODE_ESSENTIAL_ADDONS_INC_URL_PATH . '/admin' );
define( 'QODE_ESSENTIAL_ADDONS_CPT_PATH', QODE_ESSENTIAL_ADDONS_INC_PATH . '/post-types' );
define( 'QODE_ESSENTIAL_ADDONS_CPT_URL_PATH', QODE_ESSENTIAL_ADDONS_INC_URL_PATH . '/post-types' );
define( 'QODE_ESSENTIAL_ADDONS_SHORTCODES_PATH', QODE_ESSENTIAL_ADDONS_INC_PATH . '/shortcodes' );
define( 'QODE_ESSENTIAL_ADDONS_SHORTCODES_URL_PATH', QODE_ESSENTIAL_ADDONS_INC_URL_PATH . '/shortcodes' );
define( 'QODE_ESSENTIAL_ADDONS_PLUGINS_PATH', QODE_ESSENTIAL_ADDONS_INC_PATH . '/plugins' );
define( 'QODE_ESSENTIAL_ADDONS_PLUGINS_URL_PATH', QODE_ESSENTIAL_ADDONS_INC_URL_PATH . '/plugins' );
define( 'QODE_ESSENTIAL_ADDONS_HEADER_LAYOUTS_PATH', QODE_ESSENTIAL_ADDONS_INC_PATH . '/header/layouts' );
define( 'QODE_ESSENTIAL_ADDONS_HEADER_LAYOUTS_URL_PATH', QODE_ESSENTIAL_ADDONS_INC_URL_PATH . '/header/layouts' );
define( 'QODE_ESSENTIAL_ADDONS_HEADER_ASSETS_PATH', QODE_ESSENTIAL_ADDONS_INC_PATH . '/header/assets' );
define( 'QODE_ESSENTIAL_ADDONS_HEADER_ASSETS_URL_PATH', QODE_ESSENTIAL_ADDONS_INC_URL_PATH . '/header/assets' );
define( 'QODE_ESSENTIAL_ADDONS_MOBILE_HEADER_LAYOUTS_PATH', QODE_ESSENTIAL_ADDONS_INC_PATH . '/mobile-header/layouts' );
define( 'QODE_ESSENTIAL_ADDONS_MOBILE_HEADER_LAYOUTS_URL_PATH', QODE_ESSENTIAL_ADDONS_INC_URL_PATH . '/mobile-header/layouts' );

define( 'QODE_ESSENTIAL_ADDONS_MENU_NAME', 'qode_essential_addons_menu' );
define( 'QODE_ESSENTIAL_ADDONS_OPTIONS_NAME', 'qode_essential_addons_options' );
define( 'QODE_ESSENTIAL_ADDONS_GENERAL_MENU_NAME', 'qode_essential_addons_general_menu' );

define( 'QODE_ESSENTIAL_ADDONS_DEMOS_JSON', 'https://export.qodethemes.com/qi/json' );
