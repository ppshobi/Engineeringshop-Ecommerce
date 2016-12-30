<?php 
	/**
	* 
	*/
	require_once('DB2.php');
	require_once('Auth.php');
	require_once('Cart.php');
	class Order
	{
		public static function place(){
			$order_placing=false;
			$db=new Db();
			$userid=Auth::getuserid();
			$cart=Cart::getCart();

			if($cart){
				$totalcost=$_SESSION['totalcost'];
				$shipto=User::getOne($userid);
				$shipto=trim($db->quote($shipto['address']));
				$created_date = date("Y-m-d H:i:s");
				$sql="INSERT INTO orders (id,order_date,user_id,totalcost,shipto) VALUES('','$created_date','$userid','$totalcost','$shipto')";
				$result=$db->query($sql);			
				if ($result) {
					$order_id=$db->lastid();
					foreach ($cart as $product) {
						$product_id=$product['id'];
						$qty=$product['qty'];
						$sql="INSERT INTO items_in_order (order_id,product_id,qty) VALUES('$order_id','$product_id','$qty')";	
						$result=$db->query($sql);
					}
					$order_placing=true;
				}
			}
			if ($order_placing) {
				Cart::empty();
				return true;
			}else{
				return false;
			}

		}

		public static function getAll(){
			$db=new Db();
			$sql="SELECT * FROM orders";
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
			$sql="SELECT * FROM orders WHERE id= $id LIMIT 1";
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
		public static function shipped($id){
			$db=new Db();
			$date=date("Y-m-d H:i:s");
			$sql="update orders set status=1, shipped_date=$date";
			$result=$db->query($sql);
			if($result){
				return true;
			}
			return false;
			
		}

		public static function delete($id){
			$db=new Db();
			$sql="DELETE FROM orders WHERE id=$id";
			$result=$db->query($sql);
			$sql="DELETE FROM items_in_order WHERE order_id=$id";
			$result=$db->query($sql);
		
			if($result){				
				return true;
			}
			return false;
		}

	}
?>