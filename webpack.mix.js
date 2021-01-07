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

mix.js('resources/js/app.js', 'public/js')
    // .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/style.scss', 'public/css')
    .sass('resources/sass/sinse-2.scss', 'public/css')
    .sass('resources/sass/upload.scss', 'public/css')
    .sass('resources/sass/login.scss', 'public/css')
    .sass('resources/sass/sinse1.scss', 'public/css')
    .sass('resources/sass/confirm.scss', 'public/css')
    .sass('resources/sass/register.scss', 'public/css')
    .sass('resources/sass/sinse-3.scss', 'public/css')
    .sass('resources/sass/history.scss', 'public/css')
    .sass('resources/sass/enzo.scss', 'public/css').options({
        processCssUrls: false
    });
mix.version();

