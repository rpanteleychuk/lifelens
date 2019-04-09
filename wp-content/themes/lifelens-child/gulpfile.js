'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', async function () {
    gulp.src('./sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css'));
});

gulp.task('sass:watch', async function () {
    gulp.watch('./sass/**/*.scss', gulp.series('sass'));
});