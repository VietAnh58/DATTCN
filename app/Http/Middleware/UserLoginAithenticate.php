<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class UserLoginAithenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
            if(Auth::check() && Auth::user()->is_admin == 0) {
                return $next($request);
            }else{
                return redirect()->route('login')->with('success', "Đăng nhập vào trang User");

            }
        }
}