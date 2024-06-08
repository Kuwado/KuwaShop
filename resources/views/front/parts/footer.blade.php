<!------------------------------------------------Footer---------------------------------------------------------->
<div id="footer">
    <div id="footer-top">

        <div class="footer-top-item">
            <div class="d-flex justify-content-center align-items-center">
                <img src="{{asset("Images/logo.png")}}" id="footer-logo-img">
            </div>
            <span>Công Ty TNHH TM và Đầu Tư Quốc Tế Hehe</span>
            <span>Kuwado - Nhà sưu tầm và phân phối chính hãng các thương hiệu hàng đầu Việt Nam </span>
            <h4 class="text-uppercase d-flex justify-content-center">Hệ thống cửa hàng</h4>
            <div id="location-list">
                <div class="location-item">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Cơ sở 1: 123 Lưu Việt Hoàn - Phường Haha - Quận Hehe - Hà Nội</span>
                </div>
                <div class="location-item">
                    <i class="fa-solid fa-phone"></i>
                    <span>Hotline: 0372575757</span>
                </div>
                <div class="location-item">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Cơ sở 2: 5723 Kuwado - Phường QuacQuac - Quận MeoMeo - Hà Nội</span>
                </div>
                <div class="location-item">
                    <i class="fa-solid fa-phone"></i>
                    <span>Hotline: 0372232323</span>
                </div>
                <div class="location-item">
                    <i class="fa-solid fa-envelope"></i>
                    <span>Kuwashop@service.com</span>
                </div>
            </div>
        </div>

        <div class="footer-top-item">
            <h3>Giới thiệu</h3>
            <ul>
                <li><a href="#">Về KuwaShop</a></li>
                <li><a href="#">Tuyển dụng</a></li>
                <li><a href="#">Hệ thống cửa hàng</a></li>
            </ul>
        </div>

        <div class="footer-top-item">
            <h3>Chính sách khách hàng</h3>
            <ul>
                <li><a href="#">Chính sách điều khoản</a></li>
                <li><a href="#">Hướng dẫn mua bán</a></li>
                <li><a href="#">Chính sách thanh toán</a></li>
                <li><a href="#">Chính sách đổi trả</a></li>
                <li><a href="#">Chính sách bảo hành</a></li>
                <li><a href="#">Chính sách vận chuyển</a></li>
                <li><a href="#">Chính sách thẻ thành viên</a></li>
                <li><a href="#">Q&A</a></li>
            </ul>
        </div>

        <div class="footer-top-item">
            <h3>Thông tin liên hệ</h3>
            <div class="d-flex align-items-center justify-content-around mt-1 mb-1">
                <a href="https://www.facebook.com/vhoan57/?locale=vi_VN"><img src="{{asset("Images/Icon/ic_fb.svg")}}" class="footer-icon"></a>
                <a href="#"><img src="{{asset("Images/Icon/ic_gg.svg")}}" class="footer-icon"></a>
                <a href="#"><img src="{{asset("Images/Icon/ic_instagram.webp")}}" class="footer-icon"></a>
                <a href="#"><img src="{{asset("Images/Icon/ic_pinterest.png")}}" class="footer-icon"></a>
                <a href="#"><img src="{{asset("Images/Icon/ic_ytb.svg")}}" class="footer-icon"></a>
            </div>

            <div class="footer-register-form">

                <p class="title-footer">Nhận thông tin các chương trình của KuwaShop</p>
                <form class="d-flex footer-subscribe">
                    <input id="footer-email-subscribe" type="text" name="email" placeholder="Nhập địa chỉ email" required="required">
                    <div class="footer-btn-submit"> <input id="footer-btn-submit" class="footer-form-submit" value="Đăng ký" type="submit">
                    </div>
                </form>


                <div id="footer-subscribe-success"
                    class="fixed-bottom mb-3 ps-2 bg-success text-white footer-subscribe-notice"><i class="fa-solid fa-check footer-icon-notice"></i>Bạn đã đăng ký thành công</div>

                <div id="footer-subscribe-error"
                    class="fixed-bottom mb-3 ps-2 bg-danger text-white footer-subscribe-notice"><i class="fa-solid fa-circle-exclamation footer-icon-notice"></i>Email không hợp lệ!</div>

                <div id="footer-subscribe-fail"
                    class="fixed-bottom mb-3 ps-2 bg-warning text-black footer-subscribe-notice"><i class="fa-solid fa-triangle-exclamation footer-icon-notice"></i>Email đã tồn tại!</div>
            </div>

            <div class="doraemon d-flex align-items-center justify-content-center">
                <img src="{{asset("Images/Dong/doraemon_lacvong.gif")}}" alt="" class="">

            </div>
        </div>
    </div>

    <div id="footer-bottom">

        <div class="col-8">
            <div class="row d-flex ms-3">
                <p class="red-text mt-2 d-flex align-items-center justify-content-center footer-text" style="display: inline-block;">Nhãn hiệu "KuwaShop" đã được ký kết bởi Hehe & Haha</p>
            </div>
            <div class="row d-flex align-items-center justify-content-center">
                <img src="{{asset("Images/Background/bg_goku_frieza.png")}}" alt="" class="img-goku-frieza img-fluid" >
            </div>
        </div>

        <div class="col-4">
            <img src="{{asset("Images/Funny/hehe.jpg")}}" class="footer-last-img">
        </div>
    </div>
</div>

<!--------------------------------------------------End of footer------------------------------------------------------->