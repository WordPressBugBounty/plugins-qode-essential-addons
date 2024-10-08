<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

include_once QODE_ESSENTIAL_ADDONS_INC_PATH . '/blog/helper.php';

foreach ( glob( QODE_ESSENTIAL_ADDONS_INC_PATH . '/blog/dashboard/admin/*.php' ) as $module ) {
	include_once $module;
}

foreach ( glob( QODE_ESSENTIAL_ADDONS_INC_PATH . '/blog/dashboard/meta-box/*.php' ) as $module ) {
	include_once $module;
}

foreach ( glob( QODE_ESSENTIAL_ADDONS_INC_PATH . '/blog/dashboard/meta-box/post-format/*.php' ) as $module ) {
	include_once $module;
}

foreach ( glob( QODE_ESSENTIAL_ADDONS_INC_PATH . '/blog/templates/single/*/include.php' ) as $module ) {
	include_once $module;
}
