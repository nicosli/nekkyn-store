<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['middleware' => 'auth', 'uses' => 'ModulosController@inicio']);

/**
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/
Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');

/**
|--------------------------------------------------------------------------
| Socialite
|--------------------------------------------------------------------------
*/
Route::get('auth/facebook', 'AuthController@redirectToProvider');
Route::get('auth/facebook/callback', 'AuthController@handleProviderCallback');

View::composer(array('template.base', 'modulos.inicio.inicio'), function($view){
	$avatar = (Auth::user()->avatar == '')? '/img/avatar.jpg' : Auth::user()->avatar;
	$view->with('avatar', $avatar);
});

/**
|--------------------------------------------------------------------------
| Módulos
|--------------------------------------------------------------------------
*/
Route::get('/Catalogos', ['middleware' => 'auth', 'uses' => 'ModulosController@catalogos']);
Route::get('/Proveedores', ['middleware' => 'auth', 'uses' => 'ModulosController@proveedores']);
Route::get('/Usuarios', ['middleware' => 'auth', 'uses' => 'ModulosController@usuarios']);
Route::get('/Clientes', ['middleware' => 'auth', 'uses' => 'ModulosController@clientes']);
Route::get('/Productos', ['middleware' => 'auth', 'uses' => 'ModulosController@productos']);
Route::get('/PuntoDeVenta', ['middleware' => 'auth', 'uses' => 'ModulosController@puntoDeVenta']);
Route::get('/Reportes/Ventas', ['middleware' => 'auth', 'uses' => 'ReportesController@ventas']);