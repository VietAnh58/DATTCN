<table class="table table-cart">
    <thead>
        <tr>
            <th class="thumbnail-col"></th>
            <th style="width: 200px" class="product-col">Product</th>
            <th class="price-col">Price</th>
            <th class="qty-col">Quantity</th>
            <th class="text-right">Subtotal</th>
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
                            <a href="javascript:" onclick="DeleteListItemCart({{ $item['productInfo']->id }})"
                                class="btn-remove" title="Remove Product"><span>×</span></a>
                        </figure>
                    </td>
                    <td class="product-col">
                        <h5 class="product-title">
                            <a
                                href="{{ route('detail_product', $item['productInfo']->alias) }}">{{ $item['productInfo']->product_name }}</a>
                        </h5>
                    </td>
                    <td>{{ number_format($item['productInfo']->price) }}</td>
                    <td>
                        <div class="product-single-qty">
                            <input class="horizontal-quantity form-control" type="text"
                                value="{{ $item['quantity'] }}">
                        </div>
                    </td>
                    <td class="text-right"><span
                            class="subtotal-price">{{ number_format($item['productInfo']->price * $item['quantity']) }}VND</span>
                    </td>
                </tr>
            @endforeach
        @else
            <h1>khong co san pham</h1>
        @endif
    </tbody>


    <tfoot>
        <tr>
            <td colspan="5" class="clearfix">
                <div class="float-left">
                    <div class="cart-discount">
                        <form action="#">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm" placeholder="Coupon Code"
                                    required>
                                <div class="input-group-append">
                                    <button class="btn btn-sm" type="submit">Apply
                                        Coupon</button>
                                </div>
                            </div><!-- End .input-group -->
                        </form>
                    </div>
                </div><!-- End .float-left -->

                <div class="float-right">
                    <button type="submit" class="btn btn-shop btn-update-cart">
                        Update Cart
                    </button>
                </div><!-- End .float-right -->
            </td>
        </tr>
    </tfoot>
</table>
