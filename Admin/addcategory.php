<?php include("config.php") ?>
<?php
if(isset($_POST['submit']))
{
	$allcategory = array();
	$name = $_POST['cname'];
	$pid=$_POST['parent_id'];

	$stmt=$conn->prepare("INSERT INTO category (name,parent_id) VALUES(?,?");
	$stmt->bind_param("si",$name,$pid);
	$name1=$name;
	$stmt->execute();
	header("Location:create_category.php");
}
?>