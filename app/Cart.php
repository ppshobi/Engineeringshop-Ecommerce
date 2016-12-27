<?php 


session_start();

require_once('Product.php');
require_once('Photo');
	class Cart
	{
		public static function add($id,$qty){
			if(!isset($_SESSION['cart'])){
				$_SESSION['cart']= array();
				$_SESSION['totalcost']=0;
			} 
			$prod=Product::getOne($id);
			$price=$prod['price'];
			$name=$prod['name'];
			$img=P
			$product = array('name'=>$name,'id' => $id,'qty'=>$qty);
			if(array_push($_SESSION['cart'],$product)){
				$_SESSION['totalcost']+=$price*$qty;
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