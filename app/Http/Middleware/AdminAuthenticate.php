<?php

namespace App\Http\Middleware;

use App\Models\Admin_User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticate
{
    public function handle(Request $request, Closure $next)
    {
        
        $admin = Auth::guard('admin')->user();
        // dd($admin);
        if ($admin && $admin->isAdmin == 1) {
            return $next($request);
        }
        return redirect()->route('admin.login')->with('error', 'Bạn không có quyền truy cập trang admin.');
    }
}
