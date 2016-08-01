//import node modules
import gulp from "gulp"
import rename from "gulp-rename"

import sass from "gulp-sass"
import nano from "gulp-cssnano"
import sourcemaps from "gulp-sourcemaps"
import autoprefixer from "gulp-autoprefixer"

import named from "vinyl-named"
import webpack from "webpack-stream"
import webpackConfig from "./webpack.config.js"

const path = {
	"styles": {
		"dir": "./styles/scss",
		"entry": "./styles/scss/main.scss",
		"dest": "./styles/dist"
	},
	"js": {
		"dir": "./js",
		"entry": "./js/src/index.js",
		"dest": "./js/dist",
	}
}

// task STYLES

gulp.task("styles", () => gulp.src(path.styles.entry)
	.pipe(sourcemaps.init())
	.pipe(sass({
		includePaths: [
			"./node_modules/normalize-scss/sass/normalize",
		],
	}))
	.pipe(autoprefixer())
	.pipe(nano())
	.pipe(rename("main.min.css"))
	.pipe(sourcemaps.write("../srcmaps"))
	.pipe(gulp.dest(path.styles.dest))
)

gulp.task("styles-watch", () => gulp.watch(`${path.styles.dir}/**`, ["styles"]))

// task JS


gulp.task("js", () => gulp.src(path.js.entry)
	.pipe(named(() => "main.min"))
	.pipe(webpack(webpackConfig))
	.pipe(gulp.dest(path.js.dest))
)


// task DEFAULT

gulp.task("default", ["styles", "js", "styles-watch"]) // "js-watch"])




