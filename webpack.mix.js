const mix = require('laravel-mix');
const tailwindcss = require('laravel-mix-tailwind');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .tailwind();
