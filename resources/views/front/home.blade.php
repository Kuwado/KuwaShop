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

    <section id="best-collection">
        <div class="collection">
            <h2 class="collection-title">New Collection</h2>

            <div class="collection-list">
                @foreach ($news as $product)
                    @include('front.parts.subparts.card')
                @endforeach
            </div>

            <div class="collection-view-all">
                <a href="category.html" class="medium-btn border-btn light-blue-btn">Xem tất cả</a>
            </div>
        </div>

        <div class="collection">
            <h2 class="collection-title">Hot Collection</h2>

            <div class="collection-list">
                @foreach ($hots as $product)
                    @include('front.parts.subparts.card')
                @endforeach
            </div>

            <div class="collection-view-all">
                <a href="category.html" class="medium-btn border-btn light-blue-btn">Xem tất cả</a>
            </div>
        </div>

        <div class="collection">
            <h2 class="collection-title">Sale Collection</h2>

            <div class="collection-list">
                @foreach ($sales as $product)
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