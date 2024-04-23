@extends('admin.main')

@section('breadcrumb')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Đơn hàng</li>
    <li class="breadcrumb-item active" aria-current="page">Đơn hàng chưa được xác nhận</li>
  </ol>
</nav>
@endsection

@section('content')
<div class="admin-order">
    <table>
      <tr>
        <th>Id</th>
        <th>Tên người đặt</th>
        <th>Số điện thoại</th>
        <th>Địa chỉ</th>
        <th>Tên sản phẩm</th>
        <th>Thông tin</th>
        <th>Ghi chú</th>
        <th>Chi tiết</th>
        <th>Ngày đặt</th>
        <th>Trạng thái</th>
        <th>Xóa đơn</th>
      </tr>
      <tr>
        <td>1</td>
        <td>Jacky Kitori</td>
        <td>0507200333</td>
        <td>số 2, đường A, phường B, Quận C, Hà Nội</td>
        <td>Khố Jack áo ôm</td>
        <td>Size: <span>XL</span></br> Màu sắc: <span>Đen</span></td>
        <td>Giao nhanh</td>
        <td><a href="/admin/order-detail">Xem</a></td>
        <td>28/03/2024</td>
        <td><button class="btn admin-cf-btn">Xác nhận</button></td>
        <td><button class="btn admin-delete-btn"><i class="fa-solid fa-trash-can"></i></button></td>
      </tr>
      <tr>
        <td>2</td>
        <td>Son Goku</td>
        <td>0143658792</td>
        <td>số 2, đường Hana, phường Kaka, Quận Bala, Nhật Bản</td>
        <td>Ứ Gô Kaooo</td>
        <td>Size: <span>XL</span></br> Màu sắc: <span>Đỏ</span></td>
        <td>Hỏa tốc</td>
        <td><a href="/admin/order-detail">Xem</a></td>
        <td>27/03/2024</td>
        <td><button class="btn admin-cf-btn">Xác nhận</button></td>
        <td><button class="btn admin-delete-btn"><i class="fa-solid fa-trash-can"></i></button></td>
      </tr>
      <tr>
        <td>3</td>
        <td>Boy ngu ngok</td>
        <td>0789654123</td>
        <td>số 123, đường Gì Đó, phường Quên Tên, Quận Không Nhớ, Hà Nội</td>
        <td>Quần doraemon</td>
        <td>Size: <span>XL</span></br> Màu sắc: <span>Hồng</span></td>
        <td>Giao nhanh</td>
        <td><a href="/admin/order-detail">Xem</a></td>
        <td>29/03/2024</td>
        <td><button class="btn admin-cf-btn">Xác nhận</button></td>
        <td><button class="btn admin-delete-btn"><i class="fa-solid fa-trash-can"></i></button></td>
      </tr>
    </table>
</div>
@endsection

@section('pagination')
    @include('admin.parts.pagination')
@endsection