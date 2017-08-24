<?php 
include('config.php');
global $conn;

 if(isset($_POST['submit']))
{
	$stmt=$conn->prepare("INSERT INTO products(name,price,image,category) VALUES(?,?,?,?,?)");
	$stmt->bind_param("ssss", $name,$price,$image,$category);

	
	$name=$_POST['name'];
	$price=$_POST['price'];
	$category=$_POST['dropdown'];


 
	if(isset($_FILES['image']))
	{

		if(move_uploaded_file($_FILES['image']['tmp_name'],  "pictures/".$_FILES['image']['name']))
		{
			$image=$_FILES['image']['name'];

		}
	}
				$stmt->execute() or die($stmt->error());
				$stmt->close();

	
	 header("location:forms.php");
	

}
?>