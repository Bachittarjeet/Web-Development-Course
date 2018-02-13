<?php 

include_once 'connect.php';

$query = "select * from `users` where id>4  order by name desc  limit 3";
$result = mysqli_query($con,$query);

if(mysqli_num_rows($result)!=0){

	while($row = mysqli_fetch_array($result)){
		echo $row["id"]." ".$row["name"]." ".$row["age"]." ".$row["qualification"]."<br>";
	}

}else{
	echo "Khali hai";
}

?>