<?php

namespace App\Http\Controllers\index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Menu;

class IndexController extends Controller
{
    public function index(Request $request){
        $res=Menu::limit(12)->get()->toArray();
        $count=12/3;
        $arr=[];
        for($i=0;$i<$count;$i++){
            $num=$i*3;
            $arr[]=array_slice($res ,$num,3);
        };
      // dd($arr);
        return view('index.index',['counts'=>count($arr),'res'=>$arr]);
    }

}