<table class="table table-cart">
    <thead>
        <tr>
            <th class="thumbnail-col"></th>
            <th style="width: 200px" class="product-col">Sản phẩm</th>
            <th class="price-col">Giá</th>
            <th class="qty-col">Số lượng</th>
            <th class="total-col">Cập nhật</th>
            <th class="text-right">Tổng thanh toán</th>
            <th class="text-right "><a href="javascript:" class="btn-remove"
                    onclick="DeleteAllListItemCart()" title="Remove Product"><span>×</span></a>
            </th>
        </tr>
    </thead>
    <tbody>
        @if (session()->has('Cart') && session()->get('Cart')->totalQuantity > 0)
            @foreach (session()->get('Cart')->products as $item)
                <tr class="product-row">
                    <td>
                        <figure class="product-image-container">
                            <a href="product.html" class="product-image">
                                <img src="{{ asset('storage/images') }}/{{ $item['productInfo']->image }}"
                                    alt="product" width="80" height="80">
                            </a>
                            <a href="javascript:"
                                onclick="DeleteListItemCart({{ $item['productInfo']->id }})"
                                class="btn-remove" title="Remove Product"><span>×</span></a>
                        </figure>
                    </td>
                    <td class="product-col">
                        <h5 class="product-title">
                            <a
                                href="{{ route('detail_product', $item['productInfo']->alias) }}">{{ $item['productInfo']->product_name }}</a>
                        </h5>
                    </td>
                    <td>
                        @if ($item['productInfo']->sale_price > 0)
                            <span
                                class="old-price">{{ number_format($item['productInfo']->price) }}VND</span>
                            <span
                                class="new-price">{{ number_format($item['productInfo']->sale_price) }}VND</span>
                            {{-- {{ number_format($item['productInfo']->sale_price) }}VND --}}
                        @else
                            {{ number_format($item['productInfo']->price) }}VND
                        @endif
                    </td>
                    <td>
                        <div class="product-single-qty">
                            <input class="horizontal-quantity form-control" type="text"
                                data-id="{{ $item['productInfo']->id }}"
                                id="quantity-item-{{ $item['productInfo']->id }}"
                                value="{{ $item['quantity'] }}">
                        </div>
                    </td>
                    <td>
                        <a class="btn btn-sm" href="javascript:"
                            onclick="UpdateListItemCart({{ $item['productInfo']->id }})">Cập
                            nhật</a>
                    </td>
                    <td class = "text-right">
                        @if ($item['productInfo']->sale_price > 0)
                            {{ number_format($item['productInfo']->sale_price * $item['quantity']) }}VND
                        @else
                            {{ number_format($item['productInfo']->price * $item['quantity']) }}VND
                        @endif
                        <span class="subtotal-price">
                        </span>
                    </td>
                </tr>
            @endforeach
        @else
            <table class="table table-cart">
                <tbody>
                    <td rowspan="6">
                        <h1>khong co san pham</h1>
                    </td>

                </tbody>
            </table>
        @endif
    </tbody>

    <tfoot>
        <tr>
            <td colspan="5" class="clearfix">
                <div class="float-left">
                    <div class="cart-discount">
                        <form action="#">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm"
                                    placeholder="Coupon Code" required>
                                <div class="input-group-append">
                                    <button class="btn btn-sm" type="submit">Phiếu giảm
                                        giá</button>
                                </div>
                            </div><!-- End .input-group -->
                        </form>
                    </div>
                </div><!-- End .float-left -->

                <div class="float-right edit-all">
                    <a href="{{ route('cart.index') }}" class="btn btn-shop btn-update-cart">
                        Cập nhật giỏ hàng
                    </a>
                </div><!-- End .float-right -->
            </td>
        </tr>
    </tfoot>
</table>