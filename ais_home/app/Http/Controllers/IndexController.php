<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Models\Ais_carousel;

class IndexController extends CommonController
{
	public function index()
	{

		//找出6首下载最多歌曲作为为你推荐
		$topList = DB::table('music')->select(['music_id','music_img','music_name'])->orderBy('play','desc')->get();
		//找出6首最新的歌曲
		$hotList = DB::table('music')->select(['music_id','music_img','music_name'])->orderBy('lssue_time','desc')->get();
		$data = [
			'topList' => $topList,
			'hotList' => $hotList,
		];
		
		//查询轮播图
		//实例化轮播图的M
		$carModel = new Ais_carousel();
		$car_data = $carModel::orderBy('car_id','desc')->limit(4)->get()->toArray();

		return view('index',$data,["car_data"=>$car_data]);
	}
	//播放器
	public function listen()
	{
		//查看列表
		session_start();
		$musicList = $_SESSION['musicList'];
		$musicList = DB::table('music')->whereIn('music_id', $musicList)->join('actor', 'music.actor_id', '=', 'actor.actor_id')->get();
		foreach ($musicList as $key => $value) {
			$musicList[$key]->music_path = trim($value->music_path,'.');
		}
		return view('listen',['musicList'=>$musicList]);
	}
	//加入播放器
	public function joinlisten()
	{
		session_start();
		$music_id = Input::get('music_id');
		if(!$music_id)
		{
			echo 'NO';die();
		}
		//将音乐id存入播放列表 如果有返回错误
		$musicList = isset($_SESSION['musicList']) ? $_SESSION['musicList'] : [] ;
		$result = ['status'=>0,'msg'=>''];
		if(in_array($music_id, $musicList))
		{
			//如果存在 找到该id置顶
			foreach ($musicList as $key => $value) {
				if($value == $music_id)
				{
					unset($musicList[$key]);
				}
			}
			array_unshift($musicList,$music_id);
			$_SESSION['musicList'] = $musicList;	 
		}else
		{
			$_SESSION['musicList'][] = $music_id;	
		}
		$result['status'] = 1; 
		$result['msg'] = '添加歌曲到列表成功!'; 
		echo json_encode($result);die;
	}
}
 ?>