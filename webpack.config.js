const 
    webpack = require("webpack"),
    path = require("path")
;
module.exports = {
    devtool: false,
    entry: "./sources",
    output: {
        clean: true,
        path: path.resolve(__dirname, "assets"),
        filename: "[name].js"
    },
        ],
    },
    plugins: [
        new webpack.SourceMapDevToolPlugin({
            filename: '[name].js.map',
            exclude: ['vendor.js'],
        }),
        new webpack.ProgressPlugin({
            activeModules: false,
            entries: true,
            profile: true,
            dependencies: true,
            percentBy: "entries"
        })
    ]
}
