<?php 
	/**
	* 
	*/
	require_once('DB2.php');
	class Question
	{
		public static function add($question,$userid){
			$db = new Db();
			$name=$db -> quote($question);
			$descr=$db -> quote($userid);
			$date=new date("Y-m-d");
			$sql="INSERT INTO question(user_id, question,q_date) VALUES('$userid','$question','$date')";
			$result=$db -> query($sql);
			if($result){
				return true;
			}else{		

				return false;
			}
		}


		public static function getAll(){
			$db=new Db();
			$sql="SELECT * FROM question";
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
		public static function getNewQuestions(){
			$db=new Db();
			$sql="SELECT * FROM question WHERE answer IS NULL";
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
		public static function getOldQuestions(){
			$db=new Db();
			$sql="SELECT * FROM question WHERE answer IS NOT NULL";
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
			$sql="SELECT * FROM question WHERE id= $id LIMIT 1";
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
		public static function getUserQuestion($userid){
			$db=new Db();
			$sql="SELECT * FROM question WHERE user_id= $userid LIMIT 1";
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
		public static function delete($catid){
			$db=new Db();
			$sql="DELETE FROM question WHERE id=$catid";
			$result=$db->query($sql);
			if($result){				
				return true;
			}
			return false;
		}

	}
?>