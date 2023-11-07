const
    MiniCssExtractPlugin = require("mini-css-extract-plugin"),
    webpack = require("webpack"),
    path = require("path")
;
module.exports = {
    devtool: false,
    entry: {
        "main": [
            "./sources/index.js"
        ]
    },
    output: {
        clean: true,
        path: path.resolve(__dirname, "assets")
    },
    module: {
        rules: [
            {
                test: /\.s[ac]ss$/i,
                use: [
                    MiniCssExtractPlugin.loader,
                {
                    loader: "css-loader",
                    options: {
                    sourceMap: true,
                    },
                },
                {
                    loader: "sass-loader",
                    options: {
                    sourceMap: true,
                    },
                },
                ],
            },
        ],
    },
    plugins: [
        new MiniCssExtractPlugin(),
        new webpack.ProgressPlugin({
            activeModules: false,
            entries: true,
            profile: true,
            dependencies: true,
            percentBy: "entries"
        })
    ],
    optimization: {
        minimize: true
    }
}
