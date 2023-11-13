<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Helper\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;
use Symfony\Component\HttpFoundation\Session\Session;

class CartController extends Controller
{
    public function index()
    {

        return view('blocks.frontend.product.cart');
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
        // var_dump($request->all());
        // dd($request->data);
        // $oldCart = $request->session()->has('Cart') ? $request->session()->get('Cart') : null;
        // $newCart = new Cart($oldCart);
        // $newCart->updateProductQuantity($id, $quantity);


        //     $request->session()->put('Cart', $newCart);

        $data = $request->data;

        foreach ($data as $item) {
            $oldCart = $request->session()->has('Cart') ? $request->session()->get('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->updateProductQuantity($item['key'], $item['value']);
            $request->session()->put('Cart', $newCart);

        }
    }
}
