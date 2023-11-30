@extends('layouts.frontend.list_cart_layout')
@section('content')
    <main class="main main-test">
        <div class="container checkout-container">
            <ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
                <li>
                    <a href="cart.html">Giỏ hàng</a>
                </li>
                <li>
                    <a href="checkout.html">Thanh toán</a>
                </li>
                <li class="active">
                    <a href="#">Hoàn thành đơn hàng</a>
                </li>
            </ul>
            <div class="page-content">
                <div class="woocommerce">
                    <div class="woocommerce-order woocommerce-thankyou col-lg-8 mx-auto px-0">



                        <div class="container">
                            <div class="alert alert-success" role="alert">
                                <div class="vc_row wpb_row row top-row section section-primary section-text-light">
                                    <div class="vc_column_container col-md-12">
                                        <div class="wpb_wrapper vc_column-inner">
                                            <h4 class="vc_custom_heading m-b-none align-left">Đặt hàng thành công.</h4>
                                            <div class="wpb_text_column wpb_content_element">
                                                <div class="wpb_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <p class="mb-none">Đơn hàng của bạn sẽ được xử lý và gửi đi ngay khi bạn nhận được xác nhận từ chúng tôi.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        



                        <div class="row">
                            <div class="col-md-4">
                                <ul class="list-group">
                                    <li class="list-group-item">Mã đơn hàng <span
                                            class="font-weight-bold order-number">{{ $shopping_session->session_id }}</span></li>
                                    <li class="list-group-item">Trạng thái <span
                                            class="font-weight-bold order-status text-primary text-uppercase">Đang xử
                                            lý</span>
                                    </li>
                                    <li class="list-group-item">Thời gian <span
                                            class="font-weight-bold order-date">{{ $order_detail->created_at }}</span></li>
                                    <li class="list-group-item">Tổng tiền <span class="font-weight-bold order-total"><span
                                                class="woocommerce-Price-amount amount"><span
                                                    class="woocommerce-Price-currencySymbol"></span>{{ number_format($order_detail->total) }}</span>VND</span>
                                    </li>
                                    <li class="list-group-item">Phương thức thanh toán: <span
                                            class="font-weight-bold order-status">{{ $order_detail->user_payments->type_payment->type_payment_name }}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-8">
                                <div class="order-summary">

                                    <h3>ĐƠN HÀNG CỦA BẠN</h3>

                                    <table class="table table-mini-cart">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Sản phẩm</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (session()->has('Cart') && session()->get('Cart')->totalQuantity > 0)
                                                @foreach (session()->get('Cart')->products as $item)
                                                    <tr>
                                                        <td class="product-col">
                                                            <h3 class="product-title">
                                                                {{ $item['productInfo']->product_name }} ×
                                                                <span class="product-qty">{{ $item['quantity'] }}</span>
                                                            </h3>
                                                        </td>

                                                        <td class="price-col">
                                                            <span>
                                                                @if ($item['productInfo']->sale_price > 0)
                                                                    {{ number_format($item['quantity'] * $item['productInfo']->sale_price) }}VND
                                                                @else
                                                                    {{ number_format($item['quantity'] * $item['productInfo']->price) }}VND
                                                                @endif
                                                            </span>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>

                                        <tfoot>
                                            <tr class="cart-subtotal">

                                                <td>
                                                    <h4>Tổng tiền</h4>
                                                </td>

                                                <td class="price-col">
                                                    <span>{{ number_format(session()->get('Cart')->getTotalPrice()) }}
                                                        VND</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h4>Giao hàng</h4>
                                                </td>
                                                <td class="price-col">
                                                    Miễn phí giao hàng đơn trên 200.000 VND</span>
                                                </td>
                                            </tr>
                                            <tr class="order-shipping">
                                                <td class="text-left" colspan="2">
                                                    <h4 class="m-b-sm">Phương thức thanh toán</h4>

                                                    <div class="form-group form-group-custom-control">
                                                        <div class="d-flex">
                                                            <!-- Thay thế input bằng một thẻ div -->
                                                            <div class="custom-control-label">{{ $payment_method->type_payment->type_payment_name }}</div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr class="order-total">
                                                <td>
                                                    <h4>Tổng cộng</h4>
                                                </td>
                                                <td>
                                                    <b class="total-price"><span>{{ number_format(session()->get('Cart')->getTotalPrice()) }}
                                                            &nbsp;VND</span></b>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h4>Ghi chú</h4>
                                                </td>
                                                <td class="price-col">
                                                    {{ $order_detail->note }}</span>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <a href="{{ route('category.index') }}" id="checkoutButton" class="btn btn-dark btn-place-order">
                                        Trở về trang chủ
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- End .container -->
    </main>
@endsection
