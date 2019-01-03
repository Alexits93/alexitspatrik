let mix = require('laravel-mix');

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

// app stylesheets
mix.sass('resources/assets/sass/app.scss', 'public/css');
mix.sass('resources/assets/sass/admin.scss', 'public/css');

// js scripts
mix.scripts([
    './node_modules/jquery/dist/jquery.min.js',
    './node_modules/bootstrap/dist/js/bootstrap.bundle.min.js',
    './node_modules/@fortawesome/fontawesome-free/js/all.min.js',
    './node_modules/masonry-layout/dist/masonry.pkgd.min.js',
    './node_modules/aos/dist/aos.js',
    './node_modules/datepicker-bootstrap/js/core.min.js',
    './node_modules/datepicker-bootstrap/js/datepicker.min.js',
    './node_modules/sweetalert2/dist/sweetalert2.min.js',
    'resources/assets/js/custom.js',
    'resources/assets/js/admin.js'
], 'public/js/app.js');

// Development browserSync & asset versioning
mix.browserSync({
    files: [
        './public/css/*.css',
        './public/js/*.js',
        './resources/assets/js/*.js',
        './resources/views/**/*.blade.php',
        './app/**/*.php'
    ],
    proxy: 'alexitspatrik.blade',
    open: false,
    notify: false,
    ghostMode: false,
});

if (mix.inProduction()) {
    mix.version();
}