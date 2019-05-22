<?php

namespace App\Http\Controllers\index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddressController extends Controller
{
    //收货地址
    public function Address(){
        return view('index.Address');
    }

}