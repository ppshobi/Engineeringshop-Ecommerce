 <?php
    require_once('app/Category.php');
    $categories=Category::getAll();
 ?>
 <header class="header header-style3">
        <div class="header-top">
            <div class="container">
                <h5>Sport Headphone Equipment</h5>
                <p>Protect her inevitable but unfortunate collision happened to himself </p>
                <a href="#" class="button red">View Now</a>
            </div>
        </div>
        <div class="header-mid">
            <div class="container">
                <div class="header-mid-left">
                    <p class="wellcome-to">Wellcome!</p>
                    <p class="register-or-login">
                        <a href="#" class="register">Join Free</a>
                        or
                        <a href="#" class="login">Sing in</a>
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
                                English<i class="fa fa-caret-down" aria-hidden="true"></i>
                            </div>
                            <div class="country-dropdown">
                                <div class="country">
                                    <img src="assets/images/flag.jpg" alt="flag" width="24" height="17">
                                    English
                                </div>
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
                            <img alt="logo" src="assets/images/logo2.png">
                        </a>
                    </h1>
                    <div class="header-search">
                        <form action="" class="form form-search-header">
                            <input type="text" placeholder="Search here...">
                            <select name="show-categories" id="show-categories">
                                <option value="all">All Categories</option>
                                <option value="Automovie & Motorcyle">Automovie & Motorcyle</option>
                                <option value="Electronics">Electronics</option>
                                <option value="Sport & Outdoors">Sport & Outdoors</option>
                                <option value="Handbags">Handbags </option>
                                <option value="Fashion">Fashion </option>
                                <option value="camera & usb">camera & usb</option>
                                <option value="smartphone & headphone">smartphone & headphone</option>
                            </select>
                            <button class="button-search"><i class="flaticon-search"></i></button>
                        </form>
                    </div>
                </div>
                <div class="header-bottom-right">
                    <div class="header-bottom-right-content my-supermarket">
                        <div class="supermarket">
                            <p>Hi, Sign in</p>
                            <h4><a class="link-top" href="#"><span class="text-bold">My Super Market</span><i class="fa fa-caret-down" aria-hidden="true"></i></a></h4>
                        </div>
                        <div class="hover-supermarket">
                            <a href="#" class="singin-super">Sing in</a>
                            <ul class="market-list">
                                <li class="market-list-item"><a href="#">My SuperMartket</a></li>
                                <li class="market-list-item"><a href="#">My Order</a></li>
                                <li class="market-list-item"><a href="#">My Review</a></li>
                                <li class="market-list-item"><a href="#">My Favorites</a></li>
                                <li class="market-list-item"><a href="#">My Coupons</a></li>
                            </ul>
                            <a href="#" class="submit-request">Submit A Buying Request</a>
                            <p>Let us help you find what you need</p>
                        </div>
                    </div>
                    <div class="header-bottom-right-content">
                        <a href="#" class="link-top">
                            <i class="flaticon-like"></i>
                            <span class="text-bold">Wishlist</span>
                        </a>
                    </div>
                    <div class="header-bottom-right-content cart-menu-relative">
                        <div class="cart-menu">
                            <a href="#" class="link-top">
                                <i class="flaticon-commerce"></i>
                                <span class="text-bold">Cart</span>
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
                                        <p class="name-hover-cart">Men's Skagen Watch</p>
                                        <p class="version-hover-cart">Vesion <span>2.0</span></p>
                                        <p class="quanlity-hover-cart">Quanlity: <span>1</span></p>
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
                                        <li class="menu-item has-mega">
                                            <a href="#"><i class="flaticon-atom"></i>Electronics</a>
                                            
                                        </li>
                                        <?php
                                        foreach ($categories as $category) {
                                            echo "<li class=\"menu-item\">";
                                            
                                            echo "<a href=\"#\"><i class=\"flaticon-technology\"></i>".$category['name']."</a>";
                                           echo "</li>";
                                        }
                                        ?>                                        
                                        
                                    </ul>
                                    <span class="more-categories open-cate">Shop</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
                <a href="#primary-navigation" class="menu-button primary-navigation-button">
                    <span class="flaticon-bars"></span>Main Menu
                </a>
                <nav id="primary-navigation" class="site-navigation main-menu">
                    <ul id="primary-menu" class="menu">
                        <li class="menu-item active">
                            <a href="#">Home</a>
                            
                        </li>
                        <li class="menu-item"><a href="#">New Arrival</a></li>
                        <li class="menu-item"><a href="#">Deals</a></li>
                        <li class="menu-item">
                            <a href="shop.php">Shop</a> 
                        </li>


                        <li class="menu-item has-childrent">
                            <a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="blogpost.php">Blog Post</a></li>
                                <li class="menu-item"><a href="product-detail.php">Product Detail</a></li>
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