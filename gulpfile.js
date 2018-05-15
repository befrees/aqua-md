var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var watch = require('gulp-watch');
var spritesmith = require('gulp.spritesmith');
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var svgSprite = require("gulp-svg-sprites");



gulp.task('sass', function () {
    return gulp.src('./sass/style.scss')
        .pipe(sourcemaps.init())
        .pipe(concat('style.css'))
        .pipe(sass({outputStyle: 'compact'}).on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 50 versions', '> 1%', 'ie 8']
        }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('./css/'))
    ;
});


gulp.task('image', function () {
    return gulp.src('img/src/*')
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()],
            interlaced: true
        }))
        .pipe(gulp.dest('img'))
});

gulp.task('sprite', function () {
    var spriteData = gulp.src('img/sprite-icons/*.png').pipe(spritesmith({
        imgName: 'sprite.png',
        cssName: '_sprite.scss',
        imgPath: '../img/sprite.png'
    }));
    return spriteData.pipe(gulp.dest('img/'));
});
gulp.task('spriteSVG', function () {
    return gulp.src('img/svg/icons/*.svg')
        .pipe(svgSprite({
            cssFile: "../sass/_sprite-svg.scss",
            svg: {
                sprite: "./img/svg/sprite.svg",
                symbols: "icons.svg"
            },
            preview: {
                sprite: "index.html"
            },
            mode: "symbols",
            common: "ic"
        }))
        .pipe(gulp.dest("img"));
});

gulp.task('watch', function () {
    gulp.watch('img/src/*', ['image']);
    gulp.watch('img/sprite-icons/*.png', ['sprite']);
    gulp.watch('sass/*.scss', ['sass']);
    gulp.watch('img/svg/icons/*.svg', ['spriteSVG']);
});



