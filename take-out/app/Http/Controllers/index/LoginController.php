<?php

namespace App\Http\Controllers\index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Login;

class LoginController extends Controller
{

    //注册
    public function register(){
        return view('index.register');
    }

    /*
     * @content 注册执行
     * */
    public function regadd(Request $request){
        $user_name=$request->user_name;
        $pwd=$request->pwd;
        $created_at = time();
        $login=new Login;
        $login->user_name=$user_name;
        $login->created_at = $created_at;
        $login->user_pwd=md5($pwd);
        $res=$login->save();
        if($res){
            echo json_encode(['font'=>'注册成功','code'=>1]);
        }else{
            echo json_encode(['font'=>'注册失败','code'=>2]);exit;
        }
    }

    /**验证唯一性 */
    public function onlyuser(Request $request){
        $data= Login::where('user_name',$request->user_name)->first();
        if(!empty($data)){
            return 1;
        }else{
            return 2;
        }
    }

    //登录
    public function Login(){
        return view('index.login');
    }

    /*
     * @content 登录执行
     * */
    public function addLogin(Request $request)
    {
        $user_name = $request->user_name;
        $pwd = $request->pwd;
        $pwd1=md5($pwd);
        $re = Login::where('user_name',$user_name)->first();
        if($re['user_pwd'] == $pwd1){
            session(['indexinfo'=>['user_id'=>$re->user_id,'user_name'=>$re->user_name]]);
            echo json_encode(['font'=>'登录成功','code'=>1]);
        }else{
            echo json_encode(['font'=>'账号或密码错误','code'=>2]);
        }
    }

    //修改密码
    public function password(){
        return view('index.password');
    }

    //检查是否登陆
    public function checklogin(Request $request)
    {
        if(!$request->session()->has('indexinfo')){
          echo 1;
        }
    }
}