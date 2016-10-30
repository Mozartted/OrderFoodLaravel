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

 /*
  |--------------------------------------------------------------------------
  | Rebirth Gulp file
  |--------------------------------------------------------------------------
  |
  | Not really sure what it would do yet...would figure it out later
  |
  */

elixir(function(mix) {
    mix.sass('app.scss');
});
