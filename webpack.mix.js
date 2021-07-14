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

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');

mix.copy("resources/fonts", "public/fonts");

mix.copy("resources/images", "public/images");

mix.copy("resources/js/bootstrap.js", "public/js/admin")
    .copy("resources/js/jquery.dcjqaccordion.2.7.js", "public/js/admin")
    .copy("resources/js/jquery.fileupload.js", "public/js/admin")
    .copy("resources/js/jquery.min.js", "public/js/admin")
    .copy("resources/js/jquery.nicescroll.js", "public/js/admin")
    .copy("resources/js/jquery.scrollTo.js", "public/js/admin")
    .copy("resources/js/jquery.slimscroll.js", "public/js/admin")
    .copy("resources/js/jquery2.0.3.min.js", "public/js/admin")
    .copy("resources/js/raphael-min.js", "public/js/admin")
    .copy("resources/js/morris.js", "public/js/admin")
    .copy("resources/js/lightbox-plus-jquery.min.js", "public/js/admin");
mix.js(
    [
        "resources/js/monthly.js",
        "resources/js/script.js",
        "resources/js/scripts.js",
    ],
    "public/js/admin/alljs.js"
);
mix.copy("resources/css/font.css", "public/css/admin").copy(
    "resources/css/font-awesome.css",
    "public/css/admin"
);
mix.copy("resources/css/bootstrap.min.css", "public/css/admin");
mix.copy("resources/css/font.css", "public/css/admin")
    .copy("resources/css/lightbox.css", "public/css/admin")
    .copy("resources/css/minimal.css", "public/css/admin")
    .copy("resources/css/morris.css", "public/css/admin");
mix.styles(
    [
        "resources/css/monthly.css",
        "resources/css/style.css",
        "resources/css/style-responsive.css",
    ],
    "public/css/admin/allcss.css"
);
