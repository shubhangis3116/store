	<?php
	$did=$_GET["delid"];
	include("config.php");

	$stmt = $conn->prepare("DELETE FROM newproductlist WHERE id=?");

	$stmt->bind_param("i",$did);

	$stmt->execute();

	header("Location:table.php");
	?>