var gulp = require('gulp');
var sass = require('gulp-sass');
var prefix = require('gulp-autoprefixer');
var minify = require('gulp-minify-css');
var plumber = require('gulp-plumber');

function onError(err) {
    console.log(err);
}
//Compile Sass
gulp.task('sass', function(){
    return gulp.src('assets/sass/**/*.scss')
        .pipe(sass())
        .pipe(prefix('last 2 versions'))
        .pipe(minify())
        .pipe(gulp.dest('./assets/css/'))
        .pipe(plumber({
            errorHandler: onError
        }))
});

//minify js
var minifyJs = require('gulp-minify');
 
gulp.task('minifyjs', function() {
  gulp.src(['assets/js/**/*.js'])
    .pipe(minifyJs())
    .pipe(gulp.dest('./assets/jsmin/'))
});

//Watch task
gulp.task('default', function() {
    gulp.watch('assets/sass/**/*.scss', gulp.series('sass'));
    gulp.watch('assets/js/**/*.js', gulp.series('minifyjs'));
});