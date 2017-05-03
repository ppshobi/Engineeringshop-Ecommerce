<?php 
	/**
	* 
	*/
	require_once('DB2.php');
	class Question
	{
		public static function add($question,$userid){
			$db = new Db();
			$question=$db -> quote($question);
			$user_id=$db -> quote($userid);
			$date=date('Y-m-d H:i:s');

			$sql="INSERT INTO question(question,user_id,status,created_at) VALUES('$question','$user_id',0,'$date')";

			$result=$db -> query($sql);
			
			if($result){
				return true;
			}else{		

				return false;
			}
		}
		public static function comment($comment,$question_id,$userid){
			$db = new Db();
			$comment=$db -> quote($comment);
			$user_id=$db -> quote($userid);
			$question_id=$db -> quote($question_id);
			$date=date('Y-m-d H:i:s');

			$sql="INSERT INTO comments(question_id, comment,user_id,created_at) VALUES('$question_id', '$comment','$user_id','$date')";

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
		public static function getOne($question_id){
			$db=new Db();
			$sql="SELECT * FROM question WHERE id='$question_id' LIMIT 1";
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
		public static function getOpenQuestions(){
			$db=new Db();
			$sql="SELECT * FROM question WHERE status = 0";
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
		public static function getComments($question_id){
			$db=new Db();
			$sql="SELECT * FROM comments WHERE question_id=$question_id ORDER BY created_at ASC";
			$rows=[];
			$result=$db->query($sql);
			if($result and mysqli_num_rows($result)>0){
				while ($r=mysqli_fetch_assoc($result)) {
					array_push($rows, $r);
				}
				return $rows;
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

		public static function count(){
			$db=new Db();
			$sql="SELECT COUNT(*) FROM question";
			$result=$db->query($sql);
			if($result){
				$row=mysqli_fetch_array($result);
				return $row[0];
			}
			return 0;
			
		}

	}
?>