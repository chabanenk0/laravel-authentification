<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', function()
{
	return View::make('pages.home');
}]);

/*Route::get('/profile', array('before' => 'auth', function()
{
	return View::make('pages.user.profile');
}));*/

Route::get('user/{id}/profile', array('before' => 'auth', 'uses' => 'UserController@showProfile'));

Route::get('login', 'SessionsController@create');
Route::post('login', 'SessionsController@store')->before('csrf');

Route::get('register', 'UserController@showRegister');
Route::post('register', 'UserController@storeRegister')->before('csrf');

Route::get('logout', 'SessionsController@destroy');

Route::resource('sessions', 'SessionsController', ['only' => ['index', 'create', 'destroy', 'store']]);