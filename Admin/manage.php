	<?php

	session_start();
	include("config.php");

	if(isset($_POST['submit']))
	{

		$proname=$_POST['name'];
		$proprice=$_POST['price'];
		$procat=$_POST['dropdown'];


		$stmt=$conn->prepare("INSERT INTO products (name,price,image,category) VALUES(?,?,?,?)");
		$stmt->bind_param("ssss",$proname,$proprice,$proimage,$procat);

		
			if(isset($_FILES['image']))
			{

				if(move_uploaded_file($_FILES['image']['tmp_name'], "pictures/".$_FILES['image']['name']))
				{
					$proimage=$_FILES['image']['name'];
				}
			}
			

			
			
				

			$stmt->execute();
			$stmt->close();
			//

	}
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

	if(isset($_POST['add']))
	{
		$cname=$_POST['cname'];
		$parentid=$id;
		

		$stmt=$conn->prepare("INSERT INTO category (name,parent_id) VALUES(?,?)");
		$stmt->bind_param("ssss",$cname,$parentid);

			$stmt->execute();
			$stmt->close();
			$conn->close();
			//
	}

	?>