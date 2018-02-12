<pre><?php 
	$title = "My Site Title";
	
	

	//Associate Array
	$name= array("Raka","Shaka","Basanti");
	$age = array(
		"Peter" => "35", 
		"Ben" => "37", 
		"Joe" => "43",
		"Raka" => "20",
		"Basanti" => "10"
	);

	print_r($age);
	print_r($name);
	echo "Peter is " . $age['Peter'] . " years old.<br>Assecding Order Sorting By Keys<br>";

	arsort($age);
	foreach($age as $key => $value) {
	    echo "Key=" . $key . ", Value=" . $value;
	    echo "<br>";	
	}


	//Server 
	echo $_SERVER['PHP_SELF'];
	echo "<br>";
	echo $_SERVER['SCRIPT_URI'];
	echo "<br>";
	echo $_SERVER['HTTP_HOST'];
	
	echo "<br>";
	echo $_SERVER['HTTP_USER_AGENT'];
	echo "<br>";
	echo $_SERVER['SCRIPT_NAME'];



?>