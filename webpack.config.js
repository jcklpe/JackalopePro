const path = require('path');

// include the js minification plugin
const UglifyJSPlugin = require('uglifyjs-webpack-plugin');

// include the css extraction and minification plugins
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");

// include the CSS critical path plugins
//const Critters = require('critters-webpack-plugin');

//include rellax plugin
// const RellaxPlugin = require('rellax');

// include HTML critical CSS plugin
const CriticalCSSPlugin = require('html-critical-webpack-plugin');

module.exports = {
    entry: ['./assets/js/src/app.js', './assets/css/src/app.scss'],
    output: {
        filename: './assets/js/build/app.min.js',
        path: path.resolve(__dirname)
    },
    watch: true,
    module: {
        rules: [
            // perform js babelization on all .js files
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: "babel-loader",
                    options: {
                        presets: ['@babel/preset-env']
                    }
                }
            },
            //Compile SCSS to css
            {
                test: /\.(sass|scss)$/,
                use: [MiniCssExtractPlugin.loader, 'css-loader', 'sass-loader']
            }
        ]
    },

    plugins: [
        // extract css into dedicated file
        new MiniCssExtractPlugin({
            filename: './assets/css/build/main.min.css'
        }),
        // new Critters({
        //     /// optional configuration (see below)
        // Does not appear to work with PHP
        // }),


        // new RellaxPlugin({

        // }),

        // new CriticalCSSPlugin({
        //     base: path.resolve(__dirname, 'critical'),
        //     src: 'index.php',
        //     dest: 'index.html',
        //     inline: true,
        //     minify: true,
        //     extract: true,
        //     width: 375,
        //     height: 565,
        //     penthouse: {
        //         blockJSRequests: false,
        //     },
        // }),
    ],


    optimization: {
        minimizer: [
            // enable the js minification plugin
            new UglifyJSPlugin({
                cache: true,
                parallel: true
            }),
            // enable the css minification plugin
            new OptimizeCSSAssetsPlugin({}),
        ]
    }
};