<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ImageProduct;
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

        return view('blocks.frontend.home.content', 
        compact('featured_products', 'featured_product_images','best_seller_products', 'new_products',
        'top_rate_product'));
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


        $random_product = Product::inRandomOrder()->take(3)->get();
        return view('blocks.frontend.product.detail_product', compact('product', 'productImages', 'relatedProducts',
        'new_products', 'best_seller_products', 'featured_products', 'random_product','second_product_images', 'detail_product_image'));
    }

    public function category() {
        $products = Product::all();
        // dd($products);
        
        $second_product_images = [];
        foreach ($products as $item) {
            $images = ImageProduct::where('product_id', $item->id)->get();
            $second_product_images[$item->id] = $images;
        }

        return view('blocks.frontend.category.index',compact('products', 'second_product_images'));
    }
}
