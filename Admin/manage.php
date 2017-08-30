	<?php

	session_start();
	include("config.php");
	include("functions.php");

	if(isset($_POST['submit']))
	{
		$products=array();
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
			
				$products[] = array('name'=>$proname,'price'=>$proprice,'dropdown'=>$procat,'image'=>$proimage);
			
			$product_id = addProduct($products);



			header("location:forms.php");
	}
			

	

			//

	

	
	if(isset($_POST['update']))
	{	
		$products=array();
		$name1=$_POST['name'];
		$price1=$_POST['price'];
		
		$cat1=$_POST['dropdown'];
		$idtoupdate=$_POST['edit'];

			$image1="";

		if(isset($_FILES['image']))
			{
	           if(move_uploaded_file($_FILES['image']['tmp_name'], "pictures/".$_FILES['image']['name']))
	           {
	                $image1 = $_FILES['image']['name'];
	           }
	        }

	         
	         $product_id = updateProduct(array('name'=>$name1,'price'=>$price1,'category'=>$cat1,'image'=>$image1,'id'=>$istoupdate));

	}
	
	header("location:table.php");

	
	?>