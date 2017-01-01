<?php
session_start();
require_once('app/Cart.php');
require_once('app/Photo.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addtocart'])) {

        $cart=new Cart(); 

        $product_id=$_POST['product_id'];
        $qty=$_POST['qty'];
       
        $cart::add($product_id,$qty); 

        return $cart::getCart();
    }
?>
<!DOCTYPE html>
<html lang='en' xmlns='http://www.w3.org/1999/xhtml'>


<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Shoping Cart</title>
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
<body class="shoping-cart">
    <?php include_once('header.php');?>
    <!-- End .banner -->
    <div class="main-content container">
        <h4 class="title-page">Shoping Cart</h4>
        <div class="shop-table-content container">
            <form method="post" action="#" class="shoping-form">
                <a class="button button-check-out" href="checkout.php">Proceed  to  Checkout</a>
                <div class="div-table-cart">
                    <table class="shop_table cart">
                        <thead>
                            <tr>
                                <th class="product-thumbnail">&nbsp;</th>
                                <th class="product-name">Product Name</th>
                            
                                <th class="product-price">Unit Price</th>
                                <th class="product-quantity">Qty</th>
                                <th class="product-subtotal">Subtotal</th>
                                <th class="product-remove">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $c_cart=Cart::getCart();
                            foreach ($c_cart as $c_product) {                                
                            $img=Photo::getOneWithUrl($c_product['id']);
                            echo "<tr class=\"cart_item\">";
                                echo "<td class=\"product-thumbnail\" data-title=\"\">";
                                    echo "<a href=\"#\">";
                                        echo "<img height=\"150\" width=\"185\" alt=\"s_c\" class=\"attachment-shop_thumbnail wp-post-image\" src=\"".$img."\">";
                                    echo "</a>";
                                echo "</td>";
                                echo "<td class=\"product-name\" data-title=\"Product Name\">";
                                    echo "<a href=\"#\">".$c_product['name']."</a>";
                                echo "</td>";
                                echo "<td class=\"product-price\" data-title=\"Unit Price\">";
                                    echo "<span class=\"amount\">&#8377; ".$c_product['price']."</span>";
                                echo "</td>";
                                echo "<td class=\"product-quantity\" data-title=\"Qty\">";
                                    echo "<div class=\"quantity buttons_added\">";
                                    echo "<input type=\"text\" class=\"input-text qty text\" title=\"Qty\" value=\"".$c_product['qty']."\" name=\"qty\">";
                                    echo "</div>";
                                echo "</td>";
                                echo "<td class=\"product-subtotal\" data-title=\"Subtotal\">";
                                    echo "<span class=\"amount\">&#8377; ".$c_product['subtotal']."</span>";
                                echo "</td>";
                                
                            echo "</tr>";

                            echo "\n";
                            }

                        ?>
                        </tbody>
                    </table>
                    <div class="button-cart">                        
                        <a class="button button-check-out" href="shop.php">Continue Shoping</a>
                        <a class="button button-check-out" href="checkout.php">Proceed to Checkout</a>
                    </div>
                </div>

            </form>           
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
    <?php include_once ('footer.php');?>
    
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