var elixir = require('laravel-elixir');

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
    mix.styles([
    	'bootstrap/bootstrap.min.css'
    ], 'public/css/bootstrap.css')
    .styles([
        'css/bootstrap.css',
        'node_modules/lity/dist/lity.css',
    ], null, 'public')
    .version('public/css/all.css');
});
