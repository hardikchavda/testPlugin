<?php

/**
 * 
 * @package HRDKPlugin
 * 
 */

namespace Inc\Base;

use \Inc\Base\BaseController;

class SettingsLinks extends BaseController
{

    public function register()
    {        
        add_filter("plugin_action_links_$this->plugin", array($this, 'settings_links'));
    }

    public function settings_links($links)
    {
        $setting_link = '<a href="admin.php?page=hrdk_plugin">Settings</a>';
        array_push($links, $setting_link);
        return $links;
    }
}
