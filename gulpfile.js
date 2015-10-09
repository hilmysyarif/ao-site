var elixir = require('laravel-elixir');
var gulp = require('gulp');
var clean = require('rimraf');
var live = require('gulp-livereload');

// PATHs //-------------------------------------------------------------------------------------------------------------

var paths = {
    assets: './resources/assets',
    bower: './vendor_bower',
    build: './public/build',
    vendor: './public/build/vendor'
};

paths.build_fonts = paths.build + '/fonts';
paths.build_vendor_fonts = paths.vendor + '/fonts';
paths.vendor_fonts = [
    paths.bower + '/bootstrap/dist/fonts/**',
    paths.bower + '/fontawesome/fonts/**'
];

paths.build_css = paths.build + '/css';
paths.build_vendor_css = paths.vendor + '/css';
paths.vendor_css = [
    paths.bower + '/bootstrap/dist/css/bootstrap.min.css',
    paths.bower + '/fontawesome/css/font-awesome.min.css'
];

paths.build_js = paths.build + '/js';
paths.build_vendor_js = paths.vendor + '/js';
paths.vendor_js = [
    paths.bower + '/jquery/dist/jquery.min.js',
    paths.bower + '/bootstrap/dist/js/bootstrap.min.js'
];

// TASKs //-------------------------------------------------------------------------------------------------------------

gulp.task('ao-clean', function () {
    clean.sync(paths.build);
});

gulp.task('ao-copy', function () {
    gulp.src([paths.assets + '/css/**/*.css']).pipe(gulp.dest(paths.build_css)).pipe(live());
    gulp.src(paths.vendor_css).pipe(gulp.dest(paths.build_vendor_css)).pipe(live());

    gulp.src([paths.assets + '/js/**/*.js']).pipe(gulp.dest(paths.build_js)).pipe(live());
    gulp.src(paths.vendor_js).pipe(gulp.dest(paths.build_vendor_js)).pipe(live());

    gulp.src([paths.assets + '/fonts/**']).pipe(gulp.dest(paths.build_fonts)).pipe(live());
    gulp.src(paths.vendor_fonts).pipe(gulp.dest(paths.build_vendor_fonts)).pipe(live());
});

gulp.task('ao-mix', function () {
    gulp.src([paths.assets + '/fonts/**']).pipe(gulp.dest(paths.build_fonts)).pipe(live());
    gulp.src(paths.vendor_fonts).pipe(gulp.dest(paths.build_fonts)).pipe(live());

    elixir(function (mix) {
        mix.styles(paths.vendor_css.concat([paths.assets + '/css/**/*.css']), 'public/css/all.css', paths.assets);
        mix.scripts(paths.vendor_js.concat([paths.assets + '/js/**/*.js']), 'public/js/all.js', paths.assets);
        mix.version(['css/all.css', 'js/all.js']);

        mix.copy('public/css/all.css', 'public/build/css');
        mix.copy('public/js/all.js', 'public/build/js');

        mix.task('ao-mix-clean');
    });

});

gulp.task('ao-mix-clean', function () {
    clean.sync(paths.build + '/../css');
    clean.sync(paths.build + '/../js');
});

gulp.task('default', ['ao-clean'], function () {
    gulp.start('ao-mix');
});

gulp.task('build', ['ao-clean'], function () {
    gulp.start('ao-copy');
});

gulp.task('dev', ['ao-clean'], function () {
    live.listen();

    gulp.start('ao-copy');
    gulp.watch(paths.assets + '/**', ['ao-copy']);
});