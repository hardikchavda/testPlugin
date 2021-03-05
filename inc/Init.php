<?php

/**
 * 
 * @package HRDKPlugin
 * 
 */

namespace Inc;

final class Init
{

    public static function get_services()
    {
        return [
            Page\Admin::class,
            Base\Enaque::class
        ];
    }

    public static function register_services()
    {
        foreach (self::get_services() as $class) {
            $service = self::instantiate($class);
            if (method_exists($service, 'register')) {
                $service->register();
            }
        }
    }

    private static function instantiate($class)
    {
        $service = new $class;
        return $service;
    }
}


// use Inc\Activate;
// use Inc\Deactivate;

// class HRDKPlugin
// {

//     public $plugin;

//     function __construct()
//     {
//         add_action('init', array($this, 'custom_post_type'));

//         $this->plugin = plugin_basename(__FILE__);
//     }


//     function enqueue()
//     {
//         wp_enqueue_style('mypluginstyle', plugins_url('/assets/my_style.css', __FILE__));
//         wp_enqueue_script('mypluginscript', plugins_url('/assets/my_script.js', __FILE__));
//     }

//     function register()
//     {
//         //For Admin 
//         add_action('admin_enqueue_scripts', array($this, 'enqueue'));
//         //For Frontend
//         //add_action('wp_enqueue_scripts', array($this, 'enqueue'));

//         add_action('admin_menu', array($this, 'add_admin_pages'));

//         add_filter("plugin_action_links_$this->plugin", array($this, 'settings_link'));
//     }
//     function settings_link($links)
//     {
//         $setting_link = '<a href="admin.php?page=hrdk_plugin">Settings</a>';
//         array_push($links, $setting_link);
//         return $links;
//     }
//     function add_admin_pages()
//     {
//         add_menu_page('HRDK', 'HRDK Settings', 'manage_options', 'hrdk_plugin', array($this, 'admin_index'), 'dashicons-store', 110);
//     }

//     function admin_index()
//     {
//         require_once plugin_dir_path(__FILE__) . 'templates/hrdksettings.php';
//     }

//     function custom_post_type()
//     {
//         register_post_type('book', ['public' => true, 'label' => 'Books']);
//     }

//     function activate()
//     {
//        // require_once plugin_dir_path(__FILE__) . 'inc/plugin_activate.php';
//         Activate::activate();
//     }
//     function deactivate()
//     {
//         //require_once plugin_dir_path(__FILE__) . 'inc/plugin_deactivate.php';
//         Deactivate::deactivate();
//     }
// }

// if (class_exists('HRDKPlugin')) {
//     $hrdkPlugin = new HRDKPlugin();
//     $hrdkPlugin->register();
// }

// //activation
// //require_once plugin_dir_path(__FILE__) . 'inc/plugin_activate.php';
// register_activation_hook(__FILE__, array($hrdkPlugin, 'activate'));

// //deactivation
// //require_once plugin_dir_path(__FILE__) . 'inc/plugin_deactivate.php';
// register_deactivation_hook(__FILE__, array($hrdkPlugin, 'deactivate'));