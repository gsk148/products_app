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
    mix.less([
        '/vendor/bootstrap/bootstrap.less',
        '/vendor/variables.less',
        'nav.less',
        'app.less'
    ])
});

elixir(function(mix) {
    mix.styles([
        "../../public/css/bootstrap.css",
        "../../public/css/nav.css",
        "../../public/css/variables.css",
        "../../public/css/app.css",
    ]);
});

elixir(function(mix) {
    mix.version("css/all.css");
});

elixir(function(mix) {
    mix.scripts([
        "jquery.js",
        "bootstrap.js"
    ]);
})