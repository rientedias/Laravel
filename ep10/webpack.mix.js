const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    /*SITE*/
    .styles([
          'resources/views/site/css/reset.css',
          'resources/views/site/css/style.css'
    ], 'public/site/css/style.css')
    .scripts([
        'resources/views/site/js/scripts.js'
    ],'public/site/js/scripts.js')
    /*ADMIN*/
    .styles([
        'resources/views/admin/css/style.css'
    ],'public/admin/css/style.css')
    .scripts([
        'resources/views/admin/js/scripts.js'
    ],'public/admin/js/scripts.js')
.version();
// js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');
