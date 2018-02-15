<?php 
session_start();
if(!isset($_SESSION["loggedIn"])){
	header("Location:front.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Homepage</title>
</head>
<body>
	<h1>
		Hello <?php 

			echo $_SESSION["user"];

		?>
	</h1>
	<a href="logout.php">Logout</a>

</body>
</html>