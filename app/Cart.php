<?php 

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
			
			return $_SESSION['cart'];
			
		}

	}
?>