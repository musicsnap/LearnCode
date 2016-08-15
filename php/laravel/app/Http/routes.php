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
Route::group(['middleware' => ['web']], function () {

Route::auth();

Route::get('/home', 'HomeController@index');


Route::get('admin/login', 'Admin\Auth\AuthController@getLogin');
Route::post('admin/login', 'Admin\Auth\AuthController@postLogin');
Route::get('admin/register', 'Admin\Auth\AuthController@getRegister');
Route::post('admin/register', 'Admin\Auth\AuthController@postRegister');
Route::get('admin', 'Admin\AdminController@index');
});