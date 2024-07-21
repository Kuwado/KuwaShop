@extends('front.main')

@section('front-head')
    <link rel="stylesheet" href="{{asset('frontend/asset/css/product.detail.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/asset/css/card.css')}}">
@endsection

@php
    // Lấy ảnh
    $images = explode('*', $quan->images);
@endphp

@section('front-content')
<section id="product-detail">
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

        <div id="product-detail-main-right" class="hidden">
            <div id="product-detail-right-container">
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

                    <span id="product-detail-type"><strong>Loại sản phẩm:</strong> {{$product->type}}</span>
    
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

                    <div id="product-detail-action-button">
                        <form action="/cart/preview/add" method="post">
                            <input type="hidden" name="product-detail-quan" value="{{$quan->id}}">
                            <input type="hidden" name="product-detail-size" id="product-detail-input-size">
                            <input type="hidden" name="product-detail-quantity" id="product-detail-input-quantity" value="1">
                            <button type="button" class="medium-btn border-btn dark-blue-btn" onclick="addToCart(this)">Thêm vào giỏ hàng</button>
                            @csrf
                        </form>
                        <button class="medium-btn border-btn light-blue-btn" id="product-detail-buy-btn">Mua hàng</button>
                        <button id="product-detail-like-btn" onclick="like()"><i class="fa-solid fa-heart"></i></button>
                    </div>
    
                </div>
    
                <div id="product-detail-right-infor">
                    <div id="product-infor-btn-bar">
                        <button class="product-detail-infor-btn active" type="button" onclick="showInfor(this)" data-bs-target="#product-infor-gt">Giới thiệu</button>
                        <button class="product-detail-infor-btn" type="button" onclick="showInfor(this)" data-bs-target="#product-infor-ct">Chi tiết sản phẩm</button>
                        <button class="product-detail-infor-btn" type="button" onclick="showInfor(this)" data-bs-target="#product-infor-bq">Bảo quản</button>
                    </div>
    
                    <div id="product-detail-collapse-list">
                        <div class="product-detail-collapse active" id="product-infor-gt">
                            <div class="product-detail-collapse-content">{!!$product->intro!!}</div>
                        </div>
                        <div class="product-detail-collapse" id="product-infor-ct">
                            <div class="product-detail-collapse-content">{!!$product->detail!!}</div>
                        </div>
                        <div class="product-detail-collapse" id="product-infor-bq">
                            <div class="product-detail-collapse-content">{!!$product->preserve!!}</div>
                        </div>
                    </div>
                </div>
    
                <div id="product-detail-right-more-btn-bar">
                    <div id="product-detail-right-straight">
                        <button id="product-detail-right-more-btn" onclick="moreInfor()"><i class="fa-solid fa-chevron-down"></i></button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="collection">
        <h2 class="collection-title">Sản phẩm tương tự</h2>

        <div class="collection-list">
            @foreach ($products as $product)
                @include('front.parts.subparts.card')
            @endforeach
        </div>

        <div class="collection-view-all">
            <a href="category.html" class="medium-btn border-btn light-blue-btn">Xem tất cả</a>
        </div>
    </div>
</section>
@endsection

@section('front-foot')
    <script src="{{asset('frontend/asset/js/product.js')}}"></script>
@endsection