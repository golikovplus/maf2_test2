const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

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

elixir(function(mix){

    var assets = [
            'public/css',
            'public/js'
        ];

    mix
        .sass('app.scss')
        .styles('styles.css')
        .webpack('app.js')
        .version(assets);
    mix.copy('resources/assets/images', 'public/images');
    mix.copy('resources/assets/fonts', 'public/fonts');
});
