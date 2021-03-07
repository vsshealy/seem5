/**
 * gulpfile.js
 * @package seem
 * @author Scott Shealy
 * @version 1.0.0
 * @copyright 03/2021
**/

// PLUGINS
    var
        gulp = require('gulp'),
        sass = require('gulp-sass'),
        autoprefixer = require('gulp-autoprefixer'),
        mediaqueries = require('gulp-group-css-media-queries'),
        minifycss = require('gulp-clean-css'),
        plumber = require('gulp-plumber'),
        rename = require('gulp-rename'),
        sourcemaps = require('gulp-sourcemaps')
    ;

// FILE PATHS
    var paths = {
        root: '.',

        sass: {
            src: './sass/style.scss',
            dir: './sass/**/**/*.scss',
            dest: '.'
        }
    }

// TASK | SASS
    function compileSass() {
        return gulp
            .src(paths.sass.src, {allowEmpty: true})
            .pipe(plumber())
            .pipe(sourcemaps.init({loadMaps: true}))
            .pipe(sass({outputStyle: 'expanded'}))
            .pipe(autoprefixer('last 4 versions'))
            .pipe(sourcemaps.write())
            .pipe(mediaqueries())
            .pipe(gulp.dest(paths.sass.dest))

            .pipe(rename({suffix: '.min'}))
            .pipe(minifycss())
            .pipe(gulp.dest(paths.sass.dest))
    }

// TASK | WATCHFILES
    function watchFiles() {
        gulp.watch(paths.sass.dir, compileSass)
    }

// EXECUTE TASKS
    gulp.task('build', compileSass);
    gulp.task('default', gulp.series('build', watchFiles));