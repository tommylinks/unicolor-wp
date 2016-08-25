var gulp = require('gulp'),
    sass = require('gulp-sass');
//var spritesmith = require('gulp.spritesmith');
  
   



 
gulp.task('sass', function () {
  gulp.src('scss/style.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('css/'));
});

//gulp.task('sprite', function () {
//  var spriteData = gulp.src('images/about-icons/*.png').pipe(spritesmith({
//    imgName: 'sprite-about.png',
//    cssName: 'sprite-about.scss',
//      padding: 5
//  }));
//  return spriteData.pipe(gulp.dest('sprite/'));
//});
 
gulp.task('sass:watch', function () {
  gulp.watch('scss/*.scss', ['sass']);
});




//gulp.task('watch', function () {
//  gulp.watch('app/css/style.css', ['minify-css']);
//});


gulp.task('default', ['sass', 'sass:watch']);