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

Route::get('/', ['as' => 'index', 'uses' => 'WelcomeController@index']);

Route::get('home', 'HomeController@index');
Route::get('pengumuman', 'PengumumanController@index');

Route::group(['prefix' => 'admin'], function(){
	get('/', ['as'=>'admin.getFinalist', 'uses'=>'PengumumanController@getFinalist']);
	post('/', ['as'=>'admin.postFinalist', 'uses'=>'PengumumanController@postFinalist']);
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
