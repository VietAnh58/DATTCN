<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {
        $user = User::all();
        return view ('blocks.backend.user.index', compact('user'));
    }

    public function destroy(User $user)
    {
        // dd('123')    ;
        try {
            $user->delete();
            return redirect()->route('admin.user.index')->with('success', 'Xóa người dùng thành công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Xóa thất bại');
        }
    }
}
