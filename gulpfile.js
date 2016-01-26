var gulp = require('gulp');

var $ = require("gulp-load-plugins")();

var browserSync = require('browser-sync').create();

var path = {
    proxy: "http://localhost/wp",
    server: './',
    scss: "scss/",
    img: "img/",
    js: "js/",
    css: "./",
    refresh: ["**/*.html", "**/*.php", "js/*.js"]
};


gulp.task('sass', function(){
    gulp.src(path.scss + "*.scss")
        .pipe($.sass({
            onError: console.error.bind(console, 'SASS Error:')
        }))
        .pipe($.autoprefixer('last 2 versions'))
        //.pipe($.minifyCss())
        .pipe(gulp.dest(path.css))
        .pipe(browserSync.stream())
});

gulp.task('js', function(){
    return gulp.src([path.js + 'lib/*.js', path.js + 'app.js'])
        .pipe($.concat('app.min.js'))
        .pipe($.uglify())
        .pipe(gulp.dest(path.js))
});

gulp.task('browser-sync', function() {
    var options;
    if(path.proxy){
        options = {proxy: path.proxy};
    } else {
        options = { server: {baseDir: path.server}}
    }
    browserSync.init(options);
});

gulp.task('default', ['browser-sync'], function() {
    gulp.watch(path.scss + '**/*.scss', ['sass']);
    gulp.watch(path.js + 'app.js', ['js']);
    gulp.watch(path.refresh).on('change', browserSync.reload);
});