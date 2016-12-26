<?php 
	/**
	* 
	*/
	require_once('DB2.php');
	class Unit 
	{
		public static function add($name,$descr){
			$db = new Db();
			$name=$db -> quote($name);
			$descr=$db -> quote($descr);

			$sql=" INSERT INTO unit(name,descr) VALUES('$name','$descr')";
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

			$sql=" UPDATE unit SET name = '$name',descr = '$descr' WHERE id= '$id' ";
			$result=$db -> query($sql);
			if($result){
				return true;
			}else{		

				return false;
			}
		}

		public static function getAll(){
			$db=new Db();
			$sql="SELECT * FROM unit";
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
			$sql="SELECT * FROM unit WHERE id= $id LIMIT 1";
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
		public static function delete($unitid){
			$db=new Db();
			$sql="DELETE FROM unit WHERE id=$unitid";
			$result=$db->query($sql);
			if($result){				
				return true;
			}
			return false;
		}

	}
?>