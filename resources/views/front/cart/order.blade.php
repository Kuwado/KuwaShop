@extends('front.main')

@section('front-head')
    <link rel="stylesheet" href="{{asset('frontend/asset/css/cart.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/asset/css/cart_order.css')}}">
@endsection

@section('front-content')
<section id="cart-order" class="container">
    <div id="cart-detail-left">
        <div id="cart-status-bar">
            <div id="cart-status-progress">
                <div class="cart-status-progress-item"></div>
                <div class="cart-status-progress-item active"></div>
                <div class="cart-status-progress-item"></div>
                <div class="cart-status-progress-item"></div>
                <div class="cart-status-progress-item"></div>
            </div>
            <div id="cart-status">
                <div class="cart-status-item active">
                    <div><i class="fa-solid fa-cart-shopping"></i></div>
                    <span>Giỏ hàng</span>
                </div>
                <div class="cart-status-item active">
                    <div><i class="fa-solid fa-cart-plus"></i></div>
                    <span>Đặt hàng</span>
                </div>
                <div class="cart-status-item">
                    <div><i class="fa-solid fa-money-bill"></i></div>
                    <span>Thanh toán</span>
                </div>
                <div class="cart-status-item">
                    <div><i class="fa-solid fa-suitcase"></i></div>
                    <span>Nhận hàng</span>
                </div>
            </div>
        </div>

        <div id="cart-left-content">
            <div id="cart-order-address">
                <h4>Địa chỉ giao hàng</h4>
                <div id="cart-order-address-detail">
                    <div id="cart-order-address-content">
                        <div>Họ tên: <span>Lưu Việt Hoàn</span></div>
                        <div>Điện thoại: <span>0372689***</span></div>
                        <div>Địa chỉ: <span>123 Haheho, Kouki, Sousou, Titi</span></div>
                    </div>
                    <div id="cart-order-address-action">
                        <button type="button" class="small-btn light-blue-btn" data-bs-toggle="modal" data-bs-target="#cart-order-address-change">Chọn địa chỉ khác</button>
                        <button type="button" class="small-btn dark-blue-btn">Đặt làm mặc định</button>

                        <!-- Modal -->
                        <div class="modal fade" id="cart-order-address-change" tabindex="-1" aria-labelledby="cart-order-address-change-label" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="cart-order-address-add-label">Chọn địa chỉ</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                ...
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" id="cart-order-address-btn" data-bs-toggle="modal" data-bs-target="#cart-order-address-add">Thêm địa chỉ</button>
                
                <!-- Modal -->
                <div class="modal fade" id="cart-order-address-add" tabindex="-1" aria-labelledby="cart-order-address-add-label" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="cart-order-address-add-label">Thêm địa chỉ</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div id="cart-order-delivery-method">
                <h4>Phương thức giao hàng</h4>
                <div id="cart-order-delivery-method-content">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="cart-order-delivery-method-radio" id="cart-order-delivery-method-radio-1" checked>
                        <label class="form-check-label" for="cart-order-delivery-method-radio-1">Chuyển phát nhanh</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="cart-order-delivery-method-radio" id="cart-order-delivery-method-radio-2">
                        <label class="form-check-label" for="cart-order-delivery-method-radio-2">Giao hàng hỏa tốc</label>
                    </div>
                </div>
            </div>
            <div id="cart-order-pay-method">
                <h4>Phương thức thanh toán</h4>
                <div id="cart-order-pay-method-content">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="cart-order-pay-method-radio" id="cart-order-pay-method-radio-1" checked>
                        <label class="form-check-label" for="cart-order-pay-method-radio-1">Thanh toán trực tiếp</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="cart-order-pay-method-radio" id="cart-order-pay-method-radio-2">
                        <label class="form-check-label" for="cart-order-pay-method-radio-2">Thanh toán qua MoMo</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="cart-order-pay-method-radio" id="cart-order-pay-method-radio-3">
                        <label class="form-check-label" for="cart-order-pay-method-radio-3">Internet banking</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="cart-order-pay-method-radio" id="cart-order-pay-method-radio-4">
                        <label class="form-check-label" for="cart-order-pay-method-radio-4">Thanh toán qua thẻ tín dụng</label>
                    </div>
                </div>
            </div>
        </div>    

        <div id="cart-back-btn-bar">
            <button id="cart-back-btn" onclick="cartBack()"><i class="fa-solid fa-arrow-left"></i> Quay lại</button>
        </div>
    </div>
    <div id="cart-detail-right">
        <div id="cart-detail-right-content">
            <table id="cart-total-table">
                <tr>
                    <th colspan="2">Tổng tiền giỏ hàng</th>
                </tr>
                <tr>
                    <td><p>Tổng sản phẩm</p></td>
                    <td><p>{{$number}}</p></td>
                </tr>
                <tr>
                    <td><p>Tổng tiền ban đầu</p></td>
                    <td><p style="opacity: 0.5; text-decoration: line-through;"><span>{{number_format($total_origin)}}</span> đ</p></td>
                </tr>
                <tr>
                    <td><p>Tổng tiền tạm tính</p></td>
                    <td><p class="cart-right-price"><span>{{number_format($total)}}</span> đ</p></td>
                </tr>
                <tr>
                    <td><p>Chi phí vận chuyển</p></td>
                    <td><p class="cart-right-price"><span>30,000</span> đ</p></td>
                </tr>
                <tr>
                    <td><p>Tổng tiền tạm tính</p></td>
                    @php
                        $total += 30000;
                    @endphp
                    <td><p class="cart-right-price" style="font-weight: bold; color: var(--hv-extra)"><span>{{number_format($total)}}</span> đ</p></td>
                </tr>
            </table>
            <div id="sale-code">
                <input type="text" placeholder="Mã giảm giá">
                <button id="sale-btn">Áp dụng</button>
            </div>
            <a href="" class="medium-btn border-btn light-blue-btn cart-order-btn">Tiếp tục thanh toán</a>
        </div>
    </div>
</section>
@endsection

@section('front-foot')
    <script src="{{asset('frontend/asset/js/cart.js')}}"></script>
@endsection