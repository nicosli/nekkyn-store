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
		'/bower/jquery/jquery.min.js',
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
		'/bower/jquery/jquery.min.js',
		'/bower/moment/min/moment.min.js',
		'/bower/bootstrap-daterangepicker/daterangepicker.js',
		'/bower/jasny-bootstrap/dist/js/jasny-bootstrap.min.js',
		'/js/funciones.js'
	 ], 'public/js/vendor_base.js', 'resources/assets' );

	mix.styles([
		'bower/bootstrap/dist/css/bootstrap.min.css',
		'bower/fontawesome/css/font-awesome.min.css',
		'/bower/bootstrap-daterangepicker/daterangepicker.css',
		'/bower/jasny-bootstrap/dist/css/jasny-bootstrap.min.css',
		'css/sidebar.css',
		'css/base.css'
	], 'public/css/vendor_base.css', 'resources/assets/');

	mix.copy('resources/assets/bower/fontawesome/fonts', 'public/fonts');
	mix.copy('resources/assets/bower/bootstrap/fonts', 'public/fonts');
});
