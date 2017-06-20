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

Route::get('/', function () {
    return view('welcome');
});
//刘备的代码
Route::get('/test1-lb', function () {
	return 'test1-lb';
});
//关羽的代码
Route::get('/test1-gy', function () {
	return 'test1-gy';
});
