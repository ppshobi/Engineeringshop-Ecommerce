<?php
session_start();
require_once('app/Auth.php');

require_once('app/User.php');
require_once('app/Order.php');
require_once('app/Question.php');
$login_status=Auth::isloggedin();
$message;
if (!$login_status) {
    Auth::redirect('checkout.php?login');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ask'])) {    
    $result=Question::add($_POST['question'],Auth::getuserid());
    if ($result) {
        $message=true;
    }else{
        $message=false;
    }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['comment'])) {    
    $result=Question::comment($_POST['question'],$_POST['q_id'],Auth::getuserid());
    if ($result) {
        $message=true;
    }else{
        $message=false;
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
                <p class="title-left">User Dash Board</p>
                <div class="col-md-3">
                        <div class="about-top3">
                            <p class="title-left">Quick Links</p>
                            <ul class="chose-us">
                                <li class="chose-us-item"><a href="user-dashboard.php?myorders"><i class="flaticon-check-square"></i>My Orders</a></li>
                                <li class="chose-us-item"><a href="user-dashboard.php?questions"><i class="flaticon-check-square"></i>Questions</a></li>
                                <li class="chose-us-item"><a href="logout.php"><i class="flaticon-check-square"></i>Logout</a></li>
                                
                            </ul>
                        </div>
                </div>
                <div class="col-md-9">
                <?php
                    if(isset($_GET['myorders'])){
                        //display Previous Orders
                        echo "<h2> Previous Orders</h2>";
                        $orders=Order::getAllUserOrders(Auth::getuserid());
                        echo "<table>";
                            echo "<thead>";
                                echo "<tr>";
                                    echo "<th>Order ID</th>";
                                    echo "<th>Order Date</th>";
                                    echo "<th>Total Amount</th>";
                                echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            foreach ($orders as $order) {                       
                                $order_id=$order['id'];
                                echo "<tr>";
                                    echo "<td>"."<a href=\"order-detail.php?id=$order_id\">".$order_id."(Details)</a></td>";                                
                                    echo "<td>".$order['order_date']."</td>";
                                    echo "<td>".$order['totalcost']."</td>";
                                echo "</tr>";
                        
                            }
                            echo "</tbody>";
                            echo "</table>";
                    }elseif(isset($_GET['questions'])){
                        //display question answer
                        if (isset($message)) {
                            if ($message) {
                                echo "<div class=\"alert bg-success\" id=\"success\" role=\"alert\">";                               
                                    echo " Successfully Placed Your Question";
                                echo " </div>";


                            }else{
                                echo "<div class=\"alert bg-danger\" id=\"success\" role=\"alert\">";
                                    echo " Something went wrong";
                                echo " </div>";
                            }
                        }
                        echo "<div class=\"questions\">";
                            
                            $question=Question::getUserQuestion(Auth::getuserid());
                            if($question){
                                $comments=Question::getComments($question['id']);
                                
                                echo "<h3 class=\"question\">".$question['question']."</h3>";
                                echo "<div class=\"comments col-md-6\">";
                                if ($comments) {
                                    foreach ($comments as $comment) {
                                        if(User::getUserLevel($comment['user_id'])==1){
                                            echo "<p class=\"answer admin\">".$comment['comment']."</p>";
                                        }else{
                                            echo "<p class=\"answer user\">".$comment['comment']."</p>";
                                        }
                                        
                                    }
                                }
                                echo "Comment<br/>";
                                echo "<form method=\"post\">";
                                echo "<textarea name=\"question\" rows=\"5\" cols=\"50\"></textarea><br/>";
                                echo "<input type=\"submit\" name=\"comment\" value=\"Comment\">";
                                echo "<input type=\"hidden\" name=\"q_id\" value=\"". $question['id']."\">";
                                echo "</form>";
                               echo "</div>";
                                
                            }else{
                                echo "Ask a question<br/>";
                                echo "<form method=\"post\">";
                                echo "<textarea name=\"question\" rows=\"5\" cols=\"50\"></textarea><br/>";
                                echo "<input type=\"submit\" name=\"ask\" value=\"Ask Question\">";
                                echo "</form>";
                            }
                        echo "</div>";

                    }
                ?>
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