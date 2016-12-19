require('laravel-elixir-vue-2');

const elixir = require('laravel-elixir');

var gulp = require('gulp');
var phpunit = require('gulp-phpunit');
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

gulp.task('phpunit', function() {
    var options = {debug: false};
    gulp.src('phpunit.xml').pipe(phpunit('./vendor/bin/phpunit',options));
});

elixir(function (mix) {
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
    mix.copy('resources/assets/fonts',  'public/fonts');
    mix.copy('resources/assets/images', 'public/build/images');
    mix.copy('resources/assets/fonts',  'public/build/fonts');
});