@extends('front.main')

@section('front-head')
    <link rel="stylesheet" href="{{asset('frontend/asset/css/slide.css')}}">
    <link rel="stylesheet" href="{{asset('FW/owlcarousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('FW/owlcarousel/assets/owl.theme.default.min.css')}}">
@endsection

@section('front-content')
    <section class="slider-container">
        @include('front.parts.subparts.slide')
    </section>

    <section class="collection mt-5">
        <div class="new-collection container">

            <div class="row">
                <h2 class="collection-title d-flex justify-content-center mb-4 mt-4">New Collection</h2>
            </div>

            <div class="row">
                @foreach ($news as $product)
                    <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                        @include('front.parts.subparts.card')
                    </div>
                @endforeach
            </div>

            <div class="row">
                <div class="d-flex justify-content-center mb-4">
                    <a href="category.html" class="medium-btn border-btn light-blue-btn">Xem tất cả</a>
                </div>
                <div class="straight-line"></div>
            </div>

        </div>

        <div class="hot-collection container">

            <div class="row">
                <h2 class="collection-title d-flex justify-content-center mb-4 mt-4">Hot Collection</h2>
            </div>

            <div class="row">
                @foreach ($hots as $product)
                    <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                        @include('front.parts.subparts.card')
                    </div>
                @endforeach
            </div>

            <div class="row">
                <div class="d-flex justify-content-center mb-4">
                    <a href="category.html" class="medium-btn border-btn light-blue-btn">Xem tất cả</a>
                </div>
                <div class="straight-line"></div>
            </div>

        </div>

        <div class="sale-collection container">

            <div class="row">
                <h2 class="collection-title d-flex justify-content-center mb-4 mt-4">Sale Collection</h2>
            </div>

            <div class="row">
                @foreach ($sales as $product)
                    <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                        @include('front.parts.subparts.card')
                    </div>
                @endforeach
            </div>

            <div class="row">
                <div class="d-flex justify-content-center mb-4">
                    <a href="category.html" class="medium-btn border-btn light-blue-btn">Xem tất cả</a>
                </div>
                <div class="straight-line"></div>
            </div>

        </div>
    </section>
@endsection

@section('front-foot')
    <script src="{{asset('FW/owlcarousel/owl.carousel.js')}}"></script>
    <script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 2,
        nav: true,
        center: true,
        items: 1,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true
        // responsive:{
        //     0:{
        //         items:1
        //     },
        //     600:{
        //         items:3
        //     },
        //     1000:{
        //         items:1
        //     }
        // }
    })
    </script>
@endsection