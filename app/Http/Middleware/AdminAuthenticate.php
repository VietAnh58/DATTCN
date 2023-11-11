<?php

namespace App\Http\Middleware;

use App\Models\Admin_User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticate
{


    // return redirect()->route('admin.login')->with('error', 'Đăng nhập để vào trang Admin');



    public function handle(Request $request, Closure $next)
    {
            if(Auth::check() && Auth::user()->is_admin == 1) {
                return $next($request);
            }else{
                return redirect()->route('admin.login')->with('success', "Đăng nhập vào trang Admin");

            }
        }
}