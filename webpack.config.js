const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const { CleanWebpackPlugin } = require('clean-webpack-plugin');

const enableSourceMap = process.env.NODE_ENV !== 'production';

module.exports = {
    entry: './src/index.js',
    output: {
        filename: 'main.js',
        path: path.resolve(__dirname, 'dist'),
        publicPath: "",
    },
    module: {
        rules: [
            {
                test: /\.scss/,
                use: [
                    {
                        loader: MiniCssExtractPlugin.loader,
                    },
                    {
                        loader: "css-loader",
                        options: {
                            url: false,
                            sourceMap: enableSourceMap,
                            importLoaders: 2,
                        },
                    },
                    {
                        loader: "postcss-loader",
                        options: {
                            sourceMap: enableSourceMap,
                            postcssOptions: {
                                plugins: [
                                    "autoprefixer",
                                    ['css-declaration-sorter', {order: 'smacss',}],
                                    ['postcss-sort-media-queries', { sort: 'mobile-first' }],
                                    require('cssnano')({ // cssnanoを導入
                                        preset: 'default',
                                    })
                                ],
                            },
                        },
                    },
                    {
                        loader: "sass-loader",
                        options: {
                            implementation: require('sass'),
                            sassOptions: {
                                fiber: require('fibers'),
                            },
                            sourceMap: enableSourceMap,
                        },
                    },
                ],
            },
            {
                test: /\.(gif|png|jpe?g|webp|svg|eot|woff?|ttf)$/i,
                use: [
                    {
                        loader: "file-loader",
                        options: {
                            name: 'images/[name].[ext]',
                        },
                    },
                ],
            },
        ],
    },
    plugins: [
        new CleanWebpackPlugin({
            cleanStaleWebpackAssets: false,
        }),
        new MiniCssExtractPlugin({
            filename: 'style.css',
        }),
    ],
    devtool: "source-map",
    watchOptions: {
        ignored: /node_modules/
    },
    devServer: {
        //ルートディレクトリの指定
        contentBase: path.join(__dirname, ''),
        //サーバー起動時にブラウザを自動的に起動
        open: true,
        // ルートディレクトリのファイルを監視（変更があると自動的にリロードされる）
        watchContentBase: true,
        //バンドルされたファイルを出力する（実際に書き出す）
        writeToDisk: true
    },
};