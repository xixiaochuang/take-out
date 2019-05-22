<?php

namespace App\Http\Controllers\index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MyorderController extends Controller
{
    //我的订单
    public function myorder(){
        return view('index.myorder');
    }

}