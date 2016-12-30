<?php 
	/**
	* 
	*/
	if (!isset($_SESSION)) {
		session_start();
	}
	require_once('User.php');
	class Auth
	{
		public static function login($username,$pass){
			$user=User::getUserByUsername($username);
			if($user){
				if($pass==$user['password']){
					$SESSION['current_user']=$user['id'];
					return true;
				}else{
					//password is wrong
					return false;
				}
			}else{
				//user does not exist
				return false;
			}
			
		}
		public static function logout(){
			if (isset($_SESSION['current_user'])) {
				unset($_SESSION['current_user']);
				return true;
			}
			
		}

		public static function isloggedin(){
			if(isset($_SESSION['current_user'])){
				return true;
			}else{
				return false;
			}
		}

		public static function getuserid(){
			if(isloggedin()){
				return($_SESSION['current_user']);
			}
			
		}
		public static function isadmin(){
			$userlevel= User::getUserLevel(getuserid());
			if ($userlevel==1) {
				return true;
			}else{
				return false;
			}
			
			
		}
		public static function delete($id){
			$db=new Db();
			$sql="DELETE FROM users WHERE id=$id";
			$result=$db->query($sql);
			if($result){				
				return true;
			}
			return false;
		}

	}
?>