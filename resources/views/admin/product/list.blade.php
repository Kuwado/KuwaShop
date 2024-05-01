@extends('admin.main')

@section('content')
<table id="product-list-table">
    <tr>
        <th>STT</th>
        <th>Hình ảnh</th>
        <th>Tên sản phẩm</th>
        <th>Ngày tạo</th>
        <th>Tùy chọn</th>
    </tr>
    <tr>
        <td>1</td>
        <td><img src="/Images/Product/goku_blue_1.png"></td>
        <td>Áo nè</td>
        <td>22/4/2024</td>
        <td>
            <div>
                <button class="product-edit-btn">Sửa</button>
                <button class="product-delete-btn" onclick="pDelete(this)">Xóa</button>
            </div>
        </td>
    </tr>
    <tr>
        <td>2</td>
        <td><img src="/Images/Product/test.jpg"></td>
        <td>Áo nè</td>
        <td>22/4/2024</td>
        <td>
            <div>
                <button class="product-edit-btn">Sửa</button>
                <button class="product-delete-btn" onclick="pDelete(this)">Xóa</button>
            </div>
        </td>
    </tr>
    <tr>
        <td>3</td>
        <td><img src="/Images/Product/goku_yellow_1.png"></td>
        <td>Áo nè</td>
        <td>22/4/2024</td>
        <td>
            <div>
                <button class="product-edit-btn">Sửa</button>
                <button class="product-delete-btn" onclick="pDelete(this)">Xóa</button>
            </div>
        </td>
    </tr>
</table>
@endsection

@section('pagination')
    @include('admin.parts.pagination')
@endsection