<?php

Route::get('home', ['as' => 'index', 'uses' => 'HomeController@index']);
Route::get('/', 'PengumumanController@index');
Route::post('/', 'PengumumanController@getRankByInduk');
Route::get('/{induk}', 'PengumumanController@get');


Route::group(['prefix' => 'admin'], function(){
	get('/', ['as'=>'admin.getFinalist', 'uses'=>'PengumumanController@getFinalist']);
	post('/', ['as'=>'admin.postFinalist', 'uses'=>'PengumumanController@postFinalist']);
});

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);
