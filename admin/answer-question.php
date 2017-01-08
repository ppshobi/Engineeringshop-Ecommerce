<?php
require_once('../app/Auth.php');
if(!Auth::isadmin()){
	Auth::authcheck();
}	
require_once('../app/Question.php');
require_once('../app/User.php');
		

	$message;
	$users=User::getAll();
	$comments;
	$question;
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['com'])) { 
		$comments=Question::getComments($_POST['q_id']);
		$question=Question::getOne($_POST['q_id']);   
	    $result=Question::comment($_POST['comment'],$_POST['q_id'],Auth::getuserid());
	    if ($result) {
	        $message=true;
	    }else{
	        $message=false;
	    }
	}else{
		$comments=Question::getComments($_GET['id']);
		$question=Question::getOne($_GET['id']);
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Answer Questions</title>

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
		<!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Manage Consultancy Services</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Question Management</div>
					<div class="panel-body">
						
						    <?php
						    echo "<h3 class=\"question\">".$question['question']."</h3>";
						    if ($comments) {
							    foreach ($comments as $comment) {				    	
							    	$userid=$comment['user_id'];
							    	$userlevel=User::getUserLevel($userid);
							   		$comment_id=$comment['id'];						    	
							    	if($userlevel==1){
	                                    echo "<p class=\"answer admin\">".$comment['comment']."</p>";
	                                }else{
	                                    echo "<p class=\"answer user\">".$comment['comment']."</p>";
	                                }
	                            }
						    }
						    
						    ?>
						    <form method="post">
                               <textarea name="comment" rows="5" cols="50"></textarea><br/>
                               <input type="hidden" name="q_id" value="<?php echo $question['id']; ?>">
                               <input type="submit" name="com" value="Comment">
                           	</form>
						    
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
