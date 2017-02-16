<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//首页
Route::any('/','IndexController@index');
//登录
Route::any('/login','LoginController@login');
//注册
Route::any('/regist','RegistController@regist');
Route::any('/regist_pro','RegistController@regist_pro');
Route::any('/regist_suc','RegistController@regist_suc');

//精品
Route::any('/quality','QualityController@index');

//精选
Route::any('/jx','JxController@index');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
