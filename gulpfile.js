const { src, dest, watch, series, parallel } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('autoprefixer');
const postcss = require('gulp-postcss');
const sourcemaps = require('gulp-sourcemaps');
const cssnano = require('cssnano');
const concat = require('gulp-concat');
const terser = require('gulp-terser-js');
const rename = require('gulp-rename');
const clean = require('gulp-clean');
const path = require('path');
const fs = require('fs');
const sharp = require('sharp');

// Configuración de rutas
const paths = {
    scss: 'src/scss/**/*.scss',
    js: 'src/js/**/*.js',
    imagenes: 'src/img/**/*',
    svg: 'src/img/**/*.svg'
}

function css() {
    return src(paths.scss)
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(postcss([autoprefixer(), cssnano()]))
        .pipe(sourcemaps.write('.'))
        .pipe(dest('build/css'));
}

function javascript() {
    return src(paths.js)
      .pipe(sourcemaps.init())
      .pipe(concat('bundle.js'))
      .pipe(terser())
      .pipe(sourcemaps.write('.'))
      .pipe(rename({ suffix: '.min' }))
      .pipe(dest('./build/js'))
}

// Nueva tarea para copiar SVGs
function copySvg() {
    return src(paths.svg)
        .pipe(dest('build/img'));
}

// Nueva tarea de imágenes con SHARP
async function imagenes(done) {
    const srcDir = 'src/img';
    const buildDir = 'build/img';
    const { glob } = await import('glob');
    const images = await glob('src/img/**/*.{jpg,png}');

    images.forEach(file => {
        const relativePath = path.relative(srcDir, path.dirname(file));
        const outputSubDir = path.join(buildDir, relativePath);

        if (!fs.existsSync(outputSubDir)) {
            fs.mkdirSync(outputSubDir, { recursive: true });
        }

        const baseName = path.basename(file, path.extname(file));
        const extName = path.extname(file);
        const outputFile = path.join(outputSubDir, `${baseName}${extName}`);

        sharp(file)
            .jpeg({ quality: 80 })
            .toFile(outputFile)
            .catch(err => console.log(`Error en ${file}: ${err}`));
    });
    done();
}

// Nueva tarea WebP con SHARP
async function versionWebp(done) {
    const srcDir = 'src/img';
    const buildDir = 'build/img';
    const { glob } = await import('glob');
    const images = await glob('src/img/**/*.{jpg,png}');

    images.forEach(file => {
        const relativePath = path.relative(srcDir, path.dirname(file));
        const outputSubDir = path.join(buildDir, relativePath);

        if (!fs.existsSync(outputSubDir)) {
            fs.mkdirSync(outputSubDir, { recursive: true });
        }

        const baseName = path.basename(file, path.extname(file));
        const outputFile = path.join(outputSubDir, `${baseName}.webp`);

        sharp(file)
            .webp({ quality: 80 })
            .toFile(outputFile)
            .catch(err => console.log(`Error en ${file}: ${err}`));
    });
    done();
}

function watchArchivos() {
    watch(paths.scss, css);
    watch(paths.js, javascript);
    watch(paths.imagenes, imagenes);
    watch(paths.imagenes, versionWebp);
}

// Exportamos las tareas
exports.css = css;
exports.javascript = javascript;
exports.copySvg = copySvg;
exports.imagenes = imagenes;
exports.versionWebp = versionWebp;
exports.watchArchivos = watchArchivos;

exports.default = series(
    parallel(css, javascript, copySvg, imagenes, versionWebp),
    watchArchivos
);