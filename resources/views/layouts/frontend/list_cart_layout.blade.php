<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/porto_ecommerce/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Oct 2023 03:19:40 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Porto - Bootstrap eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/') }}/assets/images/icons/favicon.png">
    <link rel="stylesheet" href="{{ asset('backend/css/font-awesome.min.css') }}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
{{--  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700', 'Shadows+Into+Light:400']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = '{{ asset('frontend/') }}/assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ asset('frontend/') }}/assets/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('frontend/') }}/assets/css/style.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('frontend/') }}/assets/vendor/fontawesome-free/css/all.min.css">
</head>

<body>
    <div class="page-wrapper">
        <div class="top-notice bg-primary text-white">
            <div class="container text-center">
                <h5 class="d-inline-block">Get Up to <b>40% OFF</b> New-Season Styles</h5>
                <a href="category.html" class="category">MEN</a>
                <a href="category.html" class="category ml-2 mr-3">WOMEN</a>
                <small>* Limited time only.</small>
                <button title="Close (Esc)" type="button" class="mfp-close">×</button>
            </div><!-- End .container -->
        </div><!-- End .top-notice -->

        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left d-none d-sm-block">
                        <p class="top-message text-uppercase">Miễn phí đổi/trả. Giao hàng tiêu chuẩn cho đơn hàng từ
                            500.000VND</p>
                    </div><!-- End .header-left -->

                    <div class="header-right header-dropdowns ml-0 ml-sm-auto w-sm-100">
                        <div class="header-dropdown dropdown-expanded d-none d-lg-block">
                            <a href="#">Links</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="dashboard.html">Tài khoản</a></li>
                                    <li><a href="about.html">Về Porto</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="wishlist.html">My Wishlist</a></li>
                                    <li><a href="cart.html">Giỏ hàng</a></li>
                                    @if (Auth::check())
                                        <li><a href="{{ route('logout') }}">Đăng xuất</a></li>
                                    @else
                                        <li><a href="{{ route('login') }}">Đăng nhập</a></li>
                                    @endif
                                    {{-- <li><a href="{{ route('login') }}" class="login-link">Đăng nhập</a></li> --}}
                                </ul>
                            </div><!-- End .header-menu -->
                        </div><!-- End .header-dropown -->

                        <span class="separator"></span>

                        <div class="header-dropdown">
                            <a href="#"><i class="flag-us flag"></i>VN</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#"><i class="flag-us flag mr-2"></i>VN</a>
                                    </li>
                                    <li><a href="#"><i class="flag-fr flag mr-2"></i>FRA</a></li>
                                </ul>
                            </div><!-- End .header-menu -->
                        </div><!-- End .header-dropown -->

                        <div class="header-dropdown mr-auto mr-sm-3 mr-md-0">
                            <a href="#">USD</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">VND</a></li>
                                    <li><a href="#">USD</a></li>
                                </ul>
                            </div><!-- End .header-menu -->
                        </div><!-- End .header-dropown -->

                        <span class="separator"></span>

                        <div class="social-icons">
                            <a href="#" class="social-icon social-facebook icon-facebook" target="_blank"></a>
                            <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"></a>
                            <a href="#" class="social-icon social-instagram icon-instagram" target="_blank"></a>
                        </div><!-- End .social-icons -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle sticky-header" data-sticky-options="{'mobile': true}">
                <div class="container">
                    <div class="header-left col-lg-2 w-auto pl-0">
                        <button class="mobile-menu-toggler text-primary mr-2" type="button">
                            <i class="fas fa-bars"></i>
                        </button>
                        <a href="{{ route('index') }}" class="logo">
                            <img src="{{ asset('frontend/') }}/assets/images/logo.png" width="111" height="44"
                                alt="Porto Logo">
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-right w-lg-max">
                        <div
                            class="header-icon header-search header-search-inline header-search-category w-lg-max text-right mt-0">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <input type="search" class="form-control" name="q" id="q"
                                        placeholder="Search..." required>
                                    <div class="select-custom">
                                        <select id="cat" name="cat">
                                            <option value="">Danh mục</option>
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
                                    </div><!-- End .select-custom -->
                                    <button class="btn icon-magnifier p-0" type="submit"></button>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->

                        <div class="header-contact d-none d-lg-flex pl-4 pr-4">
                            <img alt="phone" src="{{ asset('frontend/') }}/assets/images/phone.png" width="30"
                                height="30" class="pb-1">
                            <h6><span>Đặt hàng gọi</span><a href="tel:#" class="text-dark font1">091 6643161</a>
                            </h6>
                        </div>
                        @if (Auth::check())
                            <a href="#" class="header-icon header-icon-user"><i
                                    class="icon-user-2"></i>{{ Auth::user()->name }}</a>
                        @else
                            <a href="{{ route('login') }}" class="header-icon header-icon-user"><i
                                    class="icon-user-2"></i></a>
                        @endif

                        {{-- <a href="{{ route('login') }}" class="header-icon" title="login"><i class="icon-user-2"></i></a> --}}

                        <a href="wishlist.html" class="header-icon" title="wishlist"><i class="far fa-envelope"></i></a>
                        
                        {{-- <div class="dropdown cart-dropdown">
                            <a href="#" title="Cart" class="dropdown-toggle dropdown-arrow cart-toggle"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                data-display="static">
                                <i class="far fa-envelope"></i>
                                @if (Session::has('Cart') && optional(Session::get('Cart'))->totalQuantity !== null)
                                    <span id="total-quantity-show"
                                        class="cart-count badge-circle">{{ Session::get('Cart')->totalQuantity }}</span>
                                @else
                                    <span id="total-quantity-show" class="cart-count badge-circle">0</span>
                                @endif



                            </a>
                        </div> --}}
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
                                                                <span
                                                                    class="cart-product-qty">{{ number_format($item['productInfo']->price) }}VND</span>
                                                                × {{ $item['quantity'] }}
                                                            </span>
                                                        </div>
                                                        <!-- End .product-details -->

                                                        <figure class="product-image-container">
                                                            <a href="product.html" class="product-image">
                                                                <img src="{{ asset('storage/images') }}/{{ $item['productInfo']->image }}"
                                                                    alt="product" width="80" height="80">
                                                            </a>
                                                            <a href="#"
                                                                data-id="{{ $item['productInfo']->id }}"
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

                                                <span
                                                    class="cart-total-price float-right">{{ number_format(session()->get('Cart')->getTotalPrice()) }}VND</span>

                                            </div>
                                        @else
                                            <h1>Không có sản phẩm</h1>
                                        @endif

                                    </div>
                                    <!-- End .dropdown-cart-total -->

                                    <div class="dropdown-cart-action">
                                        <a href="{{ route('cart.index') }}"
                                            class="btn btn-gray btn-block view-cart">Xem giỏ hàng</a>
                                        <a href="checkout.html" class="btn btn-dark btn-block">Checkout</a>
                                    </div>
                                    <!-- End .dropdown-cart-total -->
                                </div>
                                <!-- End .dropdownmenu-wrapper -->
                            </div>
                            <!-- End .dropdown-menu -->
                        </div>
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->

            <div class="header-bottom sticky-header d-none d-lg-block" data-sticky-options="{'mobile': false}">
                <div class="container">
                    <nav class="main-nav w-100">
                        <ul class="menu">
                            @foreach ($menus as $item)
                                @if ($item->alias == 'trang-chu' && $item->is_active == 1)
                                    <li class="active"><a href="{{ route('index') }}"></i>{{ $item->name }}</a>
                                    </li>
                                @elseif ($item->alias == 'nam' && $item->is_active == 1)
                                    <li>
                                        <a href="#" class="sf-with-ul"></i>{{ $item->name }}</a>
                                        <div class="megamenu megamenu-fixed-width megamenu-3cols">
                                            <div class="row">
                                                @foreach ($parentCategory as $parentItem)
                                                    @if ($parentItem->menu_id == 2)
                                                        <div class="col-lg-4">
                                                            <a href="#"
                                                                class="nolink pl-0">{{ $parentItem->title }}</a>
                                                            <ul class="submenu">
                                                                @foreach ($category as $childItem)
                                                                    @if ($childItem->parent_id == $parentItem->id && $childItem->is_active == 1)
                                                                        <li><a
                                                                                href="{{ route('category.' . $parentItem->alias . '.' . $childItem->alias) }}">{{ $childItem->title }}</a>
                                                                            {{-- href="#">{{ $childItem->title }}</a> --}}
                                                                        </li>
                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                        <!-- End .megamenu -->
                                    </li>
                                @elseif ($item->alias == 'nu' && $item->is_active == 1)
                                    <li>
                                        <a href="#" class="sf-with-ul"></i>{{ $item->name }}</a>
                                        <div class="megamenu megamenu-fixed-width megamenu-3cols">
                                            <div class="row">
                                                @foreach ($parentCategory as $parentItem)
                                                    @if ($parentItem->menu_id == 3)
                                                        <div class="col-lg-4">
                                                            <a href="#"
                                                                class="nolink pl-0">{{ $parentItem->title }}</a>
                                                            <ul class="submenu">
                                                                @foreach ($category as $childItem)
                                                                    @if ($childItem->parent_id == $parentItem->id && $childItem->is_active == 1)
                                                                        <li><a
                                                                                href="{{ route('category.' . $parentItem->alias . '.' . $childItem->alias) }}">{{ $childItem->title }}</a>
                                                                            {{-- href="#">{{ $childItem->title }}</a> --}}
                                                                        </li>
                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                        <!-- End .megamenu -->
                                    </li>
                                @elseif ($item->alias == 'tre-em' && $item->is_active == 1)
                                    <li>
                                        <a href="#" class="sf-with-ul"></i>{{ $item->name }}</a>

                                        <ul>
                                            <li><a href="wishlist.html">Danh sách mong muốn</a></li>
                                            <li><a href="cart.html">Giỏ hàng</a></li>
                                            <li><a href="checkout.html">Thanh toán</a></li>
                                            <li><a href="dashboard.html">Bảng điều khiển</a></li>
                                            <li><a href="demo1-about.html">Về chúng tôi</a></li>
                                            <li><a href="#">Blog</a>
                                                <ul>
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="single.html">Bài đăng Blog</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="demo1-contact.html">Liên hệ</a></li>
                                            <li><a href="{{ route('login') }}">Đăng nhập</a></li>
                                            <li><a href="forgot-password.html">Quên mật khẩu</a></li>
                                        </ul>
                                    </li>
                                @elseif ($item->alias == 'tin-tuc' && $item->is_active == 1)
                                    <li><a href="blog.html">{{ $item->name }}</a></li>
                                @elseif ($item->alias == 've-porto' && $item->is_active == 1)
                                    <li><a href="demo1-about.html">{{ $item->name }}</a></li>
                                @elseif ($item->alias == 'uu-dai-dac-biet' && $item->is_active == 1)
                                    <li><a href="#"></i>{{ $item->name }}</a></li>
                                @endif
                            @endforeach
                            {{-- <li>
                                <a href="{{ route('index') }}">Trang chủ</a>
                            </li>
                            <li>
                                <a href="demo1-shop.html">Danh mục</a>
                                <!-- Megamenu cho danh mục -->
                                <!-- Chi tiết các danh mục sản phẩm, các biến thể khác nhau -->
                            </li>
                            <li class="active">
                                <a href="demo1-product.html">Sản phẩm</a>
                                <!-- Megamenu cho sản phẩm -->
                                <!-- Các trang sản phẩm khác nhau, các layout và các loại sản phẩm -->
                            </li>
                            <li>
                                <a href="#">Trang</a>
                                <!-- Các trang phụ như Wishlist, Cart, Checkout, Blog, Contact Us, Login... -->
                            </li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="demo1-contact.html">Liên hệ</a></li>
                            <li class="float-right"><a href="https://1.envato.market/DdLk5" class="pl-5"
                                    target="_blank">Mua Porto!</a></li>
                            <li class="float-right"><a href="#" class="pl-5">Ưu đãi đặc biệt!</a></li> --}}
                        </ul>
                    </nav>
                </div><!-- End .container -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->

        @yield('content')

        <footer class="footer bg-dark position-relative">
            <div class="footer-middle">
                <div class="container position-static">
                    <div class="footer-ribbon">Get in touch</div>

                    <div class="row">
                        <div class="col-lg-3 col-sm-6 pb-2 pb-sm-0">
                            <div class="widget">
                                <h4 class="widget-title">Giới thiệu</h4>
                                <a href="{{route('index')}}">
                                   
                                </a>
                                <p class="m-b-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec
                                    vestibulum
                                    magna, et dapibus lacus. Duis nec vestibulum magna, et dapibus lacus.</p>
                                <a href="#" class="read-more text-white">Tìm hiểu thêm...</a>
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->

                        <div class="col-lg-3 col-sm-6 pb-4 pb-sm-0">
                            <div class="widget mb-2">
                                <h4 class="widget-title mb-1 pb-1">Thông tin liên hệ</h4>
                                <ul class="contact-info m-b-4">
                                    <li>
                                        <span class="contact-info-label">Địa chỉ:</span> 123 Tên Đường, Thành phố, Anh
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Điện thoại:</span><a href="tel:">(123)
                                            456-7890</a>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Email:</span> <a
                                            href="https://portotheme.com/cdn-cgi/l/email-protection#026f636b6e42677a636f726e672c616d6f"><span
                                                class="__cf_email__"
                                                data-cfemail="87eae6eeebc7e2ffe6eaf7ebe2a9e4e8ea">[email&#160;protected]</span></a>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Ngày/Giờ làm việc:</span> Thứ Hai - Chủ Nhật /
                                        9:00 AM
                                        - 8:00 PM
                                    </li>
                                </ul>
                                <div class="social-icons">
                                    <a href="{{ route('login') }}" class="social-icon social-facebook icon-facebook"
                                        target="_blank" title="Facebook"></a>
                                    <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"
                                        title="Twitter"></a>
                                    <a href="#" class="social-icon social-linkedin fab fa-linkedin-in"
                                        target="_blank" title="Linkedin"></a>
                                </div>
                                <!-- End .social-icons -->
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->

                        <div class="col-lg-3 col-sm-6 pb-2 pb-sm-0">
                            <ul class="links">
                                <li><a href="#">Trợ giúp & Câu hỏi thường gặp</a></li>
                                <li><a href="#">Theo dõi đơn hàng</a></li>
                                <li><a href="#">Vận chuyển & Giao hàng</a></li>
                                <li><a href="#">Lịch sử đơn hàng</a></li>
                                <li><a href="#">Tìm kiếm nâng cao</a></li>
                                <li><a href="dashboard.html">Tài khoản của tôi</a></li>
                                <li><a href="#">Cơ hội nghề nghiệp</a></li>
                                <li><a href="demo1-about.html">Về chúng tôi</a></li>
                                <li><a href="#">Bán hàng doanh nghiệp</a></li>
                                <li><a href="#">Quyền riêng tư</a></li>
                            </ul>

                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->

                        <div class="col-lg-3 col-sm-6 pb-0">
                            <div class="widget mb-1 mb-sm-3">
                                <h4 class="widget-title">Thẻ phổ biến</h4>

                                <div class="tagcloud">
                                    <a href="#">Túi</a>
                                    <a href="#">Màu đen</a>
                                    <a href="#">Màu xanh</a>
                                    <a href="#">Quần áo</a>
                                    <a href="#">Thời trang</a>
                                    <a href="#">Hub</a>
                                    <a href="#">Quần jean</a>
                                    <a href="#">Áo sơ mi</a>
                                    <a href="#">Váy</a>
                                    <a href="#">Thể thao</a>
                                    <a href="#">Áo len</a>
                                    <a href="#">Mùa đông</a>
                                </div>

                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .footer-middle -->

            <div class="container">
                <div class="footer-bottom d-sm-flex align-items-center">
                    <div class="footer-left">
                        <span class="footer-copyright">© Porto eCommerce. 2021. All Rights Reserved</span>
                    </div>

                    <div class="footer-right ml-auto mt-1 mt-sm-0">
                        <div class="payment-icons">
                            <span class="payment-icon visa"
                                style="background-image: url({{ asset('frontend/') }}/assets/images/payments/payment-visa.svg)"></span>
                            <span class="payment-icon paypal"
                                style="background-image: url({{ asset('frontend/') }}/assets/images/payments/payment-paypal.svg)"></span>
                            <span class="payment-icon stripe"
                                style="background-image: url({{ asset('frontend/') }}/assets/images/payments/payment-stripe.png)"></span>
                            <span class="payment-icon verisign"
                                style="background-image:  url({{ asset('frontend/') }}/assets/images/payments/payment-verisign.svg)"></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .footer-bottom -->
        </footer>
    </div><!-- End .page-wrapper -->

    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="fa fa-times"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>
                        <a href="category.html">Categories</a>
                        <ul>
                            <li><a href="category.html">Full Width Banner</a></li>
                            <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                            <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                            <li><a href="https://www.portotheme.com/html/porto_ecommerce/category-sidebar-left.html">Left
                                    Sidebar</a></li>
                            <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                            <li><a href="category-off-canvas.html">Off Canvas Filter</a></li>
                            <li><a href="category-horizontal-filter1.html">Horizontal Filter 1</a></li>
                            <li><a href="category-horizontal-filter2.html">Horizontal Filter 2</a></li>
                            <li><a href="#">List Types</a></li>
                            <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll<span
                                        class="tip tip-new">New</span></a></li>
                            <li><a href="category.html">3 Columns Products</a></li>
                            <li><a href="category-4col.html">4 Columns Products</a></li>
                            <li><a href="category-5col.html">5 Columns Products</a></li>
                            <li><a href="category-6col.html">6 Columns Products</a></li>
                            <li><a href="category-7col.html">7 Columns Products</a></li>
                            <li><a href="category-8col.html">8 Columns Products</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="product.html">Products</a>
                        <ul>
                            <li>
                                <a href="#" class="nolink">PRODUCT PAGES</a>
                                <ul>
                                    <li><a href="product.html">SIMPLE PRODUCT</a></li>
                                    <li><a href="product-variable.html">VARIABLE PRODUCT</a></li>
                                    <li><a href="product.html">SALE PRODUCT</a></li>
                                    <li><a href="product.html">FEATURED & ON SALE</a></li>
                                    <li><a href="product-sticky-info.html">WIDTH CUSTOM TAB</a></li>
                                    <li><a href="product-sidebar-left.html">WITH LEFT SIDEBAR</a></li>
                                    <li><a href="product-sidebar-right.html">WITH RIGHT SIDEBAR</a></li>
                                    <li><a href="product-addcart-sticky.html">ADD CART STICKY</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="nolink">PRODUCT LAYOUTS</a>
                                <ul>
                                    <li><a href="product-extended-layout.html">EXTENDED LAYOUT</a></li>
                                    <li><a href="product-grid-layout.html">GRID IMAGE</a></li>
                                    <li><a href="product-full-width.html">FULL WIDTH LAYOUT</a></li>
                                    <li><a href="product-sticky-info.html">STICKY INFO</a></li>
                                    <li><a href="product-sticky-both.html">LEFT & RIGHT STICKY</a></li>
                                    <li><a href="product-transparent-image.html">TRANSPARENT IMAGE</a></li>
                                    <li><a href="product-center-vertical.html">CENTER VERTICAL</a></li>
                                    <li><a href="#">BUILD YOUR OWN</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages<span class="tip tip-hot">Hot!</span></a>
                        <ul>
                            <li>
                                <a href="wishlist.html">Wishlist</a>
                            </li>
                            <li>
                                <a href="cart.html">Shopping Cart</a>
                            </li>
                            <li>
                                <a href="checkout.html">Checkout</a>
                            </li>
                            <li>
                                <a href="dashboard.html">Dashboard</a>
                            </li>
                            <li>
                                <a href="{{ route('login') }}">Login</a>
                            </li>
                            <li>
                                <a href="forgot-password.html">Forgot Password</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="#">Elements</a>
                        <ul class="custom-scrollbar">
                            <li><a href="element-accordions.html">Accordion</a></li>
                            <li><a href="element-alerts.html">Alerts</a></li>
                            <li><a href="element-animations.html">Animations</a></li>
                            <li><a href="element-banners.html">Banners</a></li>
                            <li><a href="element-buttons.html">Buttons</a></li>
                            <li><a href="element-call-to-action.html">Call to Action</a></li>
                            <li><a href="element-countdown.html">Count Down</a></li>
                            <li><a href="element-counters.html">Counters</a></li>
                            <li><a href="element-headings.html">Headings</a></li>
                            <li><a href="element-icons.html">Icons</a></li>
                            <li><a href="element-info-box.html">Info box</a></li>
                            <li><a href="element-posts.html">Posts</a></li>
                            <li><a href="element-products.html">Products</a></li>
                            <li><a href="element-product-categories.html">Product Categories</a></li>
                            <li><a href="element-tabs.html">Tabs</a></li>
                            <li><a href="element-testimonial.html">Testimonials</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="mobile-menu mt-2 mb-2">
                    <li class="border-0">
                        <a href="#">
                            Special Offer!
                        </a>
                    </li>
                    <li class="border-0">
                        <a href="#" target="_blank">
                            Buy Porto!
                            <span class="tip tip-hot">Hot</span>
                        </a>
                    </li>
                </ul>

                <ul class="mobile-menu">
                    <li><a href="{{ route('login') }}">My Account</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="wishlist.html">My Wishlist</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="{{ route('login') }}" class="login-link">Log In</a></li>
                </ul>
            </nav><!-- End .mobile-nav -->

            <form class="search-wrapper mb-2" action="#">
                <input type="text" class="form-control mb-0" placeholder="Search..." required />
                <button class="btn icon-search text-white bg-transparent p-0" type="submit"></button>
            </form>

            <div class="social-icons">
                <a href="#" class="social-icon social-facebook icon-facebook" target="_blank">
                </a>
                <a href="#" class="social-icon social-twitter icon-twitter" target="_blank">
                </a>
                <a href="#" class="social-icon social-instagram icon-instagram" target="_blank">
                </a>
            </div>
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <div class="sticky-navbar">
        <div class="sticky-info">
            <a href="{{ route('index') }}">
                <i class="icon-home"></i>Home
            </a>
        </div>
        <div class="sticky-info">
            <a href="category.html" class="">
                <i class="icon-bars"></i>Categories
            </a>
        </div>
        <div class="sticky-info">
            <a href="wishlist.html" class="">
                <i class="icon-wishlist-2"></i>Wishlist
            </a>
        </div>
        <div class="sticky-info">
            <a href="{{ route('login') }}" class="">
                <i class="icon-user-2"></i>Account
            </a>
        </div>
        <div class="sticky-info">
            <a href="cart.html" class="">
                <i class="icon-shopping-cart position-relative">
                    <span class="cart-count badge-circle">3</span>
                </i>Cart
            </a>
        </div>
    </div>



    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script data-cfasync="false"
        src="{{ asset('frontend/') }}/assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('frontend/') }}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('frontend/') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/') }}/assets/js/plugins.min.js"></script>

    <!-- Main JS File -->
    <script src="{{ asset('frontend/') }}/assets/js/main.min.js"></script>
    <script>
        (function() {
            var js =
                "window['__CF$cv$params']={r:'81d8436c9ad704de',t:'MTY5ODU0OTQyNC4zMTYwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='{{ asset('frontend/') }}/assets/cdn-cgi/challenge-platform/h/g/scripts/jsd/c359bc3d/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
            var _0xh = document.createElement('iframe');
            _0xh.height = 1;
            _0xh.width = 1;
            _0xh.style.position = 'absolute';
            _0xh.style.top = 0;
            _0xh.style.left = 0;
            _0xh.style.border = 'none';
            _0xh.style.visibility = 'hidden';
            document.body.appendChild(_0xh);

            function handler() {
                var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
                if (_0xi) {
                    var _0xj = _0xi.createElement('script');
                    _0xj.innerHTML = js;
                    _0xi.getElementsByTagName('head')[0].appendChild(_0xj);
                }
            }
            if (document.readyState !== 'loading') {
                handler();
            } else if (window.addEventListener) {
                document.addEventListener('DOMContentLoaded', handler);
            } else {
                var prev = document.onreadystatechange || function() {};
                document.onreadystatechange = function(e) {
                    prev(e);
                    if (document.readyState !== 'loading') {
                        document.onreadystatechange = prev;
                        handler();
                    }
                };
            }
        })();
    </script>
</body>
@yield('script')

<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>


<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />

<!-- Mirrored from portotheme.com/html/porto_ecommerce/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Oct 2023 03:19:42 GMT -->

</html>
