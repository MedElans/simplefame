var gulp = require('gulp')
, useref = require('gulp-useref')
, gulpif = require('gulp-if')
, uglify = require('gulp-uglify')
, cssnano = require('gulp-cssnano')
, htmlmin = require('gulp-html-minifier')
, less = require('gulp-less')
, path = require('path');

const imagemin = require('gulp-imagemin');
const pngquant = require('imagemin-pngquant');

gulp.task('less', function () {
  return gulp.src('style.less')
    .pipe(less({
      paths: [ path.join(__dirname, 'less', 'includes') ]
    }))
    .pipe(gulp.dest(''))
    .pipe(gulpif('style.css', cssnano()))
    .pipe(gulp.dest(''));
});

gulp.task('default', ['less'], function() {

    return gulp.src('*.html')
        .pipe(useref())
        .pipe(gulpif('*.js', uglify()))
        .pipe(gulpif('*.css', cssnano()))
        .pipe(htmlmin({collapseWhitespace: true}))
        .pipe(gulp.dest('dist'));
});

gulp.task('images', function(){

    return gulp.src('images/*')
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        }))
        .pipe(gulp.dest('dist/images'));

});

gulp.task('watch', function(){

    gulp.watch('less/**/*', ['less']);

});