<?php
	
	if(isset($_REQUEST["subBtn"])){
		$name = "";
		$size=0;
		$tmp_loc="";
		$pic = "";

		if(isset($_FILES["dp"]["name"])){

			$name = $_FILES["dp"]["name"];
			$size = $_FILES["dp"]["size"];
			$tmp_loc = $_FILES["dp"]["tmp_name"];
			$type = $_FILES["dp"]["type"];

			$dir_name = "uploaded_images/".$name;
			$pic = $dir_name;
			
			if (file_exists($dir_name)) {
		    	echo "Sorry, file already exists.";
		    }else
				move_uploaded_file($tmp_loc, $dir_name);


		}
		echo " Name: $name <br> size: $size <br> Tmp Name: $tmp_loc <br> type : $type";
		
		echo "<img height='100' width=100 src='$pic'>";

	}else{
		echo "No Testing Please!!!";
	}
	
?>