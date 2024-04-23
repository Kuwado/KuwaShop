@extends('admin.main')

@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Sản phẩm</li>
        <li class="breadcrumb-item active" aria-current="page">Thêm sản phẩm</li>
    </ol>
</nav>
@endsection

@section('content')
    <div class="row">
        <div class="col-6">
            <div class="pi product-type-list">
                <div id="product-type"><i class="fa-solid fa-chevron-down"></i> Loại sản phẩm: <span id="product-type-text"></span></div>
                @include('admin.product_parts.type')    
            </div>

            <div class="pi product-name">
                <input type="text" id="product-name" name="product-name" placeholder="Tên sản phẩm" required>
            </div>
            <div class="product-color">
                @include('admin.product_parts.color')
            </div>
            <div class="pi product-price">
                <input type="text" id="product-price" name="product-price" placeholder="Giá sản phẩm" required><span>đ</span>
            </div>
            <div class="pi product-discount">
                <div>
                    <span id="discount-btn">Giảm giá<span id="discount-text"></span></span>
                    <ul>
                        <li id="discount-option-p">Theo phần trăm</li>
                        <li id="discount-option-n">Theo giá trị</li>
                    </ul>
                </div>
                <div class="discount-p"><input type="text" id="product-discount-p" name="product-discount-p" placeholder="Phần trăm giảm" required><span>%</span></div>
                <div class="discount-n"><input type="text" id="product-discount-n" name="product-discount-n" placeholder="Giá sau khi giảm" required><span>đ</span></div>
            </div>

            <div class="pi product-size">
                @include('admin.product_parts.size')
            </div>
        </div>

        <div class="col-6 left-content">
            <div class="product-add-img">
                <label for="img-file">Tải ảnh lên</label>
                <input id="img-file" type="file">
                <div class="img-list">

                </div>
            </div>
            @include('admin.product_parts.intro')
            <div class="create-btn">
                <button id="create-btn">Tạo sản phẩm</button>
            </div>
        </div>
    </div>
@endsection