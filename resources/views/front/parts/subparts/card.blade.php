@php
    $quan = DB::table('quans')->where('product_id', $product->id)->first();
    $images = explode('*', $quan->images);
@endphp
<div class="card-product">
    <div class="card-image">
        @if (count($images) > 1)
        <img src="{{asset($images[1])}}" class="card-img-top card-img card-img-second">
        @else
        <img src="{{asset($images[0])}}" class="card-img-top card-img card-img-second">
        @endif
        <img src="{{asset($images[0])}}" class="card-img-top card-img card-img-first">
    </div>

    {{--set tag cho card--}}
    @if ($product->hot == 1)
        <div class="card-left-ticket">Hot</div>
    @else
        @if ($product->new == 1)
            <div class="card-left-ticket">New</div>
        @endif
    @endif

    <div class="card-product-body">

        <div class="color-bar">
            <div class="color-dot-container">
                @php
                    $quans = DB::table('quans')->where('product_id', $product->id)->get();
                @endphp
                @foreach ($quans as $quan)
                    @php
                        $images = explode('*', $quan->images);
                        $imagesJson = json_encode($images);
                    @endphp
                    <span class="color-dot" onclick="showOtherColor('{{$imagesJson}}', '{{$product->id}}', '{{$quan->id}}', this)" style="background-color: {{$quan->color_code}}"><i class="fa-solid fa-check"></i></span>
                @endforeach
            </div>

            <div class="favorite" onclick="likeProduct(this)">
                <span><i class="fa-solid fa-heart"></i></span>
            </div>
        </div>

        <div class="card-name-div">
            @php
                $quan = DB::table('quans')->where('product_id', $product->id)->first();
            @endphp
            <a href="/product/detail/{{$product->id}}/{{$quan->id}}" class="card-name">{{$product->name}}</a>
        </div>

        <div class="card-price">
            @if ($product->discount_price == null)
                <div class="discount-price"><span>{{number_format($product->original_price)}}đ</span></div>
            @else
            <div class="discount-price"><span>{{number_format($product->discount_price)}}đ</span></div>
            <div class="original-price"><span>{{number_format($product->original_price)}}đ</span></div>
            <div class="card-right-ticket">{{$product->sale}}</div>
            @endif
        </div>

        <div class="size-menu">
            <form action="/cart/add" method="post" class="size-option">
                <input type="hidden" name="product-detail-quan" value="{{$quan->id}}" class="product-detail-quan">
                <input type="hidden" name="product-detail-size" class="product-detail-input-size">
                <input type="hidden" name="product-detail-quantity" class="product-detail-input-quantity" value="1">
                <div class="row"><button class="btn btn-size" onclick="setSize('s', this)">S</button></div>
                <div class="row"><button class="btn btn-size" onclick="setSize('m', this)">M</button></div>
                <div class="row"><button class="btn btn-size" onclick="setSize('l', this)">L</button></div>
                <div class="row"><button class="btn btn-size" onclick="setSize('xl', this)">XL</button></div>
                <div class="row"><button class="btn btn-size" onclick="setSize('xxl', this)">XXL</button></div>
                @csrf
            </form>
            <div class="card-cart-icon" onclick="showSizeMenu(this)">
                <i class="fa-solid fa-cart-shopping"></i>
            </div>
        </div>

    </div>
</div>