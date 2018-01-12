'use strict';

var gulp 		 		= require('gulp'), // Подключаем Gulp
	browserSync  	= require('browser-sync').create(), // Подключаем Browser Sync
	sass 		 			= require('gulp-sass'), //Подключаем Sass пакет
	concat		 		= require('gulp-concat'), // Подключаем gulp-concat (для конкатенации файлов)
	uglify		 		= require('gulp-uglifyjs'), // Подключаем gulp-uglifyjs (для сжатия JS)
	cssnano		 		= require('gulp-cssnano'), // Подключаем пакет для минификации CSS
	rename		 		= require('gulp-rename'), // Подключаем библиотеку для переименования файлов
	del			 			= require('del'), // Подключаем библиотеку для удаления файлов и папок
	imagemin	 		= require('gulp-imagemin'), // Подключаем библиотеку для работы с изображениями
	pngquant	 		= require('imagemin-pngquant'), // Подключаем библиотеку для работы с png
	cache		 			= require('gulp-cache'), // Подключаем библиотеку кеширования
	autoprefixer 	= require('gulp-autoprefixer'); // Подключаем библиотеку для автоматического добавления префиксов


gulp.task('browser-sync', function(done) {
	browserSync.init({ // Выполняем browserSync
		proxy: 'profit-spb.pro', // для того, чтобы это заработало и работали php файлы нужно настроить виртуальные хосты в apache
		notify: false // Отключаем уведомления
	});
	done();
});

gulp.task('scripts', function() {
	return gulp.src([ // Берем все необходимые библиотеки
		'assets/libs/jquery/dist/jquery.min.js', // Берем jQuery
		'assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js', // Берем Magnific Popup
		'assets/libs/owl.carousel/dist/owl.carousel.min.js'
	])
	.pipe(concat('libs.min.js')) // Собираем их в кучу в новом файле libs.min.js
	.pipe(uglify()) // Сжимаем JS файл
	.pipe(gulp.dest('assets/js')) // Выгружаем в папку assets/js
	.pipe(browserSync.stream()); // стримит изменения напрямую в DOM дерево без полной перезагрузки
});

gulp.task('sass', function() {
	return gulp.src('assets/sass/**/*.sass') // шаблоны выборки могут быть разными. Если перд выборкой поставить "!" то этот файл попадет в исключения и не попадет в выборку.
		.pipe(sass()) // Преобразуем Sass в CSS посредством gulp-sas
		.pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], {cascade: true} )) // Создаем префиксы
		.pipe(gulp.dest('assets/css')) // Выгружаем результата в папку
		.pipe(browserSync.stream()); // стримит изменения напрямую в DOM дерево без полной перезагрузки
});

gulp.task('css-libs', function() {
	return gulp.src('assets/css/libs.css') // Выбираем файл для минификации
	.pipe(cssnano()) // Сжимаем
	.pipe(rename({suffix: '.min'})) // Добавляем суффикс .min
	.pipe(gulp.dest('assets/css')) // Выгружаем в папку assets/css
	.pipe(browserSync.stream()); // стримит изменения напрямую в DOM дерево без полной перезагрузки
});

gulp.task('img', function() {
	return gulp.src('assets/images/**/*') // Берем все изображения из assets/image
	.pipe(cache(imagemin({ // С кешированием
	// .pipe(imagemin({ // Сжимаем изображения без кеширования
		interlaced: true,
		progressive: true,
		svgoPlugins: [{removeViewBox: false}],
		use: [pngquant()]

	}))/**/)
	.pipe(gulp.dest('assets/img')); // Выгружаем на продакшен
});

//===================== Нужно при разработке HTML =============================

//gulp.task('clean', function(done) {
//  del.sync('dist'); // Удаляем папку dist перед сборкой (папка продакшена при разработке HTML верстки)
//  done();
//});

//gulp.task('build', gulp.series('clean', 'img', 'sass', 'scripts', function(done) {
//	//build css
//	gulp.src([
//		'app/css/main.css',
//		'app/css/libs.min.css'
//	])
//	.pipe(gulp.dest('dist/css')); // Переносим библиотеки в продакшен
//
//	//build fonts
//	gulp.src('app/fonts/**/*')
//	.pipe(gulp.dest('dist/fonts')); // Переносим шрифты в продакшен
//
//	//build js
//	gulp.src('app/js/**/*')
//	.pipe(gulp.dest('dist/js'));// Переносим скрипты в продакшен
//
//	//build html|php
//	gulp.src('app/*.+(html|php)')
//	.pipe(gulp.dest('dist')); // Переносим HTML в продакшен
//
//	done();
//}));

//============================================================================

gulp.task('watch', function() {
	gulp.watch('assets/sass/**/*.sass', gulp.series('sass', 'css-libs')); // series выполняет все действия последовательно (пока однис скрипт не завершит работу - второй не запустится) они не будут работать параллельно
	gulp.watch('assets/libs/**/*.js', gulp.series('scripts')); // Наблюдение за JS файлами в папке js
	gulp.watch('site/*/**.+(php|html)').on('change', browserSync.reload); // Наблюдение за php|html файлами в корне проекта
	gulp.watch('assets/js/*.js').on('change', browserSync.reload);
});

gulp.task('clear', function() { // таск для очистки кэша
	return cache.clearAll();
});

gulp.task('default', gulp.parallel('scripts', 'sass', 'css-libs', 'watch', 'browser-sync')); // paralles выполняет таски параллельно и запускает их в определенной последовательности