/*
 Para instalar Gulp y Elixir

 #1 Verificar si estan instalados Node y Npm
 node -v
 npm -v

 #2 Instalar Gulp
 npm install --global gulp-cli

 #3 Instalar Elixir
 npm install --no-bin-links

 #4 Editar este archivo y ejecutar
 gulp watch --production

 #5 Ser feliz!
 */

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
    mix.scriptsIn("public/assets/angularjs/common");

    //  MANAGEMENT
    mix.scriptsIn(
        "resources/views/teu/management/assets/js",
        "public/vendor/teu/management.js"
    );
});


