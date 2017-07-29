<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'BasicController@index');
//add
Route::get('/basic/add', 'BasicController@create');
Route::post('/basic/add', 'BasicController@store');
//edit
Route::get('basic/{id}/edit', 'BasicController@edit');
Route::patch('basic/{id}/edit', 'BasicController@update');
//delete
Route::get('basic/{id}/delete', 'BasicController@destroy');