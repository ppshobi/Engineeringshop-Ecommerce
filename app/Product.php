<?php 
	/**
	* 
	*/
	require_once('DB2.php');
	class Product
	{
		public static function add($name,$descr,$category,$mfg,$price,$unit,$qty,$visibility,$photoid,$date){
			$db = new Db();
			$name=$db -> quote($name);
			$descr=$db -> quote($descr);
			$category=$db -> quote($category);
			$mfg=$db -> quote($mfg);
			$price=$db -> quote($price);
			$unit=$db -> quote($unit);
			$qty=$db -> quote($qty);
			$visibility=$db -> quote($visibility);
			$photoid=$db -> quote($photoid);
			$date=$db -> quote($date);

			$sql=" INSERT INTO products(name,descr,category,mfg,price,unit,qty,visibility,photoid,date) VALUES('$name','$descr','$descr','$category','$mfg','$price','$unit','$qty','$visibility','$photoid',CURDATE()";
			$result=$db -> query($sql);
			if($result){
				return true;
			}else{		

				return false;
			}
		}

		public static function edit($id,$name,$descr){
			$db = new Db();
			$name=$db -> quote($name);
			$descr=$db -> quote($descr);

			$sql=" UPDATE category SET name = '$name',descr = '$descr' WHERE id= '$id' ";
			$result=$db -> query($sql);
			if($result){
				return true;
			}else{		

				return false;
			}
		}

		public static function getAll(){
			$db=new Db();
			$sql="SELECT * FROM category";
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
		public static function getOne($id){
			$db=new Db();
			$sql="SELECT * FROM category WHERE id= $id LIMIT 1";
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
		public static function delete($catid){
			$db=new Db();
			$sql="DELETE FROM category WHERE id=$catid";
			$result=$db->query($sql);
			if($result){				
				return true;
			}
			return false;
		}

	}
?>