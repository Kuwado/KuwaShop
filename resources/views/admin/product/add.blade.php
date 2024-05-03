@extends('admin.main')

@section('content')
    <form action="/admin/product/add" enctype="multipart/form-data" method="post">
        <div class="row">
            <div class="col-6">
                <div class="pi product-type-list">
                    <div id="product-type"><i class="fa-solid fa-chevron-down"></i> Loại sản phẩm: <span id="product-type-text"></span></div>
                    @include('admin.product.product_parts.type') 
                    <input type ="hidden" name="product-type" id="product-type-input">   
                </div>
    
                <div class="pi product-name">
                    <input type="text" id="product-name" value="{{old('product-name')}}" name="product-name" placeholder="Tên sản phẩm" required>
                </div>

                <div class="pi product-price">
                    <input type="text" id="product-price" value="{{old('product-price')}}" name="product-price" placeholder="Giá sản phẩm" required><span>đ</span>
                </div>
                <div class="pi product-discount">
                    <div>
                        <span id="discount-btn">Giảm giá<span id="discount-text"></span></span>
                        <ul>
                            <li id="discount-option-p">Theo phần trăm</li>
                            <li id="discount-option-n">Theo giá trị</li>
                        </ul>
                    </div>
                    <div class="discount-p"><input type="text" id="product-discount-p" name="product-discount-p" placeholder="Phần trăm giảm" onchange="handleDiscountP()"><span>%</span></div>
                    <div class="discount-n"><input type="text" id="product-discount-n" name="product-discount-n" placeholder="Giá sau khi giảm" onchange="handleDiscountN()"><span>đ</span></div>
                    <input type="hidden" name="product-price-discount" id="product-price-discount">
                </div>

                <div id="product-add">
                    @include('admin.product.product_parts.more')
                    <div class="product-add-img">
                        <label for="img-file">Tải ảnh đại diện</label>
                        <input id="img-file" type="file">
                        <div class="img-list" id="input-file-img">
        
                        </div>
                        <input type="hidden" id="product-image" name="product-image">
                    </div>
                </div>
            </div>
    
            <div class="col-6 left-content">
                <div class="product-add-img">
                    <div>
                        <label for="img-files">Tải ảnh lên</label>
                        <input id="img-files" type="file" multiple>
                    </div>
                    <div class="img-list" id="input-file-imgs">
    
                    </div>
                </div>
                @include('admin.product.product_parts.intro')
                <div class="create-btn">
                    <button type="submit" id="create-btn">Tạo sản phẩm</button>
                </div>
            </div>
        </div>
        @csrf
    </form>    
@endsection

@section('footer')
    <script src="{{asset('backend/asset/admin.js')}}"></script>
    <script src="{{asset('backend/asset/product-ajax.js')}}"></script>
@endsection