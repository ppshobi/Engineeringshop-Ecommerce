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
		if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add-prod'])) {
			
			
			$result=Product::add($_POST['name'],$_POST['description'],$_POST['category'],$_POST['mfg'],$_POST['price'],$_POST['unit'],$_POST['qty'],$_POST['visibility'],$_FILES['img1'],$_FILES['img2'],$_FILES['img3'],$_FILES['img4'],$_FILES['img5']);
			if ($result) {
				$message=true;
			}else{
				$message=false;
			}
		}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Add Product</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
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
				<li class="active">Product</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add a Product</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">					<?php 
						if (isset($message)) {
							if ($message) {
								echo "<div class=\"alert bg-success\" id=\"success\" role=\"alert\">";
								echo " <svg class=\"glyph stroked checkmark\">";
								echo " <use xlink:href=\"#stroked-checkmark\"></use>";
								echo " </svg>";
								echo " Successfully Added Product";
								echo " <a href=\"#\" class=\"pull-right\">";
								echo " <span class=\"glyphicon glyphicon-remove\"></span>";
								echo " </a>";
								echo " </div>";


							}else{
								echo "<div class=\"alert bg-danger\" id=\"success\" role=\"alert\">";
								echo " <svg class=\"glyph stroked checkmark\">";
								echo " <use xlink:href=\"#stroked-checkmark\"></use>";
								echo " </svg>";
								echo " Something went wrong";
								echo " <a href=\"#\" class=\"pull-right\">";
								echo " <span class=\"glyphicon glyphicon-remove\"></span>";
								echo " </a>";
								echo " </div>";
							}
						}

					?></div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" method="post" action="" enctype="multipart/form-data"  >
							
								<div class="form-group">
									<label>Product Name</label>
									<input class="form-control" name="name" placeholder="Enter Product Name">
								</div>
								<div class="form-group">
									<label>Product Description</label>
									<textarea class="form-control" name="description" rows="3"></textarea>
								</div>

								<div class="form-group">
									<label>Select Category</label>
									<select class="form-control" name="category">
										<?php
											foreach ($categories as $cat) {
												echo "<option value=".$cat['id'].">".$cat['name']."</option>";
											}
										?>
									</select>
								</div>
								<div class="form-group">
									<label>Manufacture</label>
									<input class="form-control" name="mfg" placeholder="Enter Manufacture">
								</div>
								<div class="form-group">
									<label>Price</label>
									<input class="form-control" name="price" placeholder="Enter Price">
								</div>
								<div class="form-group">
									<label>Unit</label>
									<select class="form-control" name="unit">
										<?php
											foreach ($units as $unit) {
												echo "<option value=".$unit['id'].">".$unit['name']."</option>";
											}
										?>
									</select>
								</div>
								<div class="form-group">
									<label>Quantity</label>
									<input class="form-control" name="qty" placeholder="Enter Quantity">
								</div>

								<div class="form-group">
									<label>Visibility</label>
									<div class="radio">
										<label>
											<input type="radio" name="visibility" id="optionsRadios1" value="1" checked>Visible
										</label>
									
										<label>
											<input type="radio" name="visibility" id="optionsRadios2" value="0">Hidden
										</label>
									</div>
									
								</div>
								<div class="form-group">
									<label>Image 1</label>
									<input type="file" name="img1"> 
								</div>
								<div class="form-group">
									<label>Image 2</label>
									<input type="file" name="img2"> 
								</div>
								<div class="form-group">
									<label>Image 3</label>
									<input type="file" name="img3"> 
								</div>
								<div class="form-group">
									<label>Image 4</label>
									<input type="file" name="img4"> 
								</div>
								<div class="form-group">
									<label>Image 5</label>
									<input type="file" name="img5"> 
								</div>

								<button type="submit" name="add-prod" class="btn btn-primary">Add Product</button>
								<button type="reset" class="btn btn-default">Reset</button>
							</div>
						</form>
						
					</div>
					<?php 
						if (isset($message)) {
							if ($message) {
								echo "<div class=\"alert bg-success\" id=\"success\" role=\"alert\">";
								echo " <svg class=\"glyph stroked checkmark\">";
								echo " <use xlink:href=\"#stroked-checkmark\"></use>";
								echo " </svg>";
								echo " Successfully Deleted Category";
								echo " <a href=\"#\" class=\"pull-right\">";
								echo " <span class=\"glyphicon glyphicon-remove\"></span>";
								echo " </a>";
								echo " </div>";


							}else{
								echo "<div class=\"alert bg-danger\" id=\"success\" role=\"alert\">";
								echo " <svg class=\"glyph stroked checkmark\">";
								echo " <use xlink:href=\"#stroked-checkmark\"></use>";
								echo " </svg>";
								echo " Something went wrong";
								echo " <a href=\"#\" class=\"pull-right\">";
								echo " <span class=\"glyphicon glyphicon-remove\"></span>";
								echo " </a>";
								echo " </div>";
							}
						}

					?>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
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
