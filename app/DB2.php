<?php
/**
* 
*/
class Db
{
	private static $connection;
	function __construct()
	{
		 if(!isset(self::$connection)) {
		 	self::$connection=mysqli_connect("localhost","root","","engineering");
		 	if (!self::$connection) {
		 		die("connection Error");
		 	}else{
		 		return self::$connection;
		 	}
		 }
	}

	function query($sql){
		$result=mysqli_query(self::$connection,$sql);
		return $result;
	}
	function quote($var){
		return htmlspecialchars($var);
	}
}
?>