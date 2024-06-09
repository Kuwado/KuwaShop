<div id="header">

    <!--Side bar cho các screen bé-->
    <button id="sidebar-btn" onclick="showSidebar()"><i class="fa-solid fa-bars"></i></button>
    <div id="sidebar">
        @include('front.parts.headerparts.sidebar')
    </div>

    <!--Logo and menu-->
    <div id="logo-and-menu">
        <div id="logo">
            <a href="/home"><img src="{{asset("../Images/logo.png")}}" id="logo-image"></a>
        </div>
    
        <!--Menu-->
        <div id="menu">
            @include('front.parts.headerparts.menu')
        </div>
    </div>

    <!--Search & Icon button-->
    <div id="tool">
        @include('front.parts.headerparts.tool')
    </div>

    <div id="cart-preview">
        @include('front.parts.headerparts.cart')
    </div>

</div>

