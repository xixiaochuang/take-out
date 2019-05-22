<?php

namespace App\Http\Controllers\index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClassifyController extends Controller
{
    //登录
    public function classify(){
        return view('index.classify');
    }

}