var gulp = require('gulp');
var gutil = require('gulp-util');

gulp.task('sass', function() {
  gutil.log("Hello Gulp");
});
gulp.task('default', ['sass']);
