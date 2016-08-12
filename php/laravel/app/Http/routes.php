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

/* 后台登录模块 */
Route::group(['namespace' => 'Auth'], function () {
    // 登录认证
    Route::get('auth/login', 'AuthController@getLogin');
    Route::post('auth/login', 'AuthController@postLogin');
    Route::get('auth/logout', 'AuthController@getLogout');

    // 用户注册
    Route::get('auth/register', 'AuthController@getRegister');
    Route::post('auth/register', 'AuthController@postRegister');
});




Route::get('/home', 'HomeController@index');
