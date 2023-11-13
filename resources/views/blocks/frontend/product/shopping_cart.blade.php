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
                        <span class="cart-product-qty">{{ number_format($item['productInfo']->price) }}VND</span> ×
                        {{ $item['quantity'] }}
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
        <span class="cart-total-price float-right">{{ number_format(session()->get('Cart')->getTotalPrice()) }}VND</span>
    </div>
@else
    <input type="hiden" id="total-quantity" value="0">
    <h1>Không có sản phẩm</h1>
@endif
