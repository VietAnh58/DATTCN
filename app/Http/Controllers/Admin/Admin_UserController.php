<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin_User;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterAdminRequest;
use App\Http\Requests\LoginAdminRequest;
// use App\Http\Requests\LoginUserRequest;

// use Illuminate\Support\Facades\Auth;


class Admin_UserController extends Controller
{
    public function index(){
        $admin = Admin_User::all();
        return view('blocks.backend.admin_user.index', compact('admin'));
    }

    // public function edit(Admin_User $admin_user)
    // {
    //     $admin = Admin_User::all();
    //     return view('blocks.backend.product.edit', compact('admin', 'admin_user'));
    // }


    public function login()
    {
        return view('blocks.backend.home.login');
    }

    public function checkLogin(LoginAdminRequest $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'isAdmin' => 1,
        ];;

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.index');
        } else {
            return redirect()->back()->with('error', 'Sai thông tin đăng nhập');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    public function register()
    {
        return view('blocks.backend.home.register');
    }

    // Trong lớp Admin_User (Model)

    public function post_register(RegisterAdminRequest $request)
    {
        // dd($request->all());
        $request->merge(['password' => Hash::make($request->password)]);
        $request->merge(['is_admin' => 1]);

        try {
            Admin_User::create($request->all());
            return redirect()->route('admin.login');
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
