'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass');

gulp.task('build', ['sass']);

gulp.task('sass', function () {
    return gulp.src('src/style/main.sass')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('public/css/'));
});
gulp.task('reset', function () {
    return gulp.src('src/style/reset.sass')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('public/css/'));
});

gulp.task('default', function () {
    gulp.watch('./sass/**/*.scss', ['sass']);
});