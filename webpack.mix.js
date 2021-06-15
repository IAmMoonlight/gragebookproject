const mix = require('laravel-mix');

mix.setPublicPath('./');

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

mix.less('src/less/app.less', 'assets/css/');

mix.js('src/js/app.js', 'assets/js/')
    .js('src/js/others/forms/login.js', 'assets/js/')
    .js('src/js/others/forms/reset.js', 'assets/js/')
    .js('src/js/others/forms/forgot.js', 'assets/js/')
    .js('src/js/others/forms/admin_create_item.js', 'assets/js/')
    .js('src/js/others/forms/attendance.js', 'assets/js/')
    .extract(['vue'])
    .version();


// mix.browserSync({
//     files: [
//         './**/*.php',
//         './assets/**/*.(js|css)'
//     ],
//     watch: true,
//     host: 'localhost',
//     //Домен на локальном сервере
//     proxy: 'gradebookproject'
// });

