@extends('admin.main')
@section('head')
    <link rel="stylesheet" href="{{asset('backend/asset/Ckeditor5-Kuwashop/styles.css')}}">
@endsection

@section('content')
    <form action="/admin/product/add" enctype="multipart/form-data" method="post">
        <div class="row">
            <div class="col-6 right-content">
                <div class="product-name pa">
                    <label for="product-name">Tên sản phẩm:</label>
                    <input type="text" id="product-name" value="{{$product->name}}" name="product-name" placeholder="Nhập tên sản phẩm" required>
                </div>

                <div class="product-type-list pa">
                    <div id="product-type"><span id="product-type-title"><i class="fa-solid fa-chevron-down"></i> Loại sản phẩm: </span><span id="product-type-text">{{$product->type}}</span></div>
                    @include('admin.product.product_parts.type') 
                    <input type ="hidden" name="product-type" id="product-type-input">   
                </div>
                
                <div class="product-price pa">
                    <label for="product-price">Giá gốc:</label>
                    <input type="text" id="product-price" value="{{$product->original_price}}" name="product-price" placeholder="Giá sản phẩm" required><span>đ</span>
                </div>

                <div class="product-discount pa">
                    <label for="product-price-discount">Giá giảm:</label>
                    <input type="text" name="product-price-discount" id="product-price-discount" value="{{$product->discount_price}}"><span>đ</span>
                </div>
            </div>
    
            <div class="col-6 left-content">            
                <div class="product-add-img pa">
                    <label for="img-file">Tải ảnh đại diện</label>
                    <input id="img-file" type="file">
                    <div class="img-list" id="input-file-img">
                        <img src={{asset($product->image)}}>
                    </div>
                    <input type="hidden" id="product-image" name="product-image">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="product-intro">
                <div class="product-text pa" id="gt">
                    <label for="gt-text">Giới thiệu: </label><br>
                    <textarea class="editor" id="gt-text" name="product-gt-text" placeholder=" Giới thiệu về sản phẩm">{{$product->intro}}</textarea>
                </div>
                
                <div class="product-text pa" id="ct">
                    <label for="ct-text">Thông tin chi tiết: </label><br>
                    <textarea class="editor" id="ct-text" name="product-ct-text" placeholder=" Thông tin chi tiết sản phẩm">{{$product->detail}}</</textarea>
                </div>
                
                <div class="product-text pa" id="bq">
                    <label for="bq-text">Bảo quản: </label><br>
                    <textarea class="editor" id="bq-text" name="product-bq-text" placeholder=" Cách bảo quản sản phẩm">{{$product->preserve}}</</textarea>
                </div>            
            </div>

            <div class="create-btn">
                <button type="submit" id="create-btn">Sửa thông tin</button>
            </div>
        </div>

        <div class="row" id="edit-color">
            <label>Danh sách các màu của sản phẩm:</label>
            @foreach ($quans as $quan)
                <a style="background-color: {{$quan->color_code}}" class="edit-color" href="/admin/product/edit/{{$product->id}}/{{$quan->color}}"></a>
            @endforeach
        </div>

        @csrf
    </form>    
@endsection

@section('footer')
    <script src="{{asset('backend/asset/Ckeditor5-Kuwashop/ckeditor.js')}}"></script>
    <script src="{{asset('backend/asset/Ckeditor5-Kuwashop/script.js')}}"></script>
    <script src="{{asset('backend/asset/admin.js')}}"></script>
    <script src="{{asset('backend/asset/product-ajax.js')}}"></script>
@endsection