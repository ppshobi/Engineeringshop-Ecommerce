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

		public static function edit($id,$name,$descr,$category,$mfg,$price,$unit,$qty,$visibility){
			$db = new Db();
			$id=$db->quote($id);
			$name=$db -> quote($name);
			$descr=$db -> quote($descr);
			$category=$db -> quote($category);
			$mfg=$db -> quote($mfg);
			$price=$db -> quote($price);
			$unit=$db -> quote($unit);
			$qty=$db -> quote($qty);
			$visibility=$db -> quote($visibility);

			$sql=" UPDATE products SET name = '$name',descr = '$descr',category = '$category',mfg = '$mfg',price = '$price',unit = '$unit',qty = '$qty',visibility ='$visibility' WHERE id = '$id' ";
			$result=$db -> query($sql);
			if($result){
				return true;
			}else{		

				return false;
			}
		}

		public static function getAll(){
			$db=new Db();
			$sql="SELECT * FROM products";
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
			$sql="SELECT * FROM products WHERE id= $id LIMIT 1";
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

		public static function delete($id){
			$db=new Db();
			$sql="DELETE FROM products WHERE id=$id";
			$result=$db->query($sql);
			$sql="DELETE FROM photo WHERE product_id=$id";
			$result=$db->query($sql);
			$target="../products/".$id."/";
			array_map('unlink', glob("$target*.*"));
			rmdir($target);
			if($result){				
				return true;
			}
			return false;
		}

	}
?>