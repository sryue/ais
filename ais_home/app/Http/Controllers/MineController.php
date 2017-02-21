<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Cookie;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;
use Illuminate\Pagination;
use App\Models\Ais_music;
use App\Models\Ais_actor;
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
	public function mine_favorite(){
		return view("mine.mine_favorite");
	}
	public function mine_concern(){
		return view("mine.mine_concern");
	}
	public function mine_lately(){
		return view("mine.mine_lately");
	}
	public function mine_but(){
		return view("mine.mine_but");
	}






}
?>