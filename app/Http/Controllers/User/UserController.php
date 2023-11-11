<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterUserRequest;
use App\Http\Requests\LoginUserRequest;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function login(){
        return view('blocks.frontend.user.login');
    }

    public function register(){

        return view('blocks.frontend.user.register');
    }

    public function post_register(RegisterUserRequest $request){
        $request->merge(['password' => Hash::make($request->password)]);
    
        try {
            User::create($request->all());
            return redirect()->route('login');
        } catch (\Throwable $th) {
            dd($th);
        }
    }
    
    // public function post_login(LoginUserRequest $request){
    //     if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
    //         return redirect()->route('index'); // Đăng nhập thành công
    //     } else {
    //         return redirect()->back()->with('error', 'Đăng nhập không thành công');
    //     }
    // }

    public function post_login(LoginUserRequest $request){
        $user = User::where('email', $request->email)->first();
    
        if (!$user) {
            return redirect()->back()->with('error', 'Đăng nhập không thành công');
        }
    
        if (password_verify($request->password, $user->password)) {
            session(['user_name' => $user->name]);
            return redirect()->route('index');
        } else {
            return redirect()->back()->with('error', 'Đăng nhập không thành công');
        }
    }
    

    public function logout() {
        // Xóa thông tin liên quan đến người dùng khỏi session
        session(['user_id' => null, 'user_name' => null]);
    
        // Sau khi xóa session, chuyển hướng người dùng đến trang đăng nhập hoặc trang chính
        return redirect()->route('login'); // hoặc route('home') tùy thuộc vào tên đường dẫn của trang chính
    }
    
    
}
