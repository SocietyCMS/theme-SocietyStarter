var BrowserSyncPlugin = require('browser-sync-webpack-plugin');
var exec = require('child_process').exec;
var webpack = require('webpack');

module.exports = {
    context: __dirname + '/resources',
    entry: {
        societystarter: './societystarter.js'
    },

    output: {
        path: __dirname + '/assets/',
        filename: "build.js"
    },

    module: {
        loaders: [
            { test: /\.jsx?$/, exclude: /(node_modules|bower_components)/, loader: 'babel', query: { presets: ['es2015'], plugins: ['transform-runtime']} },
            { test: /\.vue$/, loader: 'vue' },

            {test: /\.scss$/, loader: 'style!css-loader!postcss-loader!sass-loader'},
            {test: /\.less/, loader: 'style!css-loader!less-loader'},
            {test: /\.css$/, loader: "style!css-loader!postcss"},

            {test: /\.png$/, loader: 'url', query: { limit: 25000, prefix: 'img/', name: '[name].[ext]?[hash]'}},
            {test: /\.jpg$/, loader: 'url', query: { limit: 25000, prefix: 'img/', name: '[name].[ext]?[hash]'}},
            {test: /\.gif$/, loader: 'url', query: { limit: 25000, prefix: 'img/', name: '[name].[ext]?[hash]'}},
            {test: /\.svg$/, loader: 'url', query: { limit: 25000, prefix: 'img/', name: '[name].[ext]?[hash]'}},

            {test: /\.(woff(2)?)(\?[a-z0-9=\.]+)?$/, loader: 'url', query: { limit: 25000, prefix: 'font/', name: '[name].[ext]?[hash]'}},
            {test: /\.(eot)(\?[a-z0-9=\.]+)?$/, loader: 'file', query: { prefix: 'font/', name: '[name].[ext]?[hash]'}},
            {test: /\.(ttf)(\?[a-z0-9=\.]+)?$/, loader: 'file', query: { prefix: 'font/', name: '[name].[ext]?[hash]'}},
            {test: /\.(svg)(\?[a-z0-9=\.]+)?$/, loader: 'file', query: { prefix: 'font/', name: '[name].[ext]?[hash]'}}
        ]
    },
    postcss: function (webpack) {
        return [
            require('autoprefixer'),
            require('precss'),
        ];
    },
    plugins: [
        new BrowserSyncPlugin({
            proxy: 'http://societycms.local/',
            reloadDelay: 1000
        }),

        new webpack.ProvidePlugin({
            $: "jquery",
            jQuery: "jquery",
            "window.jQuery": "jquery",
            "window.Tether": 'tether'
        }),

        function() {
            this.plugin("emit", (compilation, callback) => {
                exec('php ../../artisan stylist:publish SocietyStarter', function(error, stdout, stderr) {
                    console.log(stdout);
                });
                callback();
            });
        }
    ]
};
