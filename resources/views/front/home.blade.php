@extends('front.main')

@section('front-head')
    <link rel="stylesheet" href="{{asset('frontend/asset/css/slide.css')}}">
@endsection

@section('front-content')
    <section class="container slider">
        @include('front.parts.slide')
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
    <script src="{{asset('frontend/asset/js/slide.js')}}"></script>
@endsection