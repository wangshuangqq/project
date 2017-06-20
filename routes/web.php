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
//张飞的代码
Route::get('/test1-zf', function () {
	return 'test1-zf';
});
//关羽的代码
Route::get('/test1-gy', function () {
	return 'test1-gy';
});
//张飞的代码
Route::get('/test2-zf', function () {
	return 'test2-zf';
});
