<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

abstract class QodeEssentialAddons_Shortcode extends QodeEssentialAddons_Framework_Shortcode {
	private $layouts       = array();
	private $extra_options = array();

	public function get_layouts() {
		return $this->layouts;
	}

	public function set_layouts( $layouts ) {
		$this->layouts = $layouts;
	}

	public function get_extra_options() {
		return $this->extra_options;
	}

	public function set_extra_options( $extra_options ) {
		$this->extra_options = $extra_options;
	}

	public function map_extra_options() {
		$extra_options = $this->get_extra_options();

		if ( ! empty( $extra_options ) ) {
			foreach ( $extra_options as $option ) {
				$this->set_option( $option );
			}
		}
	}
}
