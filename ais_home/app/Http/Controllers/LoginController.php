<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use DB;
class LoginController extends Controller
{
	public function login()
	{
		$error = Input::get('error');
		$user = Input::get('user');
		return view('login',['error'=>$error,'user'=>$user]);
	}
	public function login_pro()
	{
		$data = Input::get();
		//表单验证
		if(empty($data['username']))
		{
			return redirect('login?error=账号不能为空');
		}
		if(empty($data['password']))
		{
			return redirect('login?error=密码不能为空');
		}
		$res = DB::table('user')->where('username',$data['username'])->first();
		if($res)
		{
			$pwd = md5($data['password'].'aishang');
			if($pwd != $res->password)
			{
				return redirect('login?error=密码不正确&user='.$data['username']);
			}else
			{
				echo '主页';
			}
		}else{
			return redirect('login?error=账号不正确&user='.$data['username']);
		}
	}
}
?>