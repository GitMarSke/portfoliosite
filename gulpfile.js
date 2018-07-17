var gulp = require('gulp'),
  connectphp = require('gulp-connect-php'),
  browsersync = require('browser-sync'),
  sh = require('shelljs'),
  composer = require('gulp-composer');

gulp.task('default', ['serve']);

gulp.task('serve', ['build'], function() {
  connectphp.server({
    router: './rewrite.php',
    base: './'
  }, function() {
    browsersync({
      proxy: '127.0.0.1:8000'
    });
  });
  gulp.watch('./site/templates/**/*.*').on('change', function() {
    browsersync.reload();
  });
});

gulp.task('build', ['composer', 'copy', 'cleanup']);

gulp.task('composer', function() {
  composer('install', {
    async: false
  });
});

gulp.task('copy', function() {
  sh.cp('-rf',
    './vendor/processwire/processwire/wire/',
    './'
  );
});

gulp.task('cleanup', function() {
  sh.rm('-rf', 'vendor/');
});
