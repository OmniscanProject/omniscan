const mix = require('laravel-mix');
require('laravel-mix-purgecss');
const webpack = require('webpack');

const path = require('path');

mix.alias({
  '@v' : path.join(__dirname, 'resources/vue'),
  '@c': path.join(__dirname,'resources/vue/components'),
  '@css': path.join(__dirname, 'public/css'),
  '@sass': path.join(__dirname, 'resources/assets/sass'),
})

mix.webpackConfig({
  plugins: [
    new webpack.ProvidePlugin({
      $: 'jquery',
      jQuery: 'jquery'
    }),
  ],
});

mix.autoload({
	jquery: ['$', 'window.jQuery'],
});

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

.sass('resources/assets/scss/app.scss', 'public/css')
.sass('resources/assets/scss/singular/homepage.scss', 'public/css/singular')
.sass('resources/assets/scss/singular/dashboard_admin.scss', 'public/css/singular')


.ts('resources/assets/ts/app.ts', 'public/js')
.ts('resources/assets/ts/singular/homepage.ts', 'public/js/singular')

.postCss('resources/assets/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer')
])

// .purgeCss({
//     enabled: true,
//     safelist: {
//         standard: ['active', 'open', 'enable','slick-list'],
//     }
// })

.vue({version:'3'});