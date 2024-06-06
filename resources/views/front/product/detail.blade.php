@extends('front.main')

@section('front-head')
    <link rel="stylesheet" href="{{asset('frontend/asset/css/product.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/asset/css/card.css')}}">
@endsection

@php
    // Lấy ảnh
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
                <div id="product-detail-price-bar">
                    <span id="product-detail-discount-price">{{number_format($product->discount_price)}}đ</span>
                    <span id="product-detail-original-price">{{number_format($product->original_price)}}đ</span>
                    <span id="product-detail-sale-ticket">-{{$product->sale}}</span>
                </div>
                @else
                <span id="product-detail-discount-price">{{number_format($product->original_price)}}đ</span>
                @endif

                <span id="product-detail-color-name">Màu sắc: <span style="color: {{$quan->color_code}}">{{$quan->color}}</span></span>

                <div id="product-detail-color-bar">
                @foreach ($quans as $q)
                    @if ($q == $quan)
                    <span class="product-detail-color-dot active" style="background-color: {{$q->color_code}}"><i class="fa-solid fa-check"></i></span>
                    @else
                    <a href="/product/detail/{{$product->id}}/{{$q->id}}" class="product-detail-color-dot" style="background-color: {{$q->color_code}}"><i class="fa-solid fa-check"></i></a>
                    @endif
                @endforeach
                </div>

                <div id="product-detail-size">
                    <input type="radio" value="{{$quan->s}}" class="btn-check" id="btn-check-size-s" name="size">
                    <label class="choose-size-btn" for="btn-check-size-s" onclick="chooseSize('s', this)">S</label>
                
                    <input type="radio" value="{{$quan->m}}" class="btn-check" id="btn-check-size-m" name="size">
                    <label class="choose-size-btn" for="btn-check-size-m" onclick="chooseSize('m', this)">M</label>
                
                    <input type="radio" value="{{$quan->l}}" class="btn-check" id="btn-check-size-l" name="size" disabled>
                    <label class="choose-size-btn" for="btn-check-size-l" onclick="chooseSize('l', this)">L</label>
                
                    <input type="radio" value="{{$quan->xl}}" class="btn-check" id="btn-check-size-xl" name="size">
                    <label class="choose-size-btn" for="btn-check-size-xl" onclick="chooseSize('xl', this)">XL</label>
                
                    <input type="radio" value="{{$quan->xxl}}" class="btn-check" id="btn-check-size-xxl" name="size">
                    <label class="choose-size-btn" for="btn-check-size-xxl" onclick="chooseSize('xxl', this)">XXL</label>
                </div>
                
                <span id="product-detail-quantity">Còn lại: <span></span></span>

                <div class="size-table">
                   @include('front.parts.subparts.sizetable')
                </div>

                <div id="product-detail-number">
                    <span>Số lượng:</span>
                    <div id="product-detail-number-bar">
                        <button id="product-detail-decrease-btn" onclick="decreaseNumber()"><i class="fa-solid fa-minus"></i></button>
                        <input type="number" id="product-detail-number-input" value="1" min="1" max="10">
                        <button id="product-detail-increase-btn" onclick="increaseNumber()"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>

            </div>

            <div id="product-detail-right-infor">
                <div class="product-infor">
                    <p class="product-infor-btn-bar">
                        <button class="btn product-infor-btn" type="button" data-bs-toggle="collapse"
                            data-bs-target="#product-infor-gt" aria-expanded="false"
                            aria-controls="product-infor-gt">Giới thiệu</button>
                        <button class="btn product-infor-btn" type="button" data-bs-toggle="collapse"
                            data-bs-target="#product-infor-ct" aria-expanded="false"
                            aria-controls="product-infor-ct">Chi tiết sản phẩm</button>
                        <button class="btn product-infor-btn" type="button" data-bs-toggle="collapse"
                            data-bs-target="#product-infor-bq" aria-expanded="false"
                            aria-controls="product-infor-bq">Bảo quản</button>

                    </p>
                    <div class="row">
                        <div class="collapse multi-collapse" id="product-infor-gt">
                            <div class="card card-body">
                                Đây là trang phục được Son Goku mặc để chiến đấu. Áo này sẽ đẹp khi bị Jack, Jack càng nhiều càng đẹp. Đẹp nhất là khi Jack hết. Hí hí
                            </div>
                        </div>

                        <div class="collapse multi-collapse" id="product-infor-ct">
                            <div class="card card-body">
                                <p><b>Dòng sản phẩm:</b> Dragon Ball</p> 
                                <p><b>Nhóm sản phẩm:</b> Áo</p>  
                                <p><b>Cổ áo:</b> Cổ hở</p>  
                                <p><b>Tay áo:</b> Tay ngắn</p>  
                                <p><b>Kiểu dáng:</b> Xuông</p>  
                                <p><b>Độ dài:</b> Trên eo</p>  
                                <p><b>Họa tiết:</b> Trơn</p>   
                                <p><b>Chất liệu:</b> Vải</p>
                                <p><b>Dòng sản phẩm:</b> Dragon Ball</p> 
                                <p><b>Nhóm sản phẩm:</b> Áo</p>  
                                <p><b>Cổ áo:</b> Cổ hở</p>  
                                <p><b>Tay áo:</b> Tay ngắn</p>  
                                <p><b>Kiểu dáng:</b> Xuông</p>  
                                <p><b>Độ dài:</b> Trên eo</p>  
                                <p><b>Họa tiết:</b> Trơn</p>   
                                <p><b>Chất liệu:</b> Vải</p>                                   
                            </div>
                        </div>
                        <div class="collapse multi-collapse" id="product-infor-bq">
                            <div class="card card-body">
                                Thích làm gì thì làm. Hỏng mua cái mới!!!
                            </div>
                        </div>

                    </div>
                   
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