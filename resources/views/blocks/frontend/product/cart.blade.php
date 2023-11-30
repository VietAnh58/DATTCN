@extends('layouts.frontend.list_cart_layout')

@section('content')

    <main class="main">
        <div class="container">
            <ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
                <li class="active">
                    <a href="cart.html">Giỏ hàng</a>
                </li>
                <li>
                    <a href="checkout.html">Thanh toán</a>
                </li>
                <li class="disabled">
                    <a href="cart.html">Đơn hàng hoàn tất</a>
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
                                                onclick="DeleteAllListItemCart()" title="Remove Product"><span>×</span></a>
                                        </th>
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
                                                <td>
                                                    @if ($item['productInfo']->sale_price > 0)
                                                        <span
                                                            class="old-price">{{ number_format($item['productInfo']->price) }}VND</span>
                                                        <span
                                                            class="new-price">{{ number_format($item['productInfo']->sale_price) }}VND</span>
                                                        {{-- {{ number_format($item['productInfo']->sale_price) }}VND --}}
                                                    @else
                                                        {{ number_format($item['productInfo']->price) }}VND
                                                    @endif
                                                </td>
                                                <td>
                                                    {{-- <div class="product-single-qty">
                                                        <input class="horizontal-quantity form-control" type="text"
                                                            data-id="{{ $item['productInfo']->id }}"
                                                            id="quantity-item-{{ $item['productInfo']->id }}"="{{ $item['quantity'] }}">
                                                    </div> --}}
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
                                                <td class = "text-right">
                                                    @if ($item['productInfo']->sale_price > 0)
                                                        {{ number_format($item['productInfo']->sale_price * $item['quantity']) }}VND
                                                    @else
                                                        {{ number_format($item['productInfo']->price * $item['quantity']) }}VND
                                                    @endif
                                                    <span class="subtotal-price">
                                                    </span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <table class="table table-cart">
                                            <tbody>
                                                <td rowspan="6">
                                                    <h1>khong co san pham</h1>
                                                </td>

                                            </tbody>
                                        </table>
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
                                                <a href="{{ route('cart.index') }}" class="btn btn-shop btn-update-cart">
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
                        <h3>Tổng cộng</h3>

                        <table class="table table-totals">

                            <tbody>
                                <tr>
                                    <td>Tổng giá sản phẩm</td>
                                    @if (session()->has('Cart') && session()->get('Cart')->totalQuantity > 0)
                                        <td>{{ number_format(session()->get('Cart')->getTotalPrice()) }}VND</td>
                                    @else
                                        <td>0VND</td>
                                    @endif
                                </tr>

                                <tr>
                                    <td colspan="2" class="text-left">
                                        <h4 style="font-weight: normal; margin-bottom:10px"><i class="fa-solid fa-ticket" style="font-size: 150%"></i> Sử dụng mã giảm giá ở bước thanh toán</h4><br><br>
                                        <h4 style="font-weight: normal"><i class="fa-solid fa-shield" style="font-size: 150%"></i> Thông tin bảo mật và mã hóa</h4><br><br>
                                        <h4><span><i class="fa-solid fa-truck" style="font-size: 150%"></i> Miễn phí vận chuyển:</span><span style="font-weight: normal"> đơn hàng 200k</span></h4><br><br>
                                        <h4><span><i class="fa-solid fa-clock" style="font-size: 150%"></i> Giao hàng:</span><span style="font-weight: normal">Từ 1 - 3 ngày</span> </h4><br><br>
                                        <h4><span><i class="fa-solid fa-arrow-right-arrow-left" style="font-size: 150%"></i> Miễn phí đổi trả:</span><span style="font-weight: normal">tại 250+ cửa hàng trong 15 ngày</span> </h4><br><br>    
                                    </td>
                                </tr>
                            </tbody>

                            <tfoot>
                                <tr>
                                    <td>Tổng cộng</td>
                                    @if (session()->has('Cart') && session()->get('Cart')->totalQuantity > 0)
                                        <td>{{ number_format(session()->get('Cart')->calculateTotalPrice()) }}VND</td>
                                    @else
                                        <td>0VND</td>
                                    @endif
                                </tr>
                            </tfoot>
                        </table>

                        <div class="checkout-methods">

                            @if (Auth::check())
                                <form action="{{ route('cart.checkout.loginin') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                                    <button type="submit" class="btn btn-block btn-dark">Thanh toán <i
                                            class="fa fa-arrow-right"></i></button>
                                </form>
                            @else
                                <form action="{{ route('cart.checkout.notloginin') }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-block btn-dark">Thanh toán <i
                                            class="fa fa-arrow-right"></i></button>
                                </form>
                            @endif

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

        function UpdateListItemCart(id) {
            $("#quantity-item-" + id).val();
            $.ajax({
                url: '/updateListCart/' + id + "/" + $("#quantity-item-" + id).val(),
                type: "GET",
            }).done(function(response) {
                RenderListCart(response);

                alertify.success('Cập nhật giỏ hàng thành công.');

            }).fail(function(jqXHR, textStatus, errorThrown) {
                alertify.error('Xảy ra lỗi khi cập nhật giỏ hàng.');
            });
        }

        function RenderListCart(response) {
            $("#list-cart-item").empty();
            $("#list-cart-item").html(response);

        }

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
                alertify.error('Xảy ra lỗi khi cập nhật giỏ hàng.');
            });
        });

        function DeleteAllListItemCart() {
            if (confirm('Xác nhận xóa hết sản phẩm?')) {
                // Nếu người dùng nhấn "OK" trong hộp thoại xác nhận
                $.ajax({
                    url: '/deleteAllListCart',
                    type: "GET",
                }).done(function(response) {
                    RenderListCart(response);
                    alertify.success('Xóa giỏ hàng thành công.');
                }).fail(function(jqXHR, textStatus, errorThrown) {
                    alertify.error('Xảy ra lỗi khi xóa giỏ hàng.');
                });
            } else {
                // Nếu người dùng nhấn "Cancel" trong hộp thoại xác nhận hoặc đóng nó
                alert('Hủy xóa giỏ hàng.');
            }
        }
    </script>
@endsection
