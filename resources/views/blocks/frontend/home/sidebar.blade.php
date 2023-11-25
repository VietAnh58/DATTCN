<aside class="sidebar-home col-lg-3 order-lg-first mobile-sidebar">
    <div class="side-menu-wrapper text-uppercase mb-2 d-none d-lg-block">
        <h2 class="side-menu-title bg-gray ls-n-25">Xem Danh Mục</h2>

        <nav class="side-nav">
            <ul class="menu menu-vertical sf-arrows">
                @foreach ($menus as $item)
                    @if ($item->alias == 'trang-chu' && $item->is_active == 1)
                        <li class="active"><a href="{{ route('index') }}"><i class="icon-home"></i>{{ $item->name }}</a>
                        </li>
                    @elseif ($item->alias == 'nam' && $item->is_active == 1)
                        <li>
                            <a href="#" class="sf-with-ul"><i class="sicon-badge"></i>{{ $item->name }}</a>
                            <div class="megamenu megamenu-fixed-width megamenu-3cols">
                                <div class="row">
                                    @foreach ($parentCategory as $parentItem)
                                        @if ($parentItem->menu_id == 2)
                                            <div class="col-lg-4">
                                                <a href="#" class="nolink pl-0">{{ $parentItem->title }}</a>
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
                            <a href="#" class="sf-with-ul"><i class="sicon-badge"></i>{{ $item->name }}</a>
                            <div class="megamenu megamenu-fixed-width megamenu-3cols">
                                <div class="row">
                                    @foreach ($parentCategory as $parentItem)
                                        @if ($parentItem->menu_id == 3)
                                            <div class="col-lg-4">
                                                <a href="#" class="nolink pl-0">{{ $parentItem->title }}</a>
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
                            <a href="#" class="sf-with-ul"><i class="sicon-envelope"></i>{{ $item->name }}</a>

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
                        <li><a href="blog.html"><i class="sicon-book-open"></i>{{ $item->name }}</a></li>
                    @elseif ($item->alias == 've-porto' && $item->is_active == 1)
                        <li><a href="demo1-about.html"><i class="sicon-users"></i>{{ $item->name }}</a></li>
                    @elseif ($item->alias == 'uu-dai-dac-biet' && $item->is_active == 1)
                        <li><a href="#"><i class="icon-cat-gift"></i>{{ $item->name }}</a></li>
                    @endif
                @endforeach
            </ul>
        </nav>
    </div>
    <!-- End .side-menu-container -->

    <div class="widget widget-banners px-3 pb-3 text-center">
        <div class="owl-carousel owl-theme dots-small">
            <div class="banner d-flex flex-column align-items-center">
                <h3
                    class="badge-sale bg-primary d-flex flex-column align-items-center justify-content-center text-uppercase">
                    <em>Giảm giá</em>Nhiều sản phẩm
                </h3>

                <h4 class="sale-text text-uppercase"><small>ĐẾN</small>50<sup>%</sup><sub>giảm giá</sub></h4>
                <p>Túi, Quần áo, Áo thun, Giày, Đồng hồ và nhiều hơn nữa...</p>
                <a href="demo1-shop.html" class="btn btn-dark btn-md">Xem Ưu đãi</a>
            </div>

            <!-- End .banner -->

            <div class="banner banner4">
                <figure>
                    <img src="{{ asset('frontend/') }}/assets/images/demoes/demo1/banners/banner-7.jpg" alt="banner">
                </figure>

                <div class="banner-layer">
                    <div class="coupon-sale-content">
                        <h4>DRONE + MÁY ẢNH</h4>
                        <h5 class="coupon-sale-text text-gray ls-n-10 p-0 font1"><i>ĐẾN</i><b
                                class="text-white bg-dark font1">$100</b> GIẢM GIÁ</h5>
                        <p class="ls-0">Các Thương hiệu và Mẫu hàng hàng đầu!</p>
                        <a href="demo1-shop.html" class="btn btn-inline-block btn-dark btn-black ls-0">XEM ƯU ĐÃI</a>
                    </div>
                </div>
            </div>

            <div class="banner banner5">
                <h4>ƯU ĐÃI TAI NGHE</h4>

                <figure class="m-b-3">
                    <img src="{{ asset('frontend/') }}/assets/images/demoes/demo1/banners/banner-8.jpg" alt="banner">
                </figure>

                <div class="banner-layer">
                    <div class="coupon-sale-content">
                        <h5 class="coupon-sale-text ls-n-10 p-0 font1"><i>ĐẾN</i><b
                                class="text-white bg-secondary font1">50%</b> GIẢM GIÁ</h5>
                        <a href="demo1-shop.html" class="btn btn-inline-block btn-dark btn-black ls-0">XEM ƯU ĐÃI</a>
                    </div>
                </div>
            </div>

            <!-- End .banner -->
        </div>
        <!-- End .banner-slider -->
    </div>
    <!-- End .widget -->

    <div class="widget widget-newsletters bg-gray text-center">
        <h3 class="widget-title text-uppercase m-b-3">Đăng ký nhận bản tin</h3>
        <p class="mb-2">Nhận thông tin mới nhất về Sự kiện, Khuyến mãi và Ưu đãi.</p>
        <form action="#">
            <div class="form-group position-relative sicon-envolope-letter">
                <input type="email" class="form-control" name="newsletter-email" placeholder="Địa chỉ email">
            </div>
            <!-- Endd .form-group -->
            <input type="submit" class="btn btn-primary btn-md" value="Đăng ký">
        </form>
    </div>

    <!-- End .widget -->

    <div class="widget widget-testimonials">
        <div class="owl-carousel owl-theme dots-left dots-small">
            {{-- <div class="testimonial">
                <div class="testimonial-owner">
                    <figure>
                        <img src="{{ asset('frontend/') }}/assets/images/clients/client-1.jpg" alt="khách hàng">
                    </figure>

                    <div>
                        <h4 class="testimonial-title">John Smith</h4>
                        <span>CEO &amp; Người sáng lập</span>
                    </div>
                </div>
                <!-- Kết thúc .testimonial-owner -->

                <blockquote class="ml-4 pr-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi.</p>
                </blockquote>
            </div> --}}
            <!-- Kết thúc .testimonial -->

            {{-- <div class="testimonial">
                <div class="testimonial-owner">
                    <figure>
                        <img src="{{ asset('frontend/') }}/assets/images/clients/client-2.jpg" alt="khách hàng">
                    </figure>

                    <div>
                        <h4 class="testimonial-title">Dae Smith</h4>
                        <span>CEO &amp; Người sáng lập</span>
                    </div>
                </div>
                <!-- Kết thúc .testimonial-owner -->

                <blockquote class="ml-4 pr-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi.</p>
                </blockquote>
            </div>
            <!-- Kết thúc .testimonial -->

            <div class="testimonial">
                <div class="testimonial-owner">
                    <figure>
                        <img src="{{ asset('frontend/') }}/assets/images/clients/client-3.jpg" alt="khách hàng">
                    </figure>

                    <div>
                        <h4 class="testimonial-title">John Doe</h4>
                        <span>CEO &amp; Người sáng lập</span>
                    </div>
                </div>
                <!-- Kết thúc .testimonial-owner -->

                <blockquote class="ml-4 pr-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi.</p>
                </blockquote>
            </div> --}}
            <!-- Kết thúc .testimonial -->
        </div>
        <!-- Kết thúc .testimonials-slider -->
    </div>

    <!-- End .widget -->

    {{-- <div class="widget widget-posts post-date-in-media media-with-zoom mb-0 mb-lg-2 pb-lg-2">
        <div class="owl-carousel owl-theme dots-left dots-m-0 dots-small"
            data-owl-options="
            { 'margin' : 20,
              'loop': false }">
            <article class="post">
                <div class="post-media">
                    <a href="single.html">
                        <img src="{{ asset('frontend/') }}/assets/images/blog/home/post-1.jpg"
                            data-zoom-image="{{ asset('frontend/') }}/assets/images/blog/home/post-1.jpg"
                            width="280" height="209" alt="Bài viết">
                    </a>
                    <div class="post-date">
                        <span class="day">29</span>
                        <span class="month">Tháng 6</span>
                    </div>
                    <!-- Kết thúc .post-date -->

                    <span class="prod-full-screen">
                        <i class="fas fa-search"></i>
                    </span>
                </div>
                <!-- Kết thúc .post-media -->

                <div class="post-body">
                    <h2 class="post-title">
                        <a href="single.html">Định dạng Bài viết Chuẩn</a>
                    </h2>

                    <div class="post-content">
                        <p>Nhảy vào bố cục điện tử, vẫn không thay đổi. Nó đã trở nên phổ biến từ những năm 1960 với...
                        </p>

                        <a href="single.html" class="read-more">đọc thêm <i class="icon-right-open"></i></a>
                    </div>
                    <!-- Kết thúc .post-content -->
                </div>
                <!-- Kết thúc .post-body -->
            </article>

            <article class="post">
                <div class="post-media">
                    <a href="single.html">
                        <img src="{{ asset('frontend/') }}/assets/images/blog/home/post-2.jpg"
                            data-zoom-image="{{ asset('frontend/') }}/assets/images/blog/home/post-2.jpg"
                            width="280" height="209" alt="Bài viết">
                    </a>
                    <div class="post-date">
                        <span class="day">29</span>
                        <span class="month">Tháng 6</span>
                    </div>
                    <!-- Kết thúc .post-date -->
                    <span class="prod-full-screen">
                        <i class="fas fa-search"></i>
                    </span>
                </div>
                <!-- Kết thúc .post-media -->

                <div class="post-body">
                    <h2 class="post-title">
                        <a href="single.html">Xu hướng Thời trang</a>
                    </h2>

                    <div class="post-content">
                        <p>Nhảy vào bố cục điện tử, vẫn không thay đổi. Nó đã trở nên phổ biến từ những năm 1960 với...
                        </p>

                        <a href="single.html" class="read-more">đọc thêm <i class="icon-right-open"></i></a>
                    </div>
                    <!-- Kết thúc .post-content -->
                </div>
                <!-- Kết thúc .post-body -->
            </article>

            <article class="post">
                <div class="post-media">
                    <a href="single.html">
                        <img src="{{ asset('frontend/') }}/assets/images/blog/home/post-3.jpg"
                            data-zoom-image="{{ asset('frontend/') }}/assets/images/blog/home/post-3.jpg"
                            width="280" height="209" alt="Bài viết">
                    </a>
                    <div class="post-date">
                        <span class="day">29</span>
                        <span class="month">Tháng 6</span>
                    </div>
                    <!-- Kết thúc .post-date -->
                    <span class="prod-full-screen">
                        <i class="fas fa-search"></i>
                    </span>
                </div>
                <!-- Kết thúc .post-media -->

                <div class="post-body">
                    <h2 class="post-title">
                        <a href="single.html">
                            Định dạng Bài viết Video</a>
                    </h2>

                    <div class="post-content">
                        <p>Nhảy vào bố cục điện tử, vẫn không thay đổi. Nó đã trở nên phổ biến từ những năm 1960 với...
                        </p>

                        <a href="single.html" class="read-more">đọc thêm <i class="icon-right-open"></i></a>
                    </div>
                    <!-- Kết thúc .post-content -->
                </div>
                <!-- Kết thúc .post-body -->
            </article>
        </div>
        <!-- Kết thúc .posts-slider -->
    </div> --}}

    <!-- End .widget -->
</aside>
