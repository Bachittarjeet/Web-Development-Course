<?php

	$host = "localhost";
	$username = "root";
	$password = "";
	$dbname= "TestBj";

	//Creating Connection
	$con = mysqli_connect($host,$username,$password,$dbname);
	

	//Checking Connection
	if($con){
		echo "Database is up :)";
	}else{
		echo "Database is down :(";
	}
	
 ?>
