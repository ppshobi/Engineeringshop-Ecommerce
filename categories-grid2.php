<!DOCTYPE html>
<html lang='en' xmlns='http://www.w3.org/1999/xhtml'>


<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Categories Grid2</title>
    <link rel='stylesheet' href='assets/css/bootstrap.min.css'>
    <link rel='stylesheet' href='assets/css/owl.carousel.min.css'>
    <link rel='stylesheet' href='assets/css/animated.css'>
    <link rel='stylesheet' href='assets/css/font-awesome.css'>
    <link rel='stylesheet' href='assets/css/ui.css'>
    <link rel='stylesheet' href='assets/css/jquery.mmenu.all.css'>
    <link rel='stylesheet' href='assets/css/flaticon.css'>
    <link rel='stylesheet' href='assets/css/style.css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i;Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
</head>
<body>
    <header class="header header-style2">
        <div class="header-mid">
            <div class="container">
                <div class="header-mid-left">
                    <p class="wellcome-to">Wellcome to Super Market</p>
                    <p class="register-or-login">
                        <a href="#" class="register">Register</a>
                        or
                        <a href="#" class="login">Login</a>
                    </p>
                </div>
                <div class="header-mid-right">
                    <div class="header-mid-right-content">
                        <a href="#">
                            <i class="flaticon-user-outline"></i>
                            My Account
                        </a>
                    </div>
                    <div class="header-mid-right-content">
                        <a href="#">
                            <i class="flaticon-like"></i>
                            My Wishlist
                        </a>
                    </div>
                    <div class="header-mid-right-content">
                        <a href="#">
                            <i class="flaticon-check-square"></i>
                            Check Out
                        </a>
                    </div>
                    <div class="header-mid-right-content country-select-menu">
                        <div class="country-select">
                            <div class="country select">
                                <img src="assets/images/flag.jpg" alt="flag" width="24" height="17">
                                English
                            </div>
                            <div class="country-dropdown">
                                <div class="country">
                                    <img src="assets/images/flag2.jpg" alt="flag" width="24" height="17">
                                    Hungary
                                </div>
                                <div class="country">
                                    <img src="assets/images/flag3.jpg" alt="flag" width="24" height="17">
                                    German
                                </div>
                                <div class="country">
                                    <img src="assets/images/flag4.jpg" alt="flag" width="24" height="17">
                                    French
                                </div>
                                <div class="country">
                                    <img src="assets/images/flag5.jpg" alt="flag" width="24" height="17">
                                    Canada
                                </div>
                                <div class="country">
                                    <img src="assets/images/flag6.jpg" alt="flag" width="24" height="17">
                                    Australia
                                </div>
                            </div>
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </div>

                    </div>
                    <div class="header-mid-right-content money-select-menu">
                        <div class="money-select">
                            <div class="money select">
                                USD
                            </div>
                            <div class="money-dropdown">
                                <div class="money">
                                    EGP
                                </div>
                                <div class="money">
                                    EURO
                                </div>
                                <div class="money">
                                    USD
                                </div>

                            </div>
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-bottom-left">
                    <h1 class="logo">
                        <a href="index.html">
                            <img src="assets/images/logo.png" alt="logo">
                        </a>
                    </h1>
                    <div class="header-search">
                        <form action="http://kute-themes.com/html/supermarket/html/form.php" class="form form-search-header">
                            <select name="show-categories" id="show-categories">
                                <option value="all">All Categories</option>
                                <option value="9">9 Categories</option>
                            </select>
                            <input type="text" placeholder="Search...">
                            <button class="button-search"><i class="flaticon-search"></i></button>
                        </form>
                    </div>
                </div>
                <div class="header-bottom-right">
                    <div class="header-bottom-right-content">
                        <a href="#">
                            <i class="flaticon-like"></i>
                            Favorites
                        </a>
                    </div>
                    <div class="header-bottom-right-content cart-menu-relative">
                        <div class="cart-menu">
                            <a href="#">
                                <i class="flaticon-commerce"></i>
                                Cart
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                                <p class="cart-amount">6</p>
                            </a>
                        </div>
                        <div class="cart-hover">
                            <div class="cart-hover-title">Your Products <span>Prices</span></div>
                            <ul class="list-hover-cart">
                                <li class="hover-cart-item">
                                    <a href="#" class="img-hover-cart">
                                        <img src="assets/images/img-hover-cart.jpg" alt="img-hover-cart" width="75" height="89">
                                        <span class="delete-product-hover-cart"><i class="fa fa-times-circle" aria-hidden="true"></i></span>
                                    </a>
                                    <div class="text-hover-cart">
                                        <a href="#" class="name-hover-cart">Men's Skagen Watch
                                            Vesion 2.0</a>
                                        <div class="quantity">
                                            <p class="quanlity-hover-cart">Quanlity: <span>1</span></p>
                                        </div>
                                    </div>
                                    <div class="price-hover-cart">$150</div>
                                </li>
                            </ul>
                            <div class="subtotal-hover-cart">Subtotal <span>$150</span></div>
                            <div class="button-cart-hover">
                                <a href="#" class="go-to-cart button">Go to cart</a>
                                <a href="#" class="check-out button orange">Check Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-primary">
            <div class="container">
                <a href="#categories-menu" class="menu-button categories-menu-button">
                    Categories<span class="flaticon-bars"></span>
                </a>
                <nav class="menu-item has-mega-menu" id="categories-menu">
                    <ul class="menu">
                        <li class="menu-item">
                            <a href="#">Categories</a>
                            <span class="click-categories flaticon-bars"></span>
                            <div class="category-drop-list">
                                <div class="category-drop-list-inner">
                                    <ul class="sub-menu sub-menu-open">
                                        <li class="menu-item"><a href="#">Electronics</a></li>
                                        <li class="menu-item"><a href="#">Smartphone & Table</a></li>
                                        <li class="menu-item"><a href="#">Television</a></li>
                                        <li class="menu-item"><a href="#">Shoes & Accessories</a></li>
                                        <li class="menu-item"><a href="#">Camera & Photo</a></li>
                                        <li class="menu-item"><a href="#">Watch & Jewellry</a></li>
                                        <li class="menu-item"><a href="#">Accessories</a></li>
                                        <li class="menu-item"><a href="#">Sport & Outdoors</a></li>
                                        <li class="menu-item"><a href="#">Computer & Networking </a></li>
                                        <li class="menu-item"><a href="#">Flashlights & Lamps</a></li>
                                        <li class="menu-item"><a href="#">Fashion & Accecssories</a></li>
                                        <li class="menu-item"><a href="#">Watch & Shoes</a></li>
                                        <li class="menu-item"><a href="#">Flashlights & Lamps</a></li>
                                        <li class="menu-item"><a href="#">Fashion & Accecssories</a></li>
                                        <li class="menu-item"><a href="#">Watch & Shoes</a></li>
                                    </ul>
                                    <span class="more-categories open-cate">More Categories</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
                <a href="#primary-navigation" class="menu-button primary-navigation-button">
                    <span class="flaticon-bars"></span>Main Menu
                </a>
                <nav id="primary-navigation" class="site-navigation main-menu menu-home1">
                    <ul id="primary-menu" class="menu">
                        <li class="menu-item has-childrent">
                            <a href="#">Home</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="index.html">Home 1</a></li>
                                <li class="menu-item"><a href="home-v2.html">Home 2</a></li>
                                <li class="menu-item"><a href="home-v3.html">Home 3</a></li>
                                <li class="menu-item"><a href="home-v4.html">Home 4</a></li>
                                <li class="menu-item"><a href="home-v5.html">Home 5</a></li>
                                <li class="menu-item"><a href="home-v6.html">Home 6</a></li>
                            </ul>
                        </li>
                        <li class="menu-item"><a href="#">New Arrival</a></li>
                        <li class="menu-item"><a href="#">Deals</a></li>
                        <li class="menu-item has-childrent active">
                            <a href="#">Shop</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="categories-grid.html">Categories Grid 1</a></li>
                                <li class="menu-item"><a href="category-grid-right-sidebar.html">Categories Grid 1 Right Sidebar</a></li>
                                <li class="menu-item active"><a href="categories-grid2.html">Categories Grid 2</a></li>
                                <li class="menu-item"><a href="categories-grid2-right-sidebar.html">Categories Grid 2 Right Sidebar</a></li>
                                <li class="menu-item"><a href="categories-grid3.html">Categories Grid 3</a></li>
                                <li class="menu-item"><a href="categories-list1.html">Categories List 1</a></li>
                                <li class="menu-item"><a href="categories-list1-right-sidebar.html">Categories List 1 Right Sidebar</a></li>
                                <li class="menu-item"><a href="categories-list2.html">Categories List 2</a></li>
                                <li class="menu-item"><a href="categories-list2-right-sidebar.html">Categories List 2 Right Sidebar</a></li>
                            </ul>
                        </li>


                        <li class="menu-item has-childrent">
                            <a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="blogpost.html">Blog Post</a></li>
                                <li class="menu-item"><a href="product-detail.html">Product Detail</a></li>
                                <li class="menu-item"><a href="shopping-carrt.html">Cart</a></li>
                                <li class="menu-item"><a href="checkout.html">Check Out</a></li>
                                <li class="menu-item"><a href="contact.html">Contact Us</a></li>
                                <li class="menu-item"><a href="about.html">About US</a></li>
                            </ul>
                        </li>
                        <li class="menu-item"><a href="blog.html">Blog</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- End .banner -->
    <div class="main-content categories categories-grid2" style="background-color: #F5F5F5">
        <div class="container">
            <div class="banner-categories-grid">
                <img src="assets/images/grid2.jpg" alt="banner" height="175" width="1170">
            </div>
            <div class="categories-page">
                <div class="row">
                    <div class="content col-md-9 has-sidebar-left">
                        <div class="categories-grid">
                            <div class="breadcrumb-sidebar">
                                <div class="breadcrumb-wrap">
                                    <nav class="breadcrumb-trail breadcrumbs">
                                        <ul class="trail-items">
                                            <li class="trail-item trail-begin">
                                                <a href="#"><span>Home</span></a>
                                            </li>
                                            <li class="trail-item trail-end">
                                                <span>Electronic</span>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="panel-categories">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="view-categories">
                                            <div class="click-grid color-active">
                                                <i class="flaticon-four-grid-layout-design-interface-symbol"></i>
                                            </div>
                                            <div class="click-list">
                                                <i class="flaticon-squares-gallery-grid-layout-interface-symbol"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="select-categories">
                                            <div class="select-categories-content">
                                                <span>Short by</span>
                                                <select name="position">
                                                    <option value="position1">Position</option>
                                                    <option value="position2">Position 2</option>
                                                </select>
                                            </div>
                                            <div class="select-categories-content">
                                                <span>Show</span>
                                                <select name="show">
                                                    <option value="show1">6</option>
                                                    <option value="show2">Show all</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="page-nav">
                                            <div class="page-nav-item active">1</div>
                                            <div class="page-nav-item">2</div>
                                            <div class="page-nav-item">3</div>
                                            <div class="page-nav-item"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-categories">
                                <div class="product-box">
                                    <div class="product-box-content">
                                        <figure class="img-product">
                                            <img src="assets/images/p1.jpg" alt="product" height="207" width="175">
                                            <a href="#" class="flaticon-search"></a>
                                        </figure>
                                        <div class="product-box-text">
                                            <a href="#" class="product-name">Men's Skagen Watch</a>
                                            <a href="#" class="write">Write Your Review</a>
                                            <p class="product-cost">$200.00</p>
                                            <p class="desc-product">Cum altera mandamus in, mea verear disputationi et.
                                                Vel regione discere ut, legere expetenda ut eos. In nam nibh invenire similique.
                                                Atqui mollis ea his, ius graecis accommodare te. No eam tota nostrum cotidieque.
                                            </p>
                                            <div class="product-box-bottom">
                                                <a href="#" class="add-to-cart"><i class="flaticon-commerce"></i>Add To Cart</a>
                                                <a href="#" class="wishlist"><i class="flaticon-like"></i></a>
                                                <a href="#" class="refresh-product"><i class="flaticon-arrows"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="product-box-content">
                                        <figure class="img-product">
                                            <img src="assets/images/p2.jpg" alt="product" height="207" width="175">
                                            <a href="#" class="flaticon-search"></a>
                                        </figure>
                                        <div class="product-box-text">
                                            <a href="#" class="product-name">Men's Skagen Watch</a>
                                            <a href="#" class="write">Write Your Review</a>
                                            <p class="product-cost">$200.00</p>
                                            <p class="desc-product">Cum altera mandamus in, mea verear disputationi et.
                                                Vel regione discere ut, legere expetenda ut eos. In nam nibh invenire similique.
                                                Atqui mollis ea his, ius graecis accommodare te. No eam tota nostrum cotidieque.
                                            </p>
                                            <div class="product-box-bottom">
                                                <a href="#" class="add-to-cart"><i class="flaticon-commerce"></i>Add To Cart</a>
                                                <a href="#" class="wishlist"><i class="flaticon-like"></i></a>
                                                <a href="#" class="refresh-product"><i class="flaticon-arrows"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="product-box-content">
                                        <figure class="img-product">
                                            <img src="assets/images/p3.jpg" alt="product" height="207" width="175">
                                            <a href="#" class="flaticon-search"></a>
                                        </figure>
                                        <div class="product-box-text">
                                            <a href="#" class="product-name">Men's Skagen Watch</a>
                                            <a href="#" class="write">Write Your Review</a>
                                            <p class="product-cost">$200.00</p>
                                            <p class="desc-product">Cum altera mandamus in, mea verear disputationi et.
                                                Vel regione discere ut, legere expetenda ut eos. In nam nibh invenire similique.
                                                Atqui mollis ea his, ius graecis accommodare te. No eam tota nostrum cotidieque.
                                            </p>
                                            <div class="product-box-bottom">
                                                <a href="#" class="add-to-cart"><i class="flaticon-commerce"></i>Add To Cart</a>
                                                <a href="#" class="wishlist"><i class="flaticon-like"></i></a>
                                                <a href="#" class="refresh-product"><i class="flaticon-arrows"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="product-box-content">
                                        <figure class="img-product">
                                            <img src="assets/images/p4.jpg" alt="product" height="207" width="175">
                                            <a href="#" class="flaticon-search"></a>
                                        </figure>
                                        <div class="product-box-text">
                                            <a href="#" class="product-name">Men's Skagen Watch</a>
                                            <a href="#" class="write">Write Your Review</a>
                                            <p class="product-cost">$200.00</p>
                                            <p class="desc-product">Cum altera mandamus in, mea verear disputationi et.
                                                Vel regione discere ut, legere expetenda ut eos. In nam nibh invenire similique.
                                                Atqui mollis ea his, ius graecis accommodare te. No eam tota nostrum cotidieque.
                                            </p>
                                            <div class="product-box-bottom">
                                                <a href="#" class="add-to-cart"><i class="flaticon-commerce"></i>Add To Cart</a>
                                                <a href="#" class="wishlist"><i class="flaticon-like"></i></a>
                                                <a href="#" class="refresh-product"><i class="flaticon-arrows"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="product-box-content">
                                        <figure class="img-product">
                                            <img src="assets/images/p5.jpg" alt="product" height="207" width="175">
                                            <a href="#" class="flaticon-search"></a>
                                        </figure>
                                        <div class="product-box-text">
                                            <a href="#" class="product-name">Men's Skagen Watch</a>
                                            <a href="#" class="write">Write Your Review</a>
                                            <p class="product-cost">$200.00</p>
                                            <p class="desc-product">Cum altera mandamus in, mea verear disputationi et.
                                                Vel regione discere ut, legere expetenda ut eos. In nam nibh invenire similique.
                                                Atqui mollis ea his, ius graecis accommodare te. No eam tota nostrum cotidieque.
                                            </p>
                                            <div class="product-box-bottom">
                                                <a href="#" class="add-to-cart"><i class="flaticon-commerce"></i>Add To Cart</a>
                                                <a href="#" class="wishlist"><i class="flaticon-like"></i></a>
                                                <a href="#" class="refresh-product"><i class="flaticon-arrows"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="product-box-content">
                                        <figure class="img-product">
                                            <img src="assets/images/p6.jpg" alt="product" height="207" width="175">
                                            <a href="#" class="flaticon-search"></a>
                                        </figure>
                                        <div class="product-box-text">
                                            <a href="#" class="product-name">Men's Skagen Watch</a>
                                            <a href="#" class="write">Write Your Review</a>
                                            <p class="product-cost">$200.00</p>
                                            <p class="desc-product">Cum altera mandamus in, mea verear disputationi et.
                                                Vel regione discere ut, legere expetenda ut eos. In nam nibh invenire similique.
                                                Atqui mollis ea his, ius graecis accommodare te. No eam tota nostrum cotidieque.
                                            </p>
                                            <div class="product-box-bottom">
                                                <a href="#" class="add-to-cart"><i class="flaticon-commerce"></i>Add To Cart</a>
                                                <a href="#" class="wishlist"><i class="flaticon-like"></i></a>
                                                <a href="#" class="refresh-product"><i class="flaticon-arrows"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="product-box-content">
                                        <figure class="img-product">
                                            <img src="assets/images/p1.jpg" alt="product" height="207" width="175">
                                            <a href="#" class="flaticon-search"></a>
                                        </figure>
                                        <div class="product-box-text">
                                            <a href="#" class="product-name">Men's Skagen Watch</a>
                                            <a href="#" class="write">Write Your Review</a>
                                            <p class="product-cost">$200.00</p>
                                            <p class="desc-product">Cum altera mandamus in, mea verear disputationi et.
                                                Vel regione discere ut, legere expetenda ut eos. In nam nibh invenire similique.
                                                Atqui mollis ea his, ius graecis accommodare te. No eam tota nostrum cotidieque.
                                            </p>
                                            <div class="product-box-bottom">
                                                <a href="#" class="add-to-cart"><i class="flaticon-commerce"></i>Add To Cart</a>
                                                <a href="#" class="wishlist"><i class="flaticon-like"></i></a>
                                                <a href="#" class="refresh-product"><i class="flaticon-arrows"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="product-box-content">
                                        <figure class="img-product">
                                            <img src="assets/images/p2.jpg" alt="product" height="207" width="175">
                                            <a href="#" class="flaticon-search"></a>
                                        </figure>
                                        <div class="product-box-text">
                                            <a href="#" class="product-name">Men's Skagen Watch</a>
                                            <a href="#" class="write">Write Your Review</a>
                                            <p class="product-cost">$200.00</p>
                                            <p class="desc-product">Cum altera mandamus in, mea verear disputationi et.
                                                Vel regione discere ut, legere expetenda ut eos. In nam nibh invenire similique.
                                                Atqui mollis ea his, ius graecis accommodare te. No eam tota nostrum cotidieque.
                                            </p>
                                            <div class="product-box-bottom">
                                                <a href="#" class="add-to-cart"><i class="flaticon-commerce"></i>Add To Cart</a>
                                                <a href="#" class="wishlist"><i class="flaticon-like"></i></a>
                                                <a href="#" class="refresh-product"><i class="flaticon-arrows"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="product-box-content">
                                        <figure class="img-product">
                                            <img src="assets/images/p3.jpg" alt="product" height="207" width="175">
                                            <a href="#" class="flaticon-search"></a>
                                        </figure>
                                        <div class="product-box-text">
                                            <a href="#" class="product-name">Men's Skagen Watch</a>
                                            <a href="#" class="write">Write Your Review</a>
                                            <p class="product-cost">$200.00</p>
                                            <p class="desc-product">Cum altera mandamus in, mea verear disputationi et.
                                                Vel regione discere ut, legere expetenda ut eos. In nam nibh invenire similique.
                                                Atqui mollis ea his, ius graecis accommodare te. No eam tota nostrum cotidieque.
                                            </p>
                                            <div class="product-box-bottom">
                                                <a href="#" class="add-to-cart"><i class="flaticon-commerce"></i>Add To Cart</a>
                                                <a href="#" class="wishlist"><i class="flaticon-like"></i></a>
                                                <a href="#" class="refresh-product"><i class="flaticon-arrows"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="product-box-content">
                                        <figure class="img-product">
                                            <img src="assets/images/p4.jpg" alt="product" height="207" width="175">
                                            <a href="#" class="flaticon-search"></a>
                                        </figure>
                                        <div class="product-box-text">
                                            <a href="#" class="product-name">Men's Skagen Watch</a>
                                            <a href="#" class="write">Write Your Review</a>
                                            <p class="product-cost">$200.00</p>
                                            <p class="desc-product">Cum altera mandamus in, mea verear disputationi et.
                                                Vel regione discere ut, legere expetenda ut eos. In nam nibh invenire similique.
                                                Atqui mollis ea his, ius graecis accommodare te. No eam tota nostrum cotidieque.
                                            </p>
                                            <div class="product-box-bottom">
                                                <a href="#" class="add-to-cart"><i class="flaticon-commerce"></i>Add To Cart</a>
                                                <a href="#" class="wishlist"><i class="flaticon-like"></i></a>
                                                <a href="#" class="refresh-product"><i class="flaticon-arrows"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="product-box-content">
                                        <figure class="img-product">
                                            <img src="assets/images/p5.jpg" alt="product" height="207" width="175">
                                            <a href="#" class="flaticon-search"></a>
                                        </figure>
                                        <div class="product-box-text">
                                            <a href="#" class="product-name">Men's Skagen Watch</a>
                                            <a href="#" class="write">Write Your Review</a>
                                            <p class="product-cost">$200.00</p>
                                            <p class="desc-product">Cum altera mandamus in, mea verear disputationi et.
                                                Vel regione discere ut, legere expetenda ut eos. In nam nibh invenire similique.
                                                Atqui mollis ea his, ius graecis accommodare te. No eam tota nostrum cotidieque.
                                            </p>
                                            <div class="product-box-bottom">
                                                <a href="#" class="add-to-cart"><i class="flaticon-commerce"></i>Add To Cart</a>
                                                <a href="#" class="wishlist"><i class="flaticon-like"></i></a>
                                                <a href="#" class="refresh-product"><i class="flaticon-arrows"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="product-box-content">
                                        <figure class="img-product">
                                            <img src="assets/images/p6.jpg" alt="product" height="207" width="175">
                                            <a href="#" class="flaticon-search"></a>
                                        </figure>
                                        <div class="product-box-text">
                                            <a href="#" class="product-name">Men's Skagen Watch</a>
                                            <a href="#" class="write">Write Your Review</a>
                                            <p class="product-cost">$200.00</p>
                                            <p class="desc-product">Cum altera mandamus in, mea verear disputationi et.
                                                Vel regione discere ut, legere expetenda ut eos. In nam nibh invenire similique.
                                                Atqui mollis ea his, ius graecis accommodare te. No eam tota nostrum cotidieque.
                                            </p>
                                            <div class="product-box-bottom">
                                                <a href="#" class="add-to-cart"><i class="flaticon-commerce"></i>Add To Cart</a>
                                                <a href="#" class="wishlist"><i class="flaticon-like"></i></a>
                                                <a href="#" class="refresh-product"><i class="flaticon-arrows"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="product-box-content">
                                        <figure class="img-product">
                                            <img src="assets/images/p1.jpg" alt="product" height="207" width="175">
                                            <a href="#" class="flaticon-search"></a>
                                        </figure>
                                        <div class="product-box-text">
                                            <a href="#" class="product-name">Men's Skagen Watch</a>
                                            <a href="#" class="write">Write Your Review</a>
                                            <p class="product-cost">$200.00</p>
                                            <p class="desc-product">Cum altera mandamus in, mea verear disputationi et.
                                                Vel regione discere ut, legere expetenda ut eos. In nam nibh invenire similique.
                                                Atqui mollis ea his, ius graecis accommodare te. No eam tota nostrum cotidieque.
                                            </p>
                                            <div class="product-box-bottom">
                                                <a href="#" class="add-to-cart"><i class="flaticon-commerce"></i>Add To Cart</a>
                                                <a href="#" class="wishlist"><i class="flaticon-like"></i></a>
                                                <a href="#" class="refresh-product"><i class="flaticon-arrows"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="product-box-content">
                                        <figure class="img-product">
                                            <img src="assets/images/p2.jpg" alt="product" height="207" width="175">
                                            <a href="#" class="flaticon-search"></a>
                                        </figure>
                                        <div class="product-box-text">
                                            <a href="#" class="product-name">Men's Skagen Watch</a>
                                            <a href="#" class="write">Write Your Review</a>
                                            <p class="product-cost">$200.00</p>
                                            <p class="desc-product">Cum altera mandamus in, mea verear disputationi et.
                                                Vel regione discere ut, legere expetenda ut eos. In nam nibh invenire similique.
                                                Atqui mollis ea his, ius graecis accommodare te. No eam tota nostrum cotidieque.
                                            </p>
                                            <div class="product-box-bottom">
                                                <a href="#" class="add-to-cart"><i class="flaticon-commerce"></i>Add To Cart</a>
                                                <a href="#" class="wishlist"><i class="flaticon-like"></i></a>
                                                <a href="#" class="refresh-product"><i class="flaticon-arrows"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="product-box-content">
                                        <figure class="img-product">
                                            <img src="assets/images/p3.jpg" alt="product" height="207" width="175">
                                            <a href="#" class="flaticon-search"></a>
                                        </figure>
                                        <div class="product-box-text">
                                            <a href="#" class="product-name">Men's Skagen Watch</a>
                                            <a href="#" class="write">Write Your Review</a>
                                            <p class="product-cost">$200.00</p>
                                            <p class="desc-product">Cum altera mandamus in, mea verear disputationi et.
                                                Vel regione discere ut, legere expetenda ut eos. In nam nibh invenire similique.
                                                Atqui mollis ea his, ius graecis accommodare te. No eam tota nostrum cotidieque.
                                            </p>
                                            <div class="product-box-bottom">
                                                <a href="#" class="add-to-cart"><i class="flaticon-commerce"></i>Add To Cart</a>
                                                <a href="#" class="wishlist"><i class="flaticon-like"></i></a>
                                                <a href="#" class="refresh-product"><i class="flaticon-arrows"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="product-box-content">
                                        <figure class="img-product">
                                            <img src="assets/images/p4.jpg" alt="product" height="207" width="175">
                                            <a href="#" class="flaticon-search"></a>
                                        </figure>
                                        <div class="product-box-text">
                                            <a href="#" class="product-name">Men's Skagen Watch</a>
                                            <a href="#" class="write">Write Your Review</a>
                                            <p class="product-cost">$200.00</p>
                                            <p class="desc-product">Cum altera mandamus in, mea verear disputationi et.
                                                Vel regione discere ut, legere expetenda ut eos. In nam nibh invenire similique.
                                                Atqui mollis ea his, ius graecis accommodare te. No eam tota nostrum cotidieque.
                                            </p>
                                            <div class="product-box-bottom">
                                                <a href="#" class="add-to-cart"><i class="flaticon-commerce"></i>Add To Cart</a>
                                                <a href="#" class="wishlist"><i class="flaticon-like"></i></a>
                                                <a href="#" class="refresh-product"><i class="flaticon-arrows"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="product-box-content">
                                        <figure class="img-product">
                                            <img src="assets/images/p5.jpg" alt="product" height="207" width="175">
                                            <a href="#" class="flaticon-search"></a>
                                        </figure>
                                        <div class="product-box-text">
                                            <a href="#" class="product-name">Men's Skagen Watch</a>
                                            <a href="#" class="write">Write Your Review</a>
                                            <p class="product-cost">$200.00</p>
                                            <p class="desc-product">Cum altera mandamus in, mea verear disputationi et.
                                                Vel regione discere ut, legere expetenda ut eos. In nam nibh invenire similique.
                                                Atqui mollis ea his, ius graecis accommodare te. No eam tota nostrum cotidieque.
                                            </p>
                                            <div class="product-box-bottom">
                                                <a href="#" class="add-to-cart"><i class="flaticon-commerce"></i>Add To Cart</a>
                                                <a href="#" class="wishlist"><i class="flaticon-like"></i></a>
                                                <a href="#" class="refresh-product"><i class="flaticon-arrows"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="product-box-content">
                                        <figure class="img-product">
                                            <img src="assets/images/p6.jpg" alt="product" height="207" width="175">
                                            <a href="#" class="flaticon-search"></a>
                                        </figure>
                                        <div class="product-box-text">
                                            <a href="#" class="product-name">Men's Skagen Watch</a>
                                            <a href="#" class="write">Write Your Review</a>
                                            <p class="product-cost">$200.00</p>
                                            <p class="desc-product">Cum altera mandamus in, mea verear disputationi et.
                                                Vel regione discere ut, legere expetenda ut eos. In nam nibh invenire similique.
                                                Atqui mollis ea his, ius graecis accommodare te. No eam tota nostrum cotidieque.
                                            </p>
                                            <div class="product-box-bottom">
                                                <a href="#" class="add-to-cart"><i class="flaticon-commerce"></i>Add To Cart</a>
                                                <a href="#" class="wishlist"><i class="flaticon-like"></i></a>
                                                <a href="#" class="refresh-product"><i class="flaticon-arrows"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="product-box-content">
                                        <figure class="img-product">
                                            <img src="assets/images/p1.jpg" alt="product" height="207" width="175">
                                            <a href="#" class="flaticon-search"></a>
                                        </figure>
                                        <div class="product-box-text">
                                            <a href="#" class="product-name">Men's Skagen Watch</a>
                                            <a href="#" class="write">Write Your Review</a>
                                            <p class="product-cost">$200.00</p>
                                            <p class="desc-product">Cum altera mandamus in, mea verear disputationi et.
                                                Vel regione discere ut, legere expetenda ut eos. In nam nibh invenire similique.
                                                Atqui mollis ea his, ius graecis accommodare te. No eam tota nostrum cotidieque.
                                            </p>
                                            <div class="product-box-bottom">
                                                <a href="#" class="add-to-cart"><i class="flaticon-commerce"></i>Add To Cart</a>
                                                <a href="#" class="wishlist"><i class="flaticon-like"></i></a>
                                                <a href="#" class="refresh-product"><i class="flaticon-arrows"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="product-box-content">
                                        <figure class="img-product">
                                            <img src="assets/images/p2.jpg" alt="product" height="207" width="175">
                                            <a href="#" class="flaticon-search"></a>
                                        </figure>
                                        <div class="product-box-text">
                                            <a href="#" class="product-name">Men's Skagen Watch</a>
                                            <a href="#" class="write">Write Your Review</a>
                                            <p class="product-cost">$200.00</p>
                                            <p class="desc-product">Cum altera mandamus in, mea verear disputationi et.
                                                Vel regione discere ut, legere expetenda ut eos. In nam nibh invenire similique.
                                                Atqui mollis ea his, ius graecis accommodare te. No eam tota nostrum cotidieque.
                                            </p>
                                            <div class="product-box-bottom">
                                                <a href="#" class="add-to-cart"><i class="flaticon-commerce"></i>Add To Cart</a>
                                                <a href="#" class="wishlist"><i class="flaticon-like"></i></a>
                                                <a href="#" class="refresh-product"><i class="flaticon-arrows"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="product-box-content">
                                        <figure class="img-product">
                                            <img src="assets/images/p3.jpg" alt="product" height="207" width="175">
                                            <a href="#" class="flaticon-search"></a>
                                        </figure>
                                        <div class="product-box-text">
                                            <a href="#" class="product-name">Men's Skagen Watch</a>
                                            <a href="#" class="write">Write Your Review</a>
                                            <p class="product-cost">$200.00</p>
                                            <p class="desc-product">Cum altera mandamus in, mea verear disputationi et.
                                                Vel regione discere ut, legere expetenda ut eos. In nam nibh invenire similique.
                                                Atqui mollis ea his, ius graecis accommodare te. No eam tota nostrum cotidieque.
                                            </p>
                                            <div class="product-box-bottom">
                                                <a href="#" class="add-to-cart"><i class="flaticon-commerce"></i>Add To Cart</a>
                                                <a href="#" class="wishlist"><i class="flaticon-like"></i></a>
                                                <a href="#" class="refresh-product"><i class="flaticon-arrows"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="product-box-content">
                                        <figure class="img-product">
                                            <img src="assets/images/p4.jpg" alt="product" height="207" width="175">
                                            <a href="#" class="flaticon-search"></a>
                                        </figure>
                                        <div class="product-box-text">
                                            <a href="#" class="product-name">Men's Skagen Watch</a>
                                            <a href="#" class="write">Write Your Review</a>
                                            <p class="product-cost">$200.00</p>
                                            <p class="desc-product">Cum altera mandamus in, mea verear disputationi et.
                                                Vel regione discere ut, legere expetenda ut eos. In nam nibh invenire similique.
                                                Atqui mollis ea his, ius graecis accommodare te. No eam tota nostrum cotidieque.
                                            </p>
                                            <div class="product-box-bottom">
                                                <a href="#" class="add-to-cart"><i class="flaticon-commerce"></i>Add To Cart</a>
                                                <a href="#" class="wishlist"><i class="flaticon-like"></i></a>
                                                <a href="#" class="refresh-product"><i class="flaticon-arrows"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="product-box-content">
                                        <figure class="img-product">
                                            <img src="assets/images/p5.jpg" alt="product" height="207" width="175">
                                            <a href="#" class="flaticon-search"></a>
                                        </figure>
                                        <div class="product-box-text">
                                            <a href="#" class="product-name">Men's Skagen Watch</a>
                                            <a href="#" class="write">Write Your Review</a>
                                            <p class="product-cost">$200.00</p>
                                            <p class="desc-product">Cum altera mandamus in, mea verear disputationi et.
                                                Vel regione discere ut, legere expetenda ut eos. In nam nibh invenire similique.
                                                Atqui mollis ea his, ius graecis accommodare te. No eam tota nostrum cotidieque.
                                            </p>
                                            <div class="product-box-bottom">
                                                <a href="#" class="add-to-cart"><i class="flaticon-commerce"></i>Add To Cart</a>
                                                <a href="#" class="wishlist"><i class="flaticon-like"></i></a>
                                                <a href="#" class="refresh-product"><i class="flaticon-arrows"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="product-box-content">
                                        <figure class="img-product">
                                            <img src="assets/images/p6.jpg" alt="product" height="207" width="175">
                                            <a href="#" class="flaticon-search"></a>
                                        </figure>
                                        <div class="product-box-text">
                                            <a href="#" class="product-name">Men's Skagen Watch</a>
                                            <a href="#" class="write">Write Your Review</a>
                                            <p class="product-cost">$200.00</p>
                                            <p class="desc-product">Cum altera mandamus in, mea verear disputationi et.
                                                Vel regione discere ut, legere expetenda ut eos. In nam nibh invenire similique.
                                                Atqui mollis ea his, ius graecis accommodare te. No eam tota nostrum cotidieque.
                                            </p>
                                            <div class="product-box-bottom">
                                                <a href="#" class="add-to-cart"><i class="flaticon-commerce"></i>Add To Cart</a>
                                                <a href="#" class="wishlist"><i class="flaticon-like"></i></a>
                                                <a href="#" class="refresh-product"><i class="flaticon-arrows"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="panel-categories">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="view-categories">
                                            <div class="click-grid">
                                                <i class="flaticon-four-grid-layout-design-interface-symbol"></i>
                                            </div>
                                            <div class="click-list">
                                                <i class="flaticon-squares-gallery-grid-layout-interface-symbol"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="select-categories">
                                            <div class="select-categories-content">
                                                <span>Short by</span>
                                                <select name="position">
                                                    <option value="position1">Position</option>
                                                    <option value="position2">Position 2</option>
                                                </select>
                                            </div>
                                            <div class="select-categories-content">
                                                <span>Show</span>
                                                <select name="show">
                                                    <option value="show1">6</option>
                                                    <option value="show2">Show all</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="page-nav">
                                            <div class="page-nav-item active">1</div>
                                            <div class="page-nav-item">2</div>
                                            <div class="page-nav-item">3</div>
                                            <div class="page-nav-item"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar col-md-3">
                        <div class="breadcrumb-sidebar">
                            <div class="breadcrumb-wrap">
                                <nav class="breadcrumb-trail breadcrumbs">
                                    <ul class="trail-items">
                                        <li class="trail-item trail-begin">
                                            <a href="#"><span>Home</span></a>
                                        </li>
                                        <li class="trail-item trail-end">
                                            <span>Electronic</span>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="sidebar-categories">
                            <div class="shop-sidebar">
                                <div class="sidebar-title">Shop By</div>
                                <div class="shop-sidebar-content">
                                    <div class="categories-sidebar">
                                        <div class="sidebar-title-section">Categories</div>
                                        <div class="categories-checkbox">
                                            <ul class="categories-list-wrap">
                                                <li><input type="checkbox" value="Smartphone & Mp3 Player"><label>Smartphone & Mp3 Player</label></li>
                                                <li><input type="checkbox" value="Network & Computer"><label>Network & Computer</label></li>
                                                <li><input type="checkbox" value="Batteries & Chargers"><label>Batteries & Chargers</label></li>
                                                <li><input type="checkbox" value="Headphone & Headset"><label>Headphone & Headset</label></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="price-sidebar">
                                        <div class="sidebar-title-section">Price</div>
                                        <div class="price-filter">
                                            <div class="slider-range ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                                <div class="filter-top">
                                                    <span class="amount">$1</span>
                                                    <span class="amount2">$150</span>
                                                    <a class="button orange" href="#">Search</a>
                                                </div>
                                                <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div>
                                                <span tabindex="0" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;">
                                            <span class="amount">$1</span>
                                        </span>
                                                <span tabindex="0" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;">
                                        <span class="amount2">$150</span>
                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="manufacture-sidebar">
                                        <div class="sidebar-title-section">Manufacture</div>
                                        <div class="categories-checkbox">
                                            <ul class="brands">
                                                <li><input type="checkbox" value="Ercol"><label>Ercol</label></li>
                                                <li><input type="checkbox" value="Duresta"><label>Duresta</label></li>
                                                <li><input type="checkbox" value="G Plan"><label>G Plan</label><br>
                                                <li><input type="checkbox" value="Parker Knoll"><label>Parker Knoll</label></li>
                                                <li><input type="checkbox" value="Collins & Hayes"><label>Collins & Hayes</label></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="color-sidebar">
                                        <div class="sidebar-title-section">Color</div>
                                        <div class="color-sidebar-content">
                                            <div class="box-color box-color-orange"></div>
                                            <span>(3)</span>
                                        </div>
                                        <div class="color-sidebar-content">
                                            <div class="box-color box-color-brown"></div>
                                            <span>(3)</span>
                                        </div>
                                        <div class="color-sidebar-content">
                                            <div class="box-color box-color-red"></div>
                                            <span>(4)</span>
                                        </div>
                                        <div class="color-sidebar-content">
                                            <div class="box-color box-color-black"></div>
                                            <span>(5)</span>
                                        </div>
                                        <div class="color-sidebar-content">
                                            <div class="box-color box-color-white">CYAL</div>
                                            <span>(2)</span>
                                        </div>
                                        <div class="color-sidebar-content">
                                            <div class="box-color box-color-cyan"></div>
                                            <span>(2)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="compare-sidebar">
                                <div class="sidebar-title">Compare Products</div>
                                <div class="compare-sidebar-content">You Have No Item Compare</div>
                            </div>
                            <div class="bestseller-sidebar">
                                <div class="sidebar-title">Bestseller Products</div>
                                <div class="bestseller-sidebar">
                                    <ul class="bestseller-list">
                                        <li class="bestseller-item">
                                            <a href="#"><img src="assets/images/sb-cat1.jpg" alt="sb" height="130" width="112"></a>
                                            <div class="bestseller-content">
                                                <a href="#" class="bestseller-text">Washing Machine Pro</a>
                                                <span>$1000.00</span>
                                            </div>
                                        </li>
                                        <li class="bestseller-item">
                                            <a href="#"><img src="assets/images/sb-cat2.jpg" alt="sb" height="130" width="112"></a>
                                            <div class="bestseller-content">
                                                <a href="#" class="bestseller-text">Washing Machine Pro</a>
                                                <span>$1000.00</span>
                                            </div>
                                        </li>
                                        <li class="bestseller-item">
                                            <a href="#"><img src="assets/images/sb-cat3.jpg" alt="sb" height="130" width="112"></a>
                                            <div class="bestseller-content">
                                                <a href="#" class="bestseller-text">Washing Machine Pro</a>
                                                <span>$1000.00</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tag-sidebar">
                                <div class="sidebar-title-section">Popular Tags</div>
                                <ul class="tag-list-sidebar">
                                    <li class="tag-sidebar-item"><a href="#">Mobile</a></li>
                                    <li class="tag-sidebar-item"><a href="#">Adss</a></li>
                                    <li class="tag-sidebar-item"><a href="#">Masem</a></li>
                                    <li class="tag-sidebar-item"><a href="#">Mudd</a></li>
                                    <li class="tag-sidebar-item"><a href="#">Atimo</a></li>
                                </ul>
                                <a href="#" class="view-all-tags">View All Tags<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-icon-box">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="icon-box style1">
                                <div class="row">
                                    <div class="col-md-4">
                                        <i class="flaticon-umbrella"></i>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="icon-box-content">
                                            <h4>Buyer Protection</h4>
                                            <p>Secure payments
                                                Guaranteed refunds
                                                Escrow protection on every oder</p>
                                            <a href="#">Read More<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-box style1">
                                <div class="row">
                                    <div class="col-md-4">
                                        <i class="flaticon-return-of-investment"></i>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="icon-box-content">
                                            <h4>RETURN & EXCHANGE</h4>
                                            <p>Wholesale products from certified
                                                Worldwide shipping
                                                Low prices from US $0.1</p>
                                            <a href="#">Read More<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-box style1">
                                <div class="row">
                                    <div class="col-md-4">
                                        <i class="flaticon-transport"></i>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="icon-box-content">
                                            <h4>FREE DELIVERY</h4>
                                            <p>Wholesale products from certified
                                                Worldwide shipping
                                                Low prices from US $0.1</p>
                                            <a href="#">Read More<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-md-3 col-sm-6 has-logo">
                        <div class="footer-top-logo">
                            <h1 class="logo">
                                <a href="index.html">
                                    <img src="assets/images/logo.png" alt="logo">
                                </a>
                            </h1>
                        </div>
                        <div class="footer-infomation">
                            <p><span>Address:</span>Example Street 68, Mahattan,
                                New York, USA</p>
                            <p><span>Phone:</span>+ 65 123 456 789</p>
                            <p><span>Email:</span><a href="#">Support@SuperMarket.com</a></p>
                        </div>

                    </div>
                    <div class="col-md-2 col-sm-6">
                        <div class="footer-top-title"><h4 class="title-footer">About</h4></div>
                        <ul class="menu-footer">
                            <li class="footer-item"><a href="#">About Us</a></li>
                            <li class="footer-item"><a href="#">Blog</a></li>
                            <li class="footer-item"><a href="#">Terms of Use</a></li>
                            <li class="footer-item"><a href="#">Privacy Policy</a></li>
                            <li class="footer-item"><a href="#">Site Map</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-6">
                        <div class="footer-top-title"><h4 class="title-footer">Customer Service</h4></div>
                        <ul class="menu-footer">
                            <li class="footer-item"><a href="#">Shipping Policy</a></li>
                            <li class="footer-item"><a href="#">Comoensation First</a></li>
                            <li class="footer-item"><a href="#">My Account</a></li>
                            <li class="footer-item"><a href="#">Return Policy</a></li>
                            <li class="footer-item"><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-6">
                        <div class="footer-top-title"><h4 class="title-footer">Products</h4></div>
                        <ul class="menu-footer">
                            <li class="footer-item"><a href="#">My Order</a></li>
                            <li class="footer-item"><a href="#">My Wishlist</a></li>
                            <li class="footer-item"><a href="#">My Credit Slip</a></li>
                            <li class="footer-item"><a href="#">My Addresses</a></li>
                            <li class="footer-item"><a href="#">New In</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 tags-footer">
                        <div class="footer-top-title"><h4 class="title-footer">Hottags</h4></div>
                        <ul class="tags footer-tags">
                            <li class="tags-item"><a href="#">Kingston</a></li>
                            <li class="tags-item"><a href="#">Android</a></li>
                            <li class="tags-item"><a href="#">Mini book</a></li>
                            <li class="tags-item"><a href="#">Mini USB</a></li>
                            <li class="tags-item"><a href="#">TMD</a></li>
                            <li class="tags-item"><a href="#">IPhone</a></li>
                            <li class="tags-item"><a href="#">PC Black</a></li>
                            <li class="tags-item"><a href="#">Sport</a></li>
                            <li class="tags-item"><a href="#">Flat</a></li>
                            <li class="tags-item"><a href="#">Shirts</a></li>
                            <li class="tags-item"><a href="#">Arrow Shirts</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-mid">
                <div class="footer-mid-text">
                    <figure><img src="assets/images/check.jpg" alt="check" height="30" width="30"></figure>
                    <p>
                        Help improve your experience on SuperMarket,<span> join our Customer Experience Improvement Program now.
                            </span> Plus,<span>
                                tell us what you think of this page</span> !
                    </p>
                </div>
                <!--<figure><img src="assets/images/img-logo-footer.jpg" alt="img-footer" height="60" width="1170"></figure>-->
                <ul>
                    <li><a href="#"><img src="assets/images/d1.jpg" alt="d" width="46" height="41"></a></li>
                    <li><a href="#"><img src="assets/images/d2.jpg" alt="d" width="51" height="41"></a></li>
                    <li><a href="#"><img src="assets/images/d3.jpg" alt="d" width="60" height="41"></a></li>
                    <li><a href="#"><img src="assets/images/d4.jpg" alt="d" width="44" height="41"></a></li>
                    <li><a href="#"><img src="assets/images/d5.jpg" alt="d" width="42" height="41"></a></li>
                    <li><a href="#"><img src="assets/images/d6.jpg" alt="d" width="85" height="41"></a></li>
                    <li><a href="#"><img src="assets/images/d7.jpg" alt="d" width="89" height="41"></a></li>
                    <li><a href="#"><img src="assets/images/d8.jpg" alt="d" width="92" height="41"></a></li>
                    <li><a href="#"><img src="assets/images/d9.jpg" alt="d" width="65" height="41"></a></li>
                    <li><a href="#"><img src="assets/images/d10.jpg" alt="d" width="91" height="41"></a></li>
                    <li><a href="#"><img src="assets/images/d11.jpg" alt="d" width="96" height="41"></a></li>
                    <li><a href="#"><img src="assets/images/d12.jpg" alt="d" width="64" height="41"></a></li>
                    <li><a href="#"><img src="assets/images/d13.jpg" alt="d" width="131" height="41"></a></li>
                    <li><a href="#"><img src="assets/images/d14.jpg" alt="d" width="94" height="41"></a></li>
                </ul>
            </div>
            <div class="footer-bottom">
                <ul class="menu-footer-bottom">
                    <li class="menu-footer-bottom-item"><a href="#">Promotions</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">My Orders</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Help</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Site Map</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Customer Service</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Most Populars</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Best Sellers</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">New Arrivals</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Special Products</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Manufacturers</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Our Stores</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Shipping</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Blog</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Payments</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Payments</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Refunds Terms & Conditions</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Policy</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Policy</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Shipping</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Payments</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Returns</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Refunds</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Warrantee</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">FAQ</a></li>
                    <li class="menu-footer-bottom-item"><a href="#">Contact</a></li>
                </ul>
                <div class="copyright">
                    <i class="fa fa-copyright" aria-hidden="true"></i>
                    Copyright 2016 <a href="#">SuperMarket</a> All rights reserved.
                </div>
            </div>
        </div>
        <a href="#" class="backtotop ts-block"><span class="pulser"> Top</span></a>
    </footer>
    <!--end footer-->
    <script type='text/javascript' src='assets/js/jquery.min.js'></script>
    <script type='text/javascript' src='assets/js/bootstrap.min.js'></script>
    <script type='text/javascript' src='assets/js/wow.min.js'></script>
    <script type='text/javascript' src='assets/js/owl.carousel.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.appear.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.countTo.js'></script>
    <script type='text/javascript' src='assets/js/ui.js'></script>
    <script type='text/javascript' src='assets/js/jquery.bxslider.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.mmenu.all.min.js'></script>
    <script type='text/javascript' src='assets/js/chosen.jquery.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.countdown.js'></script>
    <script type='text/javascript' src='assets/js/frontend.js'></script>
</body>

</html>
