<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/porto_ecommerce/category-off-canvas.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Oct 2023 03:21:19 GMT -->

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                <h5 class="d-inline-block">Nhận Ưu đãi <b>lên đến 40%</b> cho Phong cách Mùa mới</h5>
                <a href="category.html" class="category">NAM</a>
                <a href="category.html" class="category ml-2 mr-3">NỮ</a>
                <small>* Chỉ có thời gian giới hạn.</small>
                <button title="Đóng (Esc)" type="button" class="mfp-close">×</button>
            </div><!-- Kết thúc .container -->
        </div>

        <!-- End .top-notice -->

        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left d-none d-sm-block">
                        <p class="top-message text-uppercase">Miễn phí đổi/trả. Giao hàng tiêu chuẩn cho đơn hàng từ
                            $99+</p>
                    </div>
                    <!-- End .header-left -->

                    <div class="header-right header-dropdowns ml-0 ml-sm-auto w-sm-100">
                        <div class="header-dropdown dropdown-expanded d-none d-lg-block">
                            <a href="#">Liên kết</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="dashboard.html">Tài khoản của tôi</a></li>
                                    <li><a href="about.html">Về chúng tôi</a></li>
                                    {{-- <li><a href="blog.html">Blog</a></li> --}}
                                    <li><a href="wishlist.html">Danh sách mong muốn</a></li>
                                    <li><a href="cart.html">Giỏ hàng</a></li>
                                    @if (Auth::check())
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

                        {{-- <div class="header-dropdown mr-auto mr-sm-3 mr-md-0">
                            <a href="#"><i class="flag-us flag"></i>Tiếng Anh</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#"><i class="flag-us flag"></i>Tiếng Anh</a></li>
                                    <li><a href="#"><i class="flag-fr flag mr-2"></i>Tiếng Pháp</a></li>
                                </ul>
                            </div>
                            <!-- End .header-menu -->
                        </div> --}}
                        <!-- End .header-dropown -->

                        <div class="header-dropdown ">
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

                        <span class="separator"></span>

                        <div class="social-icons">
                            <a href="#" class="social-icon social-facebook icon-facebook" target="_blank"></a>
                            <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"></a>
                            <a href="#" class="social-icon social-instagram icon-instagram" target="_blank"></a>
                        </div>
                        <!-- End .social-icons -->
                    </div>
                    <!-- End .header-right -->
                </div>
                <!-- End .container -->
            </div>

            <!-- End .header-top -->

            <div class="header-middle sticky-header" data-sticky-options="{'mobile': true}">
                <div class="container">
                    <div class="header-left col-lg-2 w-auto pl-0">
                        <button class="mobile-menu-toggler text-primary mr-2" type="button">
                            <i class="fas fa-bars"></i>
                        </button>
                        <a href="demo4.html" class="logo">
                            <img src="{{ asset('frontend/') }}/assets/images/logo.png" width="111" height="44"
                                alt="Porto Logo">
                        </a>
                    </div>
                    <!-- End .header-left -->

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
                                    <button class="btn icon-magnifier p-0" type="submit"></button>
                                </div>
                                <!-- End .header-search-wrapper -->
                            </form>
                        </div>
                        <!-- End .header-search -->

                        <div class="header-contact d-none d-lg-flex pl-4 pr-4">
                            <img alt="phone" src="{{ asset('frontend/') }}/assets/images/phone.png" width="30"
                                height="30" class="pb-1">
                            <h6>Gọi cho chúng tôi<a href="tel:#" class="text-dark font1">091 6643161</a></h6>
                        </div>

                        @if (Auth::check())
                        <a href="#" class="header-icon header-icon-user"><i
                                class="icon-user-2"></i>{{ Auth::user()->name }}</a>
                    @else
                        <a href="{{ route('login') }}" class="header-icon header-icon-user"><i
                                class="icon-user-2"></i></a>
                    @endif

                        <a href="#" class="header-icon" title="wishlist"><i class="icon-wishlist-2"></i></a>

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
                        <!-- End .dropdown -->
                    </div>
                    <!-- End .header-right -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-middle -->

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
                                            {{-- <li><a href="{{ route('login') }}">Đăng nhập</a></li> --}}
                                            @if (Auth::check())
                                                <li><a href="{{ route('logout') }}">Đăng xuất</a></li>
                                            @else
                                                <li><a href="{{ route('login') }}">Đăng nhập</a></li>
                                            @endif
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
            </div>
            <!-- End .header-bottom -->
        </header>
        <!-- End .header -->

        <main class="main">
            <div class="category-banner-container bg-gray">
                <div class="category-banner banner text-uppercase"
                    style="background: no-repeat 60%/cover url('{{ asset('frontend/') }}/assets/images/banners/banner-top.jpg');">
                    <div class="container position-relative">
                        <div class="row">
                            <div class="pl-lg-5 pb-5 pb-md-0 col-md-5 col-xl-4 col-lg-4 offset-1">
                                <h3>Ưu Đãi<br>Điện Tử</h3>
                                <a href="category.html" class="btn btn-dark">Nhận Ngay!</a>
                            </div>
                            <div class="pl-lg-3 col-md-4 offset-md-0 offset-1 pt-3">
                                <div class="coupon-sale-content">
                                    <h4 class="m-b-1 coupon-sale-text bg-white text-transform-none">Mã Giảm Giá Độc
                                        Quyền
                                    </h4>
                                    <h5 class="mb-2 coupon-sale-text d-block ls-10 p-0"><i class="ls-0">LÊN
                                            ĐẾN</i><b class="text-dark">$100</b> GIẢM</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container shop-off-canvas">
                @yield('breadcrumb')

                <div class="row">
                    <div class="col-lg-12">
                        <nav class="toolbox sticky-header" data-sticky-options="{'mobile': true}">
                            <div class="toolbox-left">
                                <a href="#" class="sidebar-toggle d-inline-flex"><svg data-name="Layer 3"
                                        id="Layer_3" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="15" x2="26" y1="9" y2="9"
                                            class="cls-1"></line>
                                        <line x1="6" x2="9" y1="9" y2="9"
                                            class="cls-1"></line>
                                        <line x1="23" x2="26" y1="16" y2="16"
                                            class="cls-1"></line>
                                        <line x1="6" x2="17" y1="16" y2="16"
                                            class="cls-1"></line>
                                        <line x1="17" x2="26" y1="23" y2="23"
                                            class="cls-1"></line>
                                        <line x1="6" x2="11" y1="23" y2="23"
                                            class="cls-1"></line>
                                        <path
                                            d="M14.5,8.92A2.6,2.6,0,0,1,12,11.5,2.6,2.6,0,0,1,9.5,8.92a2.5,2.5,0,0,1,5,0Z"
                                            class="cls-2"></path>
                                        <path d="M22.5,15.92a2.5,2.5,0,1,1-5,0,2.5,2.5,0,0,1,5,0Z" class="cls-2">
                                        </path>
                                        <path d="M21,16a1,1,0,1,1-2,0,1,1,0,0,1,2,0Z" class="cls-3"></path>
                                        <path
                                            d="M16.5,22.92A2.6,2.6,0,0,1,14,25.5a2.6,2.6,0,0,1-2.5-2.58,2.5,2.5,0,0,1,5,0Z"
                                            class="cls-2"></path>
                                    </svg>
                                    <span>Filter</span>
                                </a>
                            </div>
                            <!-- End .toolbox-left -->

                            <div class="toolbox-right">
                                <div class="toolbox-item toolbox-sort ml-lg-auto">
                                    <label>Sort By:</label>

                                    <div class="select-custom">
                                        <select name="orderby" class="form-control">
                                            <option value="menu_order" selected="selected">Default sorting</option>
                                            <option value="popularity">Sort by popularity</option>
                                            <option value="rating">Sort by average rating</option>
                                            <option value="date">Sort by newness</option>
                                            <option value="price">Sort by price: low to high</option>
                                            <option value="price-desc">Sort by price: high to low</option>
                                        </select>
                                    </div>
                                    <!-- End .select-custom -->
                                </div>
                                <!-- End .toolbox-item -->

                                <div class="toolbox-item toolbox-show">
                                    <label>Show:</label>

                                    <div class="select-custom">
                                        <select name="count" class="form-control">
                                            <option value="12">12</option>
                                            <option value="24">24</option>
                                            <option value="36">36</option>
                                        </select>
                                    </div>
                                    <!-- End .select-custom -->
                                </div>
                                <!-- End .toolbox-item -->

                                <div class="toolbox-item layout-modes">
                                    <a href="category.html" class="layout-btn btn-grid active" title="Grid">
                                        <i class="icon-mode-grid"></i>
                                    </a>
                                    <a href="category-list.html" class="layout-btn btn-list" title="List">
                                        <i class="icon-mode-list"></i>
                                    </a>
                                </div>
                                <!-- End .layout-modes -->
                            </div>
                            <!-- End .toolbox-right -->
                        </nav>

                        <div class="row">

                            <!-- End .col-sm-4 -->

                            @yield('content')
                            <!-- End .col-sm-4 -->
                        </div>
                        <!-- End .row -->

                        <nav class="toolbox toolbox-pagination">
                            <div class="toolbox-item toolbox-show">
                                <label>Hiển thị:</label>

                                <div class="select-custom">
                                    <select name="count" class="form-control">
                                        <option value="12">12</option>
                                        <option value="24">24</option>
                                        <option value="36">36</option>
                                    </select>
                                </div>
                                <!-- End .select-custom -->
                            </div>
                            <!-- End .toolbox-item -->

                            <ul class="pagination toolbox-item">
                                @yield('page')
                            </ul>
                        </nav>
                    </div>
                    <!-- End. col-lg-9 -->

                    {{-- <div class="sidebar-overlay"></div>
                    <aside class="sidebar-shop col-lg-3 order-lg-first mobile-sidebar custom-scrollbar position-fixed ">
                        <div class="sidebar-wrapper position-static">
                            <div class="widget">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-2">Categories</a>
                                </h3>

                                <div class="collapse show" id="widget-body-2">
                                    <div class="widget-body">
                                        <ul class="cat-list">
                                            <li>
                                                <a href="#widget-category-1" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="widget-category-1">
                                                    Accessories<span class="products-count">(3)</span>
                                                    <span class="toggle"></span>
                                                </a>
                                                <div class="collapse show" id="widget-category-1">
                                                    <ul class="cat-sublist">
                                                        <li>Caps<span class="products-count">(1)</span></li>
                                                        <li>Watches<span class="products-count">(2)</span></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#widget-category-2" class="collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="widget-category-2">
                                                    Dress<span class="products-count">(4)</span>
                                                    <span class="toggle"></span>
                                                </a>
                                                <div class="collapse" id="widget-category-2">
                                                    <ul class="cat-sublist">
                                                        <li>Clothing<span class="products-count">(4)</span></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#widget-category-3" class="collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="widget-category-3">
                                                    Electronics<span class="products-count">(2)</span>
                                                    <span class="toggle"></span>
                                                </a>
                                                <div class="collapse" id="widget-category-3">
                                                    <ul class="cat-sublist">
                                                        <li>Headphone<span class="products-count">(1)</span></li>
                                                        <li>Watch<span class="products-count">(1)</span></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#widget-category-4" class="collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="widget-category-4">
                                                    Fashion<span class="products-count">(6)</span>
                                                    <span class="toggle"></span>
                                                </a>
                                                <div class="collapse" id="widget-category-4">
                                                    <ul class="cat-sublist">
                                                        <li>Shoes<span class="products-count">(4)</span></li>
                                                        <li>Bag<span class="products-count">(2)</span></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="#">Music</a><span class="products-count">(2)</span></li>
                                        </ul>
                                    </div>
                                    <!-- End .widget-body -->
                                </div>
                                <!-- End .collapse -->
                            </div>
                            <!-- End .widget -->

                            <div class="widget">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-3" role="button" aria-expanded="true" aria-controls="widget-body-3">Price</a>
                                </h3>

                                <div class="collapse show" id="widget-body-3">
                                    <div class="widget-body pb-0">
                                        <form action="#">
                                            <div class="price-slider-wrapper">
                                                <div id="price-slider"></div>
                                                <!-- End #price-slider -->
                                            </div>
                                            <!-- End .price-slider-wrapper -->

                                            <div class="filter-price-action d-flex align-items-center justify-content-between flex-wrap">
                                                <div class="filter-price-text">
                                                    Price:
                                                    <span id="filter-price-range"></span>
                                                </div>
                                                <!-- End .filter-price-text -->

                                                <button type="submit" class="btn btn-primary">Filter</button>
                                            </div>
                                            <!-- End .filter-price-action -->
                                        </form>
                                    </div>
                                    <!-- End .widget-body -->
                                </div>
                                <!-- End .collapse -->
                            </div>
                            <!-- End .widget -->

                            <div class="widget widget-color">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-4" role="button" aria-expanded="true" aria-controls="widget-body-4">Color</a>
                                </h3>

                                <div class="collapse show" id="widget-body-4">
                                    <div class="widget-body pb-0">
                                        <ul class="config-swatch-list">
                                            <li class="active">
                                                <a href="#" style="background-color: #000;"></a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #0188cc;"></a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #81d742;"></a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #6085a5;"></a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #ab6e6e;"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End .widget-body -->
                                </div>
                                <!-- End .collapse -->
                            </div>
                            <!-- End .widget -->

                            <div class="widget widget-size">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-5" role="button" aria-expanded="true" aria-controls="widget-body-5">Sizes</a>
                                </h3>

                                <div class="collapse show" id="widget-body-5">
                                    <div class="widget-body pb-0">
                                        <ul class="config-size-list">
                                            <li class="active"><a href="#">XL</a></li>
                                            <li><a href="#">L</a></li>
                                            <li><a href="#">M</a></li>
                                            <li><a href="#">S</a></li>
                                        </ul>
                                    </div>
                                    <!-- End .widget-body -->
                                </div>
                                <!-- End .collapse -->
                            </div>
                            <!-- End .widget -->

                            <div class="widget widget-featured">
                                <h3 class="widget-title">Featured</h3>

                                <div class="widget-body">
                                    <div class="owl-carousel widget-featured-products">
                                        <div class="featured-col">
                                            <div class="product-default left-details product-widget">
                                                <figure>
                                                    <a href="product.html">
                                                        <img src="{{ asset('frontend/') }}/assets/images/products/product-4.jpg" width="75" height="75" alt="product" />
                                                        <img src="{{ asset('frontend/') }}/assets/images/products/product-4-2.jpg" width="75" height="75" alt="product" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-title"> <a href="product.html">Blue Backpack for
                                                            the Young - S</a> </h3>
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:100%"></span>
                                                            <!-- End .ratings -->
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <!-- End .product-ratings -->
                                                    </div>
                                                    <!-- End .product-container -->
                                                    <div class="price-box">
                                                        <span class="product-price">$49.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                            <div class="product-default left-details product-widget">
                                                <figure>
                                                    <a href="product.html">
                                                        <img src="{{ asset('frontend/') }}/assets/images/products/product-5.jpg" width="75" height="75" alt="product" />
                                                        <img src="{{ asset('frontend/') }}/assets/images/products/product-5-2.jpg" width="75" height="75" alt="product" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-title"> <a href="product.html">Casual Spring Blue
                                                            Shoes</a> </h3>
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:100%"></span>
                                                            <!-- End .ratings -->
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <!-- End .product-ratings -->
                                                    </div>
                                                    <!-- End .product-container -->
                                                    <div class="price-box">
                                                        <span class="product-price">$49.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                            <div class="product-default left-details product-widget">
                                                <figure>
                                                    <a href="product.html">
                                                        <img src="{{ asset('frontend/') }}/assets/images/products/product-6.jpg" width="75" height="75" alt="product" />
                                                        <img src="{{ asset('frontend/') }}/assets/images/products/product-6-2.jpg" width="75" height="75" alt="product" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-title"> <a href="product.html">Men Black Gentle
                                                            Belt</a> </h3>
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:100%"></span>
                                                            <!-- End .ratings -->
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <!-- End .product-ratings -->
                                                    </div>
                                                    <!-- End .product-container -->
                                                    <div class="price-box">
                                                        <span class="product-price">$49.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                        </div>
                                        <!-- End .featured-col -->

                                        <div class="featured-col">
                                            <div class="product-default left-details product-widget">
                                                <figure>
                                                    <a href="product.html">
                                                        <img src="{{ asset('frontend/') }}/assets/images/products/product-1.jpg" width="75" height="75" alt="product" />
                                                        <img src="{{ asset('frontend/') }}/assets/images/products/product-1-2.jpg" width="75" height="75" alt="product" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-title"> <a href="product.html">Ultimate 3D
                                                            Bluetooth Speaker</a> </h3>
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:100%"></span>
                                                            <!-- End .ratings -->
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <!-- End .product-ratings -->
                                                    </div>
                                                    <!-- End .product-container -->
                                                    <div class="price-box">
                                                        <span class="product-price">$49.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                            <div class="product-default left-details product-widget">
                                                <figure>
                                                    <a href="product.html">
                                                        <img src="{{ asset('frontend/') }}/assets/images/products/product-2.jpg" width="75" height="75" alt="product" />
                                                        <img src="{{ asset('frontend/') }}/assets/images/products/product-2-2.jpg" width="75" height="75" alt="product" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-title"> <a href="product.html">Brown Women Casual
                                                            HandBag</a> </h3>
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:100%"></span>
                                                            <!-- End .ratings -->
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <!-- End .product-ratings -->
                                                    </div>
                                                    <!-- End .product-container -->
                                                    <div class="price-box">
                                                        <span class="product-price">$49.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                            <div class="product-default left-details product-widget">
                                                <figure>
                                                    <a href="product.html">
                                                        <img src="{{ asset('frontend/') }}/assets/images/products/product-3.jpg" width="75" height="75" alt="product" />
                                                        <img src="{{ asset('frontend/') }}/assets/images/products/product-3-2.jpg" width="75" height="75" alt="product" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-title"> <a href="product.html">Circled Ultimate
                                                            3D Speaker</a> </h3>
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:100%"></span>
                                                            <!-- End .ratings -->
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <!-- End .product-ratings -->
                                                    </div>
                                                    <!-- End .product-container -->
                                                    <div class="price-box">
                                                        <span class="product-price">$49.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                        </div>
                                        <!-- End .featured-col -->
                                    </div>
                                    <!-- End .widget-featured-slider -->
                                </div>
                                <!-- End .widget-body -->
                            </div>
                            <!-- End .widget -->

                            <div class="widget widget-block">
                                <h3 class="widget-title">Custom HTML Block</h3>
                                <h5>This is a custom sub-title.</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus </p>
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .sidebar-wrapper -->
                    </aside> --}}
                    <!-- End .col-lg-3 -->
                </div>
                <!-- End .row -->
            </div>
            <!-- End .container -->

            <div class="mb-4"></div>
            <!-- margin -->
        </main>
        <!-- End .main -->

        <footer class="footer bg-dark">
            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h4 class="widget-title">Thông tin liên hệ</h4>
                                <ul class="contact-info">
                                    <li>
                                        <span class="contact-info-label">Địa chỉ:</span> 123 Tên Đường, Thành phố, Anh
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Điện thoại:</span> <a href="tel:">(123)
                                            456-7890</a>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Email:</span> <a
                                            href="https://portotheme.com/cdn-cgi/l/email-protection#83eee2eaefc3e6fbe2eef3efe6ade0ecee"><span
                                                class="__cf_email__"
                                                data-cfemail="5835393134183d20393528343d763b3735">[email&#160;protected]</span></a>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Ngày/Giờ làm việc:</span> Thứ hai - Chủ nhật /
                                        9:00 AM - 8:00 PM
                                    </li>
                                </ul>
                                <div class="social-icons">
                                    <a href="#" class="social-icon social-facebook icon-facebook"
                                        target="_blank" title="Facebook"></a>
                                    <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"
                                        title="Twitter"></a>
                                    <a href="#" class="social-icon social-instagram icon-instagram"
                                        target="_blank" title="Instagram"></a>
                                </div>
                                <!-- Kết thúc .social-icons -->
                            </div>
                            <!-- Kết thúc .widget -->
                        </div>
                        <!-- End .col-lg-3 -->

                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h4 class="widget-title">Customer Service</h4>

                                <ul class="links">
                                    <li><a href="#">Trợ giúp & Câu hỏi thường gặp</a></li>
                                    <li><a href="#">Theo dõi đơn hàng</a></li>
                                    <li><a href="#">Vận chuyển & Giao hàng</a></li>
                                    <li><a href="#">Lịch sử đơn hàng</a></li>
                                    <li><a href="#">Tìm kiếm nâng cao</a></li>
                                    <li><a href="dashboard.html">Tài khoản của tôi</a></li>
                                    <li><a href="#">Cơ hội nghề nghiệp</a></li>
                                    <li><a href="about.html">Về chúng tôi</a></li>
                                    <li><a href="#">Bán hàng doanh nghiệp</a></li>
                                    <li><a href="#">Riêng tư</a></li>
                                </ul>
                            </div>
                            <!-- Kết thúc .widget -->

                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->

                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h4 class="widget-title">Thẻ phổ biến</h4>

                                <div class="tagcloud">
                                    <a href="#">Túi</a>
                                    <a href="#">Đen</a>
                                    <a href="#">Xanh</a>
                                    <a href="#">Quần áo</a>
                                    <a href="#">Thời trang</a>
                                    <a href="#">Trung tâm</a>
                                    <a href="#">Áo</a>
                                    <a href="#">Giày</a>
                                    <a href="#">Váy</a>
                                    <a href="#">Thể thao</a>
                                    <a href="#">Áo len</a>
                                </div>
                            </div>
                            <!-- Kết thúc .widget -->

                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->

                        <div class="col-lg-3 col-sm-6">
                            <div class="widget widget-newsletter">
                                <h4 class="widget-title">Đăng ký nhận tin</h4>
                                <p>Nhận tất cả thông tin mới nhất về sự kiện, khuyến mãi và ưu đãi. Đăng ký nhận tin
                                    tức:</p>
                                <form action="#" class="mb-0">
                                    <input type="email" class="form-control m-b-3" placeholder="Địa chỉ email"
                                        required>
                                    <input type="submit" class="btn btn-primary shadow-none" value="Đăng ký">
                                </form>
                            </div>
                            <!-- Kết thúc .widget -->
                        </div>
                        <!-- End .col-lg-3 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .footer-middle -->

            <div class="container">
                <div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
                    <div class="container d-flex align-items-center">
                        <div class="footer-left">
                            <span class="footer-copyright">© Porto eCommerce. 2021. All Rights Reserved</span>
                        </div>

                        <div class="footer-right ml-auto">
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
            </div>
            <!-- End .container -->
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
                <ul class="mobile-menu">
                    <li><a href="demo4.html">Home</a></li>
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
                                <a href="login.html">Login</a>
                            </li>
                            <li>
                                <a href="forgot-password.html">Forgot Password</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="blog.html">Blog</a></li>
                    <li>
                        <a href="#">Elements</a>
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
                        <a href="https://1.envato.market/DdLk5" target="_blank">
                            Buy Porto!
                            <span class="tip tip-hot">Hot</span>
                        </a>
                    </li>
                </ul>

                <ul class="mobile-menu">
                    <li><a href="dashboard.html">My Account</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="wishlist.html">My Wishlist</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="login.html" class="login-link">Log In</a></li>
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
            <a href="demo4.html">
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
            <a href="https://www.portotheme.com/html/porto_ecommerce/my-account.html" class="">
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
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('frontend/') }}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('frontend/') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/') }}/assets/js/plugins.min.js"></script>
    <script src="{{ asset('frontend/') }}/assets/js/nouislider.min.js"></script>


    <!-- Main JS File -->
    <script src="{{ asset('frontend/') }}/assets/js/main.min.js"></script>
    <script>
        (function() {
            var js =
                "window['__CF$cv$params']={r:'81d843f3ffbbe6d6',t:'MTY5ODU0OTQ0Ni4xNzYwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/c359bc3d/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
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
    @yield('script')


    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>


    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
</body>


<!-- Mirrored from portotheme.com/html/porto_ecommerce/category-off-canvas.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Oct 2023 03:21:22 GMT -->

</html>
