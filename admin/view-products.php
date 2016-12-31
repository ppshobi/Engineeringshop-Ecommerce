<?php
require_once('../app/Auth.php');
	if(!Auth::isadmin()){
	Auth::authcheck();
}
	require_once('../app/Product.php');	
	require_once('../app/Category.php');			
	require_once('../app/Unit.php');	

	$message;
	$categories=Category::getAll();
	$units=Unit::getAll();
	$products=Product::getAll();
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
					<div class="panel-heading">View &amp edit All Products Here</div>
					<div class="panel-body">
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="state" data-checkbox="true" >Product Name</th>
						        <th data-field="id" data-sortable="true">Product Description</th>
						        <th data-field="id" data-sortable="true">Category</th>
						        <th data-field="id" data-sortable="true">Manufacturer</th>
						        <th data-field="id" data-sortable="true">Price</th>
						        
						        <th data-field="id" data-sortable="true">Quantity Avilable</th>
						        <th data-field="id" data-sortable="true">Visibility</th>
						        <th data-field="id" data-sortable="true">Timestamp Created</th>
						        <th data-field="name"  data-sortable="true">Edit</th>
						        <th data-field="price" data-sortable="true">Delete</th>
						    </tr>
						    <?php
						    foreach ($products as $product) {
						    	if ($product['visibility']==1) {
						    		$product['visibility']="Visible";
						    	}else{
						    		$product['visibility']="Hidden";
						    	}

						    	foreach ($units as $unit) {
						    		if ($unit['id']==$product['unit']) {
						    			$product['unit']=$unit['name'];
						    		}
						    	}

						    	foreach ($categories as $category) {
						    		if ($category['id']==$product['category']) {
						    			$product['category']=$category['name'];
						    		}
						    	}
						    	echo "<tr>";
						    		echo "<td>".$product['name']."</td>";
						    		echo "<td>".$product['descr']."</td>";
						    		echo "<td>".$product['category']."</td>";
						    		echo "<td>".$product['mfg']."</td>";
						    		echo "<td>".$product['price']."</td>";
						    	
						    		echo "<td>".$product['qty']." ".$product['unit']."</td>";
						    		echo "<td>".$product['visibility']."</td>";
						    		echo "<td>".$product['date']."</td>";
						    		echo "<td>"."<a href=\"edit-product.php?id={$product['id']}\">Edit" ."</a> </td>";
						    		echo "<td>"."<a href=\"delete-product.php?id={$product['id']}\">Delete"."</a> </td>";
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
