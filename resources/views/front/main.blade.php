<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.parts.head')
</head>

<body>

    <!-----------------------------------------------Header----------------------------------------------------------->

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
            <div class="container-fluid">

                <!--Logo-->
                <a class="navbar-brand order-lg-0" href="#index.html"><img src="../Images/Icon/logo.png" id="logo"></a>

                <!--Search & Icon button-->
                <div class="d-flex order-lg-2">
                    <form class="d-flex sf" role="search">
                        <input class="form-control me-4" type="search" placeholder="Bạn đang muốn tìm gì?"
                            aria-label="Bạn đang muốn tìm gì?">
                        <button class="btn btn-outline-success" type="submit" id="searchbtn">Tìm</button>
                    </form>
                    <button type="button" class="btn position-relative nav-btn">
                        <i class="fa fa-shopping-cart nvicon"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">5</span>
                    </button>
                    <button type="button" class="btn position-relative nav-btn">
                        <i class="fa fa-heart nvicon"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">2</span>
                    </button>
                    <button type="button" class="btn position-relative nav-btn">
                        <i class="fa fa-user nvicon"></i>
                    </button>
                </div>

                <!--Menu-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 order-lg-1">

                        <li class="nav-item contact">
                            <a class="nav-link" href="category.html">SẢN PHẨM MỚI</a>
                        </li>

                        <li class="nav-item contact">
                            <a class="nav-link" href="#">BÁN CHẠY</a>
                        </li>

                        <li class="nav-item contact">
                            <a class="nav-link" href="#">ÁO</a>
                            <ul class="contact-menu">
                                <li>
                                    <a class="contact-item" href="#">Áo khoác</a>
                                    <ul class="contact-sub-menu">
                                        <li><a class="contact-sub-item" href="#">Phao</a></li>
                                        <li><a class="contact-sub-item" href="#">Bomber</a></li>
                                        <li><a class="contact-sub-item" href="#">Blazer</a></li>
                                        <li><a class="contact-sub-item" href="#">Măng tô</a></li>
                                        <li><a class="contact-sub-item" href="#">Bò</a></li>
                                    </ul>
                                    <a class="contact-item" href="#">Áo mùa đông</a>
                                    <ul class="contact-sub-menu">
                                        <li><a class="contact-sub-item" href="#">Len</a></li>
                                        <li><a class="contact-sub-item" href="#">Hoodie</a></li>
                                        <li><a class="contact-sub-item" href="#">Giữ nhiệt</a></li>
                                        <li><a class="contact-sub-item" href="#">Sweater</a></li>
                                    </ul>
                                    <a class="contact-item" href="#">Áo mùa hè</a>
                                    <ul class="contact-sub-menu">
                                        <li><a class="contact-sub-item" href="#">Polo</a></li>
                                        <li><a class="contact-sub-item" href="#">Thun</a></li>
                                    </ul>
                                    <a class="contact-item" href="#">Áo trang trọng</a>
                                    <ul class="contact-sub-menu">
                                        <li><a class="contact-sub-item" href="#">Sơ mi</a></li>
                                        <li><a class="contact-sub-item" href="#">Vest</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item contact">
                            <a class="nav-link" href="#">QUẦN</a>
                            <ul class="contact-menu">
                                <li><a class="contact-item" href="#">Quần vải</a></li>
                                <ul class="contact-sub-menu">
                                    <li><a class="contact-sub-item" href="#">Âu</a></li>
                                    <li><a class="contact-sub-item" href="#">Ống đứng</a></li>
                                </ul>
                                <li><a class="contact-item" href="#">Quần Jeans</a></li>
                                <ul class="contact-sub-menu">
                                    <li><a class="contact-sub-item" href="#">Jeans ống rộng</a></li>
                                    <li><a class="contact-sub-item" href="#">Skinny Jeans</a></li>
                                    <li><a class="contact-sub-item" href="#">Amiri</a></li>
                                </ul>
                                <li><a class="contact-item" href="#">Quần Túi hộp</a></li>
                                <li><a class="contact-item" href="#">Quần Nỉ</a></li>
                                <li><a class="contact-item" href="#">Quần Short</a></li>
                                <li><a class="contact-item" href="#">Quần Lót</a></li>
                            </ul>
                        </li>

                        <li class="nav-item contact">
                            <a class="nav-link" href="#">GIÀY</a>
                            <ul class="contact-menu">
                                <li><a class="contact-item" href="#">Giày Nike</a></li>
                                <ul class="contact-sub-menu">
                                    <li><a class="contact-sub-item" href="#">Jordan</a></li>
                                    <li><a class="contact-sub-item" href="#">Air Force 1</a></li>
                                    <li><a class="contact-sub-item" href="#">Các loại Nike khác</a></li>
                                </ul>
                                <li><a class="contact-item" href="#">Giày Addidas</a></li>
                                <li><a class="contact-item" href="#">Giày New Balance</a></li>
                                <li><a class="contact-item" href="#">Giày Reebok</a></li>
                                <li><a class="contact-item" href="#">Giày Boot</a></li>
                                <li><a class="contact-item" href="#">Giày Lười</a></li>
                                <li><a class="contact-item" href="#">Dép</a></li>
                                <ul class="contact-sub-menu">
                                    <li><a class="contact-sub-item" href="#">Crocs</a></li>
                                    <li><a class="contact-sub-item" href="#">Dép nhựa</a></li>
                                    <li><a class="contact-sub-item" href="#">Dép da</a></li>
                                </ul>
                            </ul>
                        </li>

                        <li class="nav-item contact">
                            <a class="nav-link contact" href="#">PHỤ KIỆN</a>
                            <ul class="contact-menu">
                                <li><a class="contact-item" href="#">Khuyên tai</a></li>
                                <li><a class="contact-item" href="#">Khăn quàng cổ</a></li>
                                <li><a class="contact-item" href="#">Vòng cổ</a></li>
                                <li><a class="contact-item" href="#">Vòng tay</a></li>
                                <li><a class="contact-item" href="#">Đồng hồ</a></li>
                                <li><a class="contact-item" href="#">Găng tay</a></li>
                                <li><a class="contact-item" href="#">Thắt lưng</a></li>
                            </ul>
                        </li>

                        <li class="nav-item contact">
                            <a class="nav-link" href="#">SALE</a>
                            <ul class="contact-menu">
                                <li><a class="contact-item" href="#">Link 1</a></li>
                                <li><a class="contact-item" href="#">Link 2</a></li>
                                <li><a class="contact-item" href="#">Link 3</a></li>
                                <li><a class="contact-item" href="#">Link 4</a></li>
                            </ul>
                        </li>

                        <li class="nav-item contact">
                            <a class="nav-link" href="#">VỀ CHÚNG TÔI</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!---------------------------------------------End of header------------------------------------------------------>


    <!--------------------------------------------------Slide---------------------------------------------------------->

    <section class="container slider">
        <div class="container slideCon">

            <div class="ratio ratio-21x9 slide">
                <img src="../Images/Slide/Slide01.png">
                <img src="../Images/Slide/Slide03.png">
                <img src="../Images/Slide/Slide02.png">
                <img src="../Images/Slide/Slide04.png">
            </div>
            <button class="btn prev-btn"><i class="fa-solid fa-circle-chevron-left  btn-slide"></i></button>
            <button class="btn next-btn"><i class="fa-solid fa-circle-chevron-right btn-slide"></i></button>
            <div class="ratio over">
                <div class="overlay overMCK">
                    <h2 class="text-capitalize text-black">best collection MCK</h2>
                    <h1 class="text-uppercase py-2 fw-bold text-black">now availble</h1>
                    <a href="#" class="btn mt-3 text-uppercase">shop now</a>
                </div>
                <div class="overlay overBomber">
                    <h2 class="text-capitalize text-black">best collection Bomber</h2>
                    <h1 class="text-uppercase py-2 fw-bold text-black">new arrivals</h1>
                    <a href="#" class="btn mt-3 text-uppercase">shop now</a>
                </div>
                <div class="overlay overMangto">
                    <h2 class="text-capitalize text-white">best collection mangto</h2>
                    <h1 class="text-uppercase py-2 fw-bold text-white">new arrivals</h1>
                    <a href="#" class="btn mt-3 text-uppercase">shop now</a>
                </div>
                <div class="overlay overHust">
                    <h2 class="text-capitalize red-text">best collection HUST</h2>
                    <h1 class="text-uppercase py-2 fw-bold text-black">new arrivals</h1>
                    <a href="#" class="btn mt-3 text-uppercase">shop now</a>
                </div>
            </div>



            <div class="dot-container container">
                <div class="dot dot-active"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
    </section>

    <!----------------------------------------------End of Slide------------------------------------------------------>


    <!-----------------------------------------------Category--------------------------------------------------------->

    <Section class="collection mt-5">

        <!-----------------------------------------------New----------------------------------------------------------->

        <div class="new-collection container">

            <div class="row">
                <h2 class="d-flex justify-content-center mb-4 mt-4">New Collection</h2>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <div class="card product">
                        <img src="../Images/Product/goku_red_2.png" class="card-img-top product-img product-img-second">
                        <img src="../Images/Product/goku_red_1.png" class="card-img-top product-img product-img-first">
                        <div class="ticket">New</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="color-bar">
                                    <div class="color-dot-container mb-2 ms-2">
                                        <span class="color-dot bg-red" product-img-first-id="../Images/Product/goku_red_1.png"
                                            product-img-second-id="../Images/Product/goku_red_2.png"><i
                                                class="fa-solid fa-check show"></i></span>
                                        <span class="color-dot bg-yellow"
                                            product-img-first-id="../Images/Product/goku_yellow_1.png"
                                            product-img-second-id="../Images/Product/goku_yellow_2.png"><i
                                                class="fa-solid fa-check"></i></span>
                                        <span class="color-dot bg-blue" product-img-first-id="../Images/Product/goku_blue_1.png"
                                            product-img-second-id="../Images/Product/goku_blue_2.png"><i
                                                class="fa-solid fa-check"></i></span>
                                    </div>
                                    <div class="favorite">
                                        <i class="fa-solid fa-heart favorite-icon"></i>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <a href="../Html/product.html" class="product-name mb-4">Ứ Gô Kaooo</a>
                            </div>
                            <div class="row">
                                <div class="d-flex align-items-center">
                                    <div class="discount-price">999.000đ</div>
                                    <div class="original-price ms-2">1.234.000đ</div>
                                </div>
                            </div>
                            <div class="cart-menu">
                                <div class="size-option">
                                    <div class="row"><button class="btn btn-size">S</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">M</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">L</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XL</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XXL</button>
                                    </div>
                                </div>

                                <div class="product-cart-icon">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <div class="card product">
                        <img src="../Images/Product/test2.jpg" class="card-img-top product-img product-img-second">
                        <img src="../Images/Product/test.jpg" class="card-img-top product-img product-img-first">
                        <div class="ticket">New</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="color-bar">
                                    <div class="color-dot-container mb-2 ms-2">
                                        <span class="color-dot bg-red" product-img-first-id="../Images/Product/test.jpg"
                                            product-img-second-id="../Images/Product/test2.jpg"><i
                                                class="fa-solid fa-check show"></i></span>
                                        <span class="color-dot bg-yellow"
                                            product-img-first-id="../Images/Product/testt.jpg"
                                            product-img-second-id="../Images/Product/testt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                        <span class="color-dot bg-blue" product-img-first-id="../Images/Product/testtt.jpg"
                                            product-img-second-id="../Images/Product/testtt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                    </div>
                                    <div class="favorite">
                                        <i class="fa-solid fa-heart favorite-icon"></i>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <a href="#" class="product-name mb-4">Áo Vest Kuhaha</a>
                            </div>
                            <div class="row">
                                <div class="d-flex align-items-center">
                                    <div class="discount-price">845.000đ</div>
                                    <div class="original-price ms-2">1.690.000đ</div>
                                </div>
                            </div>
                            <div class="cart-menu">
                                <div class="size-option">
                                    <div class="row"><button class="btn btn-size">S</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">M</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">L</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XL</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XXL</button>
                                    </div>
                                </div>

                                <div class="product-cart-icon">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <div class="card product">
                        <img src="../Images/Product/test2.jpg" class="card-img-top product-img product-img-second">
                        <img src="../Images/Product/test.jpg" class="card-img-top product-img product-img-first">
                        <div class="ticket">New</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="color-bar">
                                    <div class="color-dot-container mb-2 ms-2">
                                        <span class="color-dot bg-red" product-img-first-id="../Images/Product/test.jpg"
                                            product-img-second-id="../Images/Product/test2.jpg"><i
                                                class="fa-solid fa-check show"></i></span>
                                        <span class="color-dot bg-yellow"
                                            product-img-first-id="../Images/Product/testt.jpg"
                                            product-img-second-id="../Images/Product/testt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                        <span class="color-dot bg-blue" product-img-first-id="../Images/Product/testtt.jpg"
                                            product-img-second-id="../Images/Product/testtt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                    </div>
                                    <div class="favorite">
                                        <i class="fa-solid fa-heart favorite-icon"></i>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <a href="#" class="product-name mb-4">Áo Vest Kuhaha</a>
                            </div>
                            <div class="row">
                                <div class="d-flex align-items-center">
                                    <div class="discount-price">845.000đ</div>
                                    <div class="original-price ms-2">1.690.000đ</div>
                                </div>
                            </div>
                            <div class="cart-menu">
                                <div class="size-option">
                                    <div class="row"><button class="btn btn-size">S</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">M</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">L</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XL</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XXL</button>
                                    </div>
                                </div>

                                <div class="product-cart-icon">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <div class="card product">
                        <img src="../Images/Product/test2.jpg" class="card-img-top product-img product-img-second">
                        <img src="../Images/Product/test.jpg" class="card-img-top product-img product-img-first">
                        <div class="ticket">New</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="color-bar">
                                    <div class="color-dot-container mb-2 ms-2">
                                        <span class="color-dot bg-red" product-img-first-id="../Images/Product/test.jpg"
                                            product-img-second-id="../Images/Product/test2.jpg"><i
                                                class="fa-solid fa-check show"></i></span>
                                        <span class="color-dot bg-yellow"
                                            product-img-first-id="../Images/Product/testt.jpg"
                                            product-img-second-id="../Images/Product/testt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                        <span class="color-dot bg-blue" product-img-first-id="../Images/Product/testtt.jpg"
                                            product-img-second-id="../Images/Product/testtt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                    </div>
                                    <div class="favorite">
                                        <i class="fa-solid fa-heart favorite-icon"></i>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <a href="#" class="product-name mb-4">Áo Vest Kuhaha</a>
                            </div>
                            <div class="row">
                                <div class="d-flex align-items-center">
                                    <div class="discount-price">845.000đ</div>
                                    <div class="original-price ms-2">1.690.000đ</div>
                                </div>
                            </div>
                            <div class="cart-menu">
                                <div class="size-option">
                                    <div class="row"><button class="btn btn-size">S</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">M</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">L</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XL</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XXL</button>
                                    </div>
                                </div>

                                <div class="product-cart-icon">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <div class="card product">
                        <img src="../Images/Product/test2.jpg" class="card-img-top product-img product-img-second">
                        <img src="../Images/Product/test.jpg" class="card-img-top product-img product-img-first">
                        <div class="ticket">New</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="color-bar">
                                    <div class="color-dot-container mb-2 ms-2">
                                        <span class="color-dot bg-red" product-img-first-id="../Images/Product/test.jpg"
                                            product-img-second-id="../Images/Product/test2.jpg"><i
                                                class="fa-solid fa-check show"></i></span>
                                        <span class="color-dot bg-yellow"
                                            product-img-first-id="../Images/Product/testt.jpg"
                                            product-img-second-id="../Images/Product/testt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                        <span class="color-dot bg-blue" product-img-first-id="../Images/Product/testtt.jpg"
                                            product-img-second-id="../Images/Product/testtt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                    </div>
                                    <div class="favorite">
                                        <i class="fa-solid fa-heart favorite-icon"></i>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <a href="#" class="product-name mb-4">Áo Vest Kuhaha</a>
                            </div>
                            <div class="row">
                                <div class="d-flex align-items-center">
                                    <div class="discount-price">845.000đ</div>
                                    <div class="original-price ms-2">1.690.000đ</div>
                                </div>
                            </div>
                            <div class="cart-menu">
                                <div class="size-option">
                                    <div class="row"><button class="btn btn-size">S</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">M</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">L</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XL</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XXL</button>
                                    </div>
                                </div>

                                <div class="product-cart-icon">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <div class="card product">
                        <img src="../Images/Product/test2.jpg" class="card-img-top product-img product-img-second">
                        <img src="../Images/Product/test.jpg" class="card-img-top product-img product-img-first">
                        <div class="ticket">New</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="color-bar">
                                    <div class="color-dot-container mb-2 ms-2">
                                        <span class="color-dot bg-red" product-img-first-id="../Images/Product/test.jpg"
                                            product-img-second-id="../Images/Product/test2.jpg"><i
                                                class="fa-solid fa-check show"></i></span>
                                        <span class="color-dot bg-yellow"
                                            product-img-first-id="../Images/Product/testt.jpg"
                                            product-img-second-id="../Images/Product/testt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                        <span class="color-dot bg-blue" product-img-first-id="../Images/Product/testtt.jpg"
                                            product-img-second-id="../Images/Product/testtt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                    </div>
                                    <div class="favorite">
                                        <i class="fa-solid fa-heart favorite-icon"></i>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <a href="#" class="product-name mb-4">Áo Vest Kuhaha</a>
                            </div>
                            <div class="row">
                                <div class="d-flex align-items-center">
                                    <div class="discount-price">845.000đ</div>
                                    <div class="original-price ms-2">1.690.000đ</div>
                                </div>
                            </div>
                            <div class="cart-menu">
                                <div class="size-option">
                                    <div class="row"><button class="btn btn-size">S</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">M</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">L</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XL</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XXL</button>
                                    </div>
                                </div>

                                <div class="product-cart-icon">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <div class="card product">
                        <img src="../Images/Product/test2.jpg" class="card-img-top product-img product-img-second">
                        <img src="../Images/Product/test.jpg" class="card-img-top product-img product-img-first">
                        <div class="ticket">New</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="color-bar">
                                    <div class="color-dot-container mb-2 ms-2">
                                        <span class="color-dot bg-red" product-img-first-id="../Images/Product/test.jpg"
                                            product-img-second-id="../Images/Product/test2.jpg"><i
                                                class="fa-solid fa-check show"></i></span>
                                        <span class="color-dot bg-yellow"
                                            product-img-first-id="../Images/Product/testt.jpg"
                                            product-img-second-id="../Images/Product/testt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                        <span class="color-dot bg-blue" product-img-first-id="../Images/Product/testtt.jpg"
                                            product-img-second-id="../Images/Product/testtt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                    </div>
                                    <div class="favorite">
                                        <i class="fa-solid fa-heart favorite-icon"></i>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <a href="#" class="product-name mb-4">Áo Vest Kuhaha</a>
                            </div>
                            <div class="row">
                                <div class="d-flex align-items-center">
                                    <div class="discount-price">845.000đ</div>
                                    <div class="original-price ms-2">1.690.000đ</div>
                                </div>
                            </div>
                            <div class="cart-menu">
                                <div class="size-option">
                                    <div class="row"><button class="btn btn-size">S</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">M</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">L</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XL</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XXL</button>
                                    </div>
                                </div>

                                <div class="product-cart-icon">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <div class="card product">
                        <img src="../Images/Product/test2.jpg" class="card-img-top product-img product-img-second">
                        <img src="../Images/Product/test.jpg" class="card-img-top product-img product-img-first">
                        <div class="ticket">New</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="color-bar">
                                    <div class="color-dot-container mb-2 ms-2">
                                        <span class="color-dot bg-red" product-img-first-id="../Images/Product/test.jpg"
                                            product-img-second-id="../Images/Product/test2.jpg"><i
                                                class="fa-solid fa-check show"></i></span>
                                        <span class="color-dot bg-yellow"
                                            product-img-first-id="../Images/Product/testt.jpg"
                                            product-img-second-id="../Images/Product/testt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                        <span class="color-dot bg-blue" product-img-first-id="../Images/Product/testtt.jpg"
                                            product-img-second-id="../Images/Product/testtt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                    </div>
                                    <div class="favorite">
                                        <i class="fa-solid fa-heart favorite-icon"></i>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <a href="#" class="product-name mb-4">Áo Vest Kuhaha</a>
                            </div>
                            <div class="row">
                                <div class="d-flex align-items-center">
                                    <div class="discount-price">845.000đ</div>
                                    <div class="original-price ms-2">1.690.000đ</div>
                                </div>
                            </div>
                            <div class="cart-menu">
                                <div class="size-option">
                                    <div class="row"><button class="btn btn-size">S</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">M</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">L</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XL</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XXL</button>
                                    </div>
                                </div>

                                <div class="product-cart-icon">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="d-flex justify-content-center mb-4">
                    <a href="category.html" class="view-all">Xem tất cả</a>
                </div>
                <div class="straight-line"></div>
            </div>

        </div>

        <!-----------------------------------------------End of New----------------------------------------------------------->

        <!-------------------------------------------------Hot----------------------------------------------------------->


        <div class="hot-collection container">

            <div class="row">
                <h2 class="d-flex justify-content-center mb-4 mt-4">Hot Collection</h2>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <div class="card product">
                        <img src="../Images/Product/test2.jpg" class="card-img-top product-img product-img-second">
                        <img src="../Images/Product/test.jpg" class="card-img-top product-img product-img-first">
                        <div class="ticket">New</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="color-bar">
                                    <div class="color-dot-container mb-2 ms-2">
                                        <span class="color-dot bg-red" product-img-first-id="../Images/Product/test.jpg"
                                            product-img-second-id="../Images/Product/test2.jpg"><i
                                                class="fa-solid fa-check show"></i></span>
                                        <span class="color-dot bg-yellow"
                                            product-img-first-id="../Images/Product/testt.jpg"
                                            product-img-second-id="../Images/Product/testt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                        <span class="color-dot bg-blue" product-img-first-id="../Images/Product/testtt.jpg"
                                            product-img-second-id="../Images/Product/testtt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                    </div>
                                    <div class="favorite">
                                        <i class="fa-solid fa-heart favorite-icon"></i>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <a href="#" class="product-name mb-4">Áo Vest Kuhaha</a>
                            </div>
                            <div class="row">
                                <div class="d-flex align-items-center">
                                    <div class="discount-price">845.000đ</div>
                                    <div class="original-price ms-2">1.690.000đ</div>
                                </div>
                            </div>
                            <div class="cart-menu">
                                <div class="size-option">
                                    <div class="row"><button class="btn btn-size">S</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">M</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">L</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XL</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XXL</button>
                                    </div>
                                </div>

                                <div class="product-cart-icon">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <div class="card product">
                        <img src="../Images/Product/test2.jpg" class="card-img-top product-img product-img-second">
                        <img src="../Images/Product/test.jpg" class="card-img-top product-img product-img-first">
                        <div class="ticket">New</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="color-bar">
                                    <div class="color-dot-container mb-2 ms-2">
                                        <span class="color-dot bg-red" product-img-first-id="../Images/Product/test.jpg"
                                            product-img-second-id="../Images/Product/test2.jpg"><i
                                                class="fa-solid fa-check show"></i></span>
                                        <span class="color-dot bg-yellow"
                                            product-img-first-id="../Images/Product/testt.jpg"
                                            product-img-second-id="../Images/Product/testt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                        <span class="color-dot bg-blue" product-img-first-id="../Images/Product/testtt.jpg"
                                            product-img-second-id="../Images/Product/testtt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                    </div>
                                    <div class="favorite">
                                        <i class="fa-solid fa-heart favorite-icon"></i>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <a href="#" class="product-name mb-4">Áo Vest Kuhaha</a>
                            </div>
                            <div class="row">
                                <div class="d-flex align-items-center">
                                    <div class="discount-price">845.000đ</div>
                                    <div class="original-price ms-2">1.690.000đ</div>
                                </div>
                            </div>
                            <div class="cart-menu">
                                <div class="size-option">
                                    <div class="row"><button class="btn btn-size">S</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">M</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">L</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XL</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XXL</button>
                                    </div>
                                </div>

                                <div class="product-cart-icon">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <div class="card product">
                        <img src="../Images/Product/test2.jpg" class="card-img-top product-img product-img-second">
                        <img src="../Images/Product/test.jpg" class="card-img-top product-img product-img-first">
                        <div class="ticket">New</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="color-bar">
                                    <div class="color-dot-container mb-2 ms-2">
                                        <span class="color-dot bg-red" product-img-first-id="../Images/Product/test.jpg"
                                            product-img-second-id="../Images/Product/test2.jpg"><i
                                                class="fa-solid fa-check show"></i></span>
                                        <span class="color-dot bg-yellow"
                                            product-img-first-id="../Images/Product/testt.jpg"
                                            product-img-second-id="../Images/Product/testt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                        <span class="color-dot bg-blue" product-img-first-id="../Images/Product/testtt.jpg"
                                            product-img-second-id="../Images/Product/testtt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                    </div>
                                    <div class="favorite">
                                        <i class="fa-solid fa-heart favorite-icon"></i>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <a href="#" class="product-name mb-4">Áo Vest Kuhaha</a>
                            </div>
                            <div class="row">
                                <div class="d-flex align-items-center">
                                    <div class="discount-price">845.000đ</div>
                                    <div class="original-price ms-2">1.690.000đ</div>
                                </div>
                            </div>
                            <div class="cart-menu">
                                <div class="size-option">
                                    <div class="row"><button class="btn btn-size">S</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">M</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">L</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XL</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XXL</button>
                                    </div>
                                </div>

                                <div class="product-cart-icon">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <div class="card product">
                        <img src="../Images/Product/test2.jpg" class="card-img-top product-img product-img-second">
                        <img src="../Images/Product/test.jpg" class="card-img-top product-img product-img-first">
                        <div class="ticket">New</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="color-bar">
                                    <div class="color-dot-container mb-2 ms-2">
                                        <span class="color-dot bg-red" product-img-first-id="../Images/Product/test.jpg"
                                            product-img-second-id="../Images/Product/test2.jpg"><i
                                                class="fa-solid fa-check show"></i></span>
                                        <span class="color-dot bg-yellow"
                                            product-img-first-id="../Images/Product/testt.jpg"
                                            product-img-second-id="../Images/Product/testt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                        <span class="color-dot bg-blue" product-img-first-id="../Images/Product/testtt.jpg"
                                            product-img-second-id="../Images/Product/testtt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                    </div>
                                    <div class="favorite">
                                        <i class="fa-solid fa-heart favorite-icon"></i>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <a href="#" class="product-name mb-4">Áo Vest Kuhaha</a>
                            </div>
                            <div class="row">
                                <div class="d-flex align-items-center">
                                    <div class="discount-price">845.000đ</div>
                                    <div class="original-price ms-2">1.690.000đ</div>
                                </div>
                            </div>
                            <div class="cart-menu">
                                <div class="size-option">
                                    <div class="row"><button class="btn btn-size">S</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">M</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">L</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XL</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XXL</button>
                                    </div>
                                </div>

                                <div class="product-cart-icon">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <div class="card product">
                        <img src="../Images/Product/test2.jpg" class="card-img-top product-img product-img-second">
                        <img src="../Images/Product/test.jpg" class="card-img-top product-img product-img-first">
                        <div class="ticket">New</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="color-bar">
                                    <div class="color-dot-container mb-2 ms-2">
                                        <span class="color-dot bg-red" product-img-first-id="../Images/Product/test.jpg"
                                            product-img-second-id="../Images/Product/test2.jpg"><i
                                                class="fa-solid fa-check show"></i></span>
                                        <span class="color-dot bg-yellow"
                                            product-img-first-id="../Images/Product/testt.jpg"
                                            product-img-second-id="../Images/Product/testt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                        <span class="color-dot bg-blue" product-img-first-id="../Images/Product/testtt.jpg"
                                            product-img-second-id="../Images/Product/testtt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                    </div>
                                    <div class="favorite">
                                        <i class="fa-solid fa-heart favorite-icon"></i>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <a href="#" class="product-name mb-4">Áo Vest Kuhaha</a>
                            </div>
                            <div class="row">
                                <div class="d-flex align-items-center">
                                    <div class="discount-price">845.000đ</div>
                                    <div class="original-price ms-2">1.690.000đ</div>
                                </div>
                            </div>
                            <div class="cart-menu">
                                <div class="size-option">
                                    <div class="row"><button class="btn btn-size">S</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">M</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">L</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XL</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XXL</button>
                                    </div>
                                </div>

                                <div class="product-cart-icon">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <div class="card product">
                        <img src="../Images/Product/test2.jpg" class="card-img-top product-img product-img-second">
                        <img src="../Images/Product/test.jpg" class="card-img-top product-img product-img-first">
                        <div class="ticket">New</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="color-bar">
                                    <div class="color-dot-container mb-2 ms-2">
                                        <span class="color-dot bg-red" product-img-first-id="../Images/Product/test.jpg"
                                            product-img-second-id="../Images/Product/test2.jpg"><i
                                                class="fa-solid fa-check show"></i></span>
                                        <span class="color-dot bg-yellow"
                                            product-img-first-id="../Images/Product/testt.jpg"
                                            product-img-second-id="../Images/Product/testt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                        <span class="color-dot bg-blue" product-img-first-id="../Images/Product/testtt.jpg"
                                            product-img-second-id="../Images/Product/testtt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                    </div>
                                    <div class="favorite">
                                        <i class="fa-solid fa-heart favorite-icon"></i>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <a href="#" class="product-name mb-4">Áo Vest Kuhaha</a>
                            </div>
                            <div class="row">
                                <div class="d-flex align-items-center">
                                    <div class="discount-price">845.000đ</div>
                                    <div class="original-price ms-2">1.690.000đ</div>
                                </div>
                            </div>
                            <div class="cart-menu">
                                <div class="size-option">
                                    <div class="row"><button class="btn btn-size">S</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">M</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">L</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XL</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XXL</button>
                                    </div>
                                </div>

                                <div class="product-cart-icon">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <div class="card product">
                        <img src="../Images/Product/test2.jpg" class="card-img-top product-img product-img-second">
                        <img src="../Images/Product/test.jpg" class="card-img-top product-img product-img-first">
                        <div class="ticket">New</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="color-bar">
                                    <div class="color-dot-container mb-2 ms-2">
                                        <span class="color-dot bg-red" product-img-first-id="../Images/Product/test.jpg"
                                            product-img-second-id="../Images/Product/test2.jpg"><i
                                                class="fa-solid fa-check show"></i></span>
                                        <span class="color-dot bg-yellow"
                                            product-img-first-id="../Images/Product/testt.jpg"
                                            product-img-second-id="../Images/Product/testt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                        <span class="color-dot bg-blue" product-img-first-id="../Images/Product/testtt.jpg"
                                            product-img-second-id="../Images/Product/testtt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                    </div>
                                    <div class="favorite">
                                        <i class="fa-solid fa-heart favorite-icon"></i>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <a href="#" class="product-name mb-4">Áo Vest Kuhaha</a>
                            </div>
                            <div class="row">
                                <div class="d-flex align-items-center">
                                    <div class="discount-price">845.000đ</div>
                                    <div class="original-price ms-2">1.690.000đ</div>
                                </div>
                            </div>
                            <div class="cart-menu">
                                <div class="size-option">
                                    <div class="row"><button class="btn btn-size">S</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">M</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">L</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XL</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XXL</button>
                                    </div>
                                </div>

                                <div class="product-cart-icon">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <div class="card product">
                        <img src="../Images/Product/test2.jpg" class="card-img-top product-img product-img-second">
                        <img src="../Images/Product/test.jpg" class="card-img-top product-img product-img-first">
                        <div class="ticket">New</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="color-bar">
                                    <div class="color-dot-container mb-2 ms-2">
                                        <span class="color-dot bg-red" product-img-first-id="../Images/Product/test.jpg"
                                            product-img-second-id="../Images/Product/test2.jpg"><i
                                                class="fa-solid fa-check show"></i></span>
                                        <span class="color-dot bg-yellow"
                                            product-img-first-id="../Images/Product/testt.jpg"
                                            product-img-second-id="../Images/Product/testt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                        <span class="color-dot bg-blue" product-img-first-id="../Images/Product/testtt.jpg"
                                            product-img-second-id="../Images/Product/testtt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                    </div>
                                    <div class="favorite">
                                        <i class="fa-solid fa-heart favorite-icon"></i>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <a href="#" class="product-name mb-4">Áo Vest Kuhaha</a>
                            </div>
                            <div class="row">
                                <div class="d-flex align-items-center">
                                    <div class="discount-price">845.000đ</div>
                                    <div class="original-price ms-2">1.690.000đ</div>
                                </div>
                            </div>
                            <div class="cart-menu">
                                <div class="size-option">
                                    <div class="row"><button class="btn btn-size">S</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">M</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">L</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XL</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XXL</button>
                                    </div>
                                </div>

                                <div class="product-cart-icon">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="d-flex justify-content-center mb-4">
                    <a href="#" class="view-all">Xem tất cả</a>
                </div>
                <div class="straight-line"></div>
            </div>

        </div>

        <!-----------------------------------------------End of Hot----------------------------------------------------------->

        <!--------------------------------------------------Sale----------------------------------------------------------->

        <div class="new-collection container">

            <div class="row">
                <h2 class="d-flex justify-content-center mb-4 mt-4">Sale Collection</h2>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <div class="card product">
                        <img src="../Images/Product/test2.jpg" class="card-img-top product-img product-img-second">
                        <img src="../Images/Product/test.jpg" class="card-img-top product-img product-img-first">
                        <div class="ticket">New</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="color-bar">
                                    <div class="color-dot-container mb-2 ms-2">
                                        <span class="color-dot bg-red" product-img-first-id="../Images/Product/test.jpg"
                                            product-img-second-id="../Images/Product/test2.jpg"><i
                                                class="fa-solid fa-check show"></i></span>
                                        <span class="color-dot bg-yellow"
                                            product-img-first-id="../Images/Product/testt.jpg"
                                            product-img-second-id="../Images/Product/testt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                        <span class="color-dot bg-blue" product-img-first-id="../Images/Product/testtt.jpg"
                                            product-img-second-id="../Images/Product/testtt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                    </div>
                                    <div class="favorite">
                                        <i class="fa-solid fa-heart favorite-icon"></i>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <a href="#" class="product-name mb-4">Áo Vest Kuhaha</a>
                            </div>
                            <div class="row">
                                <div class="d-flex align-items-center">
                                    <div class="discount-price">845.000đ</div>
                                    <div class="original-price ms-2">1.690.000đ</div>
                                </div>
                            </div>
                            <div class="cart-menu">
                                <div class="size-option">
                                    <div class="row"><button class="btn btn-size">S</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">M</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">L</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XL</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XXL</button>
                                    </div>
                                </div>

                                <div class="product-cart-icon">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <div class="card product">
                        <img src="../Images/Product/test2.jpg" class="card-img-top product-img product-img-second">
                        <img src="../Images/Product/test.jpg" class="card-img-top product-img product-img-first">
                        <div class="ticket">New</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="color-bar">
                                    <div class="color-dot-container mb-2 ms-2">
                                        <span class="color-dot bg-red" product-img-first-id="../Images/Product/test.jpg"
                                            product-img-second-id="../Images/Product/test2.jpg"><i
                                                class="fa-solid fa-check show"></i></span>
                                        <span class="color-dot bg-yellow"
                                            product-img-first-id="../Images/Product/testt.jpg"
                                            product-img-second-id="../Images/Product/testt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                        <span class="color-dot bg-blue" product-img-first-id="../Images/Product/testtt.jpg"
                                            product-img-second-id="../Images/Product/testtt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                    </div>
                                    <div class="favorite">
                                        <i class="fa-solid fa-heart favorite-icon"></i>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <a href="#" class="product-name mb-4">Áo Vest Kuhaha</a>
                            </div>
                            <div class="row">
                                <div class="d-flex align-items-center">
                                    <div class="discount-price">845.000đ</div>
                                    <div class="original-price ms-2">1.690.000đ</div>
                                </div>
                            </div>
                            <div class="cart-menu">
                                <div class="size-option">
                                    <div class="row"><button class="btn btn-size">S</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">M</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">L</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XL</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XXL</button>
                                    </div>
                                </div>

                                <div class="product-cart-icon">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <div class="card product">
                        <img src="../Images/Product/test2.jpg" class="card-img-top product-img product-img-second">
                        <img src="../Images/Product/test.jpg" class="card-img-top product-img product-img-first">
                        <div class="ticket">New</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="color-bar">
                                    <div class="color-dot-container mb-2 ms-2">
                                        <span class="color-dot bg-red" product-img-first-id="../Images/Product/test.jpg"
                                            product-img-second-id="../Images/Product/test2.jpg"><i
                                                class="fa-solid fa-check show"></i></span>
                                        <span class="color-dot bg-yellow"
                                            product-img-first-id="../Images/Product/testt.jpg"
                                            product-img-second-id="../Images/Product/testt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                        <span class="color-dot bg-blue" product-img-first-id="../Images/Product/testtt.jpg"
                                            product-img-second-id="../Images/Product/testtt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                    </div>
                                    <div class="favorite">
                                        <i class="fa-solid fa-heart favorite-icon"></i>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <a href="#" class="product-name mb-4">Áo Vest Kuhaha</a>
                            </div>
                            <div class="row">
                                <div class="d-flex align-items-center">
                                    <div class="discount-price">845.000đ</div>
                                    <div class="original-price ms-2">1.690.000đ</div>
                                </div>
                            </div>
                            <div class="cart-menu">
                                <div class="size-option">
                                    <div class="row"><button class="btn btn-size">S</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">M</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">L</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XL</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XXL</button>
                                    </div>
                                </div>

                                <div class="product-cart-icon">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <div class="card product">
                        <img src="../Images/Product/test2.jpg" class="card-img-top product-img product-img-second">
                        <img src="../Images/Product/test.jpg" class="card-img-top product-img product-img-first">
                        <div class="ticket">New</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="color-bar">
                                    <div class="color-dot-container mb-2 ms-2">
                                        <span class="color-dot bg-red" product-img-first-id="../Images/Product/test.jpg"
                                            product-img-second-id="../Images/Product/test2.jpg"><i
                                                class="fa-solid fa-check show"></i></span>
                                        <span class="color-dot bg-yellow"
                                            product-img-first-id="../Images/Product/testt.jpg"
                                            product-img-second-id="../Images/Product/testt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                        <span class="color-dot bg-blue" product-img-first-id="../Images/Product/testtt.jpg"
                                            product-img-second-id="../Images/Product/testtt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                    </div>
                                    <div class="favorite">
                                        <i class="fa-solid fa-heart favorite-icon"></i>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <a href="#" class="product-name mb-4">Áo Vest Kuhaha</a>
                            </div>
                            <div class="row">
                                <div class="d-flex align-items-center">
                                    <div class="discount-price">845.000đ</div>
                                    <div class="original-price ms-2">1.690.000đ</div>
                                </div>
                            </div>
                            <div class="cart-menu">
                                <div class="size-option">
                                    <div class="row"><button class="btn btn-size">S</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">M</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">L</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XL</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XXL</button>
                                    </div>
                                </div>

                                <div class="product-cart-icon">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <div class="card product">
                        <img src="../Images/Product/test2.jpg" class="card-img-top product-img product-img-second">
                        <img src="../Images/Product/test.jpg" class="card-img-top product-img product-img-first">
                        <div class="ticket">New</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="color-bar">
                                    <div class="color-dot-container mb-2 ms-2">
                                        <span class="color-dot bg-red" product-img-first-id="../Images/Product/test.jpg"
                                            product-img-second-id="../Images/Product/test2.jpg"><i
                                                class="fa-solid fa-check show"></i></span>
                                        <span class="color-dot bg-yellow"
                                            product-img-first-id="../Images/Product/testt.jpg"
                                            product-img-second-id="../Images/Product/testt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                        <span class="color-dot bg-blue" product-img-first-id="../Images/Product/testtt.jpg"
                                            product-img-second-id="../Images/Product/testtt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                    </div>
                                    <div class="favorite">
                                        <i class="fa-solid fa-heart favorite-icon"></i>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <a href="#" class="product-name mb-4">Áo Vest Kuhaha</a>
                            </div>
                            <div class="row">
                                <div class="d-flex align-items-center">
                                    <div class="discount-price">845.000đ</div>
                                    <div class="original-price ms-2">1.690.000đ</div>
                                </div>
                            </div>
                            <div class="cart-menu">
                                <div class="size-option">
                                    <div class="row"><button class="btn btn-size">S</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">M</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">L</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XL</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XXL</button>
                                    </div>
                                </div>

                                <div class="product-cart-icon">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <div class="card product">
                        <img src="../Images/Product/test2.jpg" class="card-img-top product-img product-img-second">
                        <img src="../Images/Product/test.jpg" class="card-img-top product-img product-img-first">
                        <div class="ticket">New</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="color-bar">
                                    <div class="color-dot-container mb-2 ms-2">
                                        <span class="color-dot bg-red" product-img-first-id="../Images/Product/test.jpg"
                                            product-img-second-id="../Images/Product/test2.jpg"><i
                                                class="fa-solid fa-check show"></i></span>
                                        <span class="color-dot bg-yellow"
                                            product-img-first-id="../Images/Product/testt.jpg"
                                            product-img-second-id="../Images/Product/testt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                        <span class="color-dot bg-blue" product-img-first-id="../Images/Product/testtt.jpg"
                                            product-img-second-id="../Images/Product/testtt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                    </div>
                                    <div class="favorite">
                                        <i class="fa-solid fa-heart favorite-icon"></i>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <a href="#" class="product-name mb-4">Áo Vest Kuhaha</a>
                            </div>
                            <div class="row">
                                <div class="d-flex align-items-center">
                                    <div class="discount-price">845.000đ</div>
                                    <div class="original-price ms-2">1.690.000đ</div>
                                </div>
                            </div>
                            <div class="cart-menu">
                                <div class="size-option">
                                    <div class="row"><button class="btn btn-size">S</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">M</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">L</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XL</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XXL</button>
                                    </div>
                                </div>

                                <div class="product-cart-icon">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <div class="card product">
                        <img src="../Images/Product/test2.jpg" class="card-img-top product-img product-img-second">
                        <img src="../Images/Product/test.jpg" class="card-img-top product-img product-img-first">
                        <div class="ticket">New</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="color-bar">
                                    <div class="color-dot-container mb-2 ms-2">
                                        <span class="color-dot bg-red" product-img-first-id="../Images/Product/test.jpg"
                                            product-img-second-id="../Images/Product/test2.jpg"><i
                                                class="fa-solid fa-check show"></i></span>
                                        <span class="color-dot bg-yellow"
                                            product-img-first-id="../Images/Product/testt.jpg"
                                            product-img-second-id="../Images/Product/testt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                        <span class="color-dot bg-blue" product-img-first-id="../Images/Product/testtt.jpg"
                                            product-img-second-id="../Images/Product/testtt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                    </div>
                                    <div class="favorite">
                                        <i class="fa-solid fa-heart favorite-icon"></i>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <a href="#" class="product-name mb-4">Áo Vest Kuhaha</a>
                            </div>
                            <div class="row">
                                <div class="d-flex align-items-center">
                                    <div class="discount-price">845.000đ</div>
                                    <div class="original-price ms-2">1.690.000đ</div>
                                </div>
                            </div>
                            <div class="cart-menu">
                                <div class="size-option">
                                    <div class="row"><button class="btn btn-size">S</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">M</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">L</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XL</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XXL</button>
                                    </div>
                                </div>

                                <div class="product-cart-icon">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <div class="card product">
                        <img src="../Images/Product/test2.jpg" class="card-img-top product-img product-img-second">
                        <img src="../Images/Product/test.jpg" class="card-img-top product-img product-img-first">
                        <div class="ticket">New</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="color-bar">
                                    <div class="color-dot-container mb-2 ms-2">
                                        <span class="color-dot bg-red" product-img-first-id="../Images/Product/test.jpg"
                                            product-img-second-id="../Images/Product/test2.jpg"><i
                                                class="fa-solid fa-check show"></i></span>
                                        <span class="color-dot bg-yellow"
                                            product-img-first-id="../Images/Product/testt.jpg"
                                            product-img-second-id="../Images/Product/testt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                        <span class="color-dot bg-blue" product-img-first-id="../Images/Product/testtt.jpg"
                                            product-img-second-id="../Images/Product/testtt2.jpg"><i
                                                class="fa-solid fa-check"></i></span>
                                    </div>
                                    <div class="favorite">
                                        <i class="fa-solid fa-heart favorite-icon"></i>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <a href="#" class="product-name mb-4">Áo Vest Kuhaha</a>
                            </div>
                            <div class="row">
                                <div class="d-flex align-items-center">
                                    <div class="discount-price">845.000đ</div>
                                    <div class="original-price ms-2">1.690.000đ</div>
                                </div>
                            </div>
                            <div class="cart-menu">
                                <div class="size-option">
                                    <div class="row"><button class="btn btn-size">S</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">M</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">L</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XL</button>
                                    </div>
                                    <div class="row"><button class="btn btn-size">XXL</button>
                                    </div>
                                </div>

                                <div class="product-cart-icon">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="d-flex justify-content-center mb-4">
                    <a href="#" class="view-all">Xem tất cả</a>
                </div>
            </div>



        </div>

        <!-----------------------------------------------End of Sale----------------------------------------------------------->


    </Section>

    <!--------------------------------------------End of Category------------------------------------------------------>


    <!------------------------------------------------Footer---------------------------------------------------------->

    <footer>
        <div class="conatiner">
            <div class="row footer-top">

                <div class="col mt-3">

                    <div class="row d-flex justify-content-center">
                        <img src="../Images/Icon/logo.png" class="footer-img">
                    </div>

                    <div class="row m-lg-1">
                        <p> Công Ty TNHH TM và Đầu Tư Quốc Tế Hehe <br />
                            Kuwado - Nhà sưu tầm và phân phối chính hãng các thương hiệu hàng đầu Việt Nam <br />
                        </p>
                    </div>

                    <div class="row m-lg-1">
                        <h4 class="text-uppercase">Hệ thống cửa hàng</h4>
                    </div>

                    <div class="row m-lg-1">
                        <div class="row">
                            <div class="col-1">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="col-11">
                                <p>Cơ sở 1: 123 Lưu Việt Hoàn - Phường Haha - Quận Hehe - Hà Nội</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-1">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="col-11">
                                <p>Hotline: 0372575757</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-1">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="col-11">
                                <p>Cơ sở 2: 5723 Kuwado - Phường QuacQuac - Quận MeoMeo - Hà Nội</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-1">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="col-11">
                                <p>Hotline: 0372232323</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-1">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="col-11">
                                <p>Kuwashop@service.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col mt-3">
                    <h3>Giới thiệu</h3>
                    <ul class="footer-list list-unstyled mt-3">
                        <li class="footer-list-item mb-4 ps-3"><a href="#" class="text-decoration-none">Về KuwaShop</a>
                        </li>
                        <li class="footer-list-item mb-4 ps-3"><a href="#" class="text-decoration-none">Tuyển dụng</a>
                        </li>
                        <li class="footer-list-item mb-4 ps-3"><a href="#" class="text-decoration-none">Hệ thống cửa
                                hàng</a></li>
                    </ul>
                </div>

                <div class="col mt-3">
                    <h3>Chính sách khách hàng</h3>
                    <ul class="footer-list list-unstyled mt-3">
                        <li class="footer-list-item mb-4 ps-3"><a href="#" class="text-decoration-none">Chính sách điều
                                khoản</a></li>
                        <li class="footer-list-item mb-4 ps-3"><a href="#" class="text-decoration-none">Hướng dẫn mua
                                bán</a></li>
                        <li class="footer-list-item mb-4 ps-3"><a href="#" class="text-decoration-none">Chính sách thanh
                                toán</a></li>
                        <li class="footer-list-item mb-4 ps-3"><a href="#" class="text-decoration-none">Chính sách đổi
                                trả</a></li>
                        <li class="footer-list-item mb-4 ps-3"><a href="#" class="text-decoration-none">Chính sách bảo
                                hành</a></li>
                        <li class="footer-list-item mb-4 ps-3"><a href="#" class="text-decoration-none">Chính sách vận
                                chuyển</a></li>
                        <li class="footer-list-item mb-4 ps-3"><a href="#" class="text-decoration-none">Chính sách thẻ
                                thành viên</a></li>
                        <li class="footer-list-item mb-4 ps-3"><a href="#" class="text-decoration-none">Q&A </a></li>
                    </ul>
                </div>

                <div class="col mt-3">
                    <h3>Thông tin liên hệ</h3>
                    <ul class="footer-list list-unstyled mt-3 me-3 d-flex justify-content-between">
                        <li class="footer-list-item mb-4 ps-3 d-inline"><a href="#" class="text-decoration-none"><img
                                    src="../Images/Icon/ic_fb.svg" class="footer-icon"></a></li>
                        <li class="footer-list-item mb-4 ps-3 d-inline"><a href="#" class="text-decoration-none"><img
                                    src="../Images/Icon/ic_gg.svg" class="footer-icon"></a></li>
                        <li class="footer-list-item mb-4 ps-3 d-inline"><a href="#" class="text-decoration-none"><img
                                    src="../Images/Icon/ic_instagram.webp" class="footer-icon"></a></li>
                        <li class="footer-list-item mb-4 ps-3 d-inline"><a href="#" class="text-decoration-none"><img
                                    src="../Images/Icon/ic_pinterest.png" class="footer-icon"></a></li>
                        <li class="footer-list-item mb-4 ps-3 d-inline"><a href="#" class="text-decoration-none"><img
                                    src="../Images/Icon/ic_ytb.svg" class="footer-icon"></a></li>
                    </ul>

                    <div class="footer-register-form">

                        <p class="title-footer">Nhận thông tin các chương trình của KuwaShop</p>
                        <form class="d-flex footer-subscribe">
                            <input id="footer-email-subscribe" type="text" name="email" placeholder="Nhập địa chỉ email"
                                required="required">
                            <div class="footer-btn-submit">
                                <input id="footer-btn-submit" class="footer-form-submit" value="Đăng ký" type="submit">
                            </div>
                        </form>


                        <div id="footer-subscribe-success"
                            class="fixed-bottom mb-3 ps-2 bg-success text-white footer-subscribe-notice"><i
                                class="fa-solid fa-check footer-icon-notice"></i>Bạn đã đăng ký thành công</div>

                        <div id="footer-subscribe-error"
                            class="fixed-bottom mb-3 ps-2 bg-danger text-white footer-subscribe-notice"><i
                                class="fa-solid fa-circle-exclamation footer-icon-notice"></i>Email không hợp lệ!</div>

                        <div id="footer-subscribe-fail"
                            class="fixed-bottom mb-3 ps-2 bg-warning text-black footer-subscribe-notice"><i
                                class="fa-solid fa-triangle-exclamation footer-icon-notice"></i>Email đã tồn tại!</div>
                    </div>

                    <div class="doraemon d-flex align-items-center justify-content-center">
                        <img src="../Images/Dong/doraemon_lacvong.gif" alt="" class="">

                    </div>
                </div>
            </div>

            <div class="row footer-bottom">

                <div class="col-8">
                    <div class="row d-flex ms-3">
                        <p class="red-text mt-2 d-flex align-items-center justify-content-center footer-text" style="display: inline-block;">Nhãn hiệu "KuwaShop" đã được ký kết bởi Hehe & Haha</p>
                    </div>
                    <div class="row d-flex align-items-center justify-content-center">
                        <img src="../Images/Background/bg_goku_frieza.png" alt="" class="img-goku-frieza img-fluid" >
                    </div>
                </div>
                
                

                <div class="col-4">
                    <img src="../Images/Funny/hehe.jpg" class="footer-last-img">
                </div>
            </div>
        </div>

    </footer>

    <!--------------------------------------------------End of footer------------------------------------------------------->

    <!--Java Script-->
    <script src="../Js/main.js"></script> <!--Main-->
    <script src="../Js/slide.js"></script> <!--Slide-->
    <script src="../Js/product.js"></script> <!--Slide-->
    <!--End of JS-->
</body>


</html>