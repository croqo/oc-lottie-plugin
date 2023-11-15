const
    mix = require('laravel-mix')
    // webpackConfig = require('./webpack.config')
;

mix
    // .webpackConfig(webpackConfig)
    .options({
        processCssUrls: true,
        manifest: false,
        terser: {
            terserOptions: {
                compress: true,
                output: {
                    comments: false
                }
            },
        },
    })
    .js('src/index.js', 'assets/js/main.js')
    .sass('src/style.sass', 'assets/css/main.css')
;
