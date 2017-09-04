<?php 
session_start();
unset($_SESSION["cart"]);
unset($_SESSION["usern"]);
unset($_SESSION["totalp"]);

$_SESSION=[];
session_destroy();
header("location:index.php");
?>