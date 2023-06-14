<?php
namespace Ivrok\Theme;


class Head
{
    public static function init()
    {
        add_action('wp_head', '__return_true', 10, 0);
    }
}
