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