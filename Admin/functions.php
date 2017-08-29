	<?php include('config.php'); ?>
	<?php 
	/* function for adding product */
	function addProduct($product){
			global $conn;
			
			$stmt = $conn->prepare("INSERT INTO products (name , price , category, image) VALUES (?,?,?,?)");
			
			if ( false === $stmt ) {
				return false;
			}
			$params = $stmt->bind_param('ssss',$proname,$proprice,$proimage,$procat);
			
			if ( false === $params) {
				return false;
			}
			$proname = isset($product['name'])?$product['name']:'';
			$proprice = isset($product['price'])?$product['price']:'';
			$proimage = isset($product['image'])?$product['image']:'';
			$procat = isset($product['dropdown'])?$product['dropdown']:'';
			
			$execute = $stmt->execute();
			if ( false === $execute) {
				return false;
			}
			$product_id = $stmt->insert_id;
			$stmt->close();
			return $product_id;
		}