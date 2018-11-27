const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel Application. By default, we are compiling the Sass
 | file for the Application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/App.js', 'public/js')
   .sass('resources/sass/App.scss', 'public/css');
