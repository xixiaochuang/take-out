<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//后台
Route::prefix('admins')->middleware('user')->group(function (){
    //后台首页
    Route::get('/',"admin\\AdminController@admin");


    //分类
    Route::get('classification',"admin\\TypeController@Classification");//分类页面视图
    Route::any('addtype',"admin\\TypeController@addtype");//分类添加
    Route::any('typelist',"admin\\TypeController@typelist");//分类展示
    Route::any('deltype',"admin\\TypeController@deltype");//分类展示
    Route::any('uptype',"admin\\TypeController@uptype");//分类修改

    //菜品添加
    Route::any('dishes',"admin\\MenuController@dishes");//菜品视图展示
    Route::any('addmenu',"admin\\MenuController@addmenu");//菜品添加
    Route::any('uploadimg',"admin\\MenuController@uploadimg");//上传文件添加
    Route::any('listmenu',"admin\\MenuController@listmenu");//菜品展示
    Route::any('search',"admin\\MenuController@search");//菜品展示
    Route::any('delmenu',"admin\\MenuController@delmenu");//菜品删除
    Route::any('upmenu',"admin\\MenuController@upmenu");//菜品修改
    Route::any('upmenudo',"admin\\MenuController@upmenudo");//菜品修改

});
//注册页面
Route::get('admins/register',"admin\\LoginController@register");
//注册执行
Route::post('admins/registerDo',"admin\\LoginController@registerDo");
//用户唯一性验证
Route::post('admins/registerdd',"admin\\LoginController@registerdd");
//修改密码页面
Route::get('admins/resetpassword',"admin\\LoginController@resetpassword");
//修改密码执行
Route::post('admins/resetpassworddo',"admin\\LoginController@resetpassworddo");
//登录
route::get('admins/login',"admin\\LoginController@login");
//登录处理
route::post('admins/disposelogin',"admin\\LoginController@disposelogin");






//前台
//登录
route::any('login',"index\LoginController@Login");
route::any('addLogin',"index\LoginController@addLogin");



//前台
//首页
route::any('/',"index\IndexController@Index");
//登录
route::any('login',"index\LoginController@Login");
route::any('addLogin',"index\LoginController@addLogin");


//注册
route::any('register',"index\LoginController@register");
route::any('regadd',"index\LoginController@regadd");
route::any('onlyuser',"index\LoginController@onlyuser");



//修改密码
route::any('password',"index\LoginController@password");
//购物车
route::any('shop',"index\ShopController@shop");
//分类
route::any('classify',"index\ClassifyController@classify");
//个人中心
route::any('member',"index\MemberController@member");
//收货地址
route::any('address',"index\AddressController@address");
//我的订单
route::any('myorder',"index\MyorderController@myorder");
//菜品详情
route::get('take',"index\ShopController@take");
//价钱
route::post('takemoney',"index\ShopController@takemoney");
//分类下菜品
route::get('classifytake',"index\ClassifyController@classifytake");
//搜索
route::get('search','index\ShopController@search');
//检查是否登陆
route::get('checklogin','index\LoginController@checklogin');
//加入购物车
route::post('addshopcart','index\ShopcartController@addshopcart');