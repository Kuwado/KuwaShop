<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.parts.head')
</head>

<body>
    <!-----------------------------------------------Header----------------------------------------------------------->
    <header>
       @include('front.parts.header')
    </header>
    <!---------------------------------------------End of header------------------------------------------------------>

    <section id="front">
        @yield('front-content')
    </section>

    <!------------------------------------------------Footer---------------------------------------------------------->
    <footer>
        @include('front.parts.footer')
    </footer>
    <!--------------------------------------------------End of footer------------------------------------------------------->

    <!------------------------------------------------ Navbar -------------------------------------------------------->
    <div id="bottom-navbar">
        @include('front.parts.navbar')
    </div> 

    @include('front.parts.foot')
</body>


</html>