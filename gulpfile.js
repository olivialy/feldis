var gulp         = require('gulp'),
    autoprefixer = require('autoprefixer'),
    concat       = require('gulp-concat'),
    cssnano      = require('cssnano'),
    fs           = require('fs'),
    glob         = require('glob'),
    path         = require('path'),
    plumber      = require('gulp-plumber'),
    postcss      = require('gulp-postcss'),
    rename       = require('gulp-rename'),
    runSequence  = require('run-sequence'),
    stylus       = require('gulp-stylus'),
    svgstore     = require('gulp-svgstore'),
    svgmin       = require('gulp-svgmin'),
    uglify       = require('gulp-uglify');

var cfg = {
    name: 'feldis',
    nodeDir: 'node_modules/',
    assetsDir: 'assets/',
    webDir: 'web/',
    stylusPattern: 'styl/**/*.styl',
    jsPattern: 'js/**/*.js',
    svgPattern: 'svg/*.svg'
};

// styles
gulp.task('styles', function()
{
    return gulp.src(cfg.assetsDir + 'styl/' + cfg.name +'.styl')
        .pipe(plumber())
        .pipe(stylus({
            compress: false,
            linenos: false,
            include: ['node_modules'],
            'include css': true
        }))
        .pipe(postcss([
            autoprefixer()
        ]))
        .pipe(gulp.dest(cfg.webDir + 'css/'))
        .pipe(postcss([
            cssnano()
        ]))
        .pipe(rename(cfg.name +'.min.css'))
        .pipe(gulp.dest(cfg.webDir + 'css/'));
});

// js
gulp.task('scripts', function()
{
    return gulp.src([
            cfg.nodeDir + '/jquery/dist/jquery.js',
            cfg.nodeDir + '/headroom.js/dist/jQuery.headroom.js',
            cfg.nodeDir + '/headroom.js/dist/headroom.js',
            cfg.nodeDir + '/sticky-kit/dist/sticky-kit.js',
            cfg.assetsDir + 'js/' + cfg.name +'.js'
        ])
        .pipe(plumber())
        .pipe(concat(cfg.name +'.js'))
        .pipe(gulp.dest(cfg.webDir + 'js/'))
        .pipe(uglify())
        .pipe(rename(cfg.name +'.min.js'))
        .pipe(gulp.dest(cfg.webDir + 'js/'));
});

// svg
gulp.task('svg', function () {
    return gulp
        .src(cfg.assetsDir + '/' + cfg.svgPattern, {base: cfg.assetsDir + '/svg'})
        .pipe(rename(function (filePath) {
            var name = filePath.dirname !== '.' ? filePath.dirname.split(filePath.sep) : [];
            name.push(filePath.basename);
            filePath.basename = 'symbol-' + name.join('-');
        }))
        .pipe(svgmin({
            plugins: [{
                removeStyleElement: true
            }, {
                removeAttrs: {
                    attrs: 'class'
                }
            }]
        }))
        .pipe(svgstore({inlineSvg: true}))
        .pipe(gulp.dest(cfg.webDir + '/svg'));
});

// clean
gulp.task('clean', function() {
    var files = glob.sync('web/@(js|css)/' + cfg.name +'-*.*');
    for (var file in files) {
        fs.unlinkSync(files[file]);
    }
});

// assets
gulp.task('assets', function() {
    // Retrieve html5shiv web/ directory
    gulp.src(cfg.nodeDir + '/html5shiv/dist/html5shiv.min.js')
        .pipe(gulp.dest('web/js'));

});

// build
gulp.task('build', function(cb) {
    runSequence(
        ['clean', 'assets'],
        ['styles', 'scripts'],
        cb
    );
});

// watch
gulp.task('watch', function() {
    gulp.watch(cfg.assetsDir +'/'+ cfg.stylusPattern, ['styles']);
    gulp.watch(cfg.assetsDir +'/'+ cfg.jsPattern, ['scripts']);
});

// default
gulp.task('default', ['build', 'watch']);

