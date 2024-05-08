<div class="card card-product">
    @php
        $quan = DB::table('quans')->where('product_id', $product->id)->first();
        $images = explode('*', $quan->images);
    @endphp
    <div class="card-image">
        <img src="{{asset($images[1])}}" class="card-img-top card-img card-img-second">
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

    <div class="card-body">

        <div class="color-bar">
            <div class="color-dot-container">
                @php
                    $quans = DB::table('quans')->where('product_id', $product->id)->get();
                @endphp
                @foreach ($quans as $quan)
                    <span class="color-dot" style="background-color: {{$quan->color_code}}"><i class="fa-solid fa-check show"></i></span>
                @endforeach
            </div>

            <div class="favorite">
                <span><i class="fa-solid fa-heart favorite-icon"></i></span>
            </div>
        </div>

        <div class="card-name-div">
            <a href="/product/detail/{{$product->id}}" class="card-name">{{$product->name}}</a>
        </div>

        <div class="card-price">
            @if ($product->discount_price == null)
                <div class="discount-price"><span>{{number_format($product->original_price)}}đ</span></div>
            @else
            <div class="discount-price"><span>{{number_format($product->discount_price)}}đ</span></div>
            <div class="original-price ms-2"><span>{{number_format($product->original_price)}}đ</span></div>
            <div class="card-right-ticket">{{$product->sale}}</div>
            @endif
        </div>

        <div class="cart-menu">
            <div class="size-option">
                <div class="row"><button class="btn btn-size">S</button>
                </div>
                <div class="row"><button class="btn btn-size">M</button>
                </div>
                <div class="row"><button class="btn btn-size">L</button>
                </div>
                <div class="row"><button class="btn btn-size">XL</button>
                </div>
                <div class="row"><button class="btn btn-size">XXL</button>
                </div>
            </div>

            <div class="card-cart-icon">
                <i class="fa-solid fa-cart-shopping"></i>
            </div>
        </div>

    </div>
</div>