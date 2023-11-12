module.exports = {
  module: {
    rules: [
      {
        test: /node_modules\/(.+)\.css$/,
        use: [
          {
            loader: 'style-loader',
          },
          {
            loader: 'css-loader',
            options: { url: false },
          },
        ],
        sideEffects: true
      }
    ]
  },

  // メインとなるJavaScriptファイル（エントリーポイント）
  entry: {
    'script': './src/js/script.js',
  },

  // ファイルの出力設定
  output: {
    //  出力ファイルのディレクトリ名
    path: `${__dirname}/dist/js`,
    // 出力ファイル名
    filename: `[name].js`
  }
}
