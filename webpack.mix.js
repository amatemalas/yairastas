let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */

mix.setPublicPath('./themes/yaicommerce/assets/');


mix.js('./themes/yaicommerce/assets/js/app.js', 'dist/js')
   .sass('./themes/yaicommerce/assets/sass/style.scss', 'dist/css');

mix.browserSync({
    proxy: 'yairastas.test',
    host: 'yairastas.test',
    notify: false,
    files: ["./themes/yaicommerce/assets/dist/css/*.css", "./themes/yaicommerce/**/*.htm", "./themes/yaicommerce/assets/dist/js/*.js"]
})