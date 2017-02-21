<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Cookie;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;
use Illuminate\Pagination;
use App\Models\Ais_user;
use App\Models\Ais_actor;
use App\Models\Ais_collect;
use App\Models\Ais_attention;
use App\Models\Ais_user_spec;
use Session,Redirect;
use Cache;
class MineController extends Controller
{
	/**
	 * 个人中心
	 */
	public function mine_index(){
		return view("mine.mine_index");
	}
	//我的收藏    //收藏的歌曲
	public function mine_favorite(){
		$CollectModel = new Ais_collect();//收藏的歌曲表
		//根据  用户名id  查询关注表所搜藏的歌曲 coller  user music  
		$coll_data = $CollectModel::join('user', 'collect.user_id', '=', 'user.user_id')
		->join('music', 'collect.music_id', '=', 'music.music_id')
		->join('actor', 'music.actor_id', '=', 'actor.actor_id')
		->where(['user.user_id'=>"3"])
		->orderBy('collect.col_id','desc')
		->get()
		->toArray();
		// var_dump($coll_data);die;
		return view("mine.mine_favorite",["coll_data"=>$coll_data]);		
	}

	//我的收藏    //专辑
	public function mine_fav_zhuanji(){
		$usModel = new Ais_user_spec();//收藏的歌曲表
		//根据  用户名id  查询关注表所搜藏的歌曲 coller  user music  
		$spec_data = $usModel::join('user', 'user_spec.user_id', '=', 'user.user_id')
		->join('special', 'user_spec.special_id', '=', 'special.spe_id')
		->join('actor', 'special.actor_id', '=', 'actor.actor_id')
		->where(['user.user_id'=>"3"])
		->get()
		->toArray();
		return view("mine.mine_fav_zhuanji",["spec_data"=>$spec_data]);	
	}

	//关注的艺人	
	public function mine_concern(){
		$attentionModel = new Ais_attention();//关注表
		//根据  用户名id  查询关注表所关注的歌手 attention  user actor  
		$att_data = $attentionModel::join('user', 'attention.user_id', '=', 'user.user_id')
		->join('actor', 'attention.be_atte_id', '=', 'actor.actor_id')
		->where(['user.user_id'=>"3"])
		->orderBy('attention.atte_id','desc')
		->get()
		->toArray();
		return view("mine.mine_concern",["att_data"=>$att_data]);
	}

	//最近播放
	public function mine_lately(){
		return view("mine.mine_lately");
	}

	//已购
	public function mine_but(){
		return view("mine.mine_but");
	}






}
?>