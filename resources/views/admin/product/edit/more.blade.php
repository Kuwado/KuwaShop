@extends('admin.main')

@section('content')
    <form action="" enctype="multipart/form-data" method="post">
        <div class="row">
            <div class="col-6 right-content">
                <div class="product-name pa">
                    <label>Tên sản phẩm:</label>
                    <a href="/admin/product/edit/{{$product->id}}" class="name-back"><span style="width: fit-content">{{$product->name}}</span></a>
                </div>
                
                <div class="product-size pa">
                    @include('admin.product.product_parts.size')
                </div>
            </div>
    
            <div class="col-6 left-content">
                <div class="product-color pa">
                    @include('admin.product.product_parts.color')
                    <input type="hidden" name="product-color" id="product-color">
                    <input type="hidden" name="product-color-code" id="product-color-code">
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
            <div class="create-btn">
                <button type="submit" id="create-btn">Thêm màu sản phẩm</button>
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
    <script>
        // Gọi hàm blockColor và truyền mảng colors
        blockColor({!! json_encode($colors) !!});
    </script>  
@endsection
