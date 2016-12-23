<!DOCTYPE html>
<html lang='en' xmlns='http://www.w3.org/1999/xhtml'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Product Detail</title>
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
<body class="categories-page product-detail">
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
                        <a href="index.php">
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
                                <li class="menu-item"><a href="index.php">Home 1</a></li>
                                <li class="menu-item"><a href="home-v2.php">Home 2</a></li>
                                <li class="menu-item"><a href="home-v3.php">Home 3</a></li>
                                <li class="menu-item"><a href="home-v4.php">Home 4</a></li>
                                <li class="menu-item"><a href="home-v5.php">Home 5</a></li>
                                <li class="menu-item"><a href="home-v6.php">Home 6</a></li>
                            </ul>
                        </li>
                        <li class="menu-item"><a href="#">New Arrival</a></li>
                        <li class="menu-item"><a href="#">Deals</a></li>
                        <li class="menu-item has-childrent">
                            <a href="#">Shop</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="categories-grid.php">Categories Grid 1</a></li>
                                <li class="menu-item"><a href="category-grid-right-sidebar.php">Categories Grid 1 Right Sidebar</a></li>
                                <li class="menu-item"><a href="categories-grid2.php">Categories Grid 2</a></li>
                                <li class="menu-item"><a href="categories-grid2-right-sidebar.php">Categories Grid 2 Right Sidebar</a></li>
                                <li class="menu-item"><a href="categories-grid3.php">Categories Grid 3</a></li>
                                <li class="menu-item"><a href="categories-list1.php">Categories List 1</a></li>
                                <li class="menu-item"><a href="categories-list1-right-sidebar.php">Categories List 1 Right Sidebar</a></li>
                                <li class="menu-item"><a href="categories-list2.php">Categories List 2</a></li>
                                <li class="menu-item"><a href="categories-list2-right-sidebar.php">Categories List 2 Right Sidebar</a></li>
                            </ul>
                        </li>


                        <li class="menu-item has-childrent active">
                            <a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="blogpost.php">Blog Post</a></li>
                                <li class="menu-item active"><a href="product-detail.php">Product Detail</a></li>
                                <li class="menu-item"><a href="shopping-carrt.php">Cart</a></li>
                                <li class="menu-item"><a href="checkout.php">Check Out</a></li>
                                <li class="menu-item"><a href="contact.php">Contact Us</a></li>
                                <li class="menu-item"><a href="about.php">About US</a></li>
                            </ul>
                        </li>
                        <li class="menu-item"><a href="blog.php">Blog</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- End .banner -->
    <div class="categories main-content">
        <div class="container">
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
            <div class="product-box product-box-primary">
                <div class="product-box-content">
                    <div class="row">
                        <div class="col-md-5">
                            <figure class="img-product">
                                <img src="assets/images/img-detail.jpg" alt="product" height="536" width="467">
                                <div class="img-room"><img src="assets/images/room.jpg" alt="room" height="32" width="32"></div>
                            </figure>
                            <div class="featue-slide supermartket-owl-carousel" data-number="3" data-margin="15" data-navcontrol="yes">
                                <div class="feature-slide-item">
                                    <figure><img src="assets/images/sli-dt1.jpg" alt="feature" width="126" height="143"></figure>
                                </div>
                                <div class="feature-slide-item">
                                    <figure><img src="assets/images/sli-dt2.jpg" alt="feature" width="126" height="143"></figure>
                                </div>
                                <div class="feature-slide-item">
                                    <figure><img src="assets/images/sli-dt3.jpg" alt="feature" width="126" height="143"></figure>
                                </div>
                                <div class="feature-slide-item">
                                    <figure><img src="assets/images/sli-dt2.jpg" alt="feature" width="126" height="143"></figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="single-product-content">
                                <h3 class="product-title">Men's Skagen Watch</h3>
                                <a href="#" class="write">Write Your Review</a>
                                <p class="product-cost">$200.00</p>
                                <p class="stock">Availability:<span><i class="fa fa-check-square-o" aria-hidden="true"></i>In stock</span></p>
                                <div class="desc-product-title">Quick OverView</div>
                                <div class="desc-product">Cum altera mandamus in, mea verear disputationi et.
                                    Vel regione discere ut, legere expetenda ut eos. In nam nibh invenire similique.
                                    Atqui mollis ea his, ius graecis accommodare te. No eam tota nostrum cotidieque.
                                </div>
                                <div class="social">
                                    <div class="facebook-social">
                                        <a href="#"><img src="assets/images/detail1.jpg" alt="detail1" height="20" width="53"></a>
                                        <span class="amount-folow">5</span>
                                    </div>
                                    <div class="tweet-social">
                                        <a href="#"><img src="assets/images/detail2.jpg" alt="detail1" height="20" width="60"></a>
                                    </div>
                                    <div class="pin-it-social">
                                        <a href="#"><img src="assets/images/detail3.jpg" alt="detail1" height="20" width="38"></a>
                                    </div>
                                    <div class="share-social">
                                        <a href="#"><img src="assets/images/detail4.jpg" alt="detail1" height="20" width="50"></a>
                                        <span class="amount-folow">6</span>
                                    </div>
                                </div>
                                <div class="select-detail">
                                    <span>Option1:</span>
                                    <select name="selectdetail1" id="selectdetail1">
                                        <option value="op1">--Please Select--</option>
                                        <option value="op2">Red</option>
                                    </select>
                                </div>
                                <div class="select-detail">
                                    <span>Option2:</span>
                                    <select name="selectdetail2" id="selectdetail2">
                                        <option value="opt1">--Please Select--</option>
                                        <option value="opt2">M</option>
                                    </select>
                                </div>
                                <div class="product-box-bottom">
                                    <div class="quanlity-product">
                                        <span>Qty:</span>
                                        <div class="quantity buttons_added">
                                            <a class="sign minus" href="#"><i class="fa fa-minus" aria-hidden="true"></i></a>
                                            <input type="text" size="1" class="input-text qty text" title="Qty" value="1">
                                            <a class="sign plus" href="#"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="button-detail">
                                        <a href="#" class="add-to-cart"><i class="flaticon-commerce"></i>Add To Cart</a>
                                        <a href="#" class="wishlist"><i class="flaticon-like"></i></a>
                                        <a href="#" class="refresh-product"><i class="flaticon-arrows"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="detail-products product-tabs">
                <ul  class="nav nav-pills">
                    <li class="active">
                        <a  href="#1a" data-toggle="tab">Description</a>
                    </li>
                    <li>
                        <a href="#2a" data-toggle="tab">Tags</a>
                    </li>
                    <li>
                        <a href="#3a" data-toggle="tab">Reviews (0)</a>
                    </li>
                    <li>
                        <a href="#4a" data-toggle="tab">Additional</a>
                    </li>
                    <li>
                        <a href="#5a" data-toggle="tab">Custom Tab</a>
                    </li>
                </ul>
                <div class="product-tabs-content tab-content clearfix">
                    <div class="tab-pane active" id="1a">
                        Lorem ipsum dolor sit amet, an munere tibique consequat mel, congue albucius no qui,
                        at everti meliore erroribus sea. Vero graeco cotidieque ea duo, in eirmod insolens
                        interpretaris nam. Pro at nostrud percipit definitiones, eu tale porro cum. Sea ne accusata
                        voluptatibus. Ne cum falli dolor voluptua, duo ei sonet choro facilisis, labores officiis torquatos cum ei.
                        <br/><br/>

                        Cum altera mandamus in, mea verear disputationi et. Vel regione discere ut,
                        legere expetenda ut eos. In nam nibh invenire similique. Atqui mollis ea his,
                        ius graecis accommodare te. No eam tota nostrum cotidieque. Est cu nibh clita.
                        Sed an nominavi maiestatis, et duo corrumpit constituto, duo id rebum lucilius.
                        Te eam iisque deseruisse, ipsum euismod his at. Eu putent habemus voluptua sit,
                        sit cu rationibus scripserit, modus voluptaria ex per. Aeque dicam consulatu eu his,
                        probatus neglegentur disputationi sit et. Ei nec ludus epicuri petentium, vis appetere maluisset ad.
                        Et hinc exerci utinam cum. Sonet saperet nominavi est at, vel eu sumo tritani. Cum ex minim legere.
                        <br/><br/>

                        Eos cu utroque inermis invenire, eu pri alterum antiopam. Nisl erroribus definitiones
                        nec an, ne mutat scripserit est. Eros veri ad pri. An soleat maluisset per.
                        Has eu idque similique, et blandit scriptorem necessitatibus mea. Vis quaeque ocurreret ea.
                    </div>
                    <div class="tab-pane" id="2a">
                        <div class="tagcloud">
                            <a href="#">Cotton</a>
                            <a href="#">Leggings</a>
                            <a href="#">Men</a>
                            <a href="#">Shirt</a>
                            <a href="#">T-shirt</a>
                            <a href="#">COSMETIC</a>
                            <a href="#">SOFT WEAR</a>
                            <a href="#">ACCESSORIES</a>
                            <a href="#">LIFE STYLE</a>
                        </div>
                    </div>
                    <div class="tab-pane" id="3a">
                        <div id="reviews">
                            <div id="comments">
                                <h2 class="review-title">2 reviews for ArchitectMade Oscar Figure</h2>
                                <ol class="commentlist">
                                    <li class="comment">
                                        <div class="comment_container">
                                            <img alt="rev" src="assets/images/p1.jpg" width="100" height="100" class="avatar">
                                            <div class="comment-text">
                                                <div class="meta">
                                                    <strong>Stuart</strong>-
                                                    <time  datetime="2013-06-07T13:01:25+00:00">June 7, 2013</time>
                                                    <div class="rating" title="Rated 5 out of 5">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="description">
                                                    <p>This will go great with my Hoodie that I ordered a few weeks ago.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="comment">
                                        <div class="comment_container">
                                            <img alt="rev" src="assets/images/p2.jpg" width="100" height="100" class="avatar">
                                            <div class="comment-text">
                                                <div class="meta">
                                                    <strong>Stuart</strong>-
                                                    <time  datetime="2013-06-07T13:01:25+00:00">June 7, 2013</time>
                                                    <div class="rating" title="Rated 5 out of 5">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="description">
                                                    <p>This will go great with my Hoodie that I ordered a few weeks ago.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                            <div id="review_form">
                                <div class="comment-respond">
                                    <h3 class="comment-reply-title">Add a review</h3>
                                    <form class="comment-form">
                                        <p>
                                            <label>Name</label>
                                            <input type="text">
                                        </p>
                                        <p>
                                            <label>Email</label>
                                            <input type="email">
                                        </p>
                                        <p>
                                            <label>Comment</label>
                                            <textarea rows="3"></textarea>
                                        </p>
                                        <p>
                                            <a class="button orange" href="#">Submit</a>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="4a">
                        <p>Cum altera mandamus in, mea verear disputationi et. Vel regione discere ut,
                            legere expetenda ut eos. In nam nibh invenire similique. Atqui mollis ea his,
                            ius graecis accommodare te. No eam tota nostrum cotidieque. Est cu nibh clita.
                            Sed an nominavi maiestatis, et duo corrumpit constituto, duo id rebum lucilius.
                            Te eam iisque deseruisse, ipsum euismod his at. Eu putent habemus voluptua sit,
                            sit cu rationibus scripserit, modus voluptaria ex per. Aeque dicam consulatu eu his,</p>
                    </div>
                    <div class="tab-pane" id="5a">
                        <div class="tagcloud">
                            <a href="#">Cotton</a>
                            <a href="#">Leggings</a>
                            <a href="#">Men</a>
                            <a href="#">Shirt</a>
                            <a href="#">T-shirt</a>
                            <a href="#">COSMETIC</a>
                            <a href="#">SOFT WEAR</a>
                            <a href="#">ACCESSORIES</a>
                            <a href="#">LIFE STYLE</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="detail-slide relates">
                <h3 class="title-detail-slide">Related Products</h3>
                <div class="supermartket-owl-carousel" data-number="5" data-margin="30" data-navcontrol="yes">
                    <div class="product-box">
                        <div class="product-box-content">
                            <figure class="img-product">
                                <img src="assets/images/p1.jpg" alt="product" height="207" width="175">
                                <a href="#" class="flaticon-search"></a>
                            </figure>
                            <div class="product-box-text">
                                <a href="#" class="product-name">Men's Skagen Watch</a>
                                <p class="product-cost">$200.00</p>
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
                                <p class="product-cost">$200.00</p>
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
                                <p class="product-cost">$200.00</p>
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
                                <p class="product-cost">$200.00</p>
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
                                <p class="product-cost">$200.00</p>
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
                                <p class="product-cost">$200.00</p>
                                <div class="product-box-bottom">
                                    <a href="#" class="add-to-cart"><i class="flaticon-commerce"></i>Add To Cart</a>
                                    <a href="#" class="wishlist"><i class="flaticon-like"></i></a>
                                    <a href="#" class="refresh-product"><i class="flaticon-arrows"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="detail-slide upsales">
                <h3 class="title-detail-slide">Upsell Products</h3>
                <div class="supermartket-owl-carousel" data-number="5" data-margin="30" data-navcontrol="yes">
                    <div class="product-box">
                        <div class="product-box-content">
                            <figure class="img-product">
                                <img src="assets/images/p1.jpg" alt="product" height="207" width="175">
                                <a href="#" class="flaticon-search"></a>
                            </figure>
                            <div class="product-box-text">
                                <a href="#" class="product-name">Men's Skagen Watch</a>
                                <p class="product-cost">$200.00</p>
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
                                <p class="product-cost">$200.00</p>
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
                                <p class="product-cost">$200.00</p>
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
                                <p class="product-cost">$200.00</p>
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
                                <p class="product-cost">$200.00</p>
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
                                <p class="product-cost">$200.00</p>
                                <div class="product-box-bottom">
                                    <a href="#" class="add-to-cart"><i class="flaticon-commerce"></i>Add To Cart</a>
                                    <a href="#" class="wishlist"><i class="flaticon-like"></i></a>
                                    <a href="#" class="refresh-product"><i class="flaticon-arrows"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div id="section-icon-box">
                <div class="container">
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
                                            <a href="#">Read More<i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
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
                                            <h4>RETURN &amp; EXCHANGE</h4>
                                            <p>Wholesale products from certified
                                                Worldwide shipping
                                                Low prices from US $0.1</p>
                                            <a href="#">Read More<i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
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
                                            <a href="#">Read More<i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
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
    <footer class="footer" style="background-color: #ffffff">
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-md-3 col-sm-6 has-logo">
                        <div class="footer-top-logo">
                            <h1 class="logo">
                                <a href="index.php">
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
