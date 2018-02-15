<?php 

session_start();

$username = $_REQUEST["username"];
$password = $_REQUEST["password"];
$isvalid = false;

// MySQL Query to database

{
	$isvalid = true;
	
}

if($isvalid){

	$_SESSION["loggedIn"] = true;
	$_SESSION["user"] = $username;
	header("location:homepage.php");
}else
	header("location:front.php?m=1");
?>