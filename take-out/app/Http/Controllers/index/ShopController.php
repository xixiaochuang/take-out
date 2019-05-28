<?php

namespace App\Http\Controllers\index;

use App\Model\Shopcart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Menu;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    //购物车
    public function shop(Request $request){
        if(!$request->session()->has('indexinfo')){
            return redirect('/login');
        }
        $user_id=session('indexinfo')['user_id'];
        $res=Shopcart::where(['user_id'=>$user_id])->pluck('menu_id')->toArray();
        $arr=[];
        for ($i=0;$i<count($res);$i++){
            $arr[]=Menu::where('menu.menu_id',$res[$i])->join('shopcart','menu.menu_id','=','shopcart.menu_id')->where('del_menu',1)->first()->toarray();
        }
        return view('index.shopping',['res'=>$arr]);
    }

    //菜品详情

    public function take(Request $request)
    {
        $menu_id=$request->menu_id;
        $res=Menu::where(['menu_id'=>$menu_id])->first();
       //dd($request->cookie());
    $cookie=$request->cookie('take');
    if($cookie){
        $take=unserialize(base64_decode($cookie));
            $num=1;
            for($i=0;$i<count($take);$i++){
                if($take[$i]['menu_id']==$menu_id){
                    $take[$i]['create_time']=date('Y-m-d H:i:s',time());
                    $info=$take;
                    $num=$num+1;
                }
            }
            if($num==1){
                $info=$take;
                $info[]=['menu_id'=>$menu_id,'create_time'=>date('Y-m-d H:i:s',time())];
            }
            $infos=base64_encode(serialize($info));
            \setcookie('take',$infos,7200);
        dd(unserialize(base64_decode($request->cookie('take'))));
    }else{
        //echo 1222;exit;
        $info[]=['menu_id'=>$res->menu_id,'create_time'=>date('Y-m-d H:i:s',time())];
        $info=base64_encode(serialize($info));
        \Cookie::queue('take',$info,3600);
    }
        return view('index.take-out',['ress'=>$res]);
    }
    //价格
    public function takemoney(Request $request)
    {
       $menu_id=$request->menu_id;
       $num=$request->input('sales',null);
       if($num==null){
           $arr=explode(',',$menu_id);
           $user_id=session('indexinfo')['user_id'];
           $info=Menu::whereIn('menu.menu_id',$arr)->join('shopcart','menu.menu_id','=','shopcart.menu_id')->where('user_id',$user_id)->get()->toarray();
           $num=0;
           foreach ($info as $v){
               $num+=$v['menu_price']*$v['menu_num'];
           }
            echo $num;
       }else{
           $res=Menu::where(['menu_id'=>$menu_id])->first();
           echo $num*$res->menu_price;
       }

    }

    //sous
    public function search(Request $request)
    {
       $value=$request->value;
       $res=Menu::where('menu_name','like',"%$value%")->get()->toArray();
       //dd($res);
       if($res){
           echo view('index.search',['res'=>$res]);
       }else{
           echo "此商品不存在";
       }

    }


}