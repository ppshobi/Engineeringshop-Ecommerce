<?php 
	/**
	* 
	*/
	require_once('Database.php');
	class Category 
	{
		public static function add($name="dummy",$descr="dummy"){
			$db=new Db();
			$name=$db -> quote($name);
			$descr=$db -> quote($descr);
			$descr=htmlspecialchars($descr);
			$sql=" INSERT INTO category VALUES('$name','$descr') ";
			
			if($db -> query($sql)){
				return true;
			}else{
				return false;
			}
		}
	}
?>