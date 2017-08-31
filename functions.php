<?php include('config.php'); ?>
	<?php 


function getProducts($offset,$limit){
		/*products are shown in table through function */
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
			array_push($products,array("id"=>$pid,"name"=>$pname, "price"=>$pprice,"image"=>$pimage,"dropdown"=>$pcat));
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
function getCategory()
	{    //category is fetched from database
		//global $catarray;
		$getcat=array();
		include("config.php");
		global $conn, $stmt;
		$stmt=$conn->prepare("SELECT name FROM category");
		$stmt->bind_result($name);
		$stmt->execute();
		while($stmt->fetch())
		{
			array_push($getcat,array("name"=>$name));
		}
		return $getcat;
	}
function getCategoryCount($all=array())
{
global $conn;
$query1=array();
$sqlc="SELECT COUNT(*) FROM category";
$sql2="WHERE name IN(";
foreach($all as $value)
{
	$query1[]="'value'";
}
$query2=implode(',',$query1);
$sql2.=$query2.")";
$sqlc.=$sql2;
$stml=$conn->prepare($sqlc);
$stmt->bind_result($new1);
$execute=$stmt->execute();
if(false===$execute)
{
	return false;
}
while($stmt->fetch())
{
	$new2=$new1;
	return $new2;
}
}

	
function allcategory($all=array(),$offset,$limit)
	{
		global  $conn;
		$query1=array();
		$sql="SELECT * FROM category";
		$sql2="WHERE name IN(";
		foreach($all as $value)
		{
			$query1[]="$value";
		}
		$query2[]=implode(',',$query1);
		$sql2.=$query2.") LIMIT ?,?";
		$sql.=$sql2;
		$stmt=$conn->prepare($sql);
		if(false===$stmt)
		{
			return false;
		}
		$param=$stmt->bind_param("ii",$limit,$offset);
		if(false===$param)
		{
			return false;
		}
		$stmt->bind_result($c_id,$c_name,$c_price,$c_image,$c_cat);

		$execute=$stmt->execute();
		if(false===$execute)
		{
			return false;
		}
		$pro = array();
		while($stmt->fetch())
		{
			array_push($pro,array("id"=>$c_id,"name"=>$c_name,"price"=>$c_price,"image"=>$c_image,"dropdown"=>$c_cat));
		}
	
	return $pro;
	print_r($pro);

	
}
