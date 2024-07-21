@extends('front.main')

@section('front-head')
    <link rel="stylesheet" href="{{asset('frontend/asset/css/cart.css')}}">
@endsection

@section('front-content')
<section id="cart">
    <div class="container">
        <div class="row">
            <div class="col-8 cart-left">
                <div class="cart-status-wrap">
                    <div class="cart-status">
                        <div class="cart-status-item cart-active">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                        <div class="cart-status-item">
                            <i class="fa-solid fa-cart-plus"></i>
                        </div>
                        <div class="cart-status-item">
                            <i class="fa-solid fa-money-bill"></i>
                        </div>
                        <div class="cart-status-item">
                            <i class="fa-solid fa-suitcase"></i>
                        </div>
                    </div>
                    <div class="cart-status-text">
                        <p class="cart-active">Giỏ hàng</p>
                        <p>Đặt hàng</p>
                        <p>Thanh toán</p>
                        <p>Nhận hàng</p>
                    </div>
                </div>

                <h2 class="mt-3 mb-3">Giỏ hàng hiện có <span class="cart-quan">3</span> sản phẩm</h2>

                <div class="cart-product">
                    <table>
                        <tr>
                            <th col>Sản phẩm</th>
                            <th>Tên</th>
                            <th>Loại</th>
                            <th>Số lượng</th>
                            <th>Giá tiền</th>
                            <th></th>
                        </tr>

                        <tr>
                            <td><a href="../Html/product.html" class=""><img src="../Images/Product/goku_red_1.png"
                                        alt="" class=""></a></td>
                            <td><a href="../Html/product.html" class="">Ứ Gô Kaooo</a></td>
                            <td>
                                <p>Màu sắc: <span>Đỏ</span></p>
                                <p>Size: <span>XL</span></p>
                            </td>
                            <td>
                                <div class="product-detail-quantity d-flex">
                                    <div class="product-detail-quantity-input d-flex">
                                        <button class="decrease-btn">-</button>
                                        <input type="number" class="quantity-field" value="1" min="1" max="10">
                                        <button class="increase-btn">+</button>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div><span>1.980.000</span> đ</div>
                            </td>
                            <td><span><i class="fa-solid fa-trash"></i></span></td>
                        </tr>

                        <tr>
                            <td><a href="../Html/product.html" class=""><img src="../Images/Product/goku_red_1.png"
                                        alt="" class=""></a></td>
                            <td><a href="../Html/product.html" class="">Ứ Gô Kaooo</a></td>
                            <td>
                                <p>Màu sắc: <span>Đỏ</span></p>
                                <p>Size: <span>XL</span></p>
                            </td>
                            <td>
                                <div class="product-detail-quantity d-flex">
                                    <div class="product-detail-quantity-input d-flex">
                                        <button class="decrease-btn">-</button>
                                        <input type="number" class="quantity-field" value="1" min="1" max="10">
                                        <button class="increase-btn">+</button>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div><span>1.980.000</span> đ</div>
                            </td>
                            <td><span><i class="fa-solid fa-trash"></i></span></td>
                        </tr>

                        <tr>
                            <td><a href="../Html/product.html" class=""><img src="../Images/Product/goku_red_1.png"
                                        alt="" class=""></a></td>
                            <td><a href="../Html/product.html" class="">Ứ Gô Kaooo</a></td>
                            <td>
                                <p>Màu sắc: <span>Đỏ</span></p>
                                <p>Size: <span>XL</span></p>
                            </td>
                            <td>
                                <div class="product-detail-quantity d-flex">
                                    <div class="product-detail-quantity-input d-flex">
                                        <button class="decrease-btn">-</button>
                                        <input type="number" class="quantity-field" value="1" min="1" max="10">
                                        <button class="increase-btn">+</button>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div><span>1.980.000</span> đ</div>
                            </td>
                            <td><span><i class="fa-solid fa-trash"></i></span></td>
                        </tr>
                    </table>
                </div>

                <div class="cart-product-back-btn">
                    <a href="" class=""><button class="btn"><i class="fa-solid fa-arrow-left"></i> Tiếp tục mua
                            hàng</button></a>
                </div>
            </div>

            <div class="col-4 cart-right">
                <table>
                    <tr>
                        <th colspan="2">Tổng tiền giỏ hàng</th>
                    </tr>
                    <tr>
                        <td><p>Tổng sản phẩm</p></td>
                        <td><p>3</p></td>
                    </tr>
                    <tr>
                        <td><p>Tổng tiền ban đầu</p></td>
                        <td><p><span>3.000.000</span> đ</p></td>
                    </tr>
                    <tr>
                        <td><p>Tổng tiền cuối cùng</p></td>
                        <td><p class="cart-right-price"><span>2.750.000</span> đ</p></td>
                    </tr>
                </table>

                <div class="d-flex justify-content-center align-content-center">
                    <a href="" class="cart-order-btn btn">Đặt hàng</a>
                </div>


            </div>
        </div>

    </div>

</section>
@endsection

@section('front-foot')
    <script src="{{asset('frontend/asset/js/cart.js')}}"></script>
@endsection