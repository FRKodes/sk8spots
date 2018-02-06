var elixir = require('laravel-elixir');
require('laravel-elixir-stylus');


/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.stylus('app.styl')
    .styles([
    	'bootstrap.css',
        'fancybox.css',
        'icons-font.css',
    	'app.css'
    ],'public/css/all.css', 'public/css')
    .scripts([
    	'jquery.js',
    	'bootstrap.js',
        'fancybox.js',
        'validate.js',
        'custom.js'
    ],'public/js/all.js', 'public/js')
    .version(['css/all.css', 'js/all.js'])
    .browserSync({proxy: 'sk8spots.dev'});
});
