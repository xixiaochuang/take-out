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
Route::prefix('admins')->group(function (){
    //后台首页
    Route::get('/',"admin\\AdminController@admin");
});

//前台
//首页
route::any('/',"index\IndexController@Index");
//登录
route::any('login',"index\LoginController@Login");
//注册
route::any('register',"index\LoginController@register");
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