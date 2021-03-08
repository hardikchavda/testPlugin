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

use Inc\Base\Activate;
use Inc\Base\Deactivate;


function activate_hrdk_plugin()
{
    Activate::activate();
}
register_activation_hook(__FILE__, array('activate_hrdk_plugin'));
function deactivate_hrdk_plugin()
{
    Deactivate::deactivate();
}
register_deactivation_hook(__FILE__, array('deactivate_hrdk_plugin'));


if (class_exists('Inc\\Init')) {

    Inc\Init::register_services();
}
