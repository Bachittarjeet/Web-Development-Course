<?php

include('connect.php');
$isAuthorizedUser = false;
$username = "";
$password = "";

if($_REQUEST["username"]){
  $username = $_REQUEST["username"];
}
if($_REQUEST["password"]){
  $password = $_REQUEST["password"];
}


//$query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
$query = "SELECT * FROM `users`";


//echo "$query";
$response = mysqli_query($con, $query);

if($response && mysqli_num_rows($response)){
	
	$isAuthorizedUser = true;
	//echo " <pre> ";

	while($record = mysqli_fetch_array($response)){
		echo $record["username"]."<br>";
		echo $record["password"]."<HR>";
	}
	

}else{
	//echo "Not Received!!!";
}

if($isAuthorizedUser){
	echo "Okay";
}
else
echo "Not Okay";







/*
if($username == "Admin@gmail.com" && $password == "12345")
	header("location:admin.php?username=".$_REQUEST["username"]);
else
	header("location:error.php");
*/
?>