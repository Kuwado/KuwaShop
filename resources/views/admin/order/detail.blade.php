@extends('admin.main')

@section('content')
<div class="admin-order-detail">
    <div class="product-info">
        <div class="row">
            <h2>Thông tin đơn hàng</h2>
        </div>
        <div class="row">
            <div class="col-4 product-img d-flex justify-content-center align-content-center">
                <img src="/Images/mck1.jpg">
            </div>
            <div class="col-8 product-info-text">
                <p>Tên sản phẩm: <span>Áo hehe</span></p>
                <p>Màu sắc: <span>Cam</span></p>
                <p>Size: <span>XL</span></p>
                <p>Tên khách hàng: <span>Ko có tên</span></p>
                <p>Số điện thoại: <span>0123654987</span></p>
                <p>Email: <span>test@gmail.com</span></p>
                <p>Địa chỉ nhận hàng: <span>nhà số 5, đường Lương Không Có, phường Ở Đâu Vậy, quận
                        Chả Nhớ Tên, Hà Nội</span></p>
                <p>Phương thức giao hàng: <span>Hỏa tốc</span></p>
                <p>Phương thức thanh toán: <span>Trực tiếp</span></p>
                <p>Giá: <span>999.000</span> đ</p>
            </div>
        </div>
    </div>
    <div class="order-detail-btn d-flex justify-content-between">
        <div>
            <button class="btn order-back-btn">Quay lại</button>
        </div>
        <div>
            <button class="btn admin-cf-btn">Xác nhận</button>
        </div>
    </div>  
</div>
@endsection
