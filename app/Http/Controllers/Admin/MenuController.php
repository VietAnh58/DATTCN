<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use App\Models\ParentCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\CreateMenuRequest;


class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::all();
        return view("blocks.backend.menu.index", compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menus = ParentCategory::all();
        return view('blocks.backend.menu.create', compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateMenuRequest $request)
    {
        // dd($request->all());
        try {
            $menu = new Menu();
            $menu->name = $request->name;
            $menu->alias = Str::slug($request->name);
            $menu->order_number = $request->order_number;
            $menu->link = $request->link;
            $menu->is_active = $request->is_active ? 1 : 0;
            $menu->save();
            session()->flash('success', "tạo menu thành công");
            return redirect()->route('admin.menu.index')->with('msg', 'Tạo danh mục thành công');
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->route('admin.menu.index')->with('msg', 'Lỗi khi tạo danh mục');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $menu = Menu::all()->find($id);
        return view('blocks.backend.menu.edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        $menu->name = $request->name;
        $menu->alias = Str::slug($request->name);
        $menu->link = $request->link;
        $menu->order_number = $request->order_number;
        $menu->is_active = $request->is_active ? 1 : 0;

        try {
            $menu->save();
            session()->flash('success', 'Cập nhật menu thành công');
        } catch (\Throwable $th) {
            session()->flash('error', 'Lỗi khi cập nhật menu');
        }

        return redirect()->route('admin.menu.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        try {
            $menu->delete();
            return redirect()->route('admin.menu.index')->with('success', 'Xóa menu thành công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Xóa thất bại');
        }
    }

    public function trash()
    {
        $menus = Menu::onlyTrashed()->get();
        return view('blocks.backend.menu.trash', compact('menus'));
    }

    public function restore($id)
    {
        Menu::withTrashed()->where('id', $id)->restore();
        return redirect()->route('admin.menu.index')->with('success', 'Khôi phục menu thành công');
    }

    public function force_delete($id)
    {
        Menu::withTrashed()->where('id', $id)->forceDelete();
        return redirect()->route('admin.menu.trash')->with('success', 'Xóa menu khỏi thùng rác thành công');
    }
}
