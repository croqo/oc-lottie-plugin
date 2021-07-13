const 
    mix = require('laravel-mix')
;
mix.setPublicPath('assets');
mix.js('node_modules/lottie-web/build/player/lottie.min', 'assets');