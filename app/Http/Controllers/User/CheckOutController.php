<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use App\Models\Category;
use App\Models\Menu;
use App\Models\ParentCategory;
use App\Models\Shopping_Session;
use App\Models\User;
use App\Models\UserAddress;
use App\Models\UserPayment;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;


class CheckOutController extends Controller
{
    public function notloginin(Request $request, $id)
    {
        $menus = Menu::all();

        $parentCategory = ParentCategory::all();

        $category = Category::all();

        $value = $request->session()->get('Cart');
        if ($value) {
            $total = $value->getTotalPrice();
            $user = User::find($id);
            dd($total);
        } else {
            dd('123');
        }
        return view('blocks.frontend.checkout.index', compact('menus', 'parentCategory', 'category'));
    }

    public function loginin(Request $request)
    {

        $menus = Menu::all();

        $parentCategory = ParentCategory::all();

        $category = Category::all();

        return view('blocks.frontend.checkout.index', compact('menus', 'parentCategory', 'category'));
    }


    public function order(Request $request, $id)
    {

        $value = $request->session()->get('Cart');
        if ($value) {
            $total = $value->getTotalPrice();
            $user = User::find($id);
            $products = $value->products;
            // dd($products);
        } else {
            dd('123');
        }
        $session_uuid = Uuid::uuid4()->toString();

        $shopping_session = new Shopping_Session;
        $shopping_session->user_id = $id;
        $shopping_session->total = $total;
        $shopping_session->session_id = $session_uuid; // Gán UUID đã tạo vào session_id
        $shopping_session->save();

        foreach ($products as $product) {
            $cart_item = new CartItem();
            $cart_item->product_id = $product['productInfo']->id;
            $cart_item->session_id = $session_uuid; // Sử dụng cùng UUID cho các cart_item
            $cart_item->quantity = $product['quantity'];
            $cart_item->total_price = $product['price'];
            $cart_item->save();
        }
        $user_payment = new UserPayment;
        $user_payment->user_id = $id;
        $user_payment->payment_method = $request->paymentMethod;
        // $user_payment->provider;
        // $user_payment->account_no;
        // $user_payment->expiry;
        $user_payment->save();
        if (!$user) {
            $user_address = new UserAddress;
            $user_address->user_id = $id;
            $user_address->address_line1 = $request->address_line1;
            $user_address->province = $request->province;
            $user_address->city = $request->city;
            $user_address->commune = $request->ward;
            $user_address->phone_number = $request->phone_number;
            $user_address->save();
        }
        

        
        return redirect()->route('index');
    }
}
