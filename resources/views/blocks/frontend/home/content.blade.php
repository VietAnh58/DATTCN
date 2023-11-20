@extends('layouts.frontend.index')


@section('content')

<main class="main home">
    <div class="container mb-2">
        <div class="info-boxes-container row row-joined mb-2 font2">
            <div class="info-box info-box-icon-left col-lg-4">
                <i class="icon-shipping"></i>
            
                <div class="info-box-content">
                    <h4>Miễn phí vận chuyển &amp; Đổi trả</h4>
                    <p class="text-body">Miễn phí vận chuyển cho tất cả đơn hàng trên $99</p>
                </div>
                <!-- End .info-box-content -->
            </div>
            <!-- End .info-box -->
            
            <div class="info-box info-box-icon-left col-lg-4">
                <i class="icon-money"></i>
            
                <div class="info-box-content">
                    <h4>Đảm bảo hoàn tiền</h4>
                    <p class="text-body">Đảm bảo hoàn tiền 100%</p>
                </div>
                <!-- End .info-box-content -->
            </div>
            <!-- End .info-box -->
            
            <div class="info-box info-box-icon-left col-lg-4">
                <i class="icon-support"></i>
            
                <div class="info-box-content">
                    <h4>Hỗ trợ trực tuyến 24/7</h4>
                    <p class="text-body">Lorem ipsum dolor sit amet.</p>
                </div>
                <!-- End .info-box-content -->
            </div>
            
            <!-- End .info-box -->
        </div>

        <div class="row">
            <div class="col-lg-9">
                <div class="home-slider slide-animate owl-carousel owl-theme mb-2" data-owl-options="{
                    'loop': false,
                    'dots': true,
                    'nav': false
                }">
                <div class="home-slide home-slide1 banner banner-md-vw banner-sm-vw d-flex align-items-center">
                    <img class="slide-bg" style="background-color: #2699D0;" src="{{ asset('frontend/')}}/assets/images/demoes/demo1/slider/slide-1.png" width="880" height="428" alt="home-slider">
                    <div class="banner-layer appear-animate" data-animation-name="fadeInUpShorter">
                        <h4 class="text-white mb-0">Tìm Ra Giới Hạn. Tiến Lên!</h4>
                        <h2 class="text-white mb-0">Giảm Giá Mùa Hè</h2>
                        <h3 class="text-white text-uppercase m-b-3">70% Giảm Giá</h3>
                        <h5 class="text-white text-uppercase d-inline-block mb-0 ls-n-20 align-text-bottom">
                            Bắt Đầu Từ <b class="coupon-sale-text bg-secondary text-white d-inline-block">$<em
                                    class="align-text-top">199</em>99</b></h5>
                        <a href="demo1-shop.html" class="btn btn-dark btn-md ls-10">Mua Ngay!</a>
                    </div>
                    <!-- End .banner-layer -->
                </div>
                
                    <!-- End .home-slide -->

                    <div class="home-slide home-slide2 banner banner-md-vw banner-sm-vw d-flex align-items-center">
                        <img class="slide-bg" style="background-color: #dadada;" src="{{ asset('frontend/')}}/assets/images/demoes/demo1/slider/slide-2.jpg" width="880" height="428" alt="home-slider">
                        <div class="banner-layer text-uppercase appear-animate" data-animation-name="fadeInUpShorter">
                            <h4 class="m-b-2">Over 200 products with discounts</h4>
                            <h2 class="m-b-3">Great Deals</h2>
                            <h5 class="d-inline-block mb-0 align-top mr-5 mb-2">Starting At
                                <b>$<em>299</em>99</b>
                            </h5>
                            <a href="demo1-shop.html" class="btn btn-dark btn-md ls-10">Get Yours!</a>
                        </div>
                        <!-- End .banner-layer -->
                    </div>
                    <!-- End .home-slide -->

                    <div class="home-slide home-slide3 banner banner-md-vw banner-sm-vw  d-flex align-items-center">
                        <img class="slide-bg" style="background-color: #e5e4e2;" src="{{ asset('frontend/')}}/assets/images/demoes/demo1/slider/slide-3.jpg" width="880" height="428" alt="home-slider" />
                        <div class="banner-layer text-uppercase appear-animate" data-animation-name="fadeInUpShorter">
                            <h4 class="m-b-2">Up to 70% off</h4>
                            <h2 class="m-b-3">New Arrivals</h2>
                            <h5 class="d-inline-block mb-0 align-top mr-5 mb-2">Starting At
                                <b>$<em>299</em>99</b>
                            </h5>
                            <a href="demo1-shop.html" class="btn btn-dark btn-md ls-10">Get Yours!</a>
                        </div>
                        <!-- End .banner-layer -->
                    </div>
                    <!-- End .home-slide -->
                </div>
                <!-- End .home-slider -->

                <div class="banners-container m-b-2 owl-carousel owl-theme" data-owl-options="{
                    'dots': false,
                    'margin': 20,
                    'loop': false,
                    'responsive': {
                        '480': {
                            'items': 2
                        },
                        '768': {
                            'items': 3
                        }
                    }
                }">
                    <div class="banner banner1 banner-hover-shadow d-flex align-items-center mb-2 w-100 appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="500">
                        <figure class="w-100">
                            <img src="{{ asset('frontend/')}}/assets/images/demoes/demo1/banners/banner-1.jpg" style="background-color: #dadada;" alt="banner">
                        </figure>
                        <div class="banner-layer">
                            <h3 class="m-b-2">Porto Watches</h3>
                            <h4 class="m-b-4 text-primary"><sup class="text-dark"><del>20%</del></sup>30%<sup>OFF</sup></h4>
                            <a href="demo1-shop.html" class="text-dark text-uppercase ls-10">Shop Now</a>
                        </div>
                    </div>
                    <!-- End .banner -->
                    <div class="banner banner2 text-uppercase banner-hover-shadow d-flex align-items-center mb-2 w-100 appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="200">
                        <figure class="w-100">
                            <img src="{{ asset('frontend/')}}/assets/images/demoes/demo1/banners/banner-2.jpg" style="background-color: #dadada;" alt="banner">
                        </figure>
                        <div class="banner-layer text-center">
                            <h3 class="m-b-1 ls-n-20">Deal Promos</h3>
                            <h4 class="text-body">Starting at $99</h4>
                            <a href="demo1-shop.html" class="text-dark text-uppercase ls-10">Shop Now</a>
                        </div>
                    </div>
                    <!-- End .banner -->
                    <div class="banner banner3 banner-hover-shadow d-flex align-items-center mb-2 w-100 appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="500">
                        <figure class="w-100">
                            <img src="{{ asset('frontend/')}}/assets/images/demoes/demo1/banners/banner-3.jpg" style="background-color: #dadada;" alt="banner">
                        </figure>
                        <div class="banner-layer text-right">
                            <h3 class="m-b-2">Handbags</h3>
                            <h4 class="mb-3 text-secondary text-uppercase">Starting at $99</h4>
                            <a href="demo1-shop.html" class="text-dark text-uppercase ls-10">Shop Now</a>
                        </div>
                    </div>
                    <!-- End .banner -->
                </div>

                <h2 class="section-title ls-n-10 m-b-4 appear-animate" data-animation-name="fadeInUpShorter">
                    Sản phẩm nổi bật</h2>

                <div class="products-slider owl-carousel owl-theme dots-top dots-small m-b-1 pb-1 appear-animate" data-animation-name="fadeInUpShorter">
                    @foreach ($featured_products as $item)
                <div class="product-default inner-quickview inner-icon">
                    <figure class="img-effect">
                        <a href="{{ route('detail_product', $item->alias) }}">
                            <img src="{{ asset('storage/images')}}/{{ $item->image }}" width="205" height="205" alt="product">
                            @if (isset($featured_product_images[$item->id]) && count($featured_product_images[$item->id]) > 0)
                                @php
                                $randomImage = $featured_product_images[$item->id]->random();
                                @endphp
                                <img src="{{ asset('storage/images')}}/{{ $randomImage->image }}" width="205" height="205" alt="product">
                            @endif
                           
                        </a>
                        <div class="label-group">
                            @if ($item->is_best_seller == 1)
                            <div class="product-label label-hot">HOT</div>
                            @else
                            @endif
                            @if ($item->sale_price > 0) 
                                {{-- <div class="product-label label-sale">{{ percent($item->sale_price, $item->price) }}</div> --}}
                                <div class="product-label label-sale">{{ round(($item->price-$item->sale_price)*100/$item->price) }}%</div>  
                            @endif
                        </div>
                        <div class="btn-icon-group">
                            <a href="{{ route('detail_product', $item->alias) }}" class="btn-icon btn-add-cart"><i class="fa fa-arrow-right"></i></a>
                        </div>
                        <a href="#" class="btn-quickview" title="Quick View">Thêm vào giỏ hàng</a>
                        <div class="product-countdown-container">
                            <span class="product-countdown-title">offer ends in:</span>
                            <div class="product-countdown countdown-compact" data-until="2021, 10, 5" data-compact="true">
                            </div>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="{{ route('detail_product', $item->alias) }}" class="product-category">{{ $item->category->title }}</a>
                            </div>
                            <a href="wishlist.html" title="Thêm vào danh sách mong muốn" class="btn-icon-wish"><i class="icon-heart"></i></a>
                        </div>
                        <h3 class="product-title"> <a href="{{ route('detail_product', $item->alias) }}">{{ $item->product_name }}</a> </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                        </div>
                        <div class="price-box">
                            @if ($item->sale_price > 0)
                                <span class="product-price">{{number_format($item->sale_price) }}VND</span>
                                <span class="old-price">{{number_format($item->price) }}VND</span>
                            @else
                                <span class="product-price">{{number_format($item->price) }}VND</span>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
                </div>
                <!-- End .featured-proucts -->

                <div class="brands-slider owl-carousel owl-theme images-center appear-animate" data-animation-name="fadeIn" data-animation-duration="700" data-owl-options="{
                    'margin': 0,
                    'responsive': {
                        '768': {
                            'items': 4
                        },
                        '991': {
                            'items': 4
                        },
                        '1200': {
                            'items': 5
                        }
                    }
                }">
                    <img src="{{ asset('frontend/')}}/assets/images/brands/small/brand1.png" width="140" height="60" alt="brand">
                    <img src="{{ asset('frontend/')}}/assets/images/brands/small/brand2.png" width="140" height="60" alt="brand">
                    <img src="{{ asset('frontend/')}}/assets/images/brands/small/brand3.png" width="140" height="60" alt="brand">
                    <img src="{{ asset('frontend/')}}/assets/images/brands/small/brand4.png" width="140" height="60" alt="brand">
                    <img src="{{ asset('frontend/')}}/assets/images/brands/small/brand5.png" width="140" height="60" alt="brand">
                    <img src="{{ asset('frontend/')}}/assets/images/brands/small/brand6.png" width="140" height="60" alt="brand">
                </div>
                <!-- End .brands-slider -->

                <div class="row products-widgets">
                    <div class="col-sm-6 col-md-4 pb-4 pb-md-0 appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="200">
                        <div class="product-column">
                            <h3 class="section-sub-title ls-n-20">Sản phẩm đánh giá cao</h3>

                            @foreach ($top_rate_product as $item)
                            <div class="product-default left-details product-widget ">
                                <figure>
                                    <a href="{{ route('detail_product', $item->alias) }}">
                                        <img src="{{ asset('storage/images')}}/{{ $item->image }}" width="84" height="84" alt="{{ $item->product_name }}">
                                        @if (isset($featured_product_images[$item->id]) && count($featured_product_images[$item->id]) > 0)
                                        @php
                                        $randomImage = $featured_product_images[$item->id]->random();
                                        @endphp
                                        <img src="{{ asset('storage/images')}}/{{ $randomImage->image }}" width="84" height="84" alt="{{ $item->product_name }}">
                                        @endif
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-title"> <a href="{{ route('detail_product', $item->alias) }}">{{ $item->product_name }}</a>
                                    </h3>
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
                                        @if ($item->sale_price > 0)
                                            <span class="product-price">{{number_format($item->sale_price) }}VND</span>
                                            <span class="old-price">{{number_format($item->price) }}VND</span>
                                        @else
                                        <span class="product-price">{{number_format($item->price) }}VND</span>

                                        @endif
                                        
                                        {{-- <span class="product-price">$49.00</span> --}}
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            @endforeach
                        </div>
                        <!-- End .product-column -->
                    </div>
                    <!-- End .col-md-4 -->

                    <div class="col-sm-6 col-md-4 pb-4 pb-md-0 appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="500">
                        <div class="product-column">
                            <h3 class="section-sub-title ls-n-20">Sản phẩm bán chạy nhất</h3>

                            @foreach ($best_seller_products as $item)
                            <div class="product-default left-details product-widget ">
                                <figure>
                                    <a href="{{ route('detail_product', $item->alias) }}">
                                        <img src="{{ asset('storage/images')}}/{{ $item->image }}" width="84" height="84" alt="{{ $item->product_name }}">
                                        @if (isset($featured_product_images[$item->id]) && count($featured_product_images[$item->id]) > 0)
                                        @php
                                        $randomImage = $featured_product_images[$item->id]->random();
                                        @endphp
                                        <img src="{{ asset('storage/images')}}/{{ $randomImage->image }}" width="84" height="84" alt="{{ $item->product_name }}">
                                        @endif
                                        
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-title"> <a href="{{ route('detail_product', $item->alias) }}">{{ $item->product_name }}</a>
                                    </h3>
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
                                        @if ($item->sale_price > 0)
                                            <span class="product-price">{{number_format($item->sale_price) }}VND</span>
                                            <span class="old-price">{{number_format($item->price) }}VND</span>
                                        @else
                                        <span class="product-price">{{number_format($item->price) }}VND</span>

                                        @endif
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            @endforeach
                        </div>
                        <!-- End .product-column -->
                    </div>
                    <!-- End .col-md-4 -->

                    <div class="col-sm-6 col-md-4 pb-4 pb-md-0 appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="800">
                        <div class="product-column">
                            <h3 class="section-sub-title ls-n-20">Latest Products</h3>
                            @foreach ($new_products as $item)
                            <div class="product-default left-details product-widget ">
                                <figure>
                                    <a href="{{ route('detail_product', $item->alias) }}">
                                        <img src="{{ asset('storage/images')}}/{{ $item->image }}" width="84" height="84" alt="{{ $item->product_name }}">
                                        {{-- <img src="{{ asset('frontend/')}}/assets/images/demoes/demo1/products/small/product-9.jpg" width="84" height="84" alt="product">
                                        <img src="{{ asset('frontend/')}}/assets/images/demoes/demo1/products/small/product-9-2.jpg" width="84" height="84" alt="product"> --}}
                                        @if (isset($featured_product_images[$item->id]) && count($featured_product_images[$item->id]) > 0)
                                        @php
                                        $randomImage = $featured_product_images[$item->id]->random();
                                        @endphp
                                        <img src="{{ asset('storage/images')}}/{{ $randomImage->image }}" width="84" height="84" alt="{{ $item->product_name }}">
                                    @endif
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-title"> <a href="{{ route('detail_product', $item->alias) }}">{{ $item->product_name }}</a> </h3>
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
                                        @if ($item->sale_price > 0)
                                            <span class="product-price">{{number_format($item->sale_price) }}VND</span>
                                            <span class="old-price">{{number_format($item->price) }}VND</span>
                                        @else
                                        <span class="product-price">{{number_format($item->price) }}VND</span>

                                        @endif
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            @endforeach
                        </div>
                        <!-- End .product-column -->
                    </div>
                    <!-- End .col-md-4 -->
                </div>
                <!-- End .row -->

                <hr class="mt-1 mb-3 pb-2">

                <div class="feature-boxes-container">
                    <div class="row">
                        <div class="col-md-4 appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="200">
                            <div class="feature-box  feature-box-simple text-center">
                                <i class="icon-earphones-alt"></i>
                                <div class="feature-box-content p-0">
                                    <h3 class="mb-0 pb-1">Hỗ Trợ Khách Hàng</h3>
                                    <h5 class="mb-1 pb-1">Cần Giúp Đỡ?</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                                </div>
                                <!-- End .feature-box-content -->
                            </div>
                            <!-- End .feature-box -->
                        </div>
                        <!-- End .col-md-4 -->
                        
                        <div class="col-md-4 appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="400">
                            <div class="feature-box feature-box-simple text-center">
                                <i class="icon-credit-card"></i>
                                <div class="feature-box-content p-0">
                                    <h3 class="mb-0 pb-1">Thanh Toán An Toàn</h3>
                                    <h5 class="mb-1 pb-1">An Toàn & Nhanh Chóng</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                                </div>
                                <!-- End .feature-box-content -->
                            </div>
                            <!-- End .feature-box -->
                        </div>
                        <!-- End .col-md-4 -->
                        
                        <div class="col-md-4 appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="600">
                            <div class="feature-box feature-box-simple text-center">
                                <i class="icon-action-undo"></i>
                                <div class="feature-box-content p-0">
                                    <h3 class="mb-0 pb-1">Trả Hàng</h3>
                                    <h5 class="mb-1 pb-1">Dễ Dàng & Miễn Phí</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                                </div>
                                <!-- End .feature-box-content -->
                            </div>
                            <!-- End .feature-box -->
                        </div>
                        
                        <!-- End .col-md-4 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .feature-boxes-container -->
            </div>
            <!-- End .col-lg-9 -->

            <div class="sidebar-overlay"></div>
            <div class="sidebar-toggle custom-sidebar-toggle"><i class="fas fa-sliders-h"></i></div>
            @include('blocks.frontend.home.sidebar')
            <!-- End .col-lg-3 -->
        </div>
        <!-- End .row -->
    </div>
    <!-- End .container -->
</main>

@endsection
