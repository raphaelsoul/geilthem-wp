var gulp = require('gulp'),
	less = require('gulp-less');

gulp.task('less', function() {
    gulp.src('assets/less/style.less')
        .pipe(less())
        .pipe(gulp.dest('.'))
});

gulp.task('watch', function() {
	gulp.watch('assets/less/*.less', ['less']);
})

gulp.task('default', ['less', 'watch']);