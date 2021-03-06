<?php
require_once('../app/Auth.php');
	if(!Auth::isadmin()){
	Auth::authcheck();
}
	require_once('../app/User.php');	
	$user;
	if ($_GET['id']) {
		$user=User::getOne($_GET['id']);		
	}	
	$message;
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit-user'])) {
		
		
		$result=User::edit($_GET['id'],$_POST['name'],$_POST['email'],$_POST['phone'],$_POST['address'],$_POST['password'],$_POST['level']);
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
<title>Edit User</title>

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
			<div class="col-lg-12">
				<h1 class="page-header">Edit user</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
				<?php 
						if (isset($message)) {
							if ($message) {
								echo "<div class=\"alert bg-success\" id=\"success\" role=\"alert\">";
								echo " <svg class=\"glyph stroked checkmark\">";
								echo " <use xlink:href=\"#stroked-checkmark\"></use>";
								echo " </svg>";
								echo " Successfully Updated user";
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
					<div class="panel-heading">Edit user</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" method="post" action="">
							
								<div class="form-group">
									<label>Name</label>
									<input class="form-control" name="name" value="<?php echo $user['name']; ?>" placeholder="Enter Name">
								</div>

								<div class="form-group">
									<label>email</label>
									<input class="form-control" name="email" value="<?php echo $user['username']; ?>" placeholder="Enter User Name">
								</div>
								<div class="form-group">
									<label>Phone Number</label>
									<input class="form-control" name="phone" value="<?php echo $user['phone']; ?>" placeholder="Enter Phone Number">
								</div>
								<div class="form-group">
									<label>Address</label>
									<textarea class="form-control" name="address" rows="3"><?php echo $user['address']; ?></textarea>
								</div>
								<div class="form-group">
									<label>User Level</label>
									<input type="radio" class="form-control" name="level" value="1" <?php 
										if($user['level']==0){
											echo "checked";
										}
									 ?>
									 >Admin
									<input type="radio" class="form-control" name="level" value="0" <?php 
										if($user['level']==1){
											echo "checked";
										}
									 ?>
									 >Normal User
								</div>
								<div class="form-group">
									<label>Password</label>
									<input class="form-control" name="password" value="<?php echo $user['password']; ?>">
								</div>
								<input type="hidden" name="id" value="<?php echo $_GET['id']?>" >
								<button type="submit" name="edit-user" class="btn btn-primary">Edit user</button>
							</div>
						</form>
						
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
