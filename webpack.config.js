const path = require('path');

// include the js minification plugin
const UglifyJSPlugin = require('uglifyjs-webpack-plugin');

// include the css extraction and minification plugins
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");

//const Rellax = require('rellax');


module.exports = {
    entry: ['./assets/js/src/app.js', './assets/css/src/app.scss'],
    output: {
        filename: './assets/js/build/app.min.js',
        path: path.resolve(__dirname)
    },
    devtool: "source-map",
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
                // use: [MiniCssExtractPlugin.loader, 'css-loader', 'sass-loader'],
                use: [
                    MiniCssExtractPlugin.loader,
                    {
                        loader: 'css-loader',
                        options: {
                            sourceMap: true
                        }
                    },
                    {
                        loader: 'sass-loader',
                        options: {
                            sourceMap: true
                        }
                    }
                ]
            }
        ]
    },

    plugins: [
        // extract css into dedicated file
        new MiniCssExtractPlugin({
            filename: './assets/css/build/main.min.css'
        }),

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
    },



};