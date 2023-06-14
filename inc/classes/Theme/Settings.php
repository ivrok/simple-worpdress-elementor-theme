<?php
namespace Ivrok\Theme;

class Settings
{
    private static $settings = array(
        'version_css_bundle' => '1.0.0',
        'version_js_bundle' => '1.0.0',
    );

    public static function get($setting)
    {
        return isset(self::$settings[$setting]) ? self::$settings[$setting] : false;
    }
}
