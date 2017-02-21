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
use Symfony\Component\HttpFoundation\Session\Session;
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
    //收藏
    public function shoucang()
    {
        //接值
        $music_id = $_POST['music_id'];
        //判断用户是否
        $session = new Session;
        $session_info = $session->get('session_key');
//        print_r($session_info);die;
        if($session_info)
        {
            $user_id = $session_info->user_id;
            //查询
            $sel_result = DB::table('collect')->where(['user_id'=>$user_id,'music_id'=>$music_id])->first();
            if($sel_result)
            {
                echo 2;
            }
            else
            {
                $shou_result=DB::table('collect')->insert(['user_id'=>$user_id,'music_id'=>$music_id]);
                if($shou_result)
                {
                    echo 0;
                }
                else
                {
                    echo 1;
                }

            }
        }
        else
        {
            echo 3;
        }


    }
    //下载
    public function songload()
    {
        //接值
        $music_id = $_POST['music_id'];
        //判断用户是否
        $session = new Session;
        $session_info = $session->get('session_key');
        if($session_info)
        {
            $user_id = $session_info->user_id;
            //查询
            $music_show = DB::table('music')->where('music_id',$music_id)->first();
            $music_path = $music_show->lyric_path;
            $music_name = $music_show->music_name.'.mp3';
//            print_r($music_name);die;
            //$file_dir = $_SERVER['SERVER_NAME'].'/aishang/ais_image/';
            //检查文件
            if(!file_exists($music_path))
            {
                echo '文件找不到';
                exit;
            }
            else
            {
                //打开文件
                $file = fopen($music_path,"r");
                //输入文件标签
                Header( "Content-type:  application/octet-stream ");
                Header( "Accept-Ranges:  bytes ");
                Header( "Accept-Length: " .filesize($music_path));
                header( "Content-Disposition:  attachment;  filename= $music_name");
                echo fread($file,$music_path);
                fclose($file);
                exit;
            }
        }
        else
        {
            echo 3;
        }
    }
}
 ?>