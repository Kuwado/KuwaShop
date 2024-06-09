<div id="tool">

    <form id="search-bar" role="search">
        <input class="form-control me-4" type="search" placeholder="Bạn đang muốn tìm gì?" aria-label="Bạn đang muốn tìm gì?" id="search-input">
        <button class="small-btn border-btn transparent-btn" type="submit" id="search-btn">Tìm</button>
        <!-- Gợi ý tìm kiếm -->
        <div id="suggest-container">
            @include('front.parts.headerparts.suggest')
        </div>
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
    @include('front.parts.headerparts.avatarmenu')
</div>