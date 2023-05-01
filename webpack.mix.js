const mix = require('laravel-mix');

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


mix.styles([
    'resources/css/bootstrap.min.css',
    'resources/css/owl.carousel.css',
    'resources/css/owl.theme.default.min.css',
    'resources/css/font-awesome.min.css',
    'resources/css/tooplate-style.css',
    'resources/css/app.css'
], 'public/css/app.css');

mix.scripts([
    'resources/js/jquery.js',
    'resources/js/bootstrap.min.js',
    'resources/js/jquery.stellar.min.js',
    'resources/js/owl.carousel.min.js',
    'resources/js/smoothscroll.js',
    'resources/js/custom.js',
    'resources/js/app.js',
], 'public/js/app.js');


mix.copyDirectory('resources/fonts', 'public/fonts');
mix.browserSync('psycho');

