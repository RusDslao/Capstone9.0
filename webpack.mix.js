const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/enrollment/form.js', 'public/js/enrollment')
    .postCss('resources/css/app.css', 'public/css')
    .postCss('resources/css/icon.css', 'public/css')
    .postCss('resources/css/enrollment/form.css', 'public/css/enrollment');

// Optionally copy the fonts directory if needed
mix.copyDirectory('node_modules/bootstrap-icons/font/fonts', 'public/fonts');
