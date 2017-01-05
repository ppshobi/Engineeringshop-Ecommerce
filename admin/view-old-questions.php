<?php
require_once('../app/Auth.php');
if(!Auth::isadmin()){
	Auth::authcheck();
}	
require_once('../app/Question.php');
require_once('../app/User.php');
		

	$message;
	$users=User::getAll();
	$questions=Question::getOldQuestions();
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
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="state" data-checkbox="true" >Question Date</th>
						        <th data-field="id" data-sortable="true">User</th>
						        <th data-field="id" data-sortable="true">Phone Number</th>
 								<th data-field="id" data-sortable="true">Question</th>
 								<th data-field="id" data-sortable="true">Answer</th>
 								<th data-field="id" data-sortable="true">Delete Question</th>
						        
						    </tr>
						    <?php
						    foreach ($questions as $question) {				    	
						    	$userid=$question['user_id'];
						    	$user=User::getOne($userid);
						   		$question_id=$question['id'];
						    	echo "<tr>";					    					    		
						    		echo "<td>".$question['q_date']."</td>";
						    		echo "<td>".$user['name']."</td>";
						    		echo "<td>".$user['phone']."</td>";					    		
						    		echo "<td>".$question['question']."</td>";
						    		echo "<td>".$question['answer']."</td>";
						    		echo "<td>"."<a href=\"delete-question.php?id={$question['id']}\">Delete"."</a> </td>";
						    		
						    		
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
