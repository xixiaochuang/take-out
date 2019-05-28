<?php

namespace App\Http\Controllers\index;

use App\Model\Menu;
use App\Model\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ClassifyController extends Controller
{
    //分类
    public function classify(){
        $res=Type::get()->toArray();
        $count=ceil(count($res)/2);
        $arr=[];
        for($i=0;$i<$count;$i++){
            $arr[]=array_splice($res,$i,2);
        }
        return view('index.classify',['info'=>$arr]);
    }

    //分类下的商品
    public function classifytake(Request $request)
    {
        $menu_id=$request->menu_id;
       $where=['type_id'=>$menu_id];
       $take_info=Menu::where($where)->get();
       return view('index.product',['takeinfo'=>$take_info]);
    }

}