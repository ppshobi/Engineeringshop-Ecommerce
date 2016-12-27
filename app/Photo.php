<?php 
	/**
	* 
	*/
	require_once('DB2.php');
	class Photo 
	{
		public static function getOne($product_id){
			$db=new Db();
			$sql="SELECT * FROM photo WHERE product_id= $product_id LIMIT 1";
			$rows=[];
			$result=$db->query($sql);
			if($result){
				while ($r=mysqli_fetch_assoc($result)) {
					array_push($rows, $r);
				}
				return $rows[0];
			}
			return false;
			
		}
		public static function getOneWithUrl($product_id){
			$db=new Db();
			$sql="SELECT * FROM photo WHERE product_id= $product_id LIMIT 1";
			$rows=[];
			$result=$db->query($sql);
			if($result){
				while ($r=mysqli_fetch_assoc($result)) {
					array_push($rows, $r);
				}
				 $url="products/".$product_id."/".$rows[0]['location'];
				 return $url;
			}
			return false;
			
		}
		public static function getAll($product_id){
			$db=new Db();
			$sql="SELECT * FROM photo WHERE product_id= $product_id";
			$rows=[];
			$result=$db->query($sql);
			if($result){
				while ($r=mysqli_fetch_assoc($result)) {
					array_push($rows, $r);
				}
				return $rows;
			}
			return false;
			
		}

	}
?>