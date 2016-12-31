<?php
require_once('../app/Auth.php');
	if(!Auth::isadmin()){
	Auth::authcheck();
}	require_once('../app/Product.php');	
	require_once('../app/Category.php');			
	require_once('../app/Unit.php');	
	require_once('../app/Order.php');	

	$message;
	$categories=Category::getAll();
	$units=Unit::getAll();
	$products=Product::getAll();
	$orders=Order::getAll();
	$users=User::getAll();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Manage Orders</title>

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
					<div class="panel-heading">Manage Your Orders</div>
					<div class="panel-body">
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="state" data-checkbox="true" >Order ID</th>
						        <th data-field="state" data-checkbox="true" >Order Date</th>
						        <th data-field="id" data-sortable="true">User</th>
						        <th data-field="id" data-sortable="true">Ship To</th>
						        <th data-field="id" data-sortable="true">Phone Number</th>
 								<th data-field="id" data-sortable="true">Total Amount</th>
 								<th data-field="id" data-sortable="true">Delete Order</th>
						        <th data-field="id" data-sortable="true">FullFil Order</th>
						    </tr>
						    <?php
						    foreach ($orders as $order) {				    	
						    	$userid=$order['user_id'];
						    	$user=User::getOne($userid);
						   		$order_id=$order['id'];
						    	echo "<tr>";
						    		echo "<td>"."<a href=\"order-detail.php?id=$order_id\">".$order_id."</a></td>";					    		
						    		echo "<td>".$order['order_date']."</td>";
						    		echo "<td>".$user['name']."</td>";
						    		echo "<td>".$order['shipto']."</td>";
						    		echo "<td>".$user['phone']."</td>";
						    		echo "<td>".$order['totalcost']."</td>";
						    		echo "<td>"."<a href=\"delete-order.php?id={$order['id']}\">Delete"."</a> </td>";
						    		echo "<td>"."<a href=\"fullfill-order.php?id={$order['id']}\">Full Fill" ."</a> </td>";
						    		
						   		echo "</tr>";
						    }
						    ?>
						    
						    </thead>
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
