<div id="header">

    <!--Side bar cho các screen bé-->
    <button id="sidebar-btn" onclick="showSidebar()"><i class="fa-solid fa-bars"></i></button>
    <div id="sidebar">
        @include('front.parts.subparts.sidebar')
    </div>

    <!--Logo and menu-->
    <div id="logo-and-menu">
        <div id="logo">
            <a href="/home"><img src="{{asset("../Images/logo.png")}}" id="logo-image"></a>
        </div>
    
        <!--Menu-->
        <div id="menu">
            @include('front.parts.subparts.menu')
        </div>
    </div>

    <!--Search & Icon button-->
    <div id="tool">
        @include('front.parts.subparts.tool')
    </div>

    <div id="cart-preview">
        @include('front.parts.subparts.cart')
    </div>

</div>

