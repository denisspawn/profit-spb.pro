'use strict';

var gulp 		 		= require('gulp'), // Подключаем Gulp
	browserSync  	= require('browser-sync').create(); // Подключаем Browser Sync


gulp.task('browser-sync', function(done) {
	browserSync.init({ // Выполняем browserSync
		proxy: 'profit-spb.pro', // для того, чтобы это заработало и работали php файлы нужно настроить виртуальные хосты в apache
		notify: false // Отключаем уведомления
	});
	done();
});

gulp.task('watch', function() {
	gulp.watch('/*.+(php|html)').on('change', browserSync.reload); // Наблюдение за php|html файлами в корне проекта
});

gulp.task('default', gulp.parallel('watch', 'browser-sync')); // paralles выполняет таски параллельно и запускает их в определенной последовательности