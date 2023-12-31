<@php
    session_start();
@endphp <div class="top-notice text-white bg-dark">
    <div class="container text-center">
        <h5 class="d-inline-block mb-0">Nhận giảm giá lên đến <b>40%</b> cho các mẫu mới mùa</h5>
        <a href="demo1-shop.html" class="category">NAM</a>
        <a href="demo1-shop.html" class="category">NỮ</a>
        <small>* Chỉ trong thời gian có hạn.</small>
        <button title="Đóng (Esc)" type="button" class="mfp-close">×</button>
    </div>
    <!-- Kết thúc .container -->
    </div>

    <!-- End .top-notice -->

    <header class="header home">
        <div class="header-top bg-primary text-uppercase">
            <div class="container">
                <div class="header-left">
                    <div class="header-dropdown mr-auto mr-sm-3 mr-md-0">
                        <a href="#" class="pl-0"><i class="flag-us flag"></i>Tiếng Việt</a>
                        <div class="header-menu">
                            <ul>
                                <li><a href="#"><i class="flag-us flag mr-2"></i>Tiếng Việt</a>
                                </li>
                                <li><a href="#"><i class="flag-fr flag mr-2"></i>Tiếng Anh</a></li>
                            </ul>
                        </div>
                        <!-- End .header-menu -->
                    </div>
                    <!-- End .header-dropown -->

                    <div class="header-dropdown ml-3 pl-1">
                        <a href="#">VND</a>
                        <div class="header-menu">
                            <ul>
                                <li><a href="#">VN</a></li>
                                <li><a href="#">VND</a></li>
                            </ul>
                        </div>
                        <!-- End .header-menu -->
                    </div>
                    <!-- End .header-dropown -->
                </div>
                <!-- End .header-left -->

                <div class="header-right header-dropdowns ml-0 ml-sm-auto">
                    <p class="top-message mb-0 d-none d-sm-block">Chào mừng đến với Porto!</p>
                    <div class="header-dropdown dropdown-expanded mr-3">
                        <a href="#">Liên kết</a>
                        <div class="header-menu">
                            <ul>
                                <li><a href="dashboard.html">Tài khoản của tôi</a></li>
                                <li><a href="demo1-contact.html">Liên hệ</a></li>
                                <li><a href="wishlist.html">Danh sách mong muốn</a></li>
                                <li><a href="#">Sơ đồ trang</a></li>
                                <li><a href="cart.html">Giỏ hàng</a></li>
                                @if (Auth::check())
                                    <li><a href="{{ route('logout') }}">Đăng xuất</a></li>
                                @else
                                    <li><a href="{{ route('login') }}">Đăng nhập</a></li>
                                @endif

                            </ul>
                        </div>
                        <!-- Kết thúc .header-menu -->
                    </div>
                    <!-- Kết thúc .header-dropown -->

                    <span class="separator"></span>

                    <div class="social-icons">
                        <a href="#" class="social-icon social-facebook icon-facebook ml-0" target="_blank"></a>
                        <a href="#" class="social-icon social-twitter icon-twitter ml-0" target="_blank"></a>
                        <a href="#" class="social-icon social-instagram icon-instagram ml-0" target="_blank"></a>
                    </div>
                    <!-- Kết thúc .social-icons -->
                </div>

                <!-- End .header-right -->
            </div>
            <!-- End .container -->
        </div>
        <!-- End .header-top -->

        <div class="header-middle text-dark sticky-header">
            <div class="container">
                <div class="header-left col-lg-2 w-auto pl-0">
                    <button class="mobile-menu-toggler mr-2" type="button">
                        <i class="fas fa-bars"></i>
                    </button>
                    <a href="{{ route('index') }}" class="logo">
                        <img src="{{ asset('frontend/') }}/assets/images/logo.png" width="111" height="44"
                            alt="Porto Logo">
                    </a>
                </div>
                <!-- End .header-left -->

                <div class="header-right w-lg-max pl-2">
                    <div class="header-search header-icon header-search-inline header-search-category w-lg-max">
                        <a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
                        <form action="#" method="get">
                            <div class="header-search-wrapper">
                                <input type="search" class="form-control" name="q" id="q"
                                    placeholder="Search..." required>
                                <div class="select-custom">
                                    <select id="cat" name="cat">
                                        <option value="">Tất cả danh mục</option>
                                        <option value="4">Thời trang</option>
                                        <option value="12">- Nữ</option>
                                        <option value="13">- Nam</option>
                                        <option value="66">- Trang sức</option>
                                        <option value="67">- Thời trang trẻ em</option>
                                        <option value="5">Điện tử</option>
                                        <option value="21">- Smart TVs</option>
                                        <option value="22">- Máy ảnh</option>
                                        <option value="63">- Trò chơi điện tử</option>
                                        <option value="7">Nhà &amp; Vườn</option>
                                        <option value="11">Xe hơi</option>
                                        <option value="31">- Ô tô và Xe tải</option>
                                        <option value="32">- Xe máy &amp; Xe mô tô</option>
                                        <option value="33">- Linh kiện &amp; Phụ tùng</option>
                                        <option value="34">- Thuyền</option>
                                        <option value="57">- Công cụ &amp; Vật tư ô tô</option>
                                    </select>
                                </div>

                                <!-- End .select-custom -->
                                <button class="btn icon-magnifier" type="submit"></button>
                            </div>
                            <!-- End .header-search-wrapper -->
                        </form>
                    </div>
                    <!-- End .header-search -->

                    <div class="header-contact d-none d-lg-flex align-items-center pr-xl-5 mr-5 mr-xl-3 ml-5">
                        <i class="icon-phone-2"></i>
                        <h6 class="pt-1 line-height-1">Đặt hàng gọi<a href="tel:#"
                                class="d-block text-dark ls-10 pt-1"> 091 6643161</a></h6>
                    </div>
                    <!-- End .header-contact -->
                    {{-- @if (session('user_name'))
                    <a href="#" class="header-icon header-icon-user">
                        <i class="icon-user-2">{{ session('user_name') }}</i>
                    </a>
                @else
                    <a href="{{ route('login') }}" class="header-icon header-icon-user">
                        <i class="icon-login"></i>
                    </a>
                @endif --}}
                    @if (Auth::check())
                        <a href="" class="header-icon header-icon-user"><i
                                class="icon-user-2"></i>{{ Auth::user()->name }}</a>
                    @else
                        <a href="{{ route('login') }}" class="header-icon header-icon-user"><i
                                class="icon-user-2"></i></a>
                    @endif

                    {{-- <a href="{{ route('login') }}" class="header-icon "><i class="icon-user-2"></i></a> --}}

                    <a href="wishlist.html" class="header-icon"><i class="icon-wishlist-2"></i></a>

                    <div class="dropdown cart-dropdown">
                        <a href="#" title="Cart" class="dropdown-toggle dropdown-arrow cart-toggle"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            data-display="static">
                            <i class="minicart-icon"></i>


                            @if (Session::has('Cart') && optional(Session::get('Cart'))->totalQuantity !== null)
                                <span id="total-quantity-show"
                                    class="cart-count badge-circle">{{ Session::get('Cart')->totalQuantity }}</span>
                            @else
                                <span id="total-quantity-show" class="cart-count badge-circle">0</span>
                            @endif
                        </a>

                        <div class="cart-overlay"></div>

                        <div class="dropdown-menu mobile-cart">
                            <a href="#" title="Close (Esc)" class="btn-close">×</a>

                            <div class="dropdownmenu-wrapper custom-scrollbar">
                                <div class="dropdown-cart-header">Giỏ hàng</div>
                                <!-- End .dropdown-cart-header -->

                                <div id="change-item-cart">
                                    @if (session()->has('Cart') && session()->get('Cart')->totalQuantity > 0)
                                        <div class="dropdown-cart-products">
                                            @foreach (session()->get('Cart')->products as $item)
                                                <div class="product">
                                                    <div class="product-details">
                                                        <h4 class="product-title">
                                                            <a
                                                                href="{{ route('detail_product', $item['productInfo']->alias) }}">{{ $item['productInfo']->product_name }}</a>
                                                        </h4>
                                                        <span class="cart-product-info">
                                                            @if ($item['productInfo']->sale_price > 0)
                                                                <span
                                                                    class="cart-product-qty">{{ number_format($item['productInfo']->sale_price) }}VND</span>
                                                                ×
                                                                {{ $item['quantity'] }}
                                                            @else
                                                                <span
                                                                    class="cart-product-qty">{{ number_format($item['productInfo']->price) }}VND</span>
                                                                ×
                                                                {{ $item['quantity'] }}
                                                            @endif

                                                        </span>
                                                    </div>
                                                    <!-- End .product-details -->

                                                    <figure class="product-image-container">
                                                        <a href="product.html" class="product-image">
                                                            <img src="{{ asset('storage/images') }}/{{ $item['productInfo']->image }}"
                                                                alt="product" width="80" height="80">
                                                        </a>
                                                        <a href="#" data-id="{{ $item['productInfo']->id }}"
                                                            class="btn-remove"
                                                            title="Remove Product"><span>×</span></a>
                                                    </figure>
                                                </div>
                                            @endforeach
                                            <!-- End .product -->
                                        </div>
                                        <!-- End .cart-product -->

                                        <div class="dropdown-cart-total">
                                            <span>Tổng tiền:</span>
                                            <input type="hidden" id="total-quantity"
                                                value="{{ session()->get('Cart')->totalQuantity }}">
                                            <span
                                                class="cart-total-price float-right">{{ number_format(session()->get('Cart')->calculateTotalPrice()) }}VND</span>
                                        </div>
                                    @else
                                        <input type="hiden" id="total-quantity" value="0">
                                        <h1>Không có sản phẩm</h1>
                                    @endif

                                </div>
                                <!-- End .cart-product -->


                                <!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="{{ route('cart.index') }}" class="btn btn-gray btn-block view-cart">Xem
                                        giỏ hàng</a>
                                    <a href="checkout.html" class="btn btn-dark btn-block">Kiểm tra hóa đơn</a>
                                </div>
                                <!-- End .dropdown-cart-total -->
                            </div>
                            <!-- End .dropdownmenu-wrapper -->
                        </div>
                        <!-- End .dropdown-menu -->
                    </div>
                    <!-- End .dropdown -->
                </div>
                <!-- End .header-right -->
            </div>
            <!-- End .container -->
        </div>
        <!-- End .header-middle -->
    </header>
