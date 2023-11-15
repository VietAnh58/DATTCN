<aside class="sidebar-home col-lg-3 order-lg-first mobile-sidebar">
    <div class="side-menu-wrapper text-uppercase mb-2 d-none d-lg-block">
        <h2 class="side-menu-title bg-gray ls-n-25">Browse Categories</h2>

        <nav class="side-nav">
            <ul class="menu menu-vertical sf-arrows">
                @foreach ($menus as $item)
                    @if ($item->alias == 'trang-chu' && $item->is_active == 1)
                        <li class="active"><a href="{{ route('index') }}"><i class="icon-home"></i>{{ $item->name }}</a>
                        </li>
                    @elseif ($item->alias == 'danh-muc' && $item->is_active == 1)
                        <li>
                            <a href="#" class="sf-with-ul"><i class="sicon-badge"></i>{{ $item->name }}</a>
                            <div class="megamenu megamenu-fixed-width megamenu-3cols">
                                <div class="row">
                                    @foreach ($parentCategory as $parentItem)
                                        {{-- <div class="col-lg-4">
                                            <a href="#" class="nolink pl-0">{{ $parentItem->title }}</a>
                                            <ul class="submenu">
                                                @foreach ($category as $childItem)
                                                    @if ($childItem->parent_id == $parentItem->id)
                                                        <li><a
                                                                href="{{ route('category.' . $parentItem->alias . '.' . $childItem->alias) }}">{{ $childItem->title }}</a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div> --}}
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
                                    @endforeach

                                    {{-- <div class="col-lg-4 p-0">
                                        <div class="menu-banner">
                                            <figure>
                                                <img src="{{ asset('frontend/') }}/assets/images/menu-banner.jpg"
                                                    width="192" height="313" alt="Menu banner">
                                            </figure>
                                            <div class="banner-content">
                                                <h4>
                                                    <span class="">UP TO</span><br />
                                                    <b class="">50%</b>
                                                    <i>OFF</i>
                                                </h4>
                                                <a href="demo1-shop.html" class="btn btn-sm btn-dark">SHOP
                                                    NOW</a>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <!-- End .megamenu -->
                        </li>
                    @elseif ($item->alias == 'san-pham' && $item->is_active == 1)
                        <li>
                            <a href="{{ route('category.index') }}" class="sf-with-ul"><i
                                    class="sicon-basket"></i>{{ $item->name }}</a>
                            <div class="megamenu megamenu-fixed-width">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <a href="#" class="nolink pl-0">PRODUCT PAGES</a>
                                        <ul class="submenu">
                                            <li><a href="product.html">SIMPLE PRODUCT</a></li>
                                            <li><a href="product-variable.html">VARIABLE PRODUCT</a></li>
                                            <li><a href="product.html">SALE PRODUCT</a></li>
                                            <li><a href="product.html">FEATURED & ON SALE</a></li>
                                            <li><a href="product-custom-tab.html">WITH CUSTOM TAB</a></li>
                                            <li><a href="product-sidebar-left.html">WITH LEFT SIDEBAR</a>
                                            </li>
                                            <li><a href="product-sidebar-right.html">WITH RIGHT SIDEBAR</a>
                                            </li>
                                            <li><a href="product-addcart-sticky.html">ADD CART STICKY</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End .col-lg-4 -->

                                    <div class="col-lg-4">
                                        <a href="#" class="nolink pl-0">PRODUCT LAYOUTS</a>
                                        <ul class="submenu">
                                            <li><a href="product-extended-layout.html">EXTENDED LAYOUT</a>
                                            </li>
                                            <li><a href="product-grid-layout.html">GRID IMAGE</a></li>
                                            <li><a href="product-full-width.html">FULL WIDTH LAYOUT</a></li>
                                            <li><a href="product-sticky-info.html">STICKY INFO</a></li>
                                            <li><a href="product-sticky-both.html">LEFT & RIGHT STICKY</a>
                                            </li>
                                            <li><a href="product-transparent-image.html">TRANSPARENT
                                                    IMAGE</a></li>
                                            <li><a href="product-center-vertical.html">CENTER VERTICAL</a>
                                            </li>
                                            <li><a href="#">BUILD YOUR OWN</a></li>
                                        </ul>
                                    </div>
                                    <!-- End .col-lg-4 -->

                                    <div class="col-lg-4 p-0">
                                        <div class="menu-banner menu-banner-2">
                                            <figure>
                                                <img src="{{ asset('frontend/') }}/assets/images/menu-banner-1.jpg"
                                                    alt="Menu banner" class="product-promo">
                                            </figure>
                                            <i>OFF</i>
                                            <div class="banner-content">
                                                <h4>
                                                    <span class="">UP TO</span><br />
                                                    <b class="">50%</b>
                                                </h4>
                                            </div>
                                            <a href="demo1-shop.html" class="btn btn-sm btn-dark">SHOP
                                                NOW</a>
                                        </div>
                                    </div>
                                    <!-- End .col-lg-4 -->
                                </div>
                                <!-- End .row -->
                            </div>
                            <!-- End .megamenu -->
                        </li>
                    @elseif ($item->alias == 'gio-hang' && $item->is_active == 1)
                        <li>
                            <a href="#" class="sf-with-ul"><i class="sicon-envelope"></i>{{ $item->name }}</a>

                            <ul>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="cart.html">Shopping Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="dashboard.html">Dashboard</a></li>
                                <li><a href="demo1-about.html">About Us</a></li>
                                <li><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="single.html">Blog Post</a></li>
                                    </ul>
                                </li>
                                <li><a href="demo1-contact.html">Contact Us</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="forgot-password.html">Forgot Password</a></li>
                            </ul>
                        </li>
                    @elseif ($item->alias == 'tin-tuc' && $item->is_active == 1)
                        <li><a href="blog.html"><i class="sicon-book-open"></i>{{ $item->name }}</a></li>
                    @elseif ($item->alias == 'gioi-thieu' && $item->is_active == 1)
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
                    <em>Sale</em>Many Item
                </h3>

                <h4 class="sale-text text-uppercase"><small>UP
                        TO</small>50<sup>%</sup><sub>off</sub></h4>
                <p>Bags, Clothing, T-Shirts, Shoes, Watches and much more...</p>
                <a href="demo1-shop.html" class="btn btn-dark btn-md">View Sale</a>
            </div>
            <!-- End .banner -->

            <div class="banner banner4">
                <figure>
                    <img src="{{ asset('frontend/') }}/assets/images/demoes/demo1/banners/banner-7.jpg" alt="banner">
                </figure>

                <div class="banner-layer">
                    <div class="coupon-sale-content">
                        <h4>DRONE + CAMERAS</h4>
                        <h5 class="coupon-sale-text text-gray ls-n-10 p-0 font1"><i>UP
                                TO</i><b class="text-white bg-dark font1">$100</b> OFF</h5>
                        <p class="ls-0">Top Brands and Models!</p>
                        <a href="demo1-shop.html" class="btn btn-inline-block btn-dark btn-black ls-0">VIEW
                            SALE</a>
                    </div>
                </div>
            </div>
            <!-- End .banner -->

            <div class="banner banner5">
                <h4>HEADPHONES SALE</h4>

                <figure class="m-b-3">
                    <img src="{{ asset('frontend/') }}/assets/images/demoes/demo1/banners/banner-8.jpg"
                        alt="banner">
                </figure>

                <div class="banner-layer">
                    <div class="coupon-sale-content">
                        <h5 class="coupon-sale-text ls-n-10 p-0 font1"><i>UP
                                TO</i><b class="text-white bg-secondary font1">50%</b> OFF</h5>
                        <a href="demo1-shop.html" class="btn btn-inline-block btn-dark btn-black ls-0">VIEW
                            SALE</a>
                    </div>
                </div>
            </div>
            <!-- End .banner -->
        </div>
        <!-- End .banner-slider -->
    </div>
    <!-- End .widget -->

    <div class="widget widget-newsletters bg-gray text-center">
        <h3 class="widget-title text-uppercase m-b-3">Subscribe Newsletter</h3>
        <p class="mb-2">Get all the latest information on Events, Sales and Offers. </p>
        <form action="#">
            <div class="form-group position-relative sicon-envolope-letter">
                <input type="email" class="form-control" name="newsletter-email" placeholder="Email address">
            </div>
            <!-- Endd .form-group -->
            <input type="submit" class="btn btn-primary btn-md" value="Subscribe">
        </form>
    </div>
    <!-- End .widget -->

    <div class="widget widget-testimonials">
        <div class="owl-carousel owl-theme dots-left dots-small">
            <div class="testimonial">
                <div class="testimonial-owner">
                    <figure>
                        <img src="{{ asset('frontend/') }}/assets/images/clients/client-1.jpg" alt="client">
                    </figure>

                    <div>
                        <h4 class="testimonial-title">john Smith</h4>
                        <span>CEO &amp; Founder</span>
                    </div>
                </div>
                <!-- End .testimonial-owner -->

                <blockquote class="ml-4 pr-0">
                    <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mi.
                    </p>
                </blockquote>
            </div>
            <!-- End .testimonial -->

            <div class="testimonial">
                <div class="testimonial-owner">
                    <figure>
                        <img src="{{ asset('frontend/') }}/assets/images/clients/client-2.jpg" alt="client">
                    </figure>

                    <div>
                        <h4 class="testimonial-title">Dae Smith</h4>
                        <span>CEO &amp; Founder</span>
                    </div>
                </div>
                <!-- End .testimonial-owner -->

                <blockquote class="ml-4 pr-0">
                    <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mi.
                    </p>
                </blockquote>
            </div>
            <!-- End .testimonial -->

            <div class="testimonial">
                <div class="testimonial-owner">
                    <figure>
                        <img src="{{ asset('frontend/') }}/assets/images/clients/client-3.jpg" alt="client">
                    </figure>

                    <div>
                        <h4 class="testimonial-title">John Doe</h4>
                        <span>CEO &amp; Founder</span>
                    </div>
                </div>
                <!-- End .testimonial-owner -->

                <blockquote class="ml-4 pr-0">
                    <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mi.
                    </p>
                </blockquote>
            </div>
            <!-- End .testimonial -->
        </div>
        <!-- End .testimonials-slider -->
    </div>
    <!-- End .widget -->

    <div class="widget widget-posts post-date-in-media media-with-zoom mb-0 mb-lg-2 pb-lg-2">
        <div class="owl-carousel owl-theme dots-left dots-m-0 dots-small"
            data-owl-options="
            { 'margin' : 20,
              'loop': false }">
            <article class="post">
                <div class="post-media">
                    <a href="single.html">
                        <img src="{{ asset('frontend/') }}/assets/images/blog/home/post-1.jpg"
                            data-zoom-image="{{ asset('frontend/') }}/assets/images/blog/home/post-1.jpg"
                            width="280" height="209" alt="Post">
                    </a>
                    <div class="post-date">
                        <span class="day">29</span>
                        <span class="month">Jun</span>
                    </div>
                    <!-- End .post-date -->

                    <span class="prod-full-screen">
                        <i class="fas fa-search"></i>
                    </span>
                </div>
                <!-- End .post-media -->

                <div class="post-body">
                    <h2 class="post-title">
                        <a href="single.html">Post Format Standard</a>
                    </h2>

                    <div class="post-content">
                        <p>Leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                            1960s with... </p>

                        <a href="single.html" class="read-more">read more <i class="icon-right-open"></i></a>
                    </div>
                    <!-- End .post-content -->
                </div>
                <!-- End .post-body -->
            </article>

            <article class="post">
                <div class="post-media">
                    <a href="single.html">
                        <img src="{{ asset('frontend/') }}/assets/images/blog/home/post-2.jpg"
                            data-zoom-image="{{ asset('frontend/') }}/assets/images/blog/home/post-2.jpg"
                            width="280" height="209" alt="Post">
                    </a>
                    <div class="post-date">
                        <span class="day">29</span>
                        <span class="month">Jun</span>
                    </div>
                    <!-- End .post-date -->
                    <span class="prod-full-screen">
                        <i class="fas fa-search"></i>
                    </span>
                </div>
                <!-- End .post-media -->

                <div class="post-body">
                    <h2 class="post-title">
                        <a href="single.html">Fashion Trends</a>
                    </h2>

                    <div class="post-content">
                        <p>Leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                            1960s with... </p>

                        <a href="single.html" class="read-more">read more <i class="icon-right-open"></i></a>
                    </div>
                    <!-- End .post-content -->
                </div>
                <!-- End .post-body -->
            </article>

            <article class="post">
                <div class="post-media">
                    <a href="single.html">
                        <img src="{{ asset('frontend/') }}/assets/images/blog/home/post-3.jpg"
                            data-zoom-image="{{ asset('frontend/') }}/assets/images/blog/home/post-3.jpg"
                            width="280" height="209" alt="Post">
                    </a>
                    <div class="post-date">
                        <span class="day">29</span>
                        <span class="month">Jun</span>
                    </div>
                    <!-- End .post-date -->
                    <span class="prod-full-screen">
                        <i class="fas fa-search"></i>
                    </span>
                </div>
                <!-- End .post-media -->

                <div class="post-body">
                    <h2 class="post-title">
                        <a href="single.html">
                            Post Format Video</a>
                    </h2>

                    <div class="post-content">
                        <p>Leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                            1960s with... </p>

                        <a href="single.html" class="read-more">read more <i class="icon-right-open"></i></a>
                    </div>
                    <!-- End .post-content -->
                </div>
                <!-- End .post-body -->
            </article>
        </div>
        <!-- End .posts-slider -->
    </div>
    <!-- End .widget -->
</aside>
