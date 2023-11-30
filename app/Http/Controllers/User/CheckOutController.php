<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use App\Models\Category;
use App\Models\Menu;
use App\Models\OrderDetails;
use App\Models\OrderItems;
use App\Models\ParentCategory;
use App\Models\PaymentDetails;
use App\Models\Shopping_Session;
use App\Models\TempOrder;
use App\Models\TypePayment;
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
        return view('blocks.frontend.checkout.index', compact('menus', 'parentCategory', 'category'));
    }

    public function loginin(Request $request)
    {
        $id = $request->id;

        $menus = Menu::all();

        $parentCategory = ParentCategory::all();

        $category = Category::all();

        $user = User::find($id);

        $user_address = UserAddress::where('user_id', $id)->first();

        $type_payment = TypePayment::all();

        return view('blocks.frontend.checkout.index', compact('menus', 'parentCategory', 'category', 'user', 'user_address','type_payment'));
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
        $shopping_session->session_id = $session_uuid;
        $shopping_session->save();

        foreach ($products as $product) {
            $cart_item = new CartItem();
            $cart_item->product_id = $product['productInfo']->id;
            $cart_item->session_id = $session_uuid; 
            $cart_item->quantity = $product['quantity'];
            $cart_item->total_price = $product['price'];
            $cart_item->save();
        }
        $user_payment = new UserPayment;
        $user_payment->user_id = $id;
        $user_payment->payment_id = $request->paymentMethod;
        // $user_payment->provider;
        // $user_payment->account_no;
        // $user_payment->expiry;
        $user_payment->save();
        if ($user) {
            $user_address = new UserAddress;
            $user_address->user_id = $id;
            $user_address->address_line1 = $request->address_line1;
            $user_address->province = $request->province;
            $user_address->city = $request->city;
            $user_address->commune = $request->ward;
            $user_address->phone_number = $request->phone_number;
            $user_address->save();
        }

        $order_details = new OrderDetails();
        $order_details->user_id = $id;
        $order_details->total = $total;
        $order_details->note = $request->note;
        $order_details->user_payment_id = $user_payment->id;
        $order_details->save();

        $order_details_id = $order_details->id;

        foreach ($products as $product) {
            $order_items = new OrderItems();
            $order_items->product_id = $product['productInfo']->id;
            $order_items->quantity = $product['quantity'];
            $order_items->order_id = $order_details_id;
            $order_items->save();
        }

        $payment_details = new PaymentDetails();
        $payment_details->order_id = $order_details_id;
        $payment_details->amount = $total;
        $payment_details->payment_method = $request->paymentMethod;
        $payment_details->save();
        // $payment_details->provider;
        // $payment_details->account_no;
        // $payment_details->status;

        $temp_order = new TempOrder;
        $temp_order->user_id = $id;
        $temp_order->order_id = $order_details->user_id;
        $temp_order->product_id = $product['productInfo']->id;
        $temp_order->quantity = $product['quantity'];
        $temp_order->save();

        return redirect()->route('cart.checkout.order_complete', ['id' => $id]);

    }

    public function order_complete($id){
        $menus = Menu::all();

        $parentCategory = ParentCategory::all();

        $category = Category::all();

        $payment_method = UserPayment::where ('user_id', $id)->latest ()->first ();

        $order_detail = OrderDetails::where ('user_id', $id)->latest ()->first ();

        $shopping_session = Shopping_Session::where('user_id', $id)->latest ()->first ();

        return view('blocks.frontend.checkout.order_complete',compact('menus', 'parentCategory', 'category','payment_method', 'shopping_session', 'order_detail'));
    }

}
