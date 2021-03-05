<?php

/**
 * 
 * @package HRDKPlugin
 * 
 */

namespace Inc\Base;

class SettinngsLinks
{
    public static function activate()
    {
        flush_rewrite_rules();
    }
}
