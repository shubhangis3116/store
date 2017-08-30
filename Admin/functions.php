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
	function updateProduct($product)
	{
		global $conn;
		$stmt=$conn->prepare("UPDATE newproductlist SET name=?,price=?category=?,image=? WHERE id=? ");
		if(false===$stmt)
		{
			return false;
		}
		$params=$stmt->bind_param('ssssi',$newname,$newprice,$newcat,$newimage,$istoupdate);
		if(false===$params)
		{
			return false;
		}
			$newname = isset($products['name'])?$products['name']:'';
			$newprice = isset($products['price'])?$products['price']:'';
			$newimage = isset($products['image'])?$products['image']:'';
			$newcat = isset($products['dropdown'])?$products['dropdown']:'';
			$idtoupdate=isset($products['edit'])?$products['edit']:'';
			$execute = $stmt->execute();
			if ( false === $execute) {
				return false;
			}
			$product_id = $stmt->insert_id;
			$stmt->close();
			return $product_id;

	}
	/*categories added to database */
		function ParentCategory($cname,$cparent)
					{
						global $conn,$stmt;
						$stmt=$conn->prepare("INSERT INTO category (name,parent_id) VALUES(?,?)");
						$stmt->bind_param("si",$cname,$cparent);
						$stmt->execute();
						if(false==$stmt)
						{
							echo "Error!";
						}
						$stmt->close();
						$conn->close();
					}
	
	function getCategory()
	{
		global $catarray;
		$catarray=array();
		include("config.php");
		global $conn, $catarray, $stmt;
		$stmt=$conn->prepare("SELECT * FROM category");
		$stmt->bind_result($id,$name,$parentid);
		$stmt->execute();
		while($stmt->fetch())
		{
			array_push($catarray,array("id"=>$id,"name"=>$name,"parentid"=>$parentid));
		}
		
	}
	
		


		
	



		
		/*
		include('config.php');
		global $conn,$catarray, $stmt;
		$stmt=$conn->prepare("SELECT COUNT(*) FROM category");
			$stmt->bind_result($num1);
			$limits=4;
			$offsets=0;
			$stmt->execute();

			while($stmt->fetch())
			{
				$totl=$num1;
			}

			
			$totalpage=ceil($totl/$limits);

			if(isset($_GET['pageid']))
			{
				for($i=1;$i<=$totalpage;$i++)
				{
					if($i==$_GET['pageid'])
					{
						$offsets=($i-1)*$limits;
					}
				}
			}
		 $catarray=array();

			 $stmt=$conn->prepare("SELECT * FROM category LIMIT ?,?");
			 $stmt->bind_param("ii",$offsets,$limits);
			 $stmt->execute();

			 $stmt->bind_result($id,$name,$parentid);
			 while($stmt->fetch())
			 {
			 	array_push($catarray,array("id"=>$id,"name"=>$name, "parentid"=>$parentid));
			 }

			 $stmt->close();
			 $conn->close();
*/
			 ?>
			