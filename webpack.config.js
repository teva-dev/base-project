const path = require( 'path' );
const MiniCssExtractPlugin = require( "mini-css-extract-plugin" );

const config = {
	entry: {
		bundle: './src/index.js',
	},
	// entry: './src/index.js',
	output: {
		path: path.resolve( './dist' ),
		filename: '[name].js',
	},
	module: {
		rules: [
			{
				test: /\.(js|jsx)$/,
				exclude: /node_modules/,
				use: {
					loader: 'babel-loader',
				},
			},
			{
				test: /\.sc|ass$/,
				use: [
					{ loader: MiniCssExtractPlugin.loader },
					{ loader: 'css-loader' },
					{ loader: 'resolve-url-loader' }, // Rewrites relative paths in url() statements based on the original source file.
					{ loader: 'sass-loader' },
				],
			},
		],
	},
	plugins: [
		new MiniCssExtractPlugin( {
			filename: '[name].css',
			chunkFilename: '[id].css',
		} ),
	],

};

module.exports = config;
