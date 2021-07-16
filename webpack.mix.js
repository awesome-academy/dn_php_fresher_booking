const mix = require("laravel-mix");

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

// mix.js("resources/js/app.js", "public/js").sass(
//     "resources/sass/app.scss",
//     "public/css"
// );

mix.copy("resources/fonts/admin", "public/admin/fonts");

mix.copy("resources/images/admin", "public/admin/images");

mix.copy("resources/css/admin", "public/admin/css");

mix.copy("resources/js/admin", "public/admin/js");

mix.copy("resources/fonts/user", "public/user/fonts");

mix.copy("resources/images/user", "public/user/images");

mix.copy("resources/css/user", "public/user/css");

mix.copy("resources/js/user", "public/user/js");
