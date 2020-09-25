require("es6-promise").polyfill();

var gulp = require("gulp"),
  sass = require("gulp-sass"),
  browserSync = require("browser-sync"),
  autoprefixer = require("gulp-autoprefixer"),
  uglify = require("gulp-uglify"),
  jshint = require("gulp-jshint"),
  rename = require("gulp-rename"),
  cssnano = require("gulp-cssnano"),
  cssmin = require("gulp-cssmin"),
  cleanCSS = require("gulp-clean-css"),
  sourcemaps = require("gulp-sourcemaps"),
  package = require("./package.json");

var url = "localhost/e3mtechnologie-com/";

gulp.task("css", function () {
  return gulp
    .src("./src/scss/*.scss")
    .pipe(sourcemaps.init())
    .pipe(sass().on("error", sass.logError))
    .pipe(autoprefixer("last 4 version"))
    .pipe(gulp.dest("./assets/css"))
    .pipe(cssnano())
    .pipe(cssmin())
    .pipe(cleanCSS())
    .pipe(
      rename({
        suffix: ".min",
      })
    )
    .pipe(sourcemaps.write())
    .pipe(gulp.dest("./assets/css"))
    .pipe(
      browserSync.reload({
        stream: true,
      })
    );
});

gulp.task("js", function () {
  gulp
    .src("./src/js/theme.js")
    .pipe(sourcemaps.init())
    .pipe(jshint.reporter("default"))
    .pipe(gulp.dest("./assets/js"))
    .pipe(uglify())
    .pipe(
      rename({
        suffix: ".min",
      })
    )
    .pipe(sourcemaps.write())
    .pipe(gulp.dest("./assets/js"))
    .pipe(
      browserSync.reload({
        stream: true,
        once: true,
      })
    );
});

gulp.task("browserSync", function () {
  var files = ["**/*.php"];
  browserSync.init(files, {
    proxy: url,
    injectChanges: true,
  });
});

gulp.task("run", gulp.parallel("browserSync", gulp.series("css", "js")));
gulp.task("watch", function () {
  gulp.watch("./src/js/*.js", gulp.series("js"));
  gulp.watch("./src/scss/**/*.scss", gulp.series("css"));
  gulp.watch("./assets/css/*.css").on("change", browserSync.reload);
  gulp.watch("./assets/js/*.js").on("change", browserSync.reload);
});
gulp.task("default", gulp.parallel("watch", "run"));
