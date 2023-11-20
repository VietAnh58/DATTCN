<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ImageProduct;
use App\Models\Menu;
use App\Models\ParentCategory;
use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        // Lay san pham noi bat
        $featured_products = Product::where('is_featured', 1)->take(5)->get();
        //Lay danh sach anh
        $featured_product_images = [];
        foreach ($featured_products as $product) {
            $images = ImageProduct::where('product_id', $product->id)->get();
            $featured_product_images[$product->id] = $images;
        }

        // Lay san pham moi
        $new_products = Product::where('is_new', 1)->take(3)->get();

        //Lay san pham ban chay
        $best_seller_products = Product::where('is_best_seller', 1)->take(3)->get();

        $top_rate_product = Product::where('is_featured', 1)->take(3)->get();

        $menus = Menu::all();

        $parentCategory = ParentCategory::all();

        $category = Category::all();

         // Lấy 10 sản phẩm trên mỗi trang
        
        return view('blocks.frontend.home.content',
        compact('featured_products', 'featured_product_images','best_seller_products', 'new_products',
        'top_rate_product', 'menus','parentCategory','category'));
    }

    public function detail_product($alias) {

        $product = Product::where('alias', $alias)->first();
        // dd($product->image);
        // $image_product = $product->image;

        $productImages = ImageProduct::where('product_id', $product->id)->get();

        $detail_product_image[$product->id] = $productImages;

        

        $products = Product::all();
    
        $second_product_images = [];
        foreach ($products as $item) {
            $images = ImageProduct::where('product_id', $item->id)->get();
            $second_product_images[$item->id] = $images;
        }
        $featured_products = Product::where('is_featured', 1)->take(3)->get();
        

        $relatedProducts = Product::inRandomOrder()->take(3)->get();

        $new_products = Product::where('is_new', 1)->take(3)->get();

        //Lay san pham ban chay
        $best_seller_products = Product::where('is_best_seller', 1)->take(3)->get();
        
        $menus = Menu::all();

        $parentCategory = ParentCategory::all();

        $category = Category::all();

        $random_product = Product::inRandomOrder()->take(3)->get();
        return view('blocks.frontend.product.detail_product', compact('product', 'productImages', 'relatedProducts',
        'new_products', 'best_seller_products', 'featured_products', 'random_product','second_product_images', 'detail_product_image',
        'menus','parentCategory', 'category'));
    }

    public function category() {
        // $products = Product::all();
        // dd($products);
        $products = Product::paginate(12);
        
        $second_product_images = [];
        foreach ($products as $item) {
            $images = ImageProduct::where('product_id', $item->id)->get();
            $second_product_images[$item->id] = $images;
        }

        $menus = Menu::all();

        $parentCategory = ParentCategory::all();

        $category = Category::all();

       
        return view('blocks.frontend.category.index',compact('products', 'second_product_images','menus','parentCategory', 'category'));
    }

    public function ao_polo() {
        $ao_polo = Product::where('category_id', 1)->get();
        $menus = Menu::all();

        $one_item = $ao_polo->first();

        $parentCategory = ParentCategory::all();

        $category = Category::all();
        return view('blocks.frontend.category.ao_polo', compact('ao_polo','menus','parentCategory', 'category', 'one_item'));
    }

    public function ao_ni() {
        $ao_ni = Product::where('category_id', 2)->get();
        
        $menus = Menu::all();

        $parentCategory = ParentCategory::all();

        $one_item = $ao_ni->first();


        $category = Category::all();
        return view('blocks.frontend.category.ao_ni', compact('ao_ni','menus','parentCategory', 'category', 'one_item'));
    }

    public function ao_len() {
        $ao_len = Product::where('category_id', 3)->get();
        $menus = Menu::all();

        $one_item = $ao_len->first();


        $parentCategory = ParentCategory::all();

        $category = Category::all();
        return view('blocks.frontend.category.ao_len', compact('ao_len','menus','parentCategory', 'category', 'one_item'));
    }

    public function quan_au() {
        $quan_au = Product::where('category_id', 4)->get();

        $menus = Menu::all();

        $one_item = $quan_au->first();

        $parentCategory = ParentCategory::all();

        $category = Category::all();
        return view('blocks.frontend.category.quan_au', compact('quan_au','menus','parentCategory', 'category', 'one_item'));
    }

    public function quan_short() {
        $quan_short = Product::where('category_id', 5)->get();

        $menus = Menu::all();

        $one_item = $quan_short->first();

        $parentCategory = ParentCategory::all();

        $category = Category::all();
        return view('blocks.frontend.category.quan_short', compact('quan_short','menus','parentCategory', 'category', 'one_item'));
    }

    public function quan_kaki() {
        $quan_kaki = Product::where('category_id', 7)->get();

        $menus = Menu::all();

        $one_item = $quan_kaki->first();

        $parentCategory = ParentCategory::all();

        $category = Category::all();
        return view('blocks.frontend.category.ao_polo_nam', compact('quan_kaki','menus','parentCategory', 'category', 'one_item'));
    }

    public function ao_khoac_nam() {
        $ao_khoac_nam = Product::where('category_id', 9)->get();

        $one_item = $ao_khoac_nam->first();

        $menus = Menu::all();

        $parentCategory = ParentCategory::all();

        $category = Category::all();
        return view('blocks.frontend.category.ao_khoac_nam', compact('ao_khoac_nam','menus','parentCategory', 'category', 'one_item'));
    }

    public function ao_ni_nam() {
        $ao_ni_nam = Product::where('category_id', 10)->get();

        $one_item = $ao_ni_nam->first();

        $menus = Menu::all();

        $parentCategory = ParentCategory::all();

        $category = Category::all();
        return view('blocks.frontend.category.ao_ni_nam', compact('ao_ni_nam','menus','parentCategory', 'category', 'one_item'));
    }

    public function quan_au_nam() {
        $quan_au_nam = Product::where('category_id', 11)->get();

        $menus = Menu::all();

        $one_item = $quan_au_nam->first();


        $parentCategory = ParentCategory::all();

        $category = Category::all();
        return view('blocks.frontend.category.quan_au_nam', compact('quan_au_nam','menus','parentCategory', 'category', 'one_item'));
    }

    public function quan_kaki_nam() {
        $quan_kaki_nam = Product::where('category_id', 12)->get();

        $menus = Menu::all();

        $one_item = $quan_kaki_nam->first();


        $parentCategory = ParentCategory::all();

        $category = Category::all();
        return view('blocks.frontend.category.quan_kaki_nam', compact('quan_kaki_nam','menus','parentCategory', 'category', 'one_item'));
    }

    public function quan_jeans_nam() {
        $quan_jeans_nam = Product::where('category_id', 13)->get();

        $one_item = $quan_jeans_nam->first();


        $menus = Menu::all();

        $parentCategory = ParentCategory::all();

        $category = Category::all();
        return view('blocks.frontend.category.quan_jeans_nam', compact('quan_jeans_nam','menus','parentCategory', 'category', 'one_item'));
    }

    public function ao_polo_nam() {
        $ao_polo_nam = Product::where('category_id', 8)->get();

        $one_item = $ao_polo_nam->first();


        $menus = Menu::all();

        $parentCategory = ParentCategory::all();

        $category = Category::all();
        return view('blocks.frontend.category.ao_polo_nam', compact('ao_polo_nam','menus','parentCategory', 'category', 'one_item'));
    }
              
}
