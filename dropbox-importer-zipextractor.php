<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/shaon-hossain45/
 * @since             1.0.0
 * @package           Dropbox_Importer_Zipextractor
 *
 * @wordpress-plugin
 * Plugin Name:       Dropbox Importer Zipextractor
 * Plugin URI:        https://github.com/shaon-hossain45/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            shaon
 * Author URI:        https://github.com/shaon-hossain45/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       dropbox-importer-zipextractor
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
define( 'DROPBOX_IMPORTER_ZIPEXTRACTOR_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-dropbox-importer-zipextractor-activator.php
 */
function activate_dropbox_importer_zipextractor() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-dropbox-importer-zipextractor-activator.php';
	Dropbox_Importer_Zipextractor_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-dropbox-importer-zipextractor-deactivator.php
 */
function deactivate_dropbox_importer_zipextractor() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-dropbox-importer-zipextractor-deactivator.php';
	Dropbox_Importer_Zipextractor_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_dropbox_importer_zipextractor' );
register_deactivation_hook( __FILE__, 'deactivate_dropbox_importer_zipextractor' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-dropbox-importer-zipextractor.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_dropbox_importer_zipextractor() {

	$plugin = new Dropbox_Importer_Zipextractor();
	$plugin->run();

}
run_dropbox_importer_zipextractor();
