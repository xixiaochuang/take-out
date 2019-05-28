<?php

namespace App\Http\Controllers\index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    //个人中心
    public function member(Request $request)
    {
        if(!$request->session()->has('indexinfo')){
            return redirect('/login');
        }
        return view('index.member');
    }

}