<?php
session_start();
include("config.php");
include("functions.php");
//addtocart module
$cart = array();

if(isset($_GET['id']))
{
	$id = $_GET['id'];

	$item = getProductById($id);

	foreach ($item as $key => $value) 
	{
		if($value['id']==$id)
		{
			//if(productExists($id))
			//{
			//$cart = product_update($id);
			//	$_SESSION['cart']=$cart;
			//}
			//else
			//{
				if(isset($_SESSION['cart']))
				{
					$cart=$_SESSION['cart'];
				}
				$value['quantity'] = 1;
				$cart[]=$value;
				$_SESSION['cart']=$cart;
			}
		}	
	}
//print_r($_SESSION['cart']);die;

if(isset($_GET['delid']))
{
	$delid=$_GET['delid'];
	$cart=$_SESSION['cart'];

	foreach ($cart as $key => $value) 
	{
		if($value['id']==$delid)
		{
			unset($cart[$key]);

			$cart = array_values($cart);
			
			$_SESSION['cart'] = $cart;
		}
	}
}

header("Location:product.php");

if($_GET['pagenum']=="cart.php")
{
	header("Location:cart.php");
}

if($_GET['pagenum']=="product.php")
{
	header("Location:product.php");
}
?>