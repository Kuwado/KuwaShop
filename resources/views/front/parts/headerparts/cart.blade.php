@php
    $cart = Session::get('cart', []); // Lấy giỏ hàng từ session, nếu không có sẽ trả về mảng rỗng
    $total = 0;
@endphp

<div id="cart-preview-header">
    <div>
        <h2>Giỏ hàng</h2>
        <p id="cart-preview-number">{{ count($cart) }}</p>
    </div>
    <button onclick="closeCartPreview()"><i class="fa-solid fa-xmark"></i></button>
</div>

<div id="cart-preview-body">
    <div id="cart-preview-content">
        @forelse ($cart as $key => $quantity)
            @php
                list($quanId, $size) = explode('_', $key);
                $quan = DB::table('quans')->where('id', $quanId)->first();
                $product = DB::table('products')->where('id', $quan->product_id)->first();
                $images = explode('*', $quan->images);
                $price = $product->discount_price ?? $product->original_price;
                $price *= $quantity;
                $total += $price;
            @endphp
            <div class="cart-preview-item">
                <img src="{{ asset($images[0]) }}" class="cart-preview-image">
                <div class="cart-preview-detail">
                    <a href="/product/detail/{{ $product->id }}/{{ $quan->id }}" class="cart-preview-name">{{ $product->name }}</a>
                    <div class="d-flex">
                        <p class="cart-preview-color">Màu sắc: <span style="color: {{ $quan->color_code }}">{{ $quan->color }}</span></p>
                        <p class="cart-preview-size">Size: <span>{{ strtoupper($size) }}</span></p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <form class="cart-preview-number" action="/cart/update/{{$key}}" method="POST">
                            <button onclick="decreasePreviewCart(this)" class="minus-btn"><i class="fa-solid fa-minus"></i></button>
                            <input type="number" class="cart-preview-input" name="cart-preview-input" value="{{ $quantity }}">
                            <button onclick="increasePreviewCart(this)" class="plus-btn"><i class="fa-solid fa-plus"></i></button>
                            @csrf
                        </form>
                        <p class="cart-preview-price">{{ number_format($price) }} đ</p>
                    </div>
                </div>
            </div>
        @empty
            <p>Giỏ hàng của bạn trống.</p>
        @endforelse
    </div>

    <div id="cart-preview-footer">
        <p id="cart-preview-total-price"><strong>Tổng tiền:</strong> <span>{{ number_format($total) }} đ</span> </p>
        <a href="#" class="large-btn border-btn dark-blue-btn">Xem giỏ hàng</a>
    </div>
</div>
