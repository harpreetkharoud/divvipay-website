// Folder name of your theme....
var themeName = 'divvipay';

var root = "../" + themeName + '/';
var sassToWatch = root + '**/*.scss';
var sassRoot = root + 'sass/style.scss';

var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');

gulp.task('sass', function(){
  return gulp.src(sassRoot)
  .pipe(sourcemaps.init())
  .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
  .pipe(sourcemaps.write(root))
  .pipe(gulp.dest(root));
});

gulp.task('watch', function(){
  gulp.watch(sassToWatch, gulp.series('sass'))
});
