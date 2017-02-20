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

Route::any('login','LoginController@login');
Route::any('regist','RegistController@regist');
Route::any('regist_pro','RegistController@regist_pro');
Route::any('regist_suc','RegistController@regist_suc');
Route::any('login_pro','LoginController@login_pro');

// 新浪第三方登录 重定向地址
Route::any('login_sina','LoginController@login_sina');
// qq第三方登录 重定向地址
Route::any('login_qq','LoginController@login_qq');


//精品
Route::any('quality','QualityController@index');

//精选
Route::any('jx','JxController@index');
Route::any('chajian','JxController@chajian');


/*
排行
 */
//排行榜
Route::any('/rank_index','RankingController@rank_index');
//排行榜详情内容
Route::any('/rank_lisk','RankingController@rank_lisk');
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
