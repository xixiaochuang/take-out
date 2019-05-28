<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    /*
     * @content 添加菜单的视图方法
     * */
    public function dishes()
    {
        $re = DB::table('type')->get();
        return view('admin.menu',['re'=>$re]);
    }
    /*
     * @content 上传文件添加
     * */
    public function uploadimg(Request $request)
    {
        //接收上传文件
        $file = $request->file;
        $ext = $file->getClientOriginalExtension();
        $type=$file->getClientMimeType();
        //获取当前文件的位置
        $path = $file->getRealpath();
        //拼接新文件的名称
        $newfilename = date("ymd")."/".mt_rand(10000,99999).".".$ext;
        //将临时文件移动到对应的文件夹   完成上传操作
        $re = Storage::disk('upload')->put($newfilename,file_get_contents($path));

        $res=[
            "code"=> 0,
            "msg"=>"",
            "data"=> [
            "src"=>'/uploads'.'/'.$newfilename
            ]
        ];
        echo json_encode($res);
    }
    /*
     * @content 添加菜单方法
     * */
    public function addmenu(Request $request)
    {
        $data = $request->all();
        unset($data['file']);
        $re = DB::table('menu')->insert($data);
        if($re){
            echo 1;
        }else{
            echo 2;
        }

    }
    /*
     * @content 展示菜单方法
     * */
    public function listmenu(Request $request)
    {

        $re = DB::table('menu')->join('type','menu.type_id','=','type.type_id')->where('del_menu',1)->get();
//        dd($re);
        return view('admin.menulist',['re'=>$re]);
    }
    /*
     * @content 搜索
     * */
    public function search(Request $request)
    {
        $keyname = $request->keyname;
        $re = DB::table('menu')->join('type','menu.type_id','=','type.type_id')->where('menu_name','like',"%$keyname%")->get();
        echo view('admin.search',['re'=>$re]);
    }
    /*
     * @content 删除菜单方法
     * */
    public function delmenu(Request $request)
    {
        $menu_id=$request->menu_id;
        $re = DB::table('menu')->where(['menu_id'=>$menu_id])->update(['del_menu'=>2]);
        if($re){
            echo 1;
        }else{
            echo 0;
        }
    }
    /*
   * @content 修改菜单方法
   * */
    public function upmenu(Request $request)
    {
        $type=DB::table('type')->get();
        // dd($type);
        $menu_id=$request->menu_id;
        $re = DB::table('menu')->join('type','menu.type_id','=','type.type_id')->first();
        return view('admin.menuup',['re'=>$re,'type'=>$type]);
    }
    /*
     * @content 修改菜单方法
     * */
    public function upmenudo(Request $request){
        $data=$request->all();
        // print_R($data);exit;
        unset($data['file']);
        $arr=[
            'menu_name'=>$data['menu_name'],
            'menu_price'=>$data['menu_price'],
            'type_id'=>$data['type_id'],
            'is_menu'=>$data['is_menu'],
            'menu_content'=>$data['menu_content']
        ];
        $re = DB::table('menu')->where('menu_id',$data['menu_id'])->update($arr);
        if($re){
            echo 1;
        }else{
            echo 2;
        }
    }
}
