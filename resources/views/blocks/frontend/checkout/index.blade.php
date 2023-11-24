@extends('layouts.frontend.list_cart_layout')

@section('content')
    <main class="main main-test">
        <div class="container checkout-container">
            <ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
                <li>
                    <a href="cart.html">Giỏ hàng</a>
                </li>
                <li class="active">
                    <a href="checkout.html">Thanh toán</a>
                </li>
                <li class="disabled">
                    <a href="#">Hoàn thành đơn hàng</a>
                </li>
            </ul>

            {{-- <div class="login-form-container">
                <h4>Đăng nhập tài khoản?
                    <button data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                        aria-controls="collapseOne" class="btn btn-link btn-toggle">Đăng nhập</button>
                </h4>

                <div id="collapseOne" class="collapse">
                    <div class="login-section feature-box">
                        <div class="feature-box-content">
                            <form action="#" id="login-form">
                                @csrf
                                <p>
                                    If you have shopped with us before, please enter your details below. If you are a new
                                    customer, please proceed to the Billing & Shipping section.
                                </p>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="mb-0 pb-1">Username or email <span
                                                    class="required">*</span></label>
                                            <input type="email" class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="mb-0 pb-1">Password <span class="required">*</span></label>
                                            <input type="password" class="form-control" required />
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn">LOGIN</button>

                                <div class="form-footer mb-1">
                                    <div class="custom-control custom-checkbox mb-0 mt-0">
                                        <input type="checkbox" class="custom-control-input" id="lost-password" />
                                        <label class="custom-control-label mb-0" for="lost-password">Remember
                                            me</label>
                                    </div>

                                    <a href="forgot-password.html" class="forget-password">Lost your password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="row">
                <div class="col-lg-7">
                    <ul class="checkout-steps">
                        <li>
                            <h2 class="step-title">Thông tin giao hàng</h2>

                            <form action="{{ route('cart.checkout.order', Auth::user()->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Họ và tên
                                        <abbr class="required" title="required">*</abbr>
                                    </label>
                                    <input type="text" class="form-control" name="name" />
                                </div>

                                {{-- <div class="form-group">
                                    <label>Tên công ty (tuỳ chọn)</label>
                                    <input type="text" class="form-control" />
                                </div> --}}

                                <div class="form-group">
                                    <label>Số nhà và tên đường
                                        <abbr class="required" title="required">*</abbr>
                                    </label>
                                    <input type="text" class="form-control" placeholder="Số nhà và tên đường" required
                                        name="address_line1" />
                                </div>

                                <div class="select-custom">
                                    <label for="province">Tỉnh/Thành phố:</label>
                                    <abbr class="required" title="required">*</abbr>

                                    <select class="form-control" id="province" name="province" onchange="loadCities()">
                                        <option value="">Chọn tỉnh/thành </option>
                                        <option value="Tỉnh Nghệ An">Tỉnh Nghệ An</option>
                                        <option value="tinh2">Tỉnh/Thành phố 2</option>
                                        <!-- Thêm các tỉnh/thành phố khác vào đây -->
                                    </select>
                                </div>


                                <div class="select-custom">
                                    <label for="city">Quận/Huyện:</label>
                                    <abbr class="required" title="required">*</abbr>
                                    <select id="city" name="city" class="form-control" onchange="loadWards()">
                                        <option value="">Chọn quận/huyện</option>
                                    </select>
                                </div>
                                <div class="select-custom">
                                    <label for="ward">Xã/Phường:</label>
                                    <abbr class="required" title="required">*</abbr>

                                    <select id="ward" name="ward" class="form-control">
                                        <option value="">Chọn xã/phường</option>
                                    </select>
                                </div>
                                <!-- Các trường thông tin khác -->

                                <div class="form-group">
                                    <label>Số điện thoại
                                        <abbr class="required" title="required">*</abbr>
                                    </label>
                                    <input type="tel" class="form-control" required name="phone_number" />
                                </div>

                                <div class="form-group">
                                    <label>Địa chỉ email
                                        <abbr class="required" title="required">*</abbr>
                                    </label>
                                    <input type="email" class="form-control" required name="email" />
                                </div>

                                <!-- Các trường cho phép tạo tài khoản -->

                                {{-- <div class="form-group mb-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="create-account" />
                                        <label class="custom-control-label" data-toggle="collapse"
                                            data-target="#collapseThree" aria-controls="collapseThree"
                                            for="create-account">Tạo một tài khoản?</label>
                                    </div>
                                </div>

                                <!-- Các trường thông tin tài khoản -->

                                <div id="collapseThree" class="collapse">
                                    <div class="form-group">
                                        <label>Mật khẩu tài khoản
                                            <abbr class="required" title="required">*</abbr>
                                        </label>
                                        <input type="password" placeholder="Mật khẩu" class="form-control" required />
                                    </div>
                                </div> --}}

                                <!-- Các trường thông tin giao hàng -->

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox mt-0">
                                        <input type="checkbox" class="custom-control-input" id="different-shipping" />
                                        <label class="custom-control-label" for="different-shipping">Giao hàng đến một địa
                                            chỉ khác?</label>
                                    </div>
                                </div>

                                <div id="collapseFour" class="collapse">
                                    <div class="shipping-info">
                                        <div class="form-group">
                                            <label>Họ và tên
                                            </label>
                                            <input type="text" class="form-control" name="order_name" />
                                        </div>

                                        <div class="form-group">
                                            <label>Số nhà và tên đường
                                            </label>
                                            <input type="text" class="form-control" placeholder="Số nhà và tên đường"
                                                 name="order_address_line1" />
                                        </div>

                                        <div class="select-custom">
                                            <label for="province">Tỉnh/Thành phố:</label>

                                            <select class="form-control" id="province" name="order_province"
                                                onchange="loadCities()">
                                                <option value="">Chọn tỉnh/thành </option>
                                                <option value="Tỉnh Nghệ An">Tỉnh Nghệ An</option>
                                                <option value="tinh2">Tỉnh/Thành phố 2</option>
                                                <!-- Thêm các tỉnh/thành phố khác vào đây -->
                                            </select>
                                        </div>


                                        <div class="select-custom">
                                            <label for="city">Quận/Huyện:</label>
                                            <select id="city" name="order_city" class="form-control"
                                                onchange="loadWards()">
                                                <option value="">Chọn quận/huyện</option>
                                            </select>
                                        </div>
                                        <div class="select-custom">
                                            <label for="ward">Xã/Phường:</label>

                                            <select id="ward" name="order_ward" class="form-control">
                                                <option value="">Chọn xã/phường</option>
                                            </select>
                                        </div>
                                        <!-- Các trường thông tin khác -->

                                        <div class="form-group">
                                            <label>Số điện thoại
                                            </label>
                                            <input type="tel" class="form-control"  name="order_phone_number" />
                                        </div>

                                        <div class="form-group">
                                            <label>Địa chỉ email
                                            </label>
                                            <input type="email" class="form-control"  name="order_email" />
                                        </div>

                                    </div>
                                </div>

                                <!-- Ghi chú về đơn hàng -->

                                <div class="form-group">
                                    <label class="order-comments">Ghi chú đơn hàng (tuỳ chọn)</label>
                                    <textarea class="form-control" name="desc" placeholder="Ghi chú về đơn hàng của bạn, ví dụ: ghi chú đặc biệt cho việc giao hàng."
                                        required>123</textarea>
                                </div>

                        </li>
                    </ul>
                </div>
                <!-- End .col-lg-8 -->

                <div class="col-lg-5">
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
                                        <span>{{ number_format(session()->get('Cart')->getTotalPrice()) }} VND</span>
                                    </td>
                                </tr>
                                <tr class="order-shipping">
                                    <td class="text-left" colspan="2">
                                        <h4 class="m-b-sm">Phương thức thanh toán</h4>

                                        <div class="form-group form-group-custom-control">
                                            <div class="custom-control custom-radio d-flex">
                                                <input type="radio" class="custom-control-input" name="paymentMethod"
                                                    value="card" checked />
                                                <label class="custom-control-label">Thanh toán qua thẻ thanh toán, ứng dụng
                                                    ngân hàng VNPAY</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-group-custom-control">
                                            <div class="custom-control custom-radio d-flex">
                                                <input type="radio" name="paymentMethod" class="custom-control-input"
                                                    value="vnPayQR" />
                                                <label class="custom-control-label">Thanh toán qua VNPAY-QR</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-group-custom-control">
                                            <div class="custom-control custom-radio d-flex">
                                                <input type="radio" name="paymentMethod" class="custom-control-input"
                                                    value="momo" />
                                                <label class="custom-control-label">Thanh toán qua Ví MoMo</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-group-custom-control">
                                            <div class="custom-control custom-radio d-flex">
                                                <input type="radio" name="paymentMethod" class="custom-control-input"
                                                    value="cod" />
                                                <label class="custom-control-label">Thanh toán khi nhận hàng (COD)</label>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="order-total">
                                    <td>
                                        <h4>Tổng cộng</h4>
                                    </td>
                                    <td>
                                        <b class="total-price"><span>1.603,80&nbsp;đ</span></b>
                                    </td>
                                </tr>

                            </tfoot>
                        </table>
                        <button type="submit" id="checkoutButton" class="btn btn-dark btn-place-order">
                            Đặt hàng
                        </button>
                        {{-- </form> --}}
                    </div>
                    </form>
                    <!-- End .cart-summary -->
                </div>
                <!-- End .col-lg-4 -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .container -->
    </main>
@endsection

@section('script')
    {{-- <script>
        $(document).ready(function() {
            $('#checkoutButton').on('click', function() {
                var formData = $('#checkout-form').serialize(); // Lấy dữ liệu từ form
                console.log(formData);
                $.ajax({
                    type: 'POST', // Chắc chắn sử dụng phương thức POST
                    url: '/order',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "data": formData
                    }
                }).done(function(response) {
                    alertify.success('Cập nhật tất cả giỏ hàng thành công.');
                }).fail(function(jqXHR, textStatus, errorThrown) {
                    alertify.error('Xảy ra lỗi khi cập nhật giỏ hàng.');
                });

            });
        });
    </script> --}}

    <script>
        function loadCities() {
            const provinceSelect = document.getElementById("province");
            const citySelect = document.getElementById("city");
            const wardSelect = document.getElementById("ward");

            const selectedProvince = provinceSelect.value;

            while (citySelect.options.length > 1) {
                citySelect.remove(1);
            }
            while (wardSelect.options.length > 1) {
                wardSelect.remove(1);
            }

            if (selectedProvince === "Tỉnh Nghệ An") {
                const citiesTinh1 = ["Thành Phố Vinh", "Thị xã Cửa Lò", "Thị xã Thái Hòa", "Huyện Anh Sơn",
                    "Huyện Con Cuông"
                ];
                citiesTinh1.forEach(city => {
                    let option = document.createElement("option");
                    option.text = city;
                    option.value = city;
                    citySelect.appendChild(option);
                });
            }
            // Thêm các điều kiện tương ứng với các tỉnh/thành phố khác nếu cần
        }

        function loadWards() {
            const citySelect = document.getElementById("city");
            const wardSelect = document.getElementById("ward");

            const selectedCity = citySelect.value;

            while (wardSelect.options.length > 0) {
                wardSelect.remove(0);
            }

            if (selectedCity === "Thành Phố Vinh") {
                const wardsVinh = ["Phường Hà Huy Tập", "Phường Lê Lợi", "Phường Quán Bàu", "Phường Hưng Bình",
                    "Phường Hưng Dũng", "Xã Hưng Lộc"
                ];
                wardsVinh.forEach(ward => {
                    let option = document.createElement("option");
                    option.text = ward;
                    option.value = ward;
                    wardSelect.appendChild(option);
                });
            }
            // Thêm các điều kiện tương ứng với các quận/huyện khác nếu cần
        }
    </script>
    <script>
        $(document).ready(function() {
            $('#different-shipping').change(function() {
                if (this.checked) {
                    $('#collapseFour').show(); // Hiển thị phần tử khi checkbox được chọn
                } else {
                    $('#collapseFour').hide(); // Ẩn phần tử khi checkbox không được chọn
                }
            });
        });
    </script>
@endsection
