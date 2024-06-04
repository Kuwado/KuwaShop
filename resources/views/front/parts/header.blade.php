<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container-fluid">

        <!--Logo-->
        <div id="logo">
            <a href="/home"><img src="{{asset("../Images/logo.png")}}" id="logo-image"></a>
        </div>

        <!--Menu-->
        <div id="menu">
            @include('front.parts.subparts.menu')
        </div>

        <!--Search & Icon button-->
        <div id="tool">
            @include('front.parts.subparts.tool')
        </div>

        <div id="cart-preview">
            @include('front.parts.subparts.cart')
        </div>

    </div>
</nav>
