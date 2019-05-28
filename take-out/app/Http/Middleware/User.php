<?php

namespace App\Http\Middleware;

use Closure;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //dd(session('userinfo'));
        if(!$request->session()->has('userinfo')){
           header('location:admins/login');exit;
        }
        return $next($request);
    }
}
