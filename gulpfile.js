var gulp = require('gulp');

gulp.task('default', function () {
  gulp.src('./node_modules/tributejs/dist/tribute.css')
    .pipe(gulp.dest('./dist/assets/css'));

  gulp.src('./node_modules/tributejs/dist/tribute.js')
    .pipe(gulp.dest('./dist/assets/js'));
});