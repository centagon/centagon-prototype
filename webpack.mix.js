const mix = require('laravel-mix');
const path = require('path');

mix.js('resources/assets/js/script.js', 'public/js');
mix.sass('resources/assets/sass/style.scss', 'public/css');

mix.webpackConfig({
    resolve: {
        alias: {
            'primer': path.resolve(__dirname, 'resources/assets/centagon-primer/src/js/lib'),
            '@': path.resolve(__dirname, 'resources/assets/js'),
        },
    },
});
