<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo1-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Oct 2023 03:19:44 GMT -->

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

    <script>
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,600,700', 'Poppins:300,400,500,600,700,800',
                    'Oswald:300,400,500,600,700,800', 'Playfair+Display:900', 'Shadows+Into+Light:400'
                ]
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
    <link rel="stylesheet" href="{{ asset('frontend/') }}/assets/css/demo1.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('frontend/') }}/assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('frontend/') }}/assets/vendor/fontawesome-free/css/all.min.css">
</head>

<body>
    <div class="page-wrapper">
        <header class="header">
            <div class="header-top bg-primary text-uppercase">
                <div class="container">
                    <div class="header-left">
                        <div class="header-dropdown mr-auto mr-sm-3 mr-md-0">
                            <a href="#" class="pl-0"><i class="flag-us flag"></i>VN</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#"><i class="flag-us flag mr-2"></i>ENG</a>
                                    </li>
                                    <li><a href="#"><i class="flag-fr flag mr-2"></i>VN</a></li>
                                </ul>
                            </div>
                            <!-- End .header-menu -->
                        </div>
                        <!-- End .header-dropown -->

                        <div class="header-dropdown ml-3 pl-1">
                            <a href="#">VND</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">VND</a></li>
                                    <li><a href="#">USD</a></li>
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
                                    <li><a href="wishlist.html">Danh sách mong muốn của tôi</a></li>
                                    <li><a href="#">Bản đồ trang web</a></li>
                                    <li><a href="{{ route('cart.index') }}">Giỏ hàng</a></li>
                                    <li><a href="#" class="login-link">Đăng nhập</a></li>
                                </ul>
                            </div>
                            <!-- End .header-menu -->
                        </div>
                        <!-- End .header-dropown -->

                        <span class="separator"></span>

                        <div class="social-icons">
                            <a href="#" class="social-icon social-facebook icon-facebook ml-0"
                                target="_blank"></a>
                            <a href="#" class="social-icon social-twitter icon-twitter ml-0" target="_blank"></a>
                            <a href="#" class="social-icon social-instagram icon-instagram ml-0"
                                target="_blank"></a>
                        </div>
                        <!-- End .social-icons -->
                    </div>

                    <!-- End .header-right -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-top -->

            <div class="header-middle text-dark sticky-header" data-sticky-options="{'mobile': true}">
                <div class="container">
                    <div class="header-left col-lg-2 w-auto pl-0">
                        <button class="mobile-menu-toggler mr-2" type="button">
                            <i class="fas fa-bars"></i>
                        </button>
                        <a href="{{ route('index') }}" class="logo">
                            <img src="{{ asset('frontend/') }}/assets/images/logo.png" alt="Porto Logo">
                        </a>
                    </div>
                    <!-- End .header-left -->

                    <div class="header-right w-lg-max pl-2">
                        <div class="header-search header-icon header-search-inline header-search-category w-lg-max">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <input type="search" class="form-control" name="q" id="qq"
                                        placeholder="Tìm kiếm..." required>
                                    <div class="select-custom">
                                        <select id="category" name="cat">
                                            <option value="">Tất cả danh mục</option>
                                            <option value="4">Thời trang</option>
                                            <option value="12">- Nữ</option>
                                            <option value="13">- Nam</option>
                                            <option value="66">- Trang sức</option>
                                            <!-- Các danh mục khác -->
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
                            <h6 class="pt-1 line-height-1">Gọi ngay<a href="tel:#"
                                    class="d-block text-dark ls-10 pt-1">+123 5678 890</a></h6>
                        </div>
                        <!-- End .header-contact -->

                        <a href="login.html" class="header-icon header-icon-user"><i class="icon-user-2"></i></a>

                        <a href="wishlist.html" class="header-icon"><i class="icon-wishlist-2"></i></a>

                        <div class="dropdown cart-dropdown">
                            <a href="#" title="Cart" class="dropdown-toggle dropdown-arrow cart-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
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
                                                            <img src="{{ asset('storage/images') }}/{{ $item['productInfo']->image }}" alt="product"
                                                                width="80" height="80">
                                                        </a>
                                                        <a href="#" data-id="{{ $item['productInfo']->id }}" class="btn-remove"
                                                            title="Remove Product"><span>×</span></a>
                                                    </figure>
                                                </div>
                                            @endforeach
                                            <!-- End .product -->
                                        </div>
                                        <!-- End .cart-product -->
                                    
                                        <div class="dropdown-cart-total">
                                            <span>Tổng tiền:</span>
                                            <input type="hidden" id="total-quantity" value="{{ session()->get('Cart')->totalQuantity }}">
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
                                        <a href="{{ route('cart.index') }}" class="btn btn-gray btn-block view-cart">Xem giỏ hàng</a>
                                        <a href="checkout.html" class="btn btn-dark btn-block">Kiểm tra hóa đơn</a>
                                    </div>
                                    <!-- End .dropdown-cart-total -->
                                </div>
                                <!-- End .dropdownmenu-wrapper -->
                            </div>
                            <!-- End .dropdown-menu -->
                        </div>

                    </div>

                    <!-- End .header-right -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-middle -->

            <div class="header-bottom sticky-header d-none d-lg-block bg-gray"
                data-sticky-options="{'mobile': false}">
                <div class="container">
                    <div class="header-left">
                        <a href="{{ route('index') }}" class="logo">
                            <img src="{{ asset('frontend/') }}/assets/images/logo.png" alt="Porto Logo">
                        </a>
                    </div>
                    <div class="header-center">
                        <nav class="main-nav w-100">
                            <ul class="menu">
                                <li>
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
                                <li class="float-right"><a href="#" class="pl-5">Ưu đãi đặc biệt!</a></li>
                            </ul>

                        </nav>
                    </div>
                    <div class="header-right">
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
                                            <option value="32">- Xe máy &amp; Xe địa hình</option>
                                            <option value="33">- Phụ kiện xe hơi</option>
                                            <option value="34">- Thuyền</option>
                                            <option value="57">- Dụng cụ ô tô</option>
                                        </select>

                                    </div>
                                    <!-- End .select-custom -->
                                    <button class="btn p-0 icon-search-3" type="submit"></button>
                                </div>
                                <!-- End .header-search-wrapper -->
                            </form>
                        </div>
                        <!-- End .header-search -->

                        <a href="login.html" class="header-icon "><i class="icon-user-2"></i></a>

                        <a href="wishlist.html" class="header-icon"><i class="icon-wishlist-2"></i></a>

                        <div class="dropdown cart-dropdown">
                            <a href="#" title="Cart" class="dropdown-toggle dropdown-arrow cart-toggle"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                data-display="static">
                                <i class="minicart-icon"></i>
                                @if (session()->has('Cart') && session()->get('Cart')->totalQuantity > 0)
                                    <span id="total-quantity-show1"
                                        class="cart-count badge-circle">{{ session()->get('Cart')->totalQuantity }}</span>
                                @else
                                    <span id="total-quantity-show1" class="cart-count badge-circle">0</span>
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
                                        <a href="cart.html" class="btn btn-gray btn-block view-cart">Xem giỏ hàng</a>
                                        <a href="checkout.html" class="btn btn-dark btn-block">Hóa đơn</a>
                                    </div>
                                    <!-- End .dropdown-cart-total -->
                                </div>
                                <!-- End .dropdownmenu-wrapper -->
                            </div>
                            <!-- End .dropdown-menu -->
                        </div>
                        <!-- End .dropdown -->
                    </div>
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-bottom -->
        </header>
        <!-- End .header -->

        @yield('content')
        <!-- End .main -->

        <footer class="footer bg-dark position-relative">
            <div class="footer-middle">
                <div class="container position-static">
                    <div class="footer-ribbon">Get in touch</div>

                    <div class="row">
                        <div class="col-lg-3 col-sm-6 pb-2 pb-sm-0">
                            <div class="widget">
                                <h4 class="widget-title">Giới thiệu</h4>
                                <a href="demo1.html">
                                    <img src="{{ asset('frontend/') }}/assets/images/logo-footer.png" alt="Logo"
                                        class="logo-footer">
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

        <!-- End .footer -->
    </div>
    <!-- End .page-wrapper -->

    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div class="mobile-menu-overlay"></div>
    <!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="fa fa-times"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu menu-with-icon">
                    <li><a href="{{ route('index') }}"><i class="icon-home"></i>Trang chủ</a></li>
                    <li>
                        <a href="demo1-shop.html" class="sf-with-ul"><i class="sicon-badge"></i>Danh mục</a>
                        <ul>
                            <li><a href="category.html">Banner toàn màn hình</a></li>
                            <li><a href="category-banner-boxed-slider.html">Banner trượt hộp</a></li>
                            <li><a href="category-banner-boxed-image.html">Banner hình ảnh hộp</a></li>
                            <li><a href="https://www.portotheme.com/html/porto_ecommerce/category-sidebar-left.html">Thanh
                                    bên trái</a></li>
                            <li><a href="category-sidebar-right.html">Thanh bên phải</a></li>
                            <li><a href="category-off-canvas.html">Bộ lọc Off Canvas</a></li>
                            <li><a href="category-horizontal-filter1.html">Bộ lọc Ngang 1</a></li>
                            <li><a href="category-horizontal-filter2.html">Bộ lọc Ngang 2</a></li>
                            <li><a href="#">Các loại danh sách</a></li>
                            <li><a href="category-infinite-scroll.html">Cuộn vô tận Ajax<span
                                        class="tip tip-new">Mới</span></a></li>
                            <li><a href="category.html">Sản phẩm 3 cột</a></li>
                            <li><a href="category-4col.html">Sản phẩm 4 cột</a></li>
                            <li><a href="category-5col.html">Sản phẩm 5 cột</a></li>
                            <li><a href="category-6col.html">Sản phẩm 6 cột</a></li>
                            <li><a href="category-7col.html">Sản phẩm 7 cột</a></li>
                            <li><a href="category-8col.html">Sản phẩm 8 cột</a></li>
                        </ul>
                    </li>
                    <li>

                        <ul class="menu">
                            <li>
                                <a href="{{ route('index') }}"><i class="sicon-home"></i>Trang chủ</a>
                            </li>
                            <li>
                                <a href="demo1-shop.html" class="sf-with-ul"><i class="sicon-badge"></i>Danh mục</a>
                                <ul>
                                    <li><a href="category.html">Banner toàn màn hình</a></li>
                                    <!-- Các mục khác -->
                                </ul>
                            </li>
                            <li>
                                <a href="demo1-product.html" class="sf-with-ul"><i class="sicon-basket"></i>Sản
                                    phẩm</a>
                                <ul>
                                    <li>
                                        <a href="#" class="nolink">Trang sản phẩm</a>
                                        <ul>
                                            <li><a href="product.html">Sản phẩm đơn giản</a></li>
                                            <!-- Các mục khác -->
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="nolink">Bố cục sản phẩm</a>
                                        <ul>
                                            <li><a href="product-extended-layout.html">Bố cục mở rộng</a></li>
                                            <!-- Các mục khác -->
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="sf-with-ul"><i class="sicon-envelope"></i>Trang</a>
                                <ul>
                                    <li><a href="wishlist.html">Danh sách mong muốn</a></li>
                                    <!-- Các mục khác -->
                                </ul>
                            </li>
                            <li><a href="blog.html"><i class="sicon-book-open"></i>Blog</a></li>
                            <li><a href="demo1-about.html"><i class="sicon-users"></i>Về chúng tôi</a></li>
                        </ul>

                        <ul class="mobile-menu menu-with-icon mt-2 mb-2">
                            <li class="border-0">
                                <a href="#" target="_blank"><i class="sicon-star"></i>Mua Porto!<span
                                        class="tip tip-hot">Nóng</span></a>
                            </li>
                        </ul>

                        <ul class="mobile-menu">
                            <li><a href="login.html">Tài khoản của tôi</a></li>
                            <!-- Các mục khác -->
                        </ul>

            </nav>
            <!-- End .mobile-nav -->

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
        </div>
        <!-- End .mobile-menu-wrapper -->
    </div>
    <!-- End .mobile-menu-container -->

   <div class="sticky-navbar">
    <div class="sticky-info">
        <a href="{{ route('index') }}">
            <i class="icon-home"></i>Trang chủ
        </a>
    </div>
    <div class="sticky-info">
        <a href="demo1-shop.html" class="">
            <i class="icon-bars"></i>Danh mục
        </a>
    </div>
    <div class="sticky-info">
        <a href="wishlist.html" class="">
            <i class="icon-wishlist-2"></i>Danh sách mong muốn
        </a>
    </div>
    <div class="sticky-info">
        <a href="https://www.portotheme.com/html/porto_ecommerce/my-account.html" class="">
            <i class="icon-user-2"></i>Tài khoản
        </a>
    </div>
    <div class="sticky-info">
        <a href="cart.html" class="">
            <i class="icon-shopping-cart position-relative">
                <span class="cart-count badge-circle">3</span>
            </i>Giỏ hàng
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
    <script src="{{ asset('frontend/') }}/assets/js/jquery.plugin.min.js"></script>
    <script src="{{ asset('frontend/') }}/assets/js/jquery.countdown.min.js"></script>
    {{-- <script src="{{ asset('frontend/')}}/assets/js/jquery-3.7.1.min.js"></script> --}}
    @yield('script')
    <!-- Main JS File -->
    <script src="{{ asset('frontend/') }}/assets/js/main.min.js"></script>
    <script>
        (function() {
            var js =
                "window['__CF$cv$params']={r:'81d843714ba7e6d6',t:'MTY5ODU0OTQyNS4wNjIwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='{{ asset('frontend/') }}/assets/cdn-cgi/challenge-platform/h/g/scripts/jsd/c359bc3d/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
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

<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo1-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Oct 2023 03:20:06 GMT -->

</html>
