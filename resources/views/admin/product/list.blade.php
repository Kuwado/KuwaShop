@extends('admin.main')

@section('content')
<table id="product-list-table">
    <tr>
        <th>STT</th>
        <th>Hình ảnh</th>
        <th>Tên sản phẩm</th>
        <th>Ngày tạo</th>
        <th>Giá gốc</th>
        <th>Giá giảm</th>
        <th>Tùy chọn</th>
    </tr>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td><img src="{{asset($product->image)}}"></td>
            <td>{{$product->name}}</td>
            <td>{{$product->created_at}}</td>
            <td>{{number_format($product->original_price)}}</td>
            <td>{{number_format($product->discount_price)}}</td>
            <td>
                <div>
                    <a href="/admin/product/edit"><button class="product-edit-btn">Sửa</button></a>
                    <button class="product-delete-btn" onclick="removeRow(product_id = {{$product->id}}, url='/admin/product/delete')">Xóa</button>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
   
</table>
@endsection

@section('pagination')
    @include('admin.parts.pagination')
@endsection

@section('footer')
    <script src="{{asset('backend/asset/product-ajax.js')}}"></script>
@endsection