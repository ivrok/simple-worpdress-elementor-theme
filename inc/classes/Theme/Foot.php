<?php


namespace Ivrok\Theme;


class Foot
{
    public static function init()
    {
        add_action('wp_footer', '__return_true', 10, 0);
    }
}
