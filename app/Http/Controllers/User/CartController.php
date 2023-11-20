<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Helper\Cart;
use App\Models\Category;
use App\Models\Menu;
use App\Models\ParentCategory;
use App\Models\Product;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;
use Symfony\Component\HttpFoundation\Session\Session;

class CartController extends Controller
{
    public function index()
    {

        $menus = Menu::all();

        $parentCategory = ParentCategory::all();

        $category = Category::all();
        return view('blocks.frontend.product.cart', compact('menus','parentCategory', 'category'));
    }

    public function add(Request $request, $id)
    {
        $product = Product::find($id);
        if ($product) {
            $oldCart = $request->session()->has('Cart') ? $request->session()->get('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->addCart($product, $id);

            $request->session()->put('Cart', $newCart);
        }
        return view('blocks.frontend.product.shopping_cart');
    }

    public function addCartWithQuantity(Request $request, $id, $quantity)
    {
        $product = Product::find($id);
        if ($product) {
            $oldCart = $request->session()->has('Cart') ? $request->session()->get('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->addProductWithQuantity($product, $id, $quantity);

            $request->session()->put('Cart', $newCart);
        }
        return view('blocks.frontend.product.shopping_cart');
    }

    public function delete(Request $request, $id)
    {
        $oldCart = $request->session()->has('Cart') ? $request->session()->get('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->removeProduct($id);

        if (count($newCart->products)) {
            $request->session()->put('Cart', $newCart);
        } else {
            $request->session()->forget('Cart');
        }

        return view('blocks.frontend.product.shopping_cart');
    }

    public function deleteListCart(Request $request, $id)
    {
        $oldCart = $request->session()->has('Cart') ? $request->session()->get('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->removeProduct($id);

        if (count($newCart->products)) {
            $request->session()->put('Cart', $newCart);
        } else {
            $request->session()->forget('Cart');
        }

        return view('blocks.frontend.product.list_cart');
    }

    public function updateListCart(Request $request, $id, $quantity)
    {
        $oldCart = $request->session()->has('Cart') ? $request->session()->get('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->updateProductQuantity($id, $quantity);
        $request->session()->put('Cart', $newCart);

        return view('blocks.frontend.product.list_cart');
    }

    public function updateAllListCart(Request $request)
    {
        $data = $request->data;
        foreach ($data as $item) {
            $oldCart = $request->session()->has('Cart') ? $request->session()->get('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->updateProductQuantity($item['key'], $item['value']);
            $request->session()->put('Cart', $newCart);
        }
    }

    public function deleteAllListCart(Request $request)
    {
        $oldCart = $request->session()->has('Cart') ? $request->session()->get('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->clearCart();

        if (count($newCart->products)) {
            $request->session()->put('Cart', $newCart);
        } else {
            $request->session()->forget('Cart');
        }

        return view('blocks.frontend.product.list_cart');
    }
}
