<?php

// Exit if accessed directly.
defined('ABSPATH') || exit;

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (!file_exists($composer = __DIR__.'/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.'));
}

require $composer;

// Load Buildystrap helpers
require __DIR__.'/src/helpers.php';

// Load Buildystrap functions
require __DIR__.'/src/functions.php';
