const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");
const { CleanWebpackPlugin } = require('clean-webpack-plugin');

module.exports = {
  entry: {
    'main': [
      './js/src/main.js',
      './css/src/main.scss'
    ]
  },
  output: {
    filename: './js/build/[name].min.[fullhash].js',
    path: path.resolve(__dirname)
  },
  module: {
    rules: [
      // js babelization
      {
        test: /\.(js|jsx)$/,
        exclude: /node_modules/,
        loader: 'babel-loader'
      },
      // sass compilation
      {
        test: /\.(sass|scss)$/,
        use: [MiniCssExtractPlugin.loader, 'css-loader', 'sass-loader']
      },
      // loader for webfonts (only required if loading custom fonts)
      {
        test: /\.(woff|woff2|eot|ttf|otf)$/,
        type: 'asset/resource',
        generator: {
          filename: './css/build/font/[name][ext]',
        }
      },
      // loader for images and icons (only required if css references image files)
      {
        test: /\.(png|jpg|gif)$/,
        type: 'asset/resource',
        generator: {
          filename: './css/build/img/[name][ext]',
        }
      },
    ]
  },
  plugins: [
    new CleanWebpackPlugin({
      cleanOnceBeforeBuildPatterns: [
        './js/build/*',
        './css/build/*'
      ]
    }),
    new MiniCssExtractPlugin({
      filename: './css/build/main.min.[fullhash].css'
    }),
  ],
  optimization: {
    minimizer: [
      // js minification - special syntax enabling webpack 5 default terser-webpack-plugin
      `...`,
      // css minification
      new CssMinimizerPlugin(),
    ]
  },
  // Opcija praćenja za automatsko prevođenje SCSS datoteka
  watchOptions: {
    ignored: /node_modules/,
  },
  // Dodatna konfiguracija za razvojni režim
  mode: 'development',
  devtool: 'source-map',
};
