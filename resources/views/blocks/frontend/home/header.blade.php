<@php
    session_start();
@endphp

<div class="top-notice text-white bg-dark">
    <div class="container text-center">
        <h5 class="d-inline-block mb-0">Get Up to <b>40% OFF</b> New-Season Styles</h5>
        <a href="demo1-shop.html" class="category">MEN</a>
        <a href="demo1-shop.html" class="category">WOMEN</a>
        <small>* Limited time only.</small>
        <button title="Close (Esc)" type="button" class="mfp-close">×</button>
    </div>
    <!-- End .container -->
</div>
<!-- End .top-notice -->

<header class="header home">
    <div class="header-top bg-primary text-uppercase">
        <div class="container">
            <div class="header-left">
                <div class="header-dropdown mr-auto mr-sm-3 mr-md-0">
                    <a href="#" class="pl-0"><i class="flag-us flag"></i>ENG</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="#"><i class="flag-us flag mr-2"></i>ENG</a>
                            </li>
                            <li><a href="#"><i class="flag-fr flag mr-2"></i>FRA</a></li>
                        </ul>
                    </div>
                    <!-- End .header-menu -->
                </div>
                <!-- End .header-dropown -->

                <div class="header-dropdown ml-3 pl-1">
                    <a href="#">USD</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="#">EUR</a></li>
                            <li><a href="#">USD</a></li>
                        </ul>
                    </div>
                    <!-- End .header-menu -->
                </div>
                <!-- End .header-dropown -->
            </div>
            <!-- End .header-left -->

            <div class="header-right header-dropdowns ml-0 ml-sm-auto">
                <p class="top-message mb-0 d-none d-sm-block">Welcome To Porto!</p>
                <div class="header-dropdown dropdown-expanded mr-3">
                    <a href="#">Links</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="dashboard.html">My Account</a></li>
                            <li><a href="demo1-contact.html">Contact Us</a></li>
                            <li><a href="wishlist.html">My Wishlist</a></li>
                            <li><a href="#">Site Map</a></li>
                            <li><a href="cart.html">Cart</a></li>
                            @if(session('user_name'))
                                <li><a href="{{ route('logout') }}">Đăng xuất</a></li>
                            @else
                                <li><a href="{{ route('login') }}">Đăng nhập</a></li>
                            @endif


                            
                        </ul>
                    </div>
                    <!-- End .header-menu -->
                </div>
                <!-- End .header-dropown -->

                <span class="separator"></span>

                <div class="social-icons">
                    <a href="#" class="social-icon social-facebook icon-facebook ml-0" target="_blank"></a>
                    <a href="#" class="social-icon social-twitter icon-twitter ml-0" target="_blank"></a>
                    <a href="#" class="social-icon social-instagram icon-instagram ml-0" target="_blank"></a>
                </div>
                <!-- End .social-icons -->
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
                <a href="demo1.html" class="logo">
                    <img src="{{ asset('frontend/')}}/assets/images/logo.png" width="111" height="44" alt="Porto Logo">
                </a>
            </div>
            <!-- End .header-left -->

            <div class="header-right w-lg-max pl-2">
                <div class="header-search header-icon header-search-inline header-search-category w-lg-max">
                    <a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
                    <form action="#" method="get">
                        <div class="header-search-wrapper">
                            <input type="search" class="form-control" name="q" id="q" placeholder="Search..." required>
                            <div class="select-custom">
                                <select id="cat" name="cat">
                                    <option value="">All Categories</option>
                                    <option value="4">Fashion</option>
                                    <option value="12">- Women</option>
                                    <option value="13">- Men</option>
                                    <option value="66">- Jewellery</option>
                                    <option value="67">- Kids Fashion</option>
                                    <option value="5">Electronics</option>
                                    <option value="21">- Smart TVs</option>
                                    <option value="22">- Cameras</option>
                                    <option value="63">- Games</option>
                                    <option value="7">Home &amp; Garden</option>
                                    <option value="11">Motors</option>
                                    <option value="31">- Cars and Trucks</option>
                                    <option value="32">- Motorcycles &amp; Powersports</option>
                                    <option value="33">- Parts &amp; Accessories</option>
                                    <option value="34">- Boats</option>
                                    <option value="57">- Auto Tools &amp; Supplies</option>
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
                    <h6 class="pt-1 line-height-1">Call us now<a href="tel:#" class="d-block text-dark ls-10 pt-1">+123 5678 890</a></h6>
                </div>
                <!-- End .header-contact -->
                @if(session('user_name'))
                    <a href="#" class="header-icon header-icon-user">
                        <i class="icon-user-2">{{ session('user_name') }}</i>
                    </a>
                @else
                    <!-- Hiển thị liên kết đăng nhập nếu người dùng chưa đăng nhập -->
                    <a href="{{ route('login') }}" class="header-icon header-icon-user">
                        <i class="icon-login"></i>
                    </a>
                @endif
                {{-- @if (Auth::check())
                    <a href="" class="header-icon header-icon-user"><i class="icon-user-2">{{ Auth::user() ->name }}</i></a>  
                @else
                    <a href="{{ route('login') }}" class="header-icon header-icon-user"><i class="icon-user-2"></i>Login</a>  
                @endif --}}
                    

                <a href="wishlist.html" class="header-icon"><i class="icon-wishlist-2"></i></a>

                <div class="dropdown cart-dropdown">
                    <a href="#" title="Cart" class="dropdown-toggle dropdown-arrow cart-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                        <i class="minicart-icon"></i>
                        <span class="cart-count badge-circle">3</span>
                    </a>

                    <div class="cart-overlay"></div>

                    <div class="dropdown-menu mobile-cart">
                        <a href="#" title="Close (Esc)" class="btn-close">×</a>

                        <div class="dropdownmenu-wrapper custom-scrollbar">
                            <div class="dropdown-cart-header">Giỏ hàng</div>
                            <!-- End .dropdown-cart-header -->

                            {{-- <div class="dropdown-cart-products">
                                
                                <div class="product">
                                    <div class="product-details">
                                        <h4 class="product-title">
                                            <a href="demo1-product.html">{{ $value['product_name'] }}</a>
                                        </h4>

                                        <span class="cart-product-info">
                                            <span class="cart-product-qty">{{ $value['quantity'] }}x</span> {{ number_format($value['price']) }}
                                        </span>
                                    </div>

                                    <figure class="product-image-container">
                                        <a href="demo1-product.html" class="product-image">
                                            <img src="{{ asset('storage/images/')}}/{{ $value['image'] }}" alt="product" width="80" height="80">
                                        </a>

                                        <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                                    </figure>
                                </div>
                                @endforeach
     
                            </div> --}}
                            <!-- End .cart-product -->

                            <div class="dropdown-cart-total">
                                <span>Tổng tiền:</span>

                                <span class="cart-total-price float-right">VND</span>
                            </div>
                            <!-- End .dropdown-cart-total -->

                            <div class="dropdown-cart-action">
                                <a href="{{ route('cart.index') }}" class="btn btn-gray btn-block view-cart">Xem giỏ hàng</a>
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