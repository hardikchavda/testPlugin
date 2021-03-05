<?php

/**
 *
 * 
 * Trigger this file on plugin install
 * 
 * @package HRDKPlugin
 * 
 * 
 *
 * Plugin Name:       My First
 * Plugin URI:        https://hardikchavda.tech
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Hardik Chavda
 * Author URI:        https://hardikchavda.tech 
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */

defined('ABSPATH') or die('Hey its protected by He Man and the masters of Universe');

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

define('PLUGIN_PATH', plugin_dir_path(__FILE__));
define('PLUGIN_URL', plugin_dir_url(__FILE__));

if (class_exists('Inc\\Init')) {

    Inc\Init::register_services();
}
