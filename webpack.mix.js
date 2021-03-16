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

// App css and js
mix.js('resources/js/app_front.js', 'public/js')
    .js('resources/js/app_back.js', 'public/js')
    .sass('resources/sass/app_front.scss', 'public/css').version()
    .sass('resources/sass/app_back.scss', 'public/css').version()
    .sourceMaps();


// Meyer Reset
mix.styles([
    'resources/css/meyer-reset.css'
], 'public/css/meyer-reset.css');

// Front css
mix.styles([
    'resources/css/modern-business.css'
], 'public/css/user_front.css');

// Front js
mix.js([
    'resources/js/empty.js'
], 'public/js/user_front.js');

// Back css
mix.styles([
    'resources/css/sb-admin.css'
], 'public/css/user_back.css');

// Back js
mix.js([
    'resources/js/scripts.js',
    'resources/js/datatables.js'
], 'public/js/user_back.js');
