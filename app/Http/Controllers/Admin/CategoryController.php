<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\ParentCategory;
use PhpParser\Node\Stmt\Catch_;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Str;
use Spatie\LaravelIgnition\Http\Requests\UpdateConfigRequest;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('blocks.backend.category.index', compact('categories'));
    }

    public function create(){
        $categories = ParentCategory::all();
        return view('blocks.backend.category.create', compact('categories'));
    }
    public function store(StoreCategoryRequest $request){
        

        try {
            $category = new Category();
            $category->title = $request->title;
            $category->alias = Str::slug($request->title);
            $category->parent_id = $request->parent_id;
            $category->is_active = $request->is_active ? 1:0;  
                
            $category->save();
    
            session()->flash('success', 'Tạo danh mục thành công');
            return redirect()->route('admin.category.index')->with('msg', 'Tạo danh mục thành công');
        } catch (\Throwable $th) {
            return redirect()->route('admin.category.index')->with('msg', 'Lỗi khi tạo danh mục');
        }
    }

    public function edit(Category $category) {
        $categories = ParentCategory::all();
        return view('blocks.backend.category.edit', compact('category', 'categories'));
    }
    
    
    public function update(UpdateCategoryRequest $request, Category $category) {

    
        $category->title = $request->title;
        $category->alias = Str::slug($request->title);
        $category->parent_id = $request->parent_id;
        $category->is_active = $request->is_active ? 1 : 0;
        // dd($request->all());
        try {
        // dd($request->all());

            $category->save();
            session()->flash('success', 'Cập nhật danh mục thành công');
        } catch (\Throwable $th) {
            session()->flash('error', 'Lỗi khi cập nhật danh mục');
        }
    
        return redirect()->route('admin.category.index');
    }

    public function delete($id){
        $category = Category::where('id', $id)->first();
        return view('blocks.backend.category.delete', compact('category'));
    }

    public function delete_category($id){
        $category = Category::where('id', $id)->first();
        if ($category) {
            if (Category::where('id', $id)->delete()) {
                session()->flash('success', 'Xóa phân quyền thành công');
            } else {
                session()->flash('error', 'Xóa phân quyền không thành công');
            }
        } else {
            session()->flash('error', 'Không tìm thấy phân quyền');
        }
        return redirect()->route('admin.category.index')->with('msg', 'Xóa người dùng thành công');
    }

    public function trash(){
        $categories = Category::onlyTrashed()->get();

        return view('blocks.backend.category.trash', compact('categories'));
    }

    public function restore($id){
        Category::withTrashed()->where('id', $id)->restore();
        return redirect()->route('admin.category.index')->with('success', 'Khôi phục danh mục thành công');
    }
    
    public function force_delete($id){
        Category::withTrashed()->where('id', $id)->forceDelete();
        return redirect()->route('admin.category.trash')->with('success', 'Xóa danh mục khỏi thùng rác thành công');
    }

}
