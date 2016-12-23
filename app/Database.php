
<?php 
	class Mysql {
		
		function __construct()
		{
			$host="localhost"; // Host name
			$username="root"; // Mysql username
			$password=""; // Mysql password
			$db_name="engineering"; // Database name

			$conn=mysqli_connect("$host", "$username", "$password")or die("cannot connect");
			mysqli_select_db($conn,"$db_name")or die("cannot select DB");
		}
		

		public static function mysqlExecute($sql){
			if($result = mysqli_query($conn, $sql)){
				return $result;
			}
			else{
				return false;
			}
		}
	}
	

?>