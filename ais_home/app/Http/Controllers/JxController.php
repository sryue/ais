<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers;
use DB;
use Request,Input;
use App\Http\Requests;

class JxController extends Controller
{
	public function index()
	{
		header("content-type:text/html;charset=utf-8");
		$id=$_GET['id'];
        $one=DB::select("select * from ais_special where spe_id='$id' ");
        $data =DB::select("select * from ais_music join ais_actor on ais_music.actor_id=ais_actor.actor_id" );
        $count=DB::select("select count(*) as con from ais_music;");
        return view('jx',['data'=>$data,'one'=>$one,'count'=>$count]);
	}
	public function chajian()
	{
		//接值
		$id = $_GET['music_id'];
		//查询
		$music = DB::table('music')
		->join('actor','music.actor_id','=','actor.actor_id')
		->where('music_id',$id)->first();
		
		return view('chajian',['music'=>$music]);
	}
}
 ?>