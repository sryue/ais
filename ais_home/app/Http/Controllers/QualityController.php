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
    public function index()
    {
    	$data =DB::select('select * from ais_special');
    	//print_r($data);die;
        return view('quality',['data'=>$data]);
    }
}
?>