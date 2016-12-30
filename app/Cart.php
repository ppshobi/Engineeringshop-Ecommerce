<?php 
if (!isset($_SESSION)) {
	session_start();
}
require_once('Product.php');
require_once('Photo.php');
	class Cart
	{
		function __construct(){
			if(!isset($_SESSION['cart'])){
				$_SESSION['cart']= array();
				$_SESSION['totalcost']=0;
			}
		} 

		public static function add($product_id,$qty){
			$prod=Product::getOne($product_id);
			$price=$prod['price'];
			$name=$prod['name'];
			$img=Photo::getOneWithUrl($product_id);
			$subtotal=$price*$qty;
			$product = array('name'=>$name,'id' => $product_id,'price'=>$price,'qty'=>$qty,'subtotal'=>$subtotal);
			if(array_push($_SESSION['cart'],$product)){
				$totalcost=0;
				foreach ($_SESSION['cart'] as $product) {
					$totalcost+=$product['subtotal'];
				}

				$_SESSION['totalcost']=$totalcost;
				return true;
			}else{
				return false;
			}
		}



		public static function getCart(){
			if(isset($_SESSION['cart'])){
				return $_SESSION['cart'];
			}else{
				return null;
			}
			
		}


		public static function getTotal(){
			if(isset($_SESSION['totalcost'])){
				return $_SESSION['totalcost'];
			}else{
				return 0;
			}
			
		}
		public static function get_product_count(){
			if(isset($_SESSION['cart'])){
				$count=0;
				foreach ($_SESSION['cart'] as $product) {
					$count++;
				}
				return $count;
			}else{
				return 0;
			}
		}
		public static function empty(){
			$_SESSION['cart']=array();
			$_SESSION['totalcost']=0;
		}

	}
?>