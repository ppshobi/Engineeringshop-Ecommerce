<?php
	require_once('../app/Product.php');	
	require_once('../app/Category.php');			
	require_once('../app/Unit.php');	
	require_once('../app/Order.php');	

	$message;
	$categories=Category::getAll();
	$units=Unit::getAll();
	$products=Product::getAll();
	$order_id;
	$order_detail;
	if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
		$order_id=$_GET['id'];
		$order_detail=Order::getOrderDetail($order_id);
	}


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lumino - Tables</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<?php include_once('nav-sidebar.php'); ?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tables</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">View Order Detail - Order Id - <?php echo $order_id;?></div>
					<div class="panel-body">
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="state" data-checkbox="true" >Sl . No</th>
						        <th data-field="state" data-checkbox="true" >Product Name</th> 
						        <th data-field="state" data-checkbox="true" >Price</th>
						        <th data-field="id" data-sortable="true">Quantity</th>						  
						    </tr>
						    </thead>
						    <tbody>
						    <?php
						    $count=0;
						    foreach ($order_detail as $order) {				    	
						    	$count++;
						    	$product=Product::getOne($order['product_id']);				   		
						    	echo "<tr>";
						    		echo "<td>".$count."</a></td>";					    		
						    		echo "<td>".$product['name']."</td>";
						    		echo "<td>".$product['price']."</td>";
						    		echo "<td>".$order['qty']."</td>";	
						   		echo "</tr>";
						    }
						    ?>
						    </tbody>
						    	<a href="view-orders.php"><button class="btn btn-primary">Back to Manage Orders</button></a>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
		
		
	</div><!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-table.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
