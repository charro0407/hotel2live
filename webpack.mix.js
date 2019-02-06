const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/_assets/js/app.js')
   .js('resources/js/main.js', 'public/_assets/js/main.js')
   .js('resources/js/maps.js', 'public/_assets/js/maps.js')
   .sass('resources/sass/app.scss', 'public/_assets/css/app.css')
   .sass('resources/sass/style.scss', 'public/_assets/css/style.css')
   .sass('resources/sass/vendors.scss', 'public/_assets/css/vendors.css')
   .sass('resources/sass/aqua.scss', 'public/_assets/css/theme.css');
