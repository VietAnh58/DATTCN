<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\StoreRequestProduct;
use App\Models\ImageProduct;
use Throwable;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('blocks.backend.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('blocks.backend.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequestProduct $request)
    {
        // dd($request->all());
        $fileName = $request->image->getClientOriginalName();
        $request->image->storeAs('public/images', $fileName);
        $request->merge(['image' => $fileName]);

        try {
            $product = product::create([
                'product_name' => $request->product_name,
                'alias' => Str::slug($request->product_name),
                'price' => $request->price,
                'sale_price' => $request->sale_price,
                'category_id' => $request->category_id,
                'description' => $request->description,
                'inventory_id' => $request->inventory_id,
                'is_featured' => $request->is_featured ? 1:0,
                'is_new' => $request->is_new ? 1:0,
                'is_best_seller' => $request->is_best_seller ? 1:0,
                'image' => $fileName,

            ]);
            if($product && $request->hasFile('images')) {
                foreach ($request->images as $key => $value){
                    $fileNames = $value -> getClientOriginalName();
                    $value->storeAs('public/images', $fileNames);
                    ImageProduct::create([
                        'product_id' => $product->id,
                        'image'=>$fileNames
                    ]);
                }
            }
        
            session()->flash('success', 'Tạo sản phẩm thành công');
            return redirect()->route('admin.product.index');
        } catch (\Exception $e) {
            session()->flash('error', 'Lỗi khi tạo sản phẩm: ' . $e->getMessage());
            return redirect()->route('admin.product.index');
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
    public function edit(Product $product)
    {
        $products = Product::all();
        $categories = Category::all();
        // $category_title = $product->category->title;
        return view('blocks.backend.product.edit', compact('product', 'products', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
{
    try {
        // Lưu lại các trường thông tin của sản phẩm
        $product->product_name = $request->title;
        $product->price = $request->price;
        $product->alias = Str::slug($request->title);
        $product->sale_price = $request->sale_price;
        $product->description = $request->description;
        $product->inventory_id = $request->store_id;
        $product->category_id = $request->category_id;
        $product->is_featured = $request->is_featured;
        $product->is_new = $request->is_new;
        $product->is_best_seller = $request->is_best_seller;

        // Lưu hình ảnh sản phẩm chính
        if ($request->hasFile('image')) {
            $fileName = $request->image->getClientOriginalName();
            $request->image->storeAs('public/images', $fileName);
            $product->image = $fileName;
        }

        $product->save();

        $existingImages = ImageProduct::where('product_id', $product->id)->get();

        // Lưu hình ảnh mô tả (nếu có)
        if ($request->hasFile('images')) {
            $newImages = $request->images;
        
            foreach ($existingImages as $key => $existingImage) {
                if (isset($newImages[$key])) {
                    $fileNames = $newImages[$key]->getClientOriginalName();
                    $newImages[$key]->storeAs('public/images', $fileNames);
        
                    // Cập nhật dữ liệu cho từng hình ảnh
                    $existingImage->image = $fileNames;
                    $existingImage->save();
                }
            }
        }
        

                session()->flash('success', 'Cập nhật sản phẩm thành công');
            } catch (\Exception $e) {
                session()->flash('error', 'Lỗi khi cập nhật sản phẩm: ' . $e->getMessage());
            }

            return redirect()->route('admin.product.index');
        }


    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        try {
            $product->delete();
            return redirect()->route('admin.product.index')->with('success', 'Xóa sản phẩm thành công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Xóa thất bại');
        }
    }


    public function trash(){
        $products = Product::onlyTrashed()->get();
        return view('blocks.backend.product.trash', compact('products'));
    }

    public function restore($id){
        Product::withTrashed()->where('id', $id)->restore();
        return redirect()->route('admin.product.index')->with('success', 'Khôi phục sản phẩm thành công');
    }
    
    public function force_delete($id){
        Product::withTrashed()->where('id', $id)->forceDelete();
        return redirect()->route('admin.product.trash')->with('success', 'Xóa sản phẩm khỏi thùng rác thành công');
    }

}
