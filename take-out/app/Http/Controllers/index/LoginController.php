<?php

namespace App\Http\Controllers\index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //登录
    public function Login(){
        return view('index.login');
    }
    //注册
    public function register(){
        return view('index.register');
    }
    //修改密码
    public function password(){
        return view('index.password');
    }
}