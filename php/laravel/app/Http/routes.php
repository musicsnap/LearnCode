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
/*
|--------------------------------------------------------------------------
| Logging In/Out Routes
|--------------------------------------------------------------------------
*/
Route::auth();


/*
|--------------------------------------------------------------------------
| Home Routes
|--------------------------------------------------------------------------
*/
Route::get('/', 'HomeController@index');



Route::group(['middleware' => ['web']], function () {
    //后台的登录
    Route::get('/admin/login','Admin\LoginController@getLogin');
    Route::post('/admin/login','Admin\LoginController@postLogin');
    Route::get('/admin/logout','Admin\LoginController@getLogout');
    //后台的首页
    Route::get('/admin/index','Admin\IndexController@index');


});
