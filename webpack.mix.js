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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/font.css', 'public/css', [
        //
    ])
    .postCss('resources/css/style.scss', 'public/css', [
        //
    ])
    .postCss('resources/css/programme.scss', 'public/css', [
        //
    ])
    .postCss('resources/css/slider.scss', 'public/css', [
        //
    ])
    .postCss('resources/css/event.scss', 'public/css', [
        //
    ])
    .postCss('resources/css/apropos.scss', 'public/css', [
        //
    ])
    .postCss('resources/css/articles.scss', 'public/css', [
        //
    ]);
mix.js('resources/js/collapse.js', 'public/js');