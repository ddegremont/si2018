'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass');

gulp.task('sass', function(){
    return gulp.src('src/style/**/*.sass')
        .pipe(sass())
        .pipe(gulp.dest('public/css'))
});

gulp.task('watch', function(){

    gulp.watch('src/style/**/*.sass', ['sass']);

    // autres observations
});

