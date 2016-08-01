import {optimize} from "webpack"

export default {
	watch: true,
	devtool: "source-map",
    module: {
		loaders: [
			{
				test: /\.js$/,
				loader: "babel",
				query: {
					presets: ["es2015"],
					compact: false
				}
			}
		],
    },
	plugins: [
		new optimize.UglifyJsPlugin({minimize: true})
	],
}