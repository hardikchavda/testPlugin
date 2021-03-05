<?php

/**
 * 
 * @package HRDKPlugin
 * 
 */

namespace Inc\Base;

class Enaque
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
        wp_enqueue_style('mypluginstyle', PLUGIN_URL . '/assets/my_style.css', __FILE__);
        wp_enqueue_script('mypluginscript', PLUGIN_URL .'/assets/my_script.js', __FILE__);
    }
}