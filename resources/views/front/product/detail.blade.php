@extends('front.main')

@section('front-head')
    <link rel="stylesheet" href="{{asset('frontend/asset/css/product.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/asset/css/card.css')}}">
@endsection

@php
    // Lấy ảnh
    $quan = DB::table('quans')->where('product_id', $product->id)->first();
    $images = explode('*', $quan->images);
@endphp

@section('front-content')
<section id="product-detail" class="container">

    <nav style="--bs-breadcrumb-divider: '>>';" aria-label="breadcrumb">
        <ol class="breadcrumb bg-bisque">
            <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="category.html">Sản phẩm mới</a></li>
            <li class="breadcrumb-item cl-red" aria-current="page">Ứ Gô Kaooo</li>
        </ol>
    </nav>

    <!--Sản phẩm chính-->
    <div id="product-detail-main">
        <div id="product-detail-main-left">
            <div id="product-detail-img-big">
                <div id="product-detail-img-big-list">
                    @foreach ($images as $link)
                        <img src="{{asset($link)}}" alt="" class="product-detail-img-big-item">
                    @endforeach
                </div>
                <div id="product-detail-img-big-next-btn" onclick="nextImage()"><i class="fa-solid fa-chevron-right"></i></div>
                <div id="product-detail-img-big-prev-btn" onclick="previousImage()"><i class="fa-solid fa-chevron-left"></i></div>
            </div>

            <div id="product-detail-img-small">
                <div id="product-detail-img-small-container">
                    <div id="product-detail-img-small-list">
                        @foreach ($images as $link)
                            <img src="{{asset($link)}}" alt="" class="product-detail-img-small-item">
                        @endforeach
                    </div>
                </div>
                <div id="product-detail-img-small-up-btn" onclick="upImage()"><i class="fa-solid fa-chevron-up"></i></div>
                <div id="product-detail-img-small-down-btn" onclick="downImage()"><i class="fa-solid fa-chevron-down"></i></div>
            </div>
        </div>

        <div id="product-detail-main-right">
            <div id="product-detail-right-content">
                <h2 id="product-detail-name">{{$product->name}}</h2>
                <span id="product-detail-sku">SKU: <span>{{$product->sku}}</span></span>
                @if ($product->sale != "none") 
                <div class="d-flex align-items-center">
                    <span id="product-detail-discount-price">{{number_format($product->discount_price)}}đ</span>
                    <span id="product-detail-original-price">{{number_format($product->original_price)}}đ</span>
                    <span id="product-detail-sale-ticket">-{{$product->sale}}</span>
                </div>
                @else
                <span id="product-detail-discount-price">{{number_format($product->original_price)}}đ</span>
                @endif
                <span id="product-detail-color-name">Màu sắc: <span style="color: {{$quan->color_code}}">{{$quan->color}}</span></span>
                <div id="product-detail-color-bar">
                @php
                    $quans = DB::table('quans')->where('product_id', $product->id)->get();
                @endphp
                @foreach ($quans as $quan)
                    @php
                    $images = explode('*', $quan->images);
                    $imagesJson = json_encode($images);
                    @endphp
                    <span class="color-dot" onclick="showOtherColorProduct('{{$imagesJson}}', '{{$quan->color}}', '{{$quan->color_code}}', this)" style="background-color: {{$quan->color_code}}"><i class="fa-solid fa-check"></i></span>
                @endforeach
                </div>


            </div>
        </div>
    </div>

        <!--Sản phẩm tương tự-->
        <div class="row">
            <h1 class="d-flex justify-content-center mb-4 mt-4">Sản phẩm tương tự</h1>
        </div>

        <div class="row mt-3 mb-5">
            <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                <div class="card product">
                    <img src="../Images/Product/goku_red_2.png" class="card-img-top product-img product-img-second">
                    <img src="../Images/Product/goku_red_1.png" class="card-img-top product-img product-img-first">
                    <div class="ticket">New</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="color-bar">
                                <div class="color-dot-container mb-2 ms-2">
                                    <span class="color-dot bg-red" product-img-first-id="../Images/Product/goku_red_1.png"
                                        product-img-second-id="../Images/Product/goku_red_2.png"><i
                                            class="fa-solid fa-check show"></i></span>
                                    <span class="color-dot bg-yellow"
                                        product-img-first-id="../Images/Product/goku_yellow_1.png"
                                        product-img-second-id="../Images/Product/goku_yellow_2.png"><i
                                            class="fa-solid fa-check"></i></span>
                                    <span class="color-dot bg-blue" product-img-first-id="../Images/Product/goku_blue_1.png"
                                        product-img-second-id="../Images/Product/goku_blue_2.png"><i
                                            class="fa-solid fa-check"></i></span>
                                </div>
                                <div class="favorite">
                                    <i class="fa-solid fa-heart favorite-icon"></i>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <a href="#" class="product-name mb-4">Ứ Gô Kaooo</a>
                        </div>
                        <div class="row">
                            <div class="d-flex align-items-center">
                                <div class="discount-price">999.000đ</div>
                                <div class="original-price ms-2">1.234.000đ</div>
                            </div>
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

                            <div class="product-cart-icon">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                <div class="card product">
                    <img src="../Images/Product/test2.jpg" class="card-img-top product-img product-img-second">
                    <img src="../Images/Product/test.jpg" class="card-img-top product-img product-img-first">
                    <div class="ticket">New</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="color-bar">
                                <div class="color-dot-container mb-2 ms-2">
                                    <span class="color-dot bg-red" product-img-first-id="../Images/Product/test.jpg"
                                        product-img-second-id="../Images/Product/test2.jpg"><i
                                            class="fa-solid fa-check show"></i></span>
                                    <span class="color-dot bg-yellow"
                                        product-img-first-id="../Images/Product/testt.jpg"
                                        product-img-second-id="../Images/Product/testt2.jpg"><i
                                            class="fa-solid fa-check"></i></span>
                                    <span class="color-dot bg-blue" product-img-first-id="../Images/Product/testtt.jpg"
                                        product-img-second-id="../Images/Product/testtt2.jpg"><i
                                            class="fa-solid fa-check"></i></span>
                                </div>
                                <div class="favorite">
                                    <i class="fa-solid fa-heart favorite-icon"></i>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <a href="#" class="product-name mb-4">Áo Vest Kuhaha</a>
                        </div>
                        <div class="row">
                            <div class="d-flex align-items-center">
                                <div class="discount-price">845.000đ</div>
                                <div class="original-price ms-2">1.690.000đ</div>
                            </div>
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

                            <div class="product-cart-icon">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                <div class="card product">
                    <img src="../Images/Product/test2.jpg" class="card-img-top product-img product-img-second">
                    <img src="../Images/Product/test.jpg" class="card-img-top product-img product-img-first">
                    <div class="ticket">New</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="color-bar">
                                <div class="color-dot-container mb-2 ms-2">
                                    <span class="color-dot bg-red" product-img-first-id="../Images/Product/test.jpg"
                                        product-img-second-id="../Images/Product/test2.jpg"><i
                                            class="fa-solid fa-check show"></i></span>
                                    <span class="color-dot bg-yellow"
                                        product-img-first-id="../Images/Product/testt.jpg"
                                        product-img-second-id="../Images/Product/testt2.jpg"><i
                                            class="fa-solid fa-check"></i></span>
                                    <span class="color-dot bg-blue" product-img-first-id="../Images/Product/testtt.jpg"
                                        product-img-second-id="../Images/Product/testtt2.jpg"><i
                                            class="fa-solid fa-check"></i></span>
                                </div>
                                <div class="favorite">
                                    <i class="fa-solid fa-heart favorite-icon"></i>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <a href="#" class="product-name mb-4">Áo Vest Kuhaha</a>
                        </div>
                        <div class="row">
                            <div class="d-flex align-items-center">
                                <div class="discount-price">845.000đ</div>
                                <div class="original-price ms-2">1.690.000đ</div>
                            </div>
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

                            <div class="product-cart-icon">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                <div class="card product">
                    <img src="../Images/Product/test2.jpg" class="card-img-top product-img product-img-second">
                    <img src="../Images/Product/test.jpg" class="card-img-top product-img product-img-first">
                    <div class="ticket">New</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="color-bar">
                                <div class="color-dot-container mb-2 ms-2">
                                    <span class="color-dot bg-red" product-img-first-id="../Images/Product/test.jpg"
                                        product-img-second-id="../Images/Product/test2.jpg"><i
                                            class="fa-solid fa-check show"></i></span>
                                    <span class="color-dot bg-yellow"
                                        product-img-first-id="../Images/Product/testt.jpg"
                                        product-img-second-id="../Images/Product/testt2.jpg"><i
                                            class="fa-solid fa-check"></i></span>
                                    <span class="color-dot bg-blue" product-img-first-id="../Images/Product/testtt.jpg"
                                        product-img-second-id="../Images/Product/testtt2.jpg"><i
                                            class="fa-solid fa-check"></i></span>
                                </div>
                                <div class="favorite">
                                    <i class="fa-solid fa-heart favorite-icon"></i>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <a href="#" class="product-name mb-4">Áo Vest Kuhaha</a>
                        </div>
                        <div class="row">
                            <div class="d-flex align-items-center">
                                <div class="discount-price">845.000đ</div>
                                <div class="original-price ms-2">1.690.000đ</div>
                            </div>
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

                            <div class="product-cart-icon">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    

</section>
@endsection

@section('front-foot')
    <script src="{{asset('frontend/asset/js/product.js')}}"></script>
@endsection