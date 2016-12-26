<?php 
	/**
	* 
	*/
	require_once('DB2.php');
	class Product
	{
		public static function add($name,$descr,$category,$mfg,$price,$unit,$qty,$visibility,$img1,$img2,$img3,$img4,$img5){
			

			$db = new Db();
			$name=$db -> quote($name);
			$descr=$db -> quote($descr);
			$category=$db -> quote($category);
			$mfg=$db -> quote($mfg);
			$price=$db -> quote($price);
			$unit=$db -> quote($unit);
			$qty=$db -> quote($qty);
			$visibility=$db -> quote($visibility);

			$sql="INSERT INTO products(name,descr,category,mfg,price,unit,qty,visibility) VALUES('$name','$descr','$category','$mfg','$price','$unit','$qty','$visibility')";
			$result=$db -> query($sql);

			$last_id=$db-> lastid();



			if($result){
				$product_db_insert=true;
				//if result then start inserting photos
				//creating folder to store media
				// =================================
				$target = "../products/" . $last_id ."/";
				if (!file_exists($target)) {
				    mkdir($target, 0777, true);
				}
				///=================================

				$target1 = $target . basename( $img1['name']);
				$target2 = $target . basename( $img2['name']);
				$target3 = $target . basename( $img3['name']);
				$target4 = $target . basename( $img4['name']);
				$target5 = $target . basename( $img5['name']);


				

				if(move_uploaded_file($img1['tmp_name'], $target1)&&move_uploaded_file($img2['tmp_name'], $target2)&&move_uploaded_file($img3['tmp_name'], $target3)&&move_uploaded_file($img4['tmp_name'], $target4)&&move_uploaded_file($img5['tmp_name'], $target5))
				{					
					$img1=basename($img1['name']);
					$img2=basename($img2['name']);
					$img3=basename($img3['name']);
					$img4=basename($img4['name']);
					$img5=basename($img5['name']);

					
					$sql="INSERT INTO photo (product_id,location) VALUES('$last_id','$img1'),('$last_id','$img2'),('$last_id','$img3'),('$last_id','$img4'),('$last_id','$img5')";
					$result=$db->query($sql);
					if (!$result) {
						die("Media data could not inserted to photo table");
						return false;
					}
					
				}
				//return true if everything okay
				return true;
			}else{		
				//product db insertion failed
				print_r($result);
				print_r($sql);
				die();
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
				return $rows;
			}
			return false;
			
		}
		public static function delete($id){
			$db=new Db();
			$sql="DELETE FROM products WHERE id=$id";
			$result=$db->query($sql);
			if($result){				
				return true;
			}
			return false;
		}

	}
?>