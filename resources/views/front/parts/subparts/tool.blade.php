<div id="tool">

    <form id="search-bar" role="search">
        <input class="form-control me-4" type="search" placeholder="Bạn đang muốn tìm gì?" aria-label="Bạn đang muốn tìm gì?" id="search-input">
        <button class="small-btn border-btn transparent-btn" type="submit" id="search-btn">Tìm</button>
    </form>

    <button type="button" class="btn position-relative nav-btn" id="cart-btn" onclick="showCartPreview()">
        <i class="fa fa-shopping-cart nvicon"></i>
        <div><span id="cart-number">5</span></div>
    </button>

    <button type="button" class="btn position-relative nav-btn" id="favorite-btn">
        <i class="fa fa-heart nvicon"></i>
        <div><span id="favorite-number">12</span></div>
    </button>

    <img src="{{asset("../Images/avatar.jpg")}}" id="avatar" onclick="showAvatarMenu()">
    <!--Avatar menu-->
    <ul id="avatar-menu">
        <li class="avatar-menu-item" id="preview-profile">
            <img src="{{asset("../Images/avatar.jpg")}}">
            <div id="preview-infor">
                <span>Lưu Việt Hoàn</span>
                <span>viethoan557723@gmail.com</span>
            </div>
        </li>
        <li class="avatar-menu-item"><a href="/src/view/profile.html"><i class="fa-solid fa-user"></i><span>Thông tin cá nhân</span></a></li>
        <li class="avatar-menu-item"><a href="/src/view/setting.html"><i class="fa-solid fa-gear"></i><span>Cài đặt</span></a></li>
        <li class="avatar-menu-item"><a href="/src/view/feedback.html"><i class="fa-solid fa-message"></i><span>Góp ý nhà phát triển</span></a></li>
        <li class="avatar-menu-item"><a href="/src/view/login.html"><i class="fa-solid fa-right-from-bracket"></i><span>Đăng xuất</span></a></li>
    </ul>
</div>