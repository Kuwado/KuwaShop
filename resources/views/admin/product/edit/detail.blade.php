@extends('admin.main')
@section('head')
    <link rel="stylesheet" href="{{asset('backend/asset/Ckeditor5-Kuwashop/styles.css')}}">
@endsection

@section('content')
    <form action="/admin/product/add" enctype="multipart/form-data" method="post">
        <div class="row">
            <div class="col-6 right-content">
                <div class="product-name pa">
                    <label>Tên sản phẩm:</label>
                    <span style="width: fit-content">{{$product->name}}</span>
                </div>
                
                <div class="product-size pa">
                    <span id="product-size-title">Size và số lượng:</span>
                    <div class="product-size-opt">
                      <button type="button" class="product-size-name size-btn-active">S</button>
                      <input class="size-active" type="number" id="product-size-s" name="product-size-s" placeholder="Số lượng" value={{$quan->s}}>
                    </div>
                    <div class="product-size-opt">
                      <button type="button" class="product-size-name size-btn-active">M</button>
                      <input class="size-active" type="number" id="product-size-m" name="product-size-m" placeholder="Số lượng" value={{$quan->m}}>
                    </div>
                    <div class="product-size-opt">
                      <button type="button" class="product-size-name size-btn-active">L</button>
                      <input class="size-active" type="number" id="product-size-l" name="product-size-l" placeholder="Số lượng" value={{$quan->l}}>
                    </div>
                    <div class="product-size-opt">
                      <button type="button" class="product-size-name size-btn-active">XL</button>
                      <input class="size-active" type="number" id="product-size-xl" name="product-size-xl" placeholder="Số lượng" value={{$quan->xl}}>
                    </div>
                    <div class="product-size-opt">
                      <button type="button" class="product-size-name size-btn-active">XXL</button>
                      <input class="size-active" type="number" id="product-size-xxl" name="product-size-xxl" placeholder="Số lượng" value={{$quan->xxl}}>
                    </div>
                </div>
            </div>
    
            <div class="col-6 left-content">
                <div>
                    <label>Màu sắc: <span style="color: {{$quan->color_code}}">{{$quan->color}}</span></label>
                </div>

                <div class="product-add-img pa">
                    <div>
                        <label for="img-files">Tải ảnh lên</label>
                        <input id="img-files" type="file" multiple>
                    </div>

                    <div class="img-list" id="input-file-imgs">
                        @php
                            $images = explode('*', $quan->images);
                        @endphp
                        @foreach ($images as $image)
                            <img src="{{asset($image)}}">
                        @endforeach
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="create-btn">
                <button type="submit" id="create-btn">Cập nhật</button>
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