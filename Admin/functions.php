	<?php include('config.php'); ?>
	<?php 
	/* function for adding product */
	function addProduct($product){
			global $conn;
			
			$stmt = $conn->prepare("INSERT INTO newproductlist (name , price , image, category) VALUES (?,?,?,?)");
			
			if ( false === $stmt ) {
				return false;
			}
			$params = $stmt->bind_param('ssss',$proname,$proprice,$proimage,$procat);
			
			if ( false === $params) {
				return false;
			}
			$proname = isset($products['name'])?$products['name']:'';
			$proprice = isset($products['price'])?$products['price']:'';
			$proimage = isset($products['image'])?$products['image']:'';
			$procat = isset($products['dropdown'])?$products['dropdown']:'';
			
			$execute = $stmt->execute();
			if ( false === $execute) {
				return false;
			}
			$product_id = $stmt->insert_id;
			$stmt->close();
			return $product_id;
		}

	function getProducts($offset,$limit){
		/*products are shown in table */
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM newproductlist LIMIT ?,?");
		if(false===$stmt)
		{
			return false;
		}
		$params=$stmt->bind_param('ii',$offset,$limit);
		if(false===$params)
		{
			return false;
		}
		
		$stmt->bind_result($pid,$pname,$pprice,$pimage,$pcat);
		$products=array();
		
		$execute=$stmt->execute();
		
		if ( false === $execute) 
		{
			return false;
		}
		while($stmt->fetch()){
			$products[] = array("id"=>$pid,"name"=>$pname, "price"=>$pprice,"image"=>$pimage,"dropdown"=>$pcat);
		}
		
		return $products;
		
	}
	function getProductCount()
	{
		global $conn;
		$stmt=$conn->prepare("SELECT count(*) FROM newproductlist");
		if(false===$stmt)
		{
			return false;
		}
		$stmt->bind_result($new);
		$execute=$stmt->execute();
		if(false===$execute)
		{
			return false;
		}
		while($stmt->fetch())
		{
			$total=$new;
		}
		return $total;
		$stmt->close();
	}