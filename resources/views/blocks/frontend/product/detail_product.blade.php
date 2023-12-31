@extends('layouts.frontend.product_layout')

@section('content')
    <main class="main">
        <div class="container">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('index')}}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                </ol>
            </nav>
            <div class="product-single-container product-single-default">
                <div class="cart-message d-none">
                    <strong class="single-cart-notice">“{{ $product->product_name }}”</strong>
                    <span>đã được thêm vào giỏ hàng.</span>
                </div>

                <div class="row">
                    <div class="col-lg-5 col-md-6 product-single-gallery">
                        <div class="product-slider-container">
                            <div class="label-group">
                                <div class="label-group">
                                    @if ($product->is_best_seller)
                                        <div class="product-label label-hot">HOT</div>
                                    @endif
                                    @if ($product->sale_price > 0)
                                        <div class="product-label label-sale">
                                            {{ round((($product->price - $product->sale_price) * 100) / $product->price) }}%
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                                <div class="product-item">
                                    <img class="product-single-image" src="{{ asset('storage/images/' . $product->image) }}"
                                        data-zoom-image="{{ asset('storage/images/' . $product->image) }}"
                                        alt="Mô tả hình ảnh sản phẩm" style="max-width: 100%;">
                                </div>
                                @foreach ($productImages as $item)
                                    <div class="product-item">
                                        <img class="product-single-image" width="468" height="468"
                                            src="{{ asset('storage/images') }}/{{ $item->image }}"
                                            data-zoom-image="{{ asset('storage/images') }}/{{ $item->image }}"
                                            alt="{{ $product->product_name }}" style="padding-top: 0px;">
                                    </div>
                                @endforeach
                            </div>
                            <!-- End .product-single-carousel -->
                            <span class="prod-full-screen">
                                <i class="icon-plus"></i>
                            </span>
                        </div>

                        <div class="prod-thumbnail owl-dots">
                            <div class="owl-dot">
                                {{-- <img src="{{ asset('frontend/')}}/assets/images/products/zoom/product-1.jpg" width="110" height="110" alt="product-thumbnail" /> --}}
                                <img alt="product" width="110" height="110"
                                    src="{{ asset('storage/images') }}/{{ $product->image }}"
                                    alt="{{ $product->product_name }}" style="padding-top: 0px;">
                            </div>
                            @foreach ($productImages as $item)
                                <div class="owl-dot">
                                    <img src="{{ asset('storage/images') }}/{{ $item->image }}" width="110"
                                        height="110" alt="product-thumbnail" />
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- End .product-single-gallery -->

                    <div class="col-lg-7 col-md-6 product-single-details">
                        <h1 class="product-title">{{ $product->product_name }}</h1>

                        <div class="product-nav">
                            <div class="product-prev">
                                <a href="#">
                                    <span class="product-link"></span>

                                    <span class="product-popup">
                                        <span class="box-content">
                                            <img alt="product" width="150" height="150"
                                                src="{{ asset('storage/images') }}/{{ $product->image }}"
                                                alt="{{ $product->product_name }}" style="padding-top: 0px;">

                                            <span>Circled Ultimate 3D Speaker</span>
                                        </span>
                                    </span>
                                </a>
                            </div>

                            <div class="product-next">
                                <a href="#">
                                    <span class="product-link"></span>

                                    <span class="product-popup">
                                        <span class="box-content">
                                            <img alt="product" width="150" height="150"
                                                src="{{ asset('frontend/') }}/assets/images/products/product-4.jpg"
                                                style="padding-top: 0px;">

                                            <span>Blue Backpack for the Young</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:60%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->

                            <a href="#" class="rating-link">( 11 Reviews )</a>
                        </div>
                        <!-- End .ratings-container -->

                        <hr class="short-divider">

                        <div class="price-box">
                            @if ($product->sale_price > 0)
                                <span class="old-price">{{ number_format($product->price) }}VND</span>
                                <span class="new-price">{{ number_format($product->sale_price) }}VND</span>
                            @else
                                <span class="new-price">{{ number_format($product->price) }}VND</span>
                            @endif

                        </div>
                        <!-- End .price-box -->

                        <div class="product-desc">
                            <p>
                                {{-- {!! $product->description !!} --}}
                                giới thiệu sản phẩm
                            </p>
                        </div>
                        <!-- End .product-desc -->

                        <ul class="single-info-list">
                            <!---->
                            <li>
                                SKU:
                                <strong>654613612</strong>
                            </li>

                            <li>
                                TAGs:
                                <strong><a href="#" class="product-category">CLOTHES</a></strong>,
                                <strong><a href="#" class="product-category">SWEATER</a></strong>
                            </li>
                        </ul>

                        <div class="product-filters-container">
                            <div class="product-single-filter"><label class="font2">Color:</label>
                                <ul class="config-size-list config-color-list config-filter-list">
                                    <li class="">
                                        <a href="javascript:;" class="filter-color border-0"
                                            style="background-color: rgb(1, 136, 204);"></a>
                                    </li>
                                    <li class="">
                                        <a href="javascript:;" class="filter-color border-0 initial disabled"
                                            style="background-color: rgb(221, 181, 119);"></a>
                                    </li>
                                    <li class="">
                                        <a href="javascript:;" class="filter-color border-0"
                                            style="background-color: rgb(96, 133, 165);"></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-single-filter">
                                <label class="font2">Size:</label>
                                <ul class="config-size-list">
                                    <li class=""><a href="javascript:;"
                                            class="d-flex align-items-center justify-content-center">L</a></li>
                                    <li class=""><a href="javascript:;"
                                            class="d-flex align-items-center justify-content-center">M</a></li>
                                    <li class=""><a href="javascript:;"
                                            class="d-flex align-items-center justify-content-center">S</a></li>
                                </ul>
                            </div>

                            <div class="product-single-filter">
                                <label></label>
                                <a class="font1 text-uppercase clear-btn" href="#">Clear</a>
                            </div>
                            <!---->
                        </div>

                        <div class="product-action">
                            <input type="hidden" id="id" name="productId" value="{{ $product->id }}" />
                            <input type="hidden" name="product_name" value="{{ $product->product_name }}" />
                            <input type="hidden" name="alias" value="{{ $product->alias }}" />
                            <div class="price-box product-filtered-price">
                                @if ($product->sale_price > 0)
                                    <del class="old-price">{{ number_format($product->price) }}VND</del>
                                    <span class="product-price">{{ number_format($product->sale_price) }}VND</span>
                                @else
                                    <span class="product-price">{{ number_format($product->price) }}VND</span>
                                @endif
                            </div>

                            <div class="product-single-qty">
                                <input class="horizontal-quantity form-control" id="quantityInput" name="quantity"
                                    type="text" value="1">
                            </div>

                            <a href="javascript:" onclick="AddCartWithQuantity({{ $product->id }})"
                                class="btn btn-dark  mr-2">Thêm vào giỏ hàng</a>

                            {{-- </form> --}}
                            <a href="cart.html" class="btn btn-gray view-cart d-none">View cart</a>
                        </div>
                        <!-- End .product-action -->

                        <hr class="divider mb-0 mt-0">

                        <div class="product-single-share mb-2">
                            <label class="sr-only">Share:</label>

                            <div class="social-icons mr-2">
                                <a href="#" class="social-icon social-facebook icon-facebook" target="_blank"
                                    title="Facebook"></a>
                                <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"
                                    title="Twitter"></a>
                                <a href="#" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank"
                                    title="Linkedin"></a>
                                <a href="#" class="social-icon social-gplus fab fa-google-plus-g" target="_blank"
                                    title="Google +"></a>
                                <a href="#" class="social-icon social-mail icon-mail-alt" target="_blank"
                                    title="Mail"></a>
                            </div>
                            <!-- End .social-icons -->

                            <a href="wishlist.html" class="btn-icon-wish add-wishlist"
                                title="Thêm vào danh sách mong muốn"><i class="icon-wishlist-2"></i><span>Add to
                                    Wishlist</span></a>
                        </div>
                        <!-- End .product single-share -->
                    </div>
                    <!-- End .product-single-details -->
                </div>
                <!-- End .row -->
            </div>
            <!-- End .product-single-container -->

            <div class="product-single-tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content"
                            role="tab" aria-controls="product-desc-content" aria-selected="true">Description</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="product-tab-size" data-toggle="tab" href="#product-size-content"
                            role="tab" aria-controls="product-size-content" aria-selected="true">Size Guide</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="product-tab-tags" data-toggle="tab" href="#product-tags-content"
                            role="tab" aria-controls="product-tags-content" aria-selected="false">Additional
                            Information</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="product-tab-reviews" data-toggle="tab" href="#product-reviews-content"
                            role="tab" aria-controls="product-reviews-content" aria-selected="false">Reviews (1)</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel"
                        aria-labelledby="product-tab-desc">
                        <div class="product-desc-content">
                            {!! $product->description !!}

                        </div>
                        <!-- End .product-desc-content -->
                    </div>
                    <!-- End .tab-pane -->

                    <div class="tab-pane fade" id="product-size-content" role="tabpanel"
                        aria-labelledby="product-tab-size">
                        <div class="product-size-content">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ asset('frontend/') }}/assets/images/products/single/body-shape.png"
                                        alt="body shape" width="217" height="398">
                                </div>
                                <!-- End .col-md-4 -->

                                <div class="col-md-8">
                                    <table class="table table-size">
                                        <thead>
                                            <tr>
                                                <th>SIZE</th>
                                                <th>CHEST (in.)</th>
                                                <th>WAIST (in.)</th>
                                                <th>HIPS (in.)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>XS</td>
                                                <td>34-36</td>
                                                <td>27-29</td>
                                                <td>34.5-36.5</td>
                                            </tr>
                                            <tr>
                                                <td>S</td>
                                                <td>36-38</td>
                                                <td>29-31</td>
                                                <td>36.5-38.5</td>
                                            </tr>
                                            <tr>
                                                <td>M</td>
                                                <td>38-40</td>
                                                <td>31-33</td>
                                                <td>38.5-40.5</td>
                                            </tr>
                                            <tr>
                                                <td>L</td>
                                                <td>40-42</td>
                                                <td>33-36</td>
                                                <td>40.5-43.5</td>
                                            </tr>
                                            <tr>
                                                <td>XL</td>
                                                <td>42-45</td>
                                                <td>36-40</td>
                                                <td>43.5-47.5</td>
                                            </tr>
                                            <tr>
                                                <td>XLL</td>
                                                <td>45-48</td>
                                                <td>40-44</td>
                                                <td>47.5-51.5</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- End .row -->
                        </div>
                        <!-- End .product-size-content -->
                    </div>
                    <!-- End .tab-pane -->

                    <div class="tab-pane fade" id="product-tags-content" role="tabpanel"
                        aria-labelledby="product-tab-tags">
                        <table class="table table-striped mt-2">
                            <tbody>
                                <tr>
                                    <th>Weight</th>
                                    <td>23 kg</td>
                                </tr>

                                <tr>
                                    <th>Dimensions</th>
                                    <td>12 × 24 × 35 cm</td>
                                </tr>

                                <tr>
                                    <th>Color</th>
                                    <td>Black, Green, Indigo</td>
                                </tr>

                                <tr>
                                    <th>Size</th>
                                    <td>Large, Medium, Small</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- End .tab-pane -->

                    <div class="tab-pane fade" id="product-reviews-content" role="tabpanel"
                        aria-labelledby="product-tab-reviews">
                        <div class="product-reviews-content">
                            <h3 class="reviews-title">1 review for Men Black Sports Shoes</h3>

                            <div class="comment-list">
                                <div class="comments">
                                    <figure class="img-thumbnail">
                                        <img src="{{ asset('frontend/') }}/assets/images/blog/author.jpg" alt="author"
                                            width="80" height="80">
                                    </figure>

                                    <div class="comment-block">
                                        <div class="comment-header">
                                            <div class="comment-arrow"></div>

                                            <div class="ratings-container float-sm-right">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:60%"></span>
                                                    <!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <!-- End .product-ratings -->
                                            </div>

                                            <span class="comment-by">
                                                <strong>Joe Doe</strong> – April 12, 2018
                                            </span>
                                        </div>

                                        <div class="comment-content">
                                            <p>Excellent.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="divider"></div>

                            <div class="add-product-review">
                                <h3 class="review-title">Add a review</h3>

                                <form action="#" class="comment-form m-0">
                                    <div class="rating-form">
                                        <label for="rating">Your rating <span class="required">*</span></label>
                                        <span class="rating-stars">
                                            <a class="star-1" href="#">1</a>
                                            <a class="star-2" href="#">2</a>
                                            <a class="star-3" href="#">3</a>
                                            <a class="star-4" href="#">4</a>
                                            <a class="star-5" href="#">5</a>
                                        </span>

                                        <select name="rating" id="rating" required="" style="display: none;">
                                            <option value="">Rate…</option>
                                            <option value="5">Perfect</option>
                                            <option value="4">Good</option>
                                            <option value="3">Average</option>
                                            <option value="2">Not that bad</option>
                                            <option value="1">Very poor</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Your review <span class="required">*</span></label>
                                        <textarea cols="5" rows="6" class="form-control form-control-sm"></textarea>
                                    </div>
                                    <!-- End .form-group -->


                                    <div class="row">
                                        <div class="col-md-6 col-xl-12">
                                            <div class="form-group">
                                                <label>Name <span class="required">*</span></label>
                                                <input type="text" class="form-control form-control-sm" required>
                                            </div>
                                            <!-- End .form-group -->
                                        </div>

                                        <div class="col-md-6 col-xl-12">
                                            <div class="form-group">
                                                <label>Email <span class="required">*</span></label>
                                                <input type="text" class="form-control form-control-sm" required>
                                            </div>
                                            <!-- End .form-group -->
                                        </div>

                                        <div class="col-md-12">
                                            <div class=" custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="save-name" />
                                                <label class="custom-control-label mb-0" for="save-name">Save my
                                                    name, email, and website in this browser for the next time I
                                                    comment.</label>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="submit" class="btn btn-primary" value="Submit">
                                </form>
                            </div>
                            <!-- End .add-product-review -->
                        </div>
                        <!-- End .product-reviews-content -->
                    </div>
                    <!-- End .tab-pane -->
                </div>
                <!-- End .tab-content -->
            </div>
            <!-- End .product-single-tabs -->

            <div class="products-section pt-0">
                <h2 class="section-title">Sản phẩm liên quan</h2>

                <div class="products-slider 5col owl-carousel owl-theme dots-top dots-small">
                    @foreach ($relatedProducts as $item)
                        <div class="product-default inner-quickview inner-icon">
                            <figure class="img-effect">
                                <a href="{{ route('detail_product', $item->alias) }}">
                                    <img width="205" height="205"
                                        src="{{ asset('storage/images') }}/{{ $item->image }}"
                                        alt="{{ $item->product_name }}">
                                    @if (isset($second_product_images[$item->id]) && count($second_product_images[$item->id]) > 0)
                                        @php
                                            $randomImage = $second_product_images[$item->id]->random();
                                        @endphp
                                        <img src="{{ asset('storage/images') }}/{{ $randomImage->image }}"
                                            width="84" height="84" alt="{{ $item->product_name }}">
                                    @endif

                                </a>
                                <div class="label-group">
                                    @if ($item->is_best_seller)
                                        <div class="product-label label-hot">HOT</div>
                                    @endif
                                    @if ($item->sale_price > 0)
                                        <div class="product-label label-sale">-{{ round((($item->price - $item->sale_price) * 100) / $item->price) }}%</div>
                                        
                                    @endif
                                </div>
                                <div class="btn-icon-group">
                                    <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                            class="icon-shopping-cart"></i></a>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                    View</a>

                                <div class="product-countdown-container">
                                    <span class="product-countdown-title">offer ends in:</span>
                                    <div class="product-countdown countdown-compact" data-until="2021, 10, 5"
                                        data-compact="true">
                                    </div>
                                    <!-- End .product-countdown -->
                                </div>
                                <!-- End .product-countdown-container -->
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="demo1-shop.html"
                                            class="product-category">{{ $item->category->title }}</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                            class="icon-heart"></i></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="{{ route('detail_product', $item->alias) }}">{{ $item->product_name }}</a>
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
                                        <span class="old-price">{{ number_format($item->price) }}VND</span>
                                        <span class="new-price">{{ number_format($item->sale_price) }}VND</span>
                                    @else
                                        <span class="new-price">{{ number_format($item->price) }}VND</span>
                                    @endif

                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                    @endforeach

                </div>
                <!-- End .products-slider -->
            </div>
            <!-- End .products-section -->

            <hr class="mt-0 m-b-5" />

            <div class="product-widgets-container row pb-2">
                <div class="col-lg-3 col-sm-6 pb-5 pb-md-0">
                    <h4 class="section-sub-title">Sản phẩm nổi bật</h4>
                    @foreach ($featured_products as $item)
                        <div class="product-default left-details product-widget ">
                            <figure>
                                <a href="{{ route('detail_product', $item->alias) }}">
                                    <img src="{{ asset('storage/images') }}/{{ $item->image }}" width="84"
                                        height="84" alt="{{ $item->product_name }}">
                                    @if (isset($second_product_images[$item->id]) && count($second_product_images[$item->id]) > 0)
                                        @php
                                            $randomImage = $second_product_images[$item->id]->random();
                                        @endphp
                                        <img src="{{ asset('storage/images') }}/{{ $randomImage->image }}"
                                            width="84" height="84" alt="{{ $item->product_name }}">
                                    @endif
                                </a>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-title"> <a
                                        href="{{ route('detail_product', $item->alias) }}">{{ $item->product_name }}</a>
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
                                        <span class="old-price">{{ number_format($item->price) }}VND</span>
                                        <span class="new-price">{{ number_format($item->sale_price) }}VND</span>
                                    @else
                                        <span class="new-price">{{ number_format($item->price) }}VND</span>
                                    @endif
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                    @endforeach
                </div>

                <div class="col-lg-3 col-sm-6 pb-5 pb-md-0">
                    <h4 class="section-sub-title">Sản phẩm bán chạy</h4>
                    @foreach ($best_seller_products as $item)
                        <div class="product-default left-details product-widget ">
                            <figure>
                                <a href="{{ route('detail_product', $item->alias) }}">
                                    <img src="{{ asset('storage/images') }}/{{ $item->image }}" width="84"
                                        height="84" alt="{{ $item->product_name }}">
                                    @if (isset($second_product_images[$item->id]) && count($second_product_images[$item->id]) > 0)
                                        @php
                                            $randomImage = $second_product_images[$item->id]->random();
                                        @endphp
                                        <img src="{{ asset('storage/images') }}/{{ $randomImage->image }}"
                                            width="84" height="84" alt="{{ $item->product_name }}">
                                    @endif
                                </a>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-title"> <a
                                        href="{{ route('detail_product', $item->alias) }}">{{ $item->product_name }}</a>
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
                                        <span class="old-price">{{ number_format($item->price) }}VND</span>
                                        <span class="new-price">{{ number_format($item->sale_price) }}VND</span>
                                    @else
                                        <span class="new-price">{{ number_format($item->price) }}VND</span>
                                    @endif
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                    @endforeach
                </div>

                <div class="col-lg-3 col-sm-6 pb-5 pb-md-0">
                    <h4 class="section-sub-title">SẢN PHẨM MỚI NHẤT</h4>
                    @foreach ($new_products as $item)
                        <div class="product-default left-details product-widget ">
                            <figure>
                                <a href="{{ route('detail_product', $item->alias) }}">
                                    <img src="{{ asset('storage/images') }}/{{ $item->image }}" width="84"
                                        height="84" alt="{{ $item->product_name }}">
                                    @if (isset($second_product_images[$item->id]) && count($second_product_images[$item->id]) > 0)
                                        @php
                                            $randomImage = $second_product_images[$item->id]->random();
                                        @endphp
                                        <img src="{{ asset('storage/images') }}/{{ $randomImage->image }}"
                                            width="84" height="84" alt="{{ $item->product_name }}">
                                    @endif
                                </a>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-title"> <a
                                        href="{{ route('detail_product', $item->alias) }}">{{ $item->product_name }}</a>
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
                                        <span class="old-price">{{ number_format($item->price) }}VND</span>
                                        <span class="new-price">{{ number_format($item->sale_price) }}VND</span>
                                    @else
                                        <span class="new-price">{{ number_format($item->price) }}VND</span>
                                    @endif
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                    @endforeach
                </div>

                <div class="col-lg-3 col-sm-6 pb-5 pb-md-0">
                    <h4 class="section-sub-title">SẢN PHẨM ĐƯỢC ĐÁNH GIÁ CAO</h4>
                    @foreach ($new_products as $item)
                        <div class="product-default left-details product-widget ">
                            <figure>
                                <a href="{{ route('detail_product', $item->alias) }}">
                                    <img src="{{ asset('storage/images') }}/{{ $item->image }}" width="74"
                                        height="74" alt="{{ $item->product_name }}">
                                    @if (isset($second_product_images[$item->id]) && count($second_product_images[$item->id]) > 0)
                                        @php
                                            $randomImage = $second_product_images[$item->id]->random();
                                        @endphp
                                        <img src="{{ asset('storage/images') }}/{{ $randomImage->image }}"
                                            width="84" height="84" alt="{{ $item->product_name }}">
                                    @endif

                                </a>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-title"> <a
                                        href="{{ route('detail_product', $item->alias) }}">{{ $item->product_name }}</a>
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
                                        <span class="old-price">{{ number_format($item->price) }}VND</span>
                                        <span class="new-price">{{ number_format($item->sale_price) }}VND</span>
                                    @else
                                        <span class="new-price">{{ number_format($item->price) }}VND</span>
                                    @endif
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                    @endforeach
                    {{-- <div class="product-default left-details product-widget">
                    <figure>
                        <a href="{{ route('detail_product', $item->alias) }}">
                            <img src="{{ asset('frontend/')}}/assets/images/products/small/product-10.jpg" width="74" height="74" alt="product">
                            <img src="{{ asset('frontend/')}}/assets/images/products/small/product-10-2.jpg" width="74" height="74" alt="product">
                        </a>
                    </figure>

                    <div class="product-details">
                        <h3 class="product-title"> <a href="{{ route('detail_product', $item->alias) }}">Basketball Sports Blue Shoes</a>
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
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div> --}}

                </div>
            </div>
            <!-- End .row -->
        </div>
        <!-- End .container -->
    </main>
@endsection

@section('script')
    <script>
        function AddCartWithQuantity(id) {
            var quantity = parseFloat(document.getElementById('quantityInput').value);
            $.ajax({
                url: '/addCartWithQuantity/' + id + '/' + quantity,
                type: "GET",
            }).done(function(response) {
                RenderCart(response);

                alertify.success('Thêm sản phẩm vào giỏ hàng thành công.');

            }).fail(function(jqXHR, textStatus, errorThrown) {
                alertify.error('Có lỗi xảy ra khi thêm sản phẩm vào giỏ hàng.');
            });
        }

        $("#change-item-cart").on("click", ".btn-remove", function() {
            var productId = $(this).data("id");
            console.log(productId);
            $.ajax({
                url: '/deleteCart/' + productId,
                type: "GET",
            }).done(function(response) {
                RenderCart(response);

                alertify.success('Xóa sản phẩm thành công.');
            }).fail(function(jqXHR, textStatus, errorThrown) {
                alertify.error('Có lỗi xảy ra khi xóa sản phẩm.');
            });
        });

        function RenderCart(response) {
            $("#change-item-cart").empty();
            $("#change-item-cart").html(response);
            $("#total-quantity-show").text($("#total-quantity").val());
            $("#total-quantity-show1").text($("#total-quantity").val());
            // console.log($("#total-quantity").val());
        }
    </script>
@endsection
