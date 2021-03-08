<?php
/**
 * 
 * @package HRDKPlugin
 * 
 */

namespace Inc\Page;

use \Inc\Base\BaseController;

class Admin extends BaseController
{  
    function register()
    {
        add_action('admin_menu', array($this, 'add_admin_pages'));  
    }


    function add_admin_pages()
    {
        add_menu_page('HRDK', 'HRDK Settings', 'manage_options', 'hrdk_plugin', array($this, 'admin_index'), 'dashicons-store', 110);
    }

    function admin_index()
    {
        require_once $this->plugin_path . 'templates/hrdksettings.php';
    }
}
