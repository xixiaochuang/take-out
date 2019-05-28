<?php

namespace App\Http\Controllers\index;

use App\Model\Shopcart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopcartController extends Controller
{
    //加入购物车
    public function addshopcart(Request $request)
    {
        $menu_id=$request->menu_id;
        $menu_num=$request->menu_num;
       // echo $menu_num;exit;
        $user_id=session('indexinfo')['user_id'];
        $where=['menu_id'=>$menu_id,'user_id'=>$user_id,'status'=>1];
        $info=Shopcart::where($where)->first();
       // dd($info);
        if($info){
            $num=$info->menu_num+$menu_num;
            $res=Shopcart::where($where)->update(['menu_num'=>$num,'update_time'=>date("Y-m-d H:i:s",time())]);
        }else{
            $info=['menu_id'=>$menu_id,'user_id'=>$user_id,'menu_num'=>$menu_num,'add_time'=>date("Y-m-d H:i:s",time())];
            $res=Shopcart::insert($info);
        }
        if($res){
           echo 1;
        }
    }
}
