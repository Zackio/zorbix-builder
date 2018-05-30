var BowerWebpackPlugin = require("bower-webpack-plugin");
var nenpPromise = require('es6-promise').Promise;
var webpack = require("webpack");
var LiveReloadPlugin = require('webpack-livereload-plugin');

/* See webpack.md for info */

module.exports = './nifty/assets/skrollr/skrollr.js'

module.exports = [
    {
        module: {
            loaders: [
                {test: /\.css$/, loader: "style-loader!css-loader"},
                {test: /\.png$/, loader: "style-loader!url-loader"},
                {test: /\.gif$/, loader: "style-loader!url-loader"}
            ],
        },
        resolve: {
            extensions: ['', '.js', '.json'],
            modulesDirectories: ['./bower_components'],
            alias: {
                onoff: '../../../bower_components/onoff/dist/jquery.onoff.js',
            }
        },
        plugins: [
            new BowerWebpackPlugin(),
            //new LiveReloadPlugin()
            //new webpack.ProvidePlugin({
            //    $: "jquery",
            //    jQuery: "jquery",
            //})
            //new webpack.optimize.UglifyJsPlugin()
        ],
        entry: ['./zorbix-framework2/builder/src-js/builder.js'],
        output: {
            filename: './zorbix-framework2/builder/js/bundled-builder.js'
        }
    }
]