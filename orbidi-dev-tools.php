<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/500Byte/
 * @since             1.0.0
 * @package           Orbidi_Dev_Tools
 *
 * @wordpress-plugin
 * Plugin Name:       Orbidi Dev Tools
 * Plugin URI:        https://www.orbidi.com
 * Description:       Herramientas de desarrollo integrales para WordPress que facilitan la automatización, seguridad y gestión de recursos en proyectos web.
 * Version:           1.0.0
 * Author:            Diego Navarro
 * Author URI:        https://github.com/500Byte//
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       orbidi-dev-tools
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
define( 'ORBIDI_DEV_TOOLS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-orbidi-dev-tools-activator.php
 */
function activate_orbidi_dev_tools() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-orbidi-dev-tools-activator.php';
	Orbidi_Dev_Tools_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-orbidi-dev-tools-deactivator.php
 */
function deactivate_orbidi_dev_tools() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-orbidi-dev-tools-deactivator.php';
	Orbidi_Dev_Tools_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_orbidi_dev_tools' );
register_deactivation_hook( __FILE__, 'deactivate_orbidi_dev_tools' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-orbidi-dev-tools.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_orbidi_dev_tools() {

	$plugin = new Orbidi_Dev_Tools();
	$plugin->run();

}
run_orbidi_dev_tools();
