<?php

		include("config.php");
		
		$product=array();
		$namee=$_POST["n"];
		$pricee=$_POST["p"];
		$categorye=$_POST["cat"];
		
		
		$imagee="";

		if(isset($_FILES['i']))
			{
	           if(move_uploaded_file($_FILES['i']['tmp_name'], "pictures/".$_FILES['i']['name']))
	           {
	                $imagee = $_FILES['i']['name'];
	           }
	        }
		$stmt = $conn->prepare("UPDATE products SET name=?,price=?,category=?,image=? WHERE id=?");
		$stmt->bind_param("ssssi",$e_name,$e_price,$e_category,$e_image);
		$e_name=$namee;
		$e_price=$pricee;
		$e_category=$categorye;
		$e_image=$imagee;
		
		
		$stmt->execute();

		header("Location:table.php");
?>