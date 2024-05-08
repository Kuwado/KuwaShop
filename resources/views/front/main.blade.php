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

    <foot>
        @include('front.parts.foot')
    </foot>
</body>


</html>