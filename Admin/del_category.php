<?php
$dele=$_GET["deid"];
	include("config.php");

	$stmt = $conn->prepare("DELETE FROM category WHERE id=?");

	$stmt->bind_param("i",$dele);

	$stmt->execute();
	header("Location:manage_category.php");
	?>