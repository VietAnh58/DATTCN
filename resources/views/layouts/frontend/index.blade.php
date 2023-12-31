<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/porto_ecommerce/{{route('index')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Oct 2023 03:17:00 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Porto - Trang bán hàng </title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/')}}/assets/images/icons/favicon.png">


    <script>
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,600,700', 'Poppins:300,400,500,600,700,800', 'Oswald:300,400,500,600,700,800', 'Playfair+Display:900', 'Shadows+Into+Light:400']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = '{{ asset('frontend/')}}/assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ asset('frontend/')}}/assets/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('frontend/')}}/assets/css/demo1.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/')}}/assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/')}}/assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
</head>

<body>
    <div class="page-wrapper">
        @include('blocks.frontend.home.header')
        <!-- End .header -->
            @yield('content')
        
        <!-- End .main -->

        @include('blocks.frontend.home.footer')
       
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
                    <li><a href="{{route('index')}}"><i class="icon-home"></i>Trang chủ</a></li>
<li>
    <a href="demo1-shop.html" class="sf-with-ul"><i class="sicon-badge"></i>Danh mục</a>
    <ul>
        <li><a href="category.html">Banner toàn trang</a></li>
        <li><a href="category-banner-boxed-slider.html">Banner trượt hộp</a></li>
        <li><a href="category-banner-boxed-image.html">Banner hình ảnh hộp</a></li>
        <li><a href="https://www.portotheme.com/html/porto_ecommerce/category-sidebar-left.html">Thanh bên trái</a></li>
        <li><a href="category-sidebar-right.html">Thanh bên phải</a></li>
        <li><a href="category-off-canvas.html">Lọc off canvas</a></li>
        <li><a href="category-horizontal-filter1.html">Lọc ngang 1</a></li>
        <li><a href="category-horizontal-filter2.html">Lọc ngang 2</a></li>
        <li><a href="#">Loại danh sách</a></li>
        <li><a href="category-infinite-scroll.html">Cuộn vô hạn AJAX<span
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
    <a href="demo1-product.html" class="sf-with-ul"><i class="sicon-basket"></i>Sản phẩm</a>
    <ul>
        <li>
            <a href="#" class="nolink">TRANG SẢN PHẨM</a>
            <ul>
                <li><a href="product.html">Sản phẩm đơn giản</a></li>
                <li><a href="product-variable.html">Sản phẩm biến thể</a></li>
                <li><a href="product.html">Sản phẩm giảm giá</a></li>
                <li><a href="product.html">Sản phẩm nổi bật & giảm giá</a></li>
                <li><a href="product-sticky-info.html">VỚI TAB TÙY CHỈNH</a></li>
                <li><a href="product-sidebar-left.html">VỚI THANH BÊN TRÁI</a></li>
                <li><a href="product-sidebar-right.html">VỚI THANH BÊN PHẢI</a></li>
                <li><a href="product-addcart-sticky.html">THÊM GIỎ HÀNG DÍNH</a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="nolink">BÀN BẢN SẢN PHẨM</a>
            <ul>
                <li><a href="product-extended-layout.html">BẢN ĐẶT HÀNG MỞ RỘNG</a></li>
                <li><a href="product-grid-layout.html">HÌNH ẢNH LƯỚI</a></li>
                <li><a href="product-full-width.html">BẢN ĐẶT HÀNG TOÀN MÀN HÌNH</a></li>
                <li><a href="product-sticky-info.html">THÔNG TIN DÍNH</a></li>
                <li><a href="product-sticky-both.html">BÊN TRÁI & BÊN PHẢI DÍNH</a></li>
                <li><a href="product-transparent-image.html">HÌNH ẢNH TRONG SUỐT</a></li>
                <li><a href="product-center-vertical.html">CÂN TRỌNG TÂM DỰNG</a></li>
                <li><a href="#">XÂY D

                    <li>
                        <a href="#" class="sf-with-ul"><i class="sicon-envelope"></i>Trang</a>
                        <ul>
                            <li>
                                <a href="wishlist.html">Ưa thích</a>
                            </li>
                            <li>
                                <a href="cart.html">Giỏ hàng</a>
                            </li>
                            <li>
                                <a href="checkout.html">Thanh toán</a>
                            </li>
                            <li>
                                <a href="dashboard.html">Bảng điều khiển</a>
                            </li>
                            <li>
                                <a href="{{ route('login') }}">Đăng nhập</a>
                            </li>
                            <li>
                                <a href="forgot-password.html">Quên mật khẩu</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="blog.html"><i class="sicon-book-open"></i>Blog</a></li>
                    <li><a href="demo1-about.html"><i class="sicon-users"></i>Về chúng tôi</a></li>
                    </ul>
                    
                    <ul class="mobile-menu menu-with-icon mt-2 mb-2">
                        <li class="border-0">
                            <a href="#" target="_blank"><i class="sicon-star"></i>Mua Porto!<span class="tip tip-hot">Nổi bật</span></a>
                        </li>
                    </ul>
                    
                    <ul class="mobile-menu">
                        <li><a href="{{ route('login') }}">Tài khoản của tôi</a></li>
                        <li><a href="demo1-contact.html">Liên hệ</a></li>
                        <li><a href="wishlist.html">Danh sách mong muốn của tôi</a></li>
                        <li><a href="#">Bản đồ trang web</a></li>
                        <li><a href="cart.html">Giỏ hàng</a></li>
                        <li><a href="{{ route('login') }}" class="login-link">Đăng nhập</a></li>
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
            <a href="{{route('index')}}">
                <i class="icon-home"></i>Home
            </a>
        </div>
        <div class="sticky-info">
            <a href="demo1-shop.html" class="">
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

    {{-- <div class="newsletter-popup mfp-hide bg-img" id="newsletter-popup-form" style="background: #f1f1f1 no-repeat center/cover url({{ asset('frontend/')}}/assets/images/newsletter_popup_bg.jpg)">
        <div class="newsletter-popup-content">
            <img src="{{ asset('frontend/')}}/assets/images/logo.png" width="111" height="44" alt="Logo" class="logo-newsletter">
            <h2>Subscribe to newsletter</h2>

            <p>
                Subscribe to the Porto mailing list to receive updates on new arrivals, special offers and our promotions.
            </p>

            <form action="#">
                <div class="input-group">
                    <input type="email" class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Your email address" required />
                    <input type="submit" class="btn btn-primary" value="Submit" />
                </div>
            </form>
            <div class="newsletter-subscribe">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" value="0" id="show-again" />
                    <label for="show-again" class="custom-control-label">
                        Don't show this popup again
                    </label>
                </div>
            </div>
        </div>
        <!-- End .newsletter-popup-content -->

        <button title="Close (Esc)" type="button" class="mfp-close">
            ×
        </button>
    </div> --}}
    <!-- End .newsletter-popup -->

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script data-cfasync="false" src="{{ asset('frontend/') }}/assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{ asset('frontend/')}}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('frontend/')}}/assets/js/plugins.min.js"></script>
    <script src="{{ asset('frontend/')}}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/')}}/assets/js/jquery.appear.min.js"></script>
    <script src="{{ asset('frontend/')}}/assets/js/jquery.plugin.min.js"></script>
    <script src="{{ asset('frontend/')}}/assets/js/jquery.countdown.min.js"></script>

    <!-- Main JS File -->
    <script src="{{ asset('frontend/')}}/assets/js/main.min.js"></script>
<script>(function(){var js = "window['__CF$cv$params']={r:'81d84342de2ee6d6',t:'MTY5ODU0OTQxOC4yNDUwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='{{ asset('frontend/') }}/assets/cdn-cgi/challenge-platform/h/g/scripts/jsd/c359bc3d/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body>


<!-- Mirrored from portotheme.com/html/porto_ecommerce/{{route('index')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Oct 2023 03:18:05 GMT -->
</html>