const mix = require('laravel-mix');
require('laravel-mix-purgecss');

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

mix
.vue()
.js('resources/js/app.js', 'public/js')
.options({
    postCss: [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer')
    ]
})
.sass('resources/scss/app.scss', 'public/css')
.sass('resources/scss/singular/homepage.scss', 'public/css')
.sass('resources/scss/singular/dashboard_admin.scss', 'public/css')
.postCss('resources/css/app.css', 'public/css')
.purgeCss({
    enabled: true,
    safelist: {
        standard: ['active', 'open', 'enable'],
    }
});