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

                <div class="product-price pa">
                    <label for="product-price">Giá gốc:</label>
                    <input type="text" id="product-price" value="{{old('product-price')}}" name="product-price" placeholder="Giá sản phẩm" required><span>đ</span>
                </div>

                <div class="product-discount pa">
                    <div>
                        <span id="discount-btn"><span id="product-discount-title">Giảm giá</span><span id="discount-text"></span></span>
                        <ul>
                            <li id="discount-option-p">Theo phần trăm</li>
                            <li id="discount-option-n">Theo giá trị</li>
                        </ul>
                    </div>
                    <div class="discount-p"><input type="text" id="product-discount-p" name="product-discount-p" placeholder="Phần trăm giảm" onchange="handleDiscountP()"><span>%</span></div>
                    <div class="discount-n"><input type="text" id="product-discount-n" name="product-discount-n" placeholder="Giá sau khi giảm" onchange="handleDiscountN()"><span>đ</span></div>
                    <input type="hidden" name="product-price-discount" id="product-price-discount">
                </div>

                <div class="product-size pa">
                    @include('admin.product.product_parts.size')
                </div>
                
            </div>
    
            <div class="col-6 left-content">
                <div class="product-type-list pa">
                    <div id="product-type"><span id="product-type-title"><i class="fa-solid fa-chevron-down"></i> Loại sản phẩm: </span><span id="product-type-text"></span></div>
                    @include('admin.product.product_parts.type') 
                    <input type ="hidden" name="product-type" id="product-type-input">   
                </div>

                <div class="product-color pa">
                    @include('admin.product.product_parts.color')
                    <input type="hidden" name="product-color" id="product-color">
                    <input type="hidden" name="product-color-code" id="product-color-code">
                </div>
    
                <div class="product-add-img pa">
                    <label for="img-file">Tải ảnh đại diện</label>
                    <input id="img-file" type="file">
                    <div class="img-list" id="input-file-img">
    
                    </div>
                    <input type="hidden" id="product-image" name="product-image">
                </div>

                <div class="product-add-img pa">
                    <div>
                        <label for="img-files">Tải ảnh lên</label>
                        <input id="img-files" type="file" multiple>
                    </div>
                    <div class="img-list" id="input-file-imgs">
    
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="product-intro">
                @include('admin.product.product_parts.intro')
            </div>

            <div class="create-btn">
                <button type="submit" id="create-btn">Tạo sản phẩm</button>
            </div>
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