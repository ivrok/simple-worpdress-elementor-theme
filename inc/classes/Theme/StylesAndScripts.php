<?php

namespace Ivrok\Theme;

class StylesAndScripts
{
    public static function init()
    {
        add_action( 'wp_enqueue_scripts', __CLASS__ . '::addScripts', 1);
        add_action( 'wp_enqueue_scripts', __CLASS__ . '::addStyles', 1);
    }

    public static function addStyles()
    {
        wp_enqueue_style('main_bundle_styles', get_stylesheet_directory_uri() . '/assets/css/bundle.css', array(), Settings::get('version_css_bundle'));
    }

    public static function addScripts()
    {
        wp_enqueue_script('theme-bundle', get_stylesheet_directory_uri() . '/assets/js/bundle.js', 'jquery', Settings::get('version_js_bundle'));
    }
}
