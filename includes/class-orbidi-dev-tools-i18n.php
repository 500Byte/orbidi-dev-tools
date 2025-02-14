<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/500Byte/
 * @since      1.0.0
 *
 * @package    Orbidi_Dev_Tools
 * @subpackage Orbidi_Dev_Tools/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Orbidi_Dev_Tools
 * @subpackage Orbidi_Dev_Tools/includes
 * @author     Diego Navarro <diego.navarro@orbidi.com>
 */
class Orbidi_Dev_Tools_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'orbidi-dev-tools',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
