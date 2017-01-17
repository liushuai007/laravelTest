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

Route::get('/', function () {
    return view('welcome');
});

Route::get('user/index', 'UserController@index');

Route::get('user/create', 'UserController@create');

Route::get('user/edit', 'UserController@edit');

Route::get('user/del', 'UserController@delete');

Route::get('article/index', 'ArticleController@index');
