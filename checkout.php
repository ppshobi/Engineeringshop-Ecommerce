<?php
session_start();
require_once('app/Auth.php');

require_once('app/User.php');
require_once('app/Order.php');
$login_status=Auth::isloggedin();
$message;
$intent;
if(!isset($login_status) or !$login_status){
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
        $login_status=Auth::login($_POST['username'],$_POST['password']);
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
        $name=$_POST['name'];
        $pass=$_POST['password'];
        $address=$_POST['address'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $result=User::add($name,$pass,$address,$email,$phone);
        if ($result) {
            $message=true;
        }else{
            $message=false;
        }
    }
}elseif(isset($_GET['login']) or isset($_GET['register'])){
    $intent=true;

}else{
    $order=Order::place();
    if ($order) {
        echo "<script> alert(\"Your Order is placed, Our Staff Will assist you soon\")</script>";
    }else{
        echo "<script> alert(\"Your Order Can't be placed. Please Try Later\")</script>";

    }
}

?>
<!DOCTYPE html>
<html lang='en' xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Check Out</title>
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
<body class="checkout-page">
  <?php include_once('header.php');?>
    <!-- End .banner -->
    <div class="main-content container">
        <div class="row">
            <div class="col-md-12">
                <p class="title-left">Check Out</p>
                <div class="message">
                    <?php
                        if (isset($message)) {
                            if ($message) {
                                echo "<div class=\"success\">successfully Registered</div>";
                            }else{
                                echo "<div class=\"error\">Registration Unsuccessfull</div>";
                            }
                        }
                    ?>
                </div>
                <?php
                    if(!isset($login_status) or !$login_status){
                        include_once('checkout-box.php');
                    }elseif (isset($intent) and $intent) {
                        include_once('checkout-box.php');
                    }
                ?>
                           
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
</body>

</html>