const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

if (mix.inProduction()) {
    mix
        .options({
            processCssUrls: false,
            postCss: [
                require('autoprefixer'),
                require('cssnano')({
                    preset: [
                        'default', {
                            discardComments: {
                                removeAll: true
                            }
                        }
                    ]
                })
            ]
        })
    ;
}


mix.less('resources/less/app.less', 'public/css/');

mix.js('resources/js/app.js', 'public/js/')
    .js('resources/js/others/forms/login.js', 'public/js/')
    .js('resources/js/others/forms/reset.js', 'public/js/')
    .js('resources/js/others/forms/forgot.js', 'public/js/')
    .js('resources/js/others/forms/admin_create_item.js', 'public/js/')
    .js('resources/js/others/forms/attendance.js', 'public/js/')
    .extract(['vue'])
    .version();
