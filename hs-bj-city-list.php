<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://homescriptone.com?utm=hs-bj-city-list
 * @since             1.0.0
 * @package           Hs_Bj_City_List
 *
 * @wordpress-plugin
 * Plugin Name:       Benin City List for WooCommerce
 * Plugin URI:        https://github.com/homescriptone/
 * Description:       An extension who allow to select Benin Republic City from your store.
 * Version:           1.0.0
 * Author:            HomeScript
 * Author URI:        https://homescriptone.com?utm=hs-bj-city-list
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       hs-bj-city-list
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'HS_BJ_CITY_LIST_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-hs-bj-city-list-activator.php
 */
function activate_hs_bj_city_list() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hs-bj-city-list-activator.php';
	Hs_Bj_City_List_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-hs-bj-city-list-deactivator.php
 */
function deactivate_hs_bj_city_list() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hs-bj-city-list-deactivator.php';
	Hs_Bj_City_List_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_hs_bj_city_list' );
register_deactivation_hook( __FILE__, 'deactivate_hs_bj_city_list' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-hs-bj-city-list.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_hs_bj_city_list() {

	$plugin = new Hs_Bj_City_List();
	$plugin->run();

}
run_hs_bj_city_list();
