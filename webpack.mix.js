const { mix } = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

// front page css
mix.styles([
	'resources/assets/css/front/animate.css',
	'resources/assets/css/front/bootstrap.css',
	'resources/assets/css/front/cards.css',
	'resources/assets/css/front/icomoon.css',
	'resources/assets/css/front/magnific-popup.css',
	'resources/assets/css/front/owl.carousel.min.css',
	'resources/assets/css/front/owl.theme.default.min.css',
], 'public/css/front/front.css');

// login & register css
mix.styles([
	'resources/assets/css/auth/style.css'
], 'public/css/auth/style.css');

// tribe main page
mix.styles([
    'resources/assets/css/tribe/screen.css'
], 'public/css/tribe/style.css');

// menu css
mix.styles([
	'resources/assets/css/menu/menu.css'
], 'public/css/menu/style.css');