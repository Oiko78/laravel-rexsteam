let mix = require("laravel-mix");
mix.js("resources/js/app.js", "js");

var LiveReloadWebpackPlugin = require("@kooneko/livereload-webpack-plugin");
module.exports = {
    plugins: [new LiveReloadWebpackPlugin(options)],
};
