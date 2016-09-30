var gulp = require('gulp'),
    livereload = require('gulp-livereload');
 

 
gulp.task('watch', function() {
  livereload.listen();
  gulp.watch('**/*.php').on('change',livereload.changed);
  gulp.watch('**/*.js').on('change',livereload.changed);
  gulp.watch('**/*.css').on('change',livereload.changed);
});