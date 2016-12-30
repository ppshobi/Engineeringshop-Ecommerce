<?php
session_start();
    require_once('app/Product.php');
    require_once('app/Photo.php');
    require_once('app/Cart.php');

    $product_id=$_GET['pid'];
    $product=Product::getOne($product_id);
    $photos=Photo::getAll($product_id);

     $photo1="products/".$product_id."/".$photos[0]['location'];
     $photo2="products/".$product_id."/".$photos[1]['location'];
     $photo3="products/".$product_id."/".$photos[2]['location'];
     $photo4="products/".$product_id."/".$photos[3]['location'];
     $photo5="products/".$product_id."/".$photos[4]['location'];


?>

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
  <?php include_once('header.php');?>
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
                                <img src="<?php echo $photo1;?>" alt="product" height="536" width="467" id="product-big">
                                <div class="img-room"><img src="<?php echo $photo1;?>" alt="room" height="32" width="32"></div>
                            </figure>
                            <div class="featue-slide supermartket-owl-carousel" data-number="3" data-margin="15" data-navcontrol="yes">
                                <div class="feature-slide-item">
                                    <figure><img src="<?php echo $photo2;?>" onlick="changeImg();" alt="feature" width="126" height="143"></figure>
                                </div>
                                <div class="feature-slide-item">
                                    <figure><img src="<?php echo $photo3;?>" alt="feature" width="126" height="143"></figure>
                                </div>
                                <div class="feature-slide-item">
                                    <figure><img src="<?php echo $photo4;?>" alt="feature" width="126" height="143"></figure>
                                </div>
                                <div class="feature-slide-item">
                                    <figure><img src="<?php echo $photo5;?>" alt="feature" width="126" height="143"></figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="single-product-content">
                                <h3 class="product-title"><?php echo $product['name'];?></h3>
                                <a href="#" class="write">Purchase Now</a>
                                <p class="product-cost"><?php echo " &#8377; ".$product['price']; ?></p>
                                <p class="stock">Availability:<span><i class="fa fa-check-square-o" aria-hidden="true"></i>In stock</span></p>
                                <div class="desc-product-title">Quick OverView</div>
                                <div class="desc-product"><?php echo $product['descr']; ?>
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
                                <div class="product-box-bottom">
                                    <div class="quanlity-product">
                                        <span>Qty:</span>
                                        <div class="quantity buttons_added">
                                            <a class="sign minus" href="#"><i class="fa fa-minus" aria-hidden="true"></i></a>
                                            <input type="text" size="1" class="input-text qty text" title="Qty" value="1">
                                            <input type="hidden" size="1" class="product_id" title="Qty" value="<?php echo $product_id; ?>">
                                            <a class="sign plus" href="#"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="button-detail">
                                        <a href="#" class="add-to-cart"><i class="flaticon-commerce"></i>Add To Cart</a>

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

                </ul>
                <div class="product-tabs-content tab-content clearfix">
                    <div class="tab-pane active" id="1a">
                       <?php echo $product['descr']; ?>
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
                                            <a href="#"" >Read More<i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
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
   <?php include_once('footer.php');?>
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
    <script type="text/javascript">
        $("img").click(function() {
            var src=this.src;
            $("#product-big").attr("src",src);
        });


        //adding to cart
        $('.add-to-cart').click(function() {
            var qty=$(".qty").val();
            var pid=$(".product_id").val();
            $.ajax({
                type: "POST",
                url: "shopping-cart.php",
                data: { addtocart : true,
                        product_id: pid,
                        qty:qty
                }
            }).success(function(msg){
                alert("Product Added To Cart");
                $(".cart-amount").html(parseInt($(".cart-amount").text())+1);
            });


        });

        // $(".add-to-cart").click(function() {

        //     item=$(".hover-cart-item:first").clone();
        //     src= $('#product-big').attr('src');

        //     $(item.appendTo(".list-hover-cart"));
        // });

    </script>
</body>


</html>
