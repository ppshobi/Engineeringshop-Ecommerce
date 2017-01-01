<?php
require_once('app/Product.php');
require_once('app/Photo.php');
    $products=Product::getAll();
?>
<!DOCTYPE html>
<html lang='en' xmlns='http://www.w3.org/1999/xhtml'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Engineering Shop</title>
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
    <?php include_once('header.php');?>
    <!-- End .banner -->
    <div class="main-content categories categories-grid3">
        <div class="banner-top">
            <div class="container">
                <div class="banner-categories-grid">
                    <img src="assets/images/grid2.jpg" alt="banner" height="175" width="1170">
                </div>
            </div>
        </div>
        <div class="main-top">
            <div class="container">
                <div class="sidebar-top">
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
                    <div class="shop-sidebar">
                        <div class="sidebar-title">
                            Shop By
                            <div class="close-side-top"></div>
                        </div>
                        <div class="shop-sidebar-content">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="categories-sidebar">
                                        <h5 class="sidebar-title-section">Categories</h5>
                                        <div class="categories-checkbox">
                                            <ul class="categories-list-wrap">
                                                <li><input type="checkbox" value="Smartphone & Mp3 Player"><label>Smartphone & Mp3 Player</label></li>
                                                <li><input type="checkbox" value="Network & Computer"><label>Network & Computer</label></li>
                                                <li><input type="checkbox" value="Batteries & Chargers"><label>Batteries & Chargers</label></li>
                                                <li><input type="checkbox" value="Headphone & Headset"><label>Headphone & Headset</label></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="price-sidebar">
                                        <h5 class="sidebar-title-section">Price</h5>
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
                                </div>
                                <div class="col-md-3">
                                    <div class="manufacture-sidebar">
                                        <h5 class="sidebar-title-section">Manufacture</h5>
                                        <div class="categories-checkbox">
                                            <ul class="brands">
                                                <li><input type="checkbox" value="Ercol"><label>Ercol</label></li>
                                                <li><input type="checkbox" value="Duresta"><label>Duresta</label></li>
                                                <li><input type="checkbox" value="G Plan"><label>G Plan</label></li>
                                                <li><input type="checkbox" value="Parker Knoll"><label>Parker Knoll</label></li>
                                                <li><input type="checkbox" value="Collins & Hayes"><label>Collins & Hayes</label></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="color-sidebar">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="categories-page">
            <div class="container">
                <div class="row">
                    <div class="content-categorise col-md-12">
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
                            <?php
                            foreach ($products as $product) {
                                $product_id=$product['id'];
                                $photo=Photo::getOne($product_id);                                
                                $photo="products/".$product_id."/".$photo['location'];

                                echo "<div class=\"product-box\">";
                                echo " <div class=\"product-box-content\">";
                                echo "<figure class=\"img-product\">";
                                echo "<img src=\"".$photo."\" alt=\"product\" height=\"207\" width=\"175\">";
                                echo "<a href=\"product-detail.php?pid=".$product_id."\" class=\"flaticon-search\"></a>";
                                echo " </figure>";
                                echo "<div class=\"product-box-text\">";
                                echo "  <a href=\"product-detail.php?pid=".$product_id."\" class=\"product-name\">".$product['name']."</a>";                    
                                echo "<p class=\"product-cost\">"."&#8377; ".$product['price']."</p>";
                                echo "<p class=\"desc-product\">".$product['descr']."</p>";
                                echo "<div class=\"product-box-bottom\">";
                                echo "<a href=\"#\" class=\"add-to-cart\"><i class=\"flaticon-commerce\"></i>Add To Cart</a>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                             }
                            ?>
                               
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
