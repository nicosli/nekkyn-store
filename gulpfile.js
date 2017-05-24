var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

	

    mix.scripts([
		'/bower/jquery/dist/jquery.min.js',
		'/bower/jquery-backstretch/jquery.backstretch.min.js',
		'js/script.js'
	 ], 'public/js/vendor_login.js', 'resources/assets' );

	mix.styles([
		'bower/bootstrap/dist/css/bootstrap.min.css',
		'bower/fontawesome/css/font-awesome.min.css',
		'css/form-element.css',
		'css/style.css'
	], 'public/css/vendor_login.css', 'resources/assets/');


	mix.scripts([
		'/resources/assets/bower/jquery/dist/jquery.min.js',
		'/resources/assets/bower/bootstrap/dist/js/bootstrap.min.js',
		'/resources/assets/bower/jasny-bootstrap/dist/js/jasny-bootstrap.min.js',
		'/resources/assets/bower/moment/min/moment.min.js',
		'/resources/assets/bower/bootstrap-daterangepicker/daterangepicker.js',
		'/resources/assets/bower/amstock3/amcharts/amcharts.js',
		'/resources/assets/bower/amstock3/amcharts/serial.js',
		'/resources/assets/bower/amstock3/amcharts/amstock.js',
		'/resources/assets/js/funciones.js',
		'/resources/assets/js/crud.js',
		'/resources/assets/js/modulos/reportes.ventas.js',
		'/node_modules/jquery-ean13/dist/jquery-ean13.min.js'
	], 'public/js/vendor_base.js', './');

	mix.styles([
		'bower/bootstrap/dist/css/bootstrap.min.css',
		'bower/fontawesome/css/font-awesome.min.css',
		'/bower/bootstrap-daterangepicker/daterangepicker.css',
		'/bower/jasny-bootstrap/dist/css/jasny-bootstrap.min.css',
		'/bower/bootstrap-daterangepicker/daterangepicker.css',
		'/bower/amstock3/amcharts/style.css',
		'css/sidebar.css',
		'css/base.css'
	], 'public/css/vendor_base.css', 'resources/assets/');

	mix.copy('resources/assets/bower/fontawesome/fonts', 'public/fonts');
	mix.copy('resources/assets/bower/bootstrap/fonts', 'public/fonts');
	mix.copy('resources/assets/bower/amstock3/amcharts/images', 'public/images/amcharts');
});
