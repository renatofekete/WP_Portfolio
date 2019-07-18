const gulp = require('gulp')
const sass = require('gulp-sass')
const autoprefixer = require('gulp-autoprefixer')
const babel = require('gulp-babel')
const uglify = require('gulp-uglify')
const rename = require('gulp-rename')
const zip = require('gulp-zip')

const css = done => {
  gulp
    .src('sass/main.scss')
    .pipe(sass())
    .on('error', sass.logError)
    .pipe(autoprefixer())
    .pipe(rename('style.css'))
    .pipe(gulp.dest('.'))
    .pipe(
      sass({
        outputStyle: 'compressed'
      })
    )
    .on('error', sass.logError)
    .pipe(rename('style.min.css'))
    .pipe(gulp.dest('.'))
  done()
}

const js = done => {
  gulp
    .src('js/src/app.js')
    .pipe(
      babel({
        presets: ['@babel/env']
      })
    )
    .pipe(uglify())
    .pipe(rename('app.min.js'))
    .pipe(gulp.dest('./js'))
  done()
}

const prod = done => {
  gulp
    .src([
      'favicon.ico',
      'screenshot.png',
      '*assets/**/*',
      '*.php',
      '*.css',
      '*js/app.min.js',
      '*template-parts/**/*',
      '*inc/**/*'
    ])
    .pipe(gulp.dest('RenatoFeketeTheme'))
  done()
}
const zipMe = done => {
  gulp
    .src('*RenatoFeketeTheme/**/*')
    .pipe(zip('RenatoFeketeTheme.zip'))
    .pipe(gulp.dest('.'))
  done()
}
const fontAwesome = done => {
  gulp
    .src('node_modules/@fortawesome/fontawesome-free/webfonts/*')
    .pipe(gulp.dest('assets/fontAwesome/webfonts'))
  done()
}
const fontAwesomeScss = done => {
  gulp
    .src('node_modules/@fortawesome/fontawesome-free/scss/*')
    .pipe(gulp.dest('assets/fontAwesome/scss'))
  done()
}
const fontAwesomeCss = done => {
  gulp
    .src('node_modules/@fortawesome/fontawesome-free/css/all.min.css')
    .pipe(gulp.dest('assets/fontAwesome/css'))
  done()
}

gulp.task('fontAwesomeCss', fontAwesomeCss)
gulp.task('fontAwesomeScss', fontAwesomeScss)
gulp.task('fontAwesome', fontAwesome)
gulp.task('zipMe', zipMe)
gulp.task('prod', prod)
gulp.task('sass', css)
gulp.task('js', js)
gulp.task('default', gulp.parallel(css, js))
gulp.task('watch', () => {
  gulp.watch('./sass/**', gulp.parallel(css))
  gulp.watch('./js/src/**', gulp.parallel(js))
})
