const mix = require('laravel-mix');

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
mix.webpackConfig({
    output: {
        chunkFilename: "js/[name].js"
    }
});
mix.js('resources/js/backend/app.js', 'public/js/backend')
    .js('resources/js/frontend/app.js', 'public/js/frontend')
    .sass('resources/sass/backend/app.scss', 'public/css/backend')
    .sass('resources/sass/frontend/app.scss', 'public/css/frontend')
    .sourceMaps();
