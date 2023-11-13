@extends('layouts.frontend.list_cart_layout')

@section('content')

    <main class="main">
        <div class="container">
            <ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
                <li class="active">
                    <a href="cart.html">Shopping Cart</a>
                </li>
                <li>
                    <a href="checkout.html">Checkout</a>
                </li>
                <li class="disabled">
                    <a href="cart.html">Order Complete</a>
                </li>
            </ul>

            <div class="row">
                <div class="col-lg-8">
                    <div class="cart-table-container">
                        <div id="list-cart-item">
                            <table class="table table-cart">
                                <thead>
                                    <tr>
                                        <th class="thumbnail-col"></th>
                                        <th style="width: 200px" class="product-col">Sản phẩm</th>
                                        <th class="price-col">Giá</th>
                                        <th class="qty-col">Số lượng</th>
                                        <th class="total-col">Cập nhật</th>
                                        <th class="text-right">Tổng thanh toán</th>
                                        <th class="text-right "><a href="javascript:" class="btn-remove"
                                                title="Xóa toàn bọ sản phẩm"><span>×</span></a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (session()->has('Cart') && session()->get('Cart')->totalQuantity > 0)
                                        @foreach (session()->get('Cart')->products as $item)
                                            <tr class="product-row">
                                                <td>
                                                    <figure class="product-image-container">
                                                        <a href="product.html" class="product-image">
                                                            <img src="{{ asset('storage/images') }}/{{ $item['productInfo']->image }}"
                                                                alt="product" width="80" height="80">
                                                        </a>
                                                        <a href="javascript:"
                                                            onclick="DeleteListItemCart({{ $item['productInfo']->id }})"
                                                            class="btn-remove" title="Remove Product"><span>×</span></a>
                                                    </figure>
                                                </td>
                                                <td class="product-col">
                                                    <h5 class="product-title">
                                                        <a
                                                            href="{{ route('detail_product', $item['productInfo']->alias) }}">{{ $item['productInfo']->product_name }}</a>
                                                    </h5>
                                                </td>
                                                <td>{{ number_format($item['productInfo']->price) }}</td>
                                                <td>
                                                    <div class="product-single-qty">
                                                        <input class="horizontal-quantity form-control" type="text"
                                                            data-id="{{ $item['productInfo']->id }}"
                                                            id="quantity-item-{{ $item['productInfo']->id }}"
                                                            value="{{ $item['quantity'] }}">

                                                    </div>
                                                </td>
                                                <td>
                                                    <a class="btn btn-sm" href="javascript:"
                                                        onclick="UpdateListItemCart({{ $item['productInfo']->id }})">Cập
                                                        nhật</a>
                                                </td>
                                                <td class = "text-right"><span
                                                        class="subtotal-price">{{ number_format($item['productInfo']->price * $item['quantity']) }}VND</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <h1>khong co san pham</h1>
                                    @endif
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <td colspan="5" class="clearfix">
                                            <div class="float-left">
                                                <div class="cart-discount">
                                                    <form action="#">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm"
                                                                placeholder="Coupon Code" required>
                                                            <div class="input-group-append">
                                                                <button class="btn btn-sm" type="submit">Phiếu giảm
                                                                    giá</button>
                                                            </div>
                                                        </div><!-- End .input-group -->
                                                    </form>
                                                </div>
                                            </div><!-- End .float-left -->

                                            <div class="float-right edit-all">
                                                <a href="javascript:" class="btn btn-shop btn-update-cart">
                                                    Cập nhật giỏ hàng
                                                </a>
                                            </div><!-- End .float-right -->
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div><!-- End .cart-table-container -->
                </div><!-- End .col-lg-8 -->

                <div class="col-lg-4">
                    <div class="cart-summary">
                        <h3>CART TOTALS</h3>

                        <table class="table table-totals">
                            <tbody>
                                <tr>
                                    <td>Tổng giá sản phẩm</td>
                                    @if (session()->has('Cart') && session()->get('Cart')->totalQuantity > 0)
                                        <td>{{ number_format(session()->get('Cart')->totalPrice) }}VND</td>
                                    @else
                                        <td>0VND</td>
                                    @endif
                                </tr>

                                <tr>
                                    <td colspan="2" class="text-left">
                                        <h4>Shipping</h4>

                                        <div class="form-group form-group-custom-control">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="radio" checked>
                                                <label class="custom-control-label">Local pickup</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .form-group -->

                                        <div class="form-group form-group-custom-control mb-0">
                                            <div class="custom-control custom-radio mb-0">
                                                <input type="radio" name="radio" class="custom-control-input">
                                                <label class="custom-control-label">Flat rate</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .form-group -->

                                        <form action="#">
                                            <div class="form-group form-group-sm">
                                                <label>Shipping to <strong>NY.</strong></label>
                                                <div class="select-custom">
                                                    <select class="form-control form-control-sm">
                                                        <option value="USA">United States (US)</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="China">China</option>
                                                        <option value="Germany">Germany</option>
                                                    </select>
                                                </div><!-- End .select-custom -->
                                            </div><!-- End .form-group -->

                                            <div class="form-group form-group-sm">
                                                <div class="select-custom">
                                                    <select class="form-control form-control-sm">
                                                        <option value="NY">New York</option>
                                                        <option value="CA">California</option>
                                                        <option value="TX">Texas</option>
                                                    </select>
                                                </div><!-- End .select-custom -->
                                            </div><!-- End .form-group -->

                                            <div class="form-group form-group-sm">
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="Town / City">
                                            </div><!-- End .form-group -->

                                            <div class="form-group form-group-sm">
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="ZIP">
                                            </div><!-- End .form-group -->

                                            <button type="submit" class="btn btn-shop btn-update-total">
                                                Update Totals
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>

                            <tfoot>
                                <tr>
                                    <td>Tổng cộng</td>
                                    @if (session()->has('Cart') && session()->get('Cart')->totalQuantity > 0)
                                        <td>{{ number_format(session()->get('Cart')->getTotalPrice()) }}VND</td>
                                    @else
                                        <td>0VND</td>
                                    @endif
                                </tr>
                            </tfoot>
                        </table>

                        <div class="checkout-methods">
                            <a href="cart.html" class="btn btn-block btn-dark">Thanh toán
                                <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div><!-- End .cart-summary -->
                </div><!-- End .col-lg-4 -->
            </div><!-- End .row -->
        </div><!-- End .container -->

        <div class="mb-6"></div><!-- margin -->
    </main><!-- End .main -->
@endsection

@section('script')
    <script>
        function DeleteListItemCart(id) {
            $.ajax({
                url: '/deleteListCart/' + id,
                type: "GET",
            }).done(function(response) {
                RenderListCart(response);

                alertify.success('Xóa sản phẩm khỏi giỏ hàng thành công.');

            }).fail(function(jqXHR, textStatus, errorThrown) {
                alertify.error('Có lỗi xảy ra khi thêm sản phẩm vào giỏ hàng.');
            });



        }

        function UpdateListItemCart(productId) {
            console.log('ID sản phẩm trong hàm:', productId);
            // Thêm các hành động xử lý khác tại đây...
        }


        function UpdateListItemCart(id) {
            $("#quantity-item-" + id).val();
            $.ajax({
                url: '/updateListCart/' + id + "/" + $("#quantity-item-" + id).val(),
                type: "GET",
            }).done(function(response) {
                RenderListCart(response);

                alertify.success('Cập nhật giỏ hàng thành công.');

            }).fail(function(jqXHR, textStatus, errorThrown) {
                alertify.error('Có lỗi xảy ra khi cập nhật giỏ hàng.');
            });
        }

        function RenderListCart(response) {
            $("#list-cart-item").empty();
            $("#list-cart-item").html(response);

        }

        // $(".edit-all").on("click", function(){
        //     var lists = [];
        //     $(".table-cart tbody tr td").each(function(){
        //         $(this).find("input").each(function() {
        //             var element = {key: $(this).data("id"), value: $(this).val()};
        //             lists.push(element);
        //         })
        //     });
        //     // console.log(lists);
        //     $.ajax({
        //         url: '/updateAllListCart',
        //         type: "POST",
        //         data: {
        //             "_token" : "{{ csrf_token() }}",
        //             "data" : lists
        //         }
        //     }).done(function(response) {
        //         // RenderListCart(response);

        //         alertify.success('Cập nhật tất cả giỏ hàng thành công.');

        //     }).fail(function(jqXHR, textStatus, errorThrown) {
        //         alertify.error('Có lỗi xảy ra khi cập nhật giỏ hàng.');
        //     });
        // })
        $(".edit-all").on("click", function() {
            var lists = [];

            $(".table-cart tbody tr").each(function() {
                var productId = $(this).find('input').data("id");
                var quantity = $(this).find('input').val();

                var element = {
                    key: productId,
                    value: quantity
                };
                lists.push(element);
            });

            $.ajax({
                url: '/updateAllListCart',
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "data": lists
                }
            }).done(function(response) {
                location.reload();
                // RenderListCart(response);
                alertify.success('Cập nhật tất cả giỏ hàng thành công.');
            }).fail(function(jqXHR, textStatus, errorThrown) {
                alertify.error('Có lỗi xảy ra khi cập nhật giỏ hàng.');
            });
        });
    </script>
@endsection
