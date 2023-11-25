@extends('layouts.frontend.product_layout')

@section('title')
    Trang sản phẩm
@endsection
@section('content')
    <div class="row">

        @foreach ($quan_short as $item)
            <div class="col-6 col-sm-4 col-md-3">
                <div class="product-default">
                    <figure>
                        <a href="{{ route('detail_product', $item->alias) }}">
                            <img src="{{ asset('storage/images') }}/{{ $item->image }}" width="280" height="280"
                                alt="product" />
                            {{-- <img src="{{ asset('frontend/')}}/assets/images/quan_short/product-2-2.jpg" width="280" height="280" alt="product" /> --}}
                            @if (isset($second_product_images[$item->id]) && count($second_product_images[$item->id]) > 0)
                                @php
                                    $randomImage = $second_product_images[$item->id]->random();
                                @endphp
                                <img src="{{ asset('storage/images') }}/{{ $randomImage->image }}"width="280" height="280"
                                    alt="{{ $item->product_name }}">
                            @endif
                        </a>
                        <div class="label-group">
                            @if ($item->is_best_seller)
                                <div class="product-label label-hot">HOT</div>
                            @endif
                            @if ($item->sale_price > 0)
                                <div class="product-label label-sale">
                                    {{ round((($item->price - $item->sale_price) * 100) / $item->price) }}%</div>
                            @endif

                        </div>
                    </figure>

                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="category.html" class="product-category">{{ $item->category->title }}</a>
                            </div>
                        </div>

                        <h3 class="product-title"> <a
                                href="{{ route('detail_product', $item->id) }}">{{ $item->product_name }}</a>
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
                                <span class="product-price">{{ number_format($item->sale_price) }}VND</span>
                            @else
                                <span class="product-price">{{ number_format($item->price) }}VND</span>
                            @endif
                        </div>
                        <!-- End .price-box -->

                        <div class="product-action">
                            <a href="#" class="btn-icon-wish" title="wishlist"><i class="icon-heart"></i></a>
                            <a onclick="AddCart({{ $item->id }})" href="javascript:" class="btn-icon btn-add-cart"><i
                                    class="fa fa-arrow-right"></i><span>Thêm
                                    vào giỏ hàng</span></a>
                            <a href="" class="btn-quickview" title="Quick View"><i
                                    class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <!-- End .product-details -->
                </div>
            </div>
        @endforeach

    </div>
@endsection

@section('page')
    <!-- Nút trang trước -->
    @if ($quan_short->currentPage() == 1)
        <li class="page-item disabled">
            <a class="page-link page-link-btn" href="#"><i class="fa-solid fa-angle-left"></i></i></a>
        </li>
    @else
        <li class="page-item">
            <a class="page-link page-link-btn" href="{{ $quan_short->previousPageUrl() }}"><i
                    class="fa-solid fa-angle-left"></i></i></a>
        </li>
    @endif

    <!-- Các trang được liệt kê -->
    @for ($i = 1; $i <= $quan_short->lastPage(); $i++)
        <li class="page-item {{ $i == $quan_short->currentPage() ? 'active' : '' }}">
            <a class="page-link" href="{{ $quan_short->url($i) }}">{{ $i }}</a>
        </li>
    @endfor

    <!-- Nút trang tiếp theo -->
    @if ($quan_short->currentPage() == $quan_short->lastPage())
        <li class="page-item disabled">
            <a class="page-link page-link-btn" href="#"><i class="fa-solid fa-angle-right"></i></i></a>
        </li>
    @else
        <li class="page-item">
            <a class="page-link page-link-btn" href="{{ $quan_short->nextPageUrl() }}"><i
                    class="fa-solid fa-angle-right"></i></i></a>
        </li>
    @endif
@endsection
@section('breadcrumb')
<nav aria-label="breadcrumb" class="breadcrumb-nav">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}"><i class="icon-home"></i></a></li>
        <li class="breadcrumb-item"><a href="#">{{ $one_item->category->parentCategory->menu->name }}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $one_item->category->parentCategory->title }}</li>
        <li class="breadcrumb-item active" aria-current="page">{{ $one_item->category->title }}</li>
    </ol>
</nav>
@endsection

@section('script')
    <script>
        function AddCart(id) {
            $.ajax({
                url: '/addCart/' + id,
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