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



class QualityController extends Controller
{
    //推荐
    public function index()
    {
    	$data =DB::select('select * from ais_special order by spe_id desc limit 0,6 ');
    	//print_r($data);die;
        return view('quality',['data'=>$data]);
    }
    //最热
    public function hot(){
        $data =DB::select('select * from ais_special order by spe_id desc limit 6,12 ');
        //print_r($data);die;
        return view('quality',['data'=>$data]);
    }
    //最新
    public function xin(){
        $data =DB::select('select * from ais_special order by spe_id desc limit 12,18 ');
        //print_r($data);die;
        return view('quality',['data'=>$data]);
    }
    //专区
    public function zhuan(){
        $data =DB::select('select * from ais_special order by spe_id desc limit 18,26 ');
        //print_r($data);die;
        return view('quality',['data'=>$data]);
    }
}
?>