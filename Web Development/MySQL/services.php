<?php 
//   1. Conection 
//	2. Build query
//	  3. fire Query and wait for result
//	    4. Response Back to client	   

include_once('connect.php');

//print_r($_REQUEST);

$id = $_REQUEST["Id"];
$name = $_REQUEST["Name"];
$age = $_REQUEST["Age"];
$q = $_REQUEST["Qualification"];

//echo "$id <br> $name <br> $age <br> $q";
if(isset($_REQUEST["SaveBtn"]))
$query = "insert into `users` values($id, '$name', $age, '$q')";

if(isset($_REQUEST["UpdateBtn"]))
$query = "update `users` set name='$name',age=$age,qualification='$q' where id=$id ";

if(isset($_REQUEST["DeleteBtn"]))
$query = "delete from `users` where id=$id";



//echo $query;

$result = mysqli_query($con,$query);
if($result){
	echo "Success!!";
}else {
	echo "Nhi Hua!";
}




?>