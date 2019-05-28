<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Model\Business;

class LoginController extends Controller
{
    /*注册*/
    public function register(){
        return view('admin.register');
    }
    /*注册执行*/
    public function registerDo(Request $request){
        $business_name=$request->business_name;
        $userpwd=$request->pwd;
        $usermodel=new Business;
        $usermodel->business_name=$business_name;
        $usermodel->business_password=encrypt($userpwd);
        $res=$usermodel->save();
        if($res){
            echo json_encode(['font'=>'注册成功','code'=>1]);
        }else{
            echo json_encode(['font'=>'注册失败','code'=>2]);exit;
        }}
    /**验证唯一性 */
    public function registerdd(Request $request){
        $business_model=new Business();
        $data= $business_model->where('business_name',$request->business_name)->first();
        if(!empty($data)){
            return 1;
        }else{
            return 2;
        }
    }
    /*修改密码*/
    public function resetpassword(){
        return view('admin.resetpassword');
    }
    /*
   * @content 修改密码执行
   */
    public function resetpassworddo(Request $request)
    {
        $business_name=$request->business_name;
        $pwd=$request->pwd;
        $newpwd=$request->newpwd;
        $business_model=new Business();
        $data=$business_model->where(['business_name'=>$business_name])->first();
        if($data==null){
            echo json_encode(['font'=>'账号错误','code'=>4]);
        }else{
            $test=decrypt($data['business_password']);
            if($pwd==$test){
                $re=$data->business_password=encrypt($newpwd);
                //dd($re);
                $res=$data->save();
                if($res){
                    echo json_encode(['font'=>'修改成功','code'=>1]);
                }else{
                    echo json_encode(['font'=>'修改失败','code'=>2]);
                }
            }else{
                echo json_encode(['font'=>'密码错误','code'=>3]);
            }
        }
    }
    public function login ()
    {
        return view('admin.login');
    }

//登录处理
    public function disposelogin(Request $request)
    {
        $business_model=new Business();
        if(empty($request->business_name)){
            echo json_encode(['font'=>'账户不能为空', 'code'=>2]);exit;
        }
        if(empty($request->business_password)){
            echo json_encode(['font'=>'密码不能为空', 'code'=>2]);exit;
        }

        $data=$business_model->where(['business_name'=>$request->business_name])->first();
        if(!empty($data)){
            $etime=60-ceil((time()-$data->error_time)/60);
            if(decrypt($data->business_password)==$request->business_password){
                if((time()-$data->error_time)<3600&&$data->error_num>=3){
                    echo json_encode(['font'=>'密码已锁定，你还有'.$etime.'分钟可登陆', 'code'=>2]);
                }else{
                    $data->error_num=0;
                    $data->error_time=null;
                    $data->save();
                    // 存储数据到 session...
                    session(['userinfo'=>['business_id' =>$data->business_id,'business_name'=>$data->business_name]]);
                    //dd(session('userinfo'));
                    echo json_encode(['font'=>'登陆成功', 'code'=>1]);
                }
            }else{
                if(time()-$data->error_time>3600&&$data->error_num>=3){
                    $data->error_num=1;
                    $data->error_time=time();
                    $data->save();
                    echo json_encode(['font'=>'密码错误，你还可以输入2次', 'code'=>2]);
                }else{
                    if($data->error_num>=3){
                        echo json_encode(['font'=>'密码已锁定，你还有'.$etime.'分钟可登陆', 'code'=>2]);
                    }else{
                        $data->error_num=$data->error_num+1;
                        $data->error_time=time();
                        $data->save();
                        $arr=$business_model->where(['business_name'=>$request->business_name])->first();
                        $num=3-$arr->error_num;
                        echo json_encode(['font'=>'密码已锁定，你还可以输入'.$num.'次', 'code'=>2]);
                    }
                }
            }
        }else{
            echo json_encode(['font'=>'账号密码错误', 'code'=>2]);exit;
        }

    }
}
