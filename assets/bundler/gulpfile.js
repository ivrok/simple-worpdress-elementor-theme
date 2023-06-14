const gulp = require('gulp');
const concat = require('gulp-concat');
const babel = require('gulp-babel');
const uglify = require('gulp-uglify');
const stylus = require('gulp-stylus');

const src = {
    'styles': 'src/styles/main.styl',
    'scripts': 'src/**/*.js'
};

const dest = {
    'stylesDir': '../css/',
    'stylesName': 'bundle.css',
    'scriptsDir': '../js/',
    'scriptsName': 'bundle.js',
}

function styles(cb) {
    return gulp.src(src.styles)
        .pipe(stylus())
        .pipe(concat(dest.stylesName))
        .pipe(gulp.dest(dest.stylesDir))
}

function scripts(cb) {
    return gulp.src(src.scripts)
        .pipe(
            babel({
                presets: [
                    [
                        "@babel/env",
                        {
                            modules: false
                        }
                    ]
                ]
            })
        )
        .pipe(concat(dest.scriptsName))
        .pipe(uglify())
        .pipe(gulp.dest(dest.scriptsDir))
}

exports.styles = styles;
exports.scripts = scripts;
exports.build = gulp.parallel(scripts, styles);
exports.default = gulp.parallel(scripts, styles);
