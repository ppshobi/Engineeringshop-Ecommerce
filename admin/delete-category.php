<?php
require_once('../app/Auth.php');
	if(!Auth::isadmin()){
	Auth::authcheck();
}
	require_once('../app/Category.php');		
	$message;

	if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
			
			$result=Category::delete($_GET['id']);
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
<title>Delete Category</title>

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
					<div class="panel-heading">
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
					<a href="view-categories.php"><button class="btn btn-primary">Back to view Categories</button></a>
						
					</div>
					<div class="panel-body">
						
					
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
