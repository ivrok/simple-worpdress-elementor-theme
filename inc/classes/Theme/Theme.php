<?php


namespace Ivrok\Theme;


class Theme
{
    public static function init()
    {
        Head::init();

        StylesAndScripts::init();

        Foot::init();
    }
}
