<?php

$username = "";
$password = "";

if($_REQUEST["username"]){
  $username = $_REQUEST["username"];
}
if($_REQUEST["password"]){
  $password = $_REQUEST["password"];
}

if($username == "Admin@gmail.com" && $password == "12345")
	header("location:admin.php?username=".$_REQUEST["username"]);
else
	header("location:error.php");

?>