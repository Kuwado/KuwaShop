<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.parts.head')
</head>

<body>
    <!------------------------------------------------ Navbar -------------------------------------------------------->
    <div id="bottom-navbar">
        @include('front.parts.navbar')
    </div> 
    
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



    @include('front.parts.foot')
</body>


</html>