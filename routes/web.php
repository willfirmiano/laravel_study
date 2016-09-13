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

Route::get('/foo/bar', function () {
    return view('foo/bar', ['foo' => 'asdf', 'bar' => 'AUHAHU']);
});

Route::get('/foo/baz', function () {
    return view('foo/baz');
});

Route::group(['prefix' => 'user'], function () {
    Route::get('/', ['uses' => 'UserController@index']);
    Route::get('add', ['uses' => 'UserController@create']);
    Route::post('add', ['uses' => 'UserController@post']);
    Route::get('{id}', ['uses' => 'UserController@show']);
});
