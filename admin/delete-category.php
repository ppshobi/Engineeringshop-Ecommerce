<?php
	require_once('../app/Category.php');		
	$message="";
	$categories=Category::getAll();
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete'])) {
			
			$result=Category::delete($_POST['category']);
			if ($result) {
				$message="Category Successfully Deleted";
			}else{
				$message="Something Went wrong";
			}
		}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Add Category</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<style type="text/css">
	#success{
		display: none;
	}
	#error{
		display: none;
	}
</style>
</head>

<body>
	<?php include_once('nav-sidebar.php'); ?>
	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Category</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Delete a Category</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><?php 
						if (isset($message)) {
							echo "<div>".$message."</div>";
						}

					?></div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" method="post" action="">
							
								<div class="form-group">									
										
								<div class="form-group">
									<label>Select Category To delete</label>
									<select class="form-control" name="category">
										<?php										
											foreach($categories as $cat){
												echo "<option value=\"". $cat['id'] ."\">" . $cat['name'] ."</option>";
											}
										?>
									</select>
								</div>
								</div>								
								<button type="submit" name="delete" class="btn btn-primary">Delete Category</button>							
							</div>
						</form>
						
					</div>
					<div class="alert bg-success" id="success" role="alert">
						<svg class="glyph stroked checkmark">
							<use xlink:href="#stroked-checkmark"></use>
						</svg>
						 Successfully Added Category
						 <a href="#" class="pull-right">
						 	<span class="glyphicon glyphicon-remove"></span>
						 </a>
					</div>
					<div class="alert bg-danger" id="error" role="alert">
						<svg class="glyph stroked checkmark">
							<use xlink:href="#stroked-checkmark"></use>
						</svg>
						 Something went wrong
						 <a href="#" class="pull-right">
						 	<span class="glyphicon glyphicon-remove"></span>
						 </a>
					</div>
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
