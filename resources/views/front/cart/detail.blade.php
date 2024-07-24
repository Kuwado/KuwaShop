@extends('front.main')

@section('front-head')
    <link rel="stylesheet" href="{{asset('frontend/asset/css/cart.css')}}">
@endsection

@section('front-content')
<section id="cart-detail" class="container">
    <div id="cart-detail-left">
        <div id="cart-status-bar">
            <div id="cart-status-progress">
                <div class="cart-status-progress-item"></div>
                <div class="cart-status-progress-item"></div>
                <div class="cart-status-progress-item"></div>
                <div class="cart-status-progress-item"></div>
                <div class="cart-status-progress-item"></div>
            </div>
            <div id="cart-status">
                <div class="cart-status-item active">
                    <div><i class="fa-solid fa-cart-shopping"></i></div>
                    <span>Giỏ hàng</span>
                </div>
                <div class="cart-status-item">
                    <div><i class="fa-solid fa-cart-plus"></i></div>
                    <span>Đặt hàng</span>
                </div>
                <div class="cart-status-item">
                    <div><i class="fa-solid fa-money-bill"></i></div>
                    <span>Thanh toán</span>
                </div>
                <div class="cart-status-item">
                    <div><i class="fa-solid fa-suitcase"></i></div>
                    <span>Nhận hàng</span>
                </div>
            </div>
        </div>
        @if (count($cart) == 0)
        <h2>Giỏ hàng của bạn hiện tại trống</h2>        
        @else
        <span id="cart-title">Giỏ hàng của bạn hiện tại có <span>{{count($cart)}}</span> sản phẩm</span>        
        <table id="cart-product-list">
            <tr>
                <th>Sản phẩm</th>
                <th>Tên</th>
                <th>Loại</th>
                <th>Số lượng</th>
                <th>Giá tiền</th>
                <th></th>
            </tr>
            @foreach ($cart as $key => $quantity)
                @php
                    list($quanId, $size) = explode('_', $key);
                    $quan = DB::table('quans')->where('id', $quanId)->first();
                    $product = DB::table('products')->where('id', $quan->product_id)->first();
                    $images = explode('*', $quan->images);
                    $price = $product->discount_price ?? $product->original_price;
                    $price *= $quantity;
                    $origin = $product->original_price;
                    $origin *= $quantity;
                    $total_origin += $origin;
                    $total += $price;
                @endphp
                <tr>
                    <td><a href="/product/detail/{{ $product->id }}/{{ $quan->id }}" class=""><img src="{{ asset($images[0]) }}"></a></td>
                    <td><a href="/product/detail/{{ $product->id }}/{{ $quan->id }}" class="cart-product-name">{{ $product->name }}</a></td>
                    <td>
                        <p>Màu sắc: <span style="color: {{ $quan->color_code }}">{{ $quan->color }}</span></p>
                        <p>Size: <span>{{ strtoupper($size) }}</span></p>
                    </td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="cart-preview-number">
                                <button type="button" formaction="/cart/update/{{$key}}" onclick="decreaseProductFromCart(this)" class="minus-btn"><i class="fa-solid fa-minus"></i></button>
                                <input type="number" class="cart-preview-input" name="cart_product[{{$key}}]" value="{{$quantity}}">
                                <button type="button" formaction="/cart/update/{{$key}}" onclick="increaseProductFromCart(this)" class="plus-btn"><i class="fa-solid fa-plus"></i></button>
                            </div>
                        </div>
                    </td>
                    @if ($product->discount_price == null)
                    <td><div class="cart-product-discount-price">{{ number_format($price) }} đ</div></td>
                    @else
                    <td>
                        <div class="cart-product-discount-price">{{ number_format($price) }} đ</div>
                        <div class="cart-product-original-price">{{ number_format($origin) }} đ</div>
                    </td>
                    @endif
                    <td><button type="button" class="cart-product-delete-btn" onclick="deleteProductFromCart('{{$key}}')"><i class="fa-solid fa-trash"></i></a></td>
                </tr>
            @endforeach
        </table>
        @endif

        <div id="cart-back-btn-bar">
            <button id="cart-back-btn" onclick="cartBack()"><i class="fa-solid fa-arrow-left"></i> Tiếp tục mua hàng</button>
        </div>
    </div>
    <div id="cart-detail-right">
        <div id="cart-detail-right-content">
            <table id="cart-total-table">
                <tr>
                    <th colspan="2">Tổng tiền giỏ hàng</th>
                </tr>
                <tr>
                    <td><p>Tổng sản phẩm</p></td>
                    <td><p>{{count($cart)}}</p></td>
                </tr>
                <tr>
                    <td><p>Tổng tiền ban đầu</p></td>
                    <td><p style="opacity: 0.5; text-decoration: line-through;"><span>{{number_format($total_origin)}}</span> đ</p></td>
                </tr>
                <tr>
                    <td><p>Tổng tiền cuối cùng</p></td>
                    <td><p class="cart-right-price" style="font-weight: bold; color: var(--hv-extra)"><span>{{number_format($total)}}</span> đ</p></td>
                </tr>
            </table>
            {{-- <input type="hidden" name="cart-total-price" value="{{$total}}">
            <input type="hidden" name="cart-total-origin" value="{{$total_origin}}">
            <input type="hidden" name="cart-product-number" value="{{count($cart)}}"> --}}
            <button type="button" class="medium-btn border-btn light-blue-btn cart-order-btn" onclick="orderCart('{{count($cart)}}')">Đặt hàng</button>
        </div>
    </div>
</section>
@endsection

@section('front-foot')
    <script src="{{asset('frontend/asset/js/cart.js')}}"></script>
@endsection