<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class AdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
{
    // dd($request->all());
            if(Auth::check() && Auth::user()->is_admin == 1 ){
            return $next($request);
        } else {
            return redirect()->route('admin.login')->with('msg','Truy cập không hợp lệ');
        }
}
}
