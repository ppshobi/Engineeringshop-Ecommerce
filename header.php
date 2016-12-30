 <?php
    require_once('app/Category.php');
    require_once('app/Cart.php');
    require_once('app/Photo.php');
    $categories=Category::getAll();
    $prodct_count=Cart::get_product_count();
    $cart=Cart::getCart();

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
                                <li class="market-list-item"><a href="#">My Order</a></li>
                                <li class="market-list-item"><a href="#">My Review</a></li>
                                <li class="market-list-item"><a href="#">My Favorites</a></li>
                                <li class="market-list-item"><a href="#">My Coupons</a></li>
                            </ul>
                           
                           
                        </div>
                    </div>
                    
                    <div class="header-bottom-right-content cart-menu-relative">
                        <div class="cart-menu">
                            <a href="#" class="link-top">
                                <i class="flaticon-commerce"></i>
                                <span class="text-bold">Cart</span>
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                                <p class="cart-amount"><?php echo $prodct_count; ?></p>
                            </a>
                        </div>
                        <div class="cart-hover">
                            <div class="cart-hover-title">Your Products <span>Prices</span></div>
                            <ul class="list-hover-cart">
                            <?php
                            if ($cart) {
                                foreach ($cart as $cart_product) {
                                
                                echo "<li class=\"hover-cart-item\">";
                                    echo "<a href=\"#\" class=\"img-hover-cart\">";
                                        echo "<img src=\"".Photo::getOneWithUrl($cart_product['id'])."\" alt=\"img-hover-cart\" width=\"75\" height=\"89\">";                                        
                                    echo "</a>";
                                    echo "<div class=\"text-hover-cart\">";
                                        echo "<p class=\"name-hover-cart\">".$cart_product['name']."</p>";
                                        echo "<p class=\"version-hover-cart\">Price: &#8377;<span> ".$cart_product['price']."</span></p>";
                                        echo "<p class=\"quanlity-hover-cart\">Quantity: <span>".$cart_product['qty']."</span></p>";
                                    echo "</div>";
                                    echo "<div class=\"price-hover-cart\">&#8377; ".$cart_product['subtotal']."</div>";
                                echo "</li>";
                            }

                            }
                            

                            ?>
                            </ul>
                            <div class="subtotal-hover-cart">Total <span><?php echo "&#8377;".Cart::getTotal(); ?></span></div>
                            <div class="button-cart-hover">
                                <a href="shopping-cart.php" class="check-out button orange">Check Out</a>
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
                                            
                                            
                                        </li>
                                        <?php
                                        foreach ($categories as $category) {
                                            echo "<li class=\"menu-item\">";
                                            
                                            echo "<a href=\"#\"><i class=\"flaticon-technology\"></i>".$category['name']."</a>";
                                           echo "</li>";
                                        }
                                        ?>                                        
                                        
                                    </ul>
                                    <a href="shop.php"><span class="more-categories open-cate">Shop</span></a>
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
                        <li class="menu-item active"> <a href="index.php">Home</a></li>
                        <li class="menu-item"><a href="about.php">About Us</a></li>
                         <li class="menu-item"><a href="shop.php">Shop</a></li>
                        <li class="menu-item"><a href="#">Services</a></li>
                        <li class="menu-item"><a href="#">Consultancy</a></li>
                        <li class="menu-item"><a href="contact.php">Contact Us</a></li>                       

                    </ul>
                </nav>
            </div>
        </div>
    </header>