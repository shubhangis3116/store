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
$sqlc="SELECT COUNT(*) FROM newproductlist ";
$sql2="WHERE name IN(";
foreach($all as $value)
{
	$query1[]="'".$value."'";
}
$query2=implode(',',$query1);
$sql2.=$query2.")";
$sqlc.=$sql2;

$stmt=$conn->prepare($sqlc);
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
		$sql="SELECT * FROM newproductlist ";
		$sql2="WHERE name IN(";
		foreach($all as $value)
		{
			$query1[]="$value";
		}
		$query2=implode(',',$query1);
		$sql2.=$query2.") LIMIT ?,?";
		$sql.=$sql2;
		//echo $sql;die;
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
	//print_r($pro);die;

	
}
function register($uname,$pass)
{
	global $conn;
	$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
	$stmt -> bind_param("ss", $username, $password);
	$username=$uname;
	$password=$pass;
	$stmt -> execute();
	
	return true;

}
function login($uname,$pass)
{
	global $conn;
	$stmt=$conn->prepare("SELECT username, password FROM users");
	$stmt->bind_result($username, $password);
	$stmt->execute();
	while($stmt->fetch())
	{
		if($uname==$username)
			{
				if($pass==$password)
				{
					return false;
				}
				else
				{
					return true;
				}
			}
			else
			{
				return true;
			}
	}
}
function getProductById($idd)
{
	global $conn;
	$item=array();
	$stmt=$conn->prepare("SELECT id,name,price,image,category FROM newproductlist WHERE id=?");
	if(false===$stmt)
	{
		return false;
	}
	$param=$stmt->bind_param("i",$idd);
	if(false===$param)
	{
		return false;
	}
	$stmt->bind_result($idp,$namep,$pricep,$imagep,$categoryp);
	$execute=$stmt->execute();
	if(false===$execute)
	{
		return false;
	}
	while($stmt->fetch())
	{
		$item[]=array("id"=>$idp,"name"=>$namep,"price"=>$pricep,"image"=>$imagep,"category"=>$categoryp);

	}
	//$_SESSION['totalp']+=$item[0]["price"];
	return $item;
	

}
function productExists($idd)
{
	if(isset($_SESSION['cart']))
	{
		$cart=$_SESSION['cart'];

		foreach ($cart as $key => $value)
		{
			if($value['id']==$idd)
			{
				return true;
			}	
		}
		return false;
	}
}
function updateProduct($idd)
{
	$cart=$_SESSION['cart'];

	foreach ($cart as $key => $value) 
	{
		if($value['id']==$idd)
		{
			$cart[$key]['quantity'] +=1;
			break;
		}
	}
	return $cart;
}
function orders($data=array())
{
	global $conn;

	$usern=$_SESSION['usern'];
	//$totalp=$_SESSION['totalp'];
	$time=date('Y/m/d H:i:s');

	$stmt=$conn->prepare("INSERT INTO order (username,ordertime,data,price) VALUES (?,?,?,?)");
	if(false===$stmt)
	{
		//echo "string";die;
		return false;
	}
	$param=$stmt->bind_param("ssss",$usernm,$date,$dataa,$pricee);
	$usernm=$usern;
	$pricee=$totalp;
	$date=$time;
	$dataa=$data;
	//echo "string";die;
	//echo $user1;die;
	if(false===$param)
	{
		return false;
	}
	$execute=$stmt->execute();
	if(false===$execute)
	{
		return false;
	}
	return ;
}
