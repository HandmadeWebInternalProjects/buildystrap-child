<?php

namespace BuildystrapChild;

class Theme
{
    /**
     * Enqueue Theme Styles
     *
     * @return void
     */
    public static function enqueue_styles()
    {
        // Bootstrap
        // wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');

        // Font Awesome
        // wp_enqueue_style('font-awesome', 'https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css');

        wp_enqueue_style('child-style', get_stylesheet_uri().'/dist/css/child-style.css', ['parent-style']);
    }

    /**
     * Enqueue Theme Scripts
     *
     * @return void
     */
    public static function enqueue_scripts()
    {
        wp_enqueue_script('child-script', get_stylesheet_uri().'/dist/js/child-script.js', ['parent-script']);
    }
}
