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

//播放器
Route::any('/listen','IndexController@listen');
//加入播放器
Route::any('/joinlisten','IndexController@joinlisten');

//精品
Route::any('quality','QualityController@index');
Route::any('hot','QualityController@hot');
Route::any('xin','QualityController@xin');

//精选
Route::any('jx','JxController@index');
Route::any('chajian','JxController@chajian');
Route::any('shoucang','JxController@shoucang');
Route::any('songload','JxController@songload');
/*
排行
 */
//排行榜
Route::any('/rank_index','RankingController@rank_index');
//排行榜详情内容
Route::any('/rank_lisk','RankingController@rank_lisk');




/*
*我的主页
 */
//主页显示
Route::any('/mine_index','MineController@mine_index');
//我的收藏
Route::any('/mine_favorite','MineController@mine_favorite');
//收藏的专辑
Route::any('/mine_fav_zhuanji','MineController@mine_fav_zhuanji');

//关注的艺人
Route::any('/mine_concern','MineController@mine_concern');
//最近播放
Route::any('/mine_lately','MineController@mine_lately');
//已购
Route::any('/mine_but','MineController@mine_but');

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
