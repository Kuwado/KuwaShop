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
                    @php
                        $images = explode('*', $quan->images);
                    @endphp
                    @if ($quan->color === "Đen")
                        <span class="color-dot" onclick="showOtherColor('{{asset($images[0])}}', '{{asset($images[1])}}', this)" style="background-color: {{$quan->color_code}}; border: 1px solid #fafafa"><i class="fa-solid fa-check" style="color: #fafafa"></i></span>
                    @else
                        <span class="color-dot" onclick="showOtherColor('{{asset($images[0])}}', '{{asset($images[1])}}', this)" style="background-color: {{$quan->color_code}}"><i class="fa-solid fa-check"></i></span>
                    @endif
                @endforeach
            </div>

            <div class="favorite" onclick="likeProduct(this)">
                <span><i class="fa-solid fa-heart"></i></span>
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

        <div class="size-menu">
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

            <div class="card-cart-icon" onclick="showSizeMenu(this)">
                <i class="fa-solid fa-cart-shopping"></i>
            </div>
        </div>

    </div>
</div>