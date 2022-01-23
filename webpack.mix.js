let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js/app.js')
    .js('resources/js/app-non-defer.js', 'public/js/app-non-defer.js')
    .postCss('resources/css/app.css', 'public/css/app.css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ]);