let mix = require('laravel-mix');

mix.setPublicPath('../assets');

mix.js('resources/assets/js/main.js', 'js')
   .sass('resources/assets/sass/main.scss', 'css');
