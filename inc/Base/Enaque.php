<?php

/**
 * 
 * @package HRDKPlugin
 * 
 */

namespace Inc\Base;

use \Inc\Base\BaseController;

class Enaque extends BaseController
{
    function register()
    {
        //For Admin 
        add_action('admin_enqueue_scripts', array($this, 'enqueue'));
        //For Frontend
        //add_action('wp_enqueue_scripts', array($this, 'enqueue'));
    }

    function enqueue()
    {
        wp_enqueue_style('mypluginstyle', $this->plugin_url . '/assets/my_style.css', __FILE__);
        wp_enqueue_script('mypluginscript', $this->plugin_url .'/assets/my_script.js', __FILE__);
    }
}
