<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/homescriptone
 * @since      1.0.0
 *
 * @package    Hs_Bj_City_List
 * @subpackage Hs_Bj_City_List/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Hs_Bj_City_List
 * @subpackage Hs_Bj_City_List/includes
 * @author     HomeScript <homescript1@gmail.com>
 */
class Hs_Bj_City_List_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'hs-bj-city-list',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
