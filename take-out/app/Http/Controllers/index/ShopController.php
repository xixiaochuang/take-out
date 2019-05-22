<?php

namespace App\Http\Controllers\index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    //购物车
    public function shop(){
        return view('index.shopping');
    }

}