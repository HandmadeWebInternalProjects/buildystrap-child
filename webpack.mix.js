let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.options({
    cssNano: {
        discardComments: {
            removeAll: true,
        },
    },
    terser: {
        extractComments: false,
        terserOptions: {
            output: {
                comments: false,
            },
        },
    }
});

mix.js('resources/js/main.js', 'dist/js/child-script.js')
    .sass('resources/sass/main.scss', 'dist/css/child-style.css');
