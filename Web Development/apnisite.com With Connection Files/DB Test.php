<?php

	$con = mysqli_connect("localhost","root","","TestBj");
	if($con){
		//echo "Working...";
	}
	else
		echo "Hello There! ";



	$res = mysqli_query($con, "select * from `users`");
	if(mysqli_num_rows($res)){
	?>
		<table border='1'><tr><th>ID<th>Name<th>Age<th>Qualification</tr>
	<?php 	
		while($r = mysqli_fetch_array($res)){
			echo "<tr><td>".$r["id"];
			echo "<td>".$r["name"];
			echo "<td>".$r["age"];
			echo "<td>".$r["qualification"]."</tr>";

		}


	}else{
		echo " No records Found!!!";

	}

?>

</table>