<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TypeController extends Controller
{
    /*
     * @content 分类视图方法
     * */
    public function Classification(){
        return view('admin.type');
    }
   /*
    * @contennt 分类添加方法
    * */
    public function addtype()
    {
        $data=\request()->all();
        $re = DB::table('type')->insert($data);
        if($re){
            echo 1;
        }else{
            echo 2;
        }
   }
   /*
    * @content 分类展示
    * */
    public function typelist()
    {
        
   }
   /*
    * @content 分类删除
    * */
    public function deltype()
    {
        
   }
   /*
    * @content 分类修改方法
    * */
    public function uptype()
    {
        
   }
    
}
