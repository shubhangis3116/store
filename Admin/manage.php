	<?php

	session_start();
	include("config.php");
	include("functions.php");

	if(isset($_POST['submit']))
	{
		$product=array();
		$proname=$_POST['name'];
		$proprice=$_POST['price'];
		$procat=$_POST['dropdown'];


		

		
			if(isset($_FILES['image']))
			{

				if(move_uploaded_file($_FILES['image']['tmp_name'], "pictures/".$_FILES['image']['name']))
				{
					$proimage=$_FILES['image']['name'];
				}
			}
			
				$product = array('name'=>$proname,'price'=>$proprice,'dropdown'=>$procat,'image'=>$proimage);
			
			$product_id = addProduct($product);

			header("location:forms.php");


	

			//

	}

	/*
	else if(isset($_POST['update']))
	{	

		$name1=$_POST['name'];
		$price1=$_POST['price'];
		$image1=$_FILES['image']['name'];
		$cat1=$_POST['dropdown'];
		$idtoupdate=$_POST['edit'];


		$stmt=$conn->prepare("UPDATE products SET name=?,price=?,image=?,category=? WHERE id=?");
		$stmt->bind_param("ssssi",$name1,$price1,$image1,$cat1,$idtoupdate);

		$stmt->execute();
		session_destroy();

	}
	
	header("location:forms.php");

	
*/
	?>