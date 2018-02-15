<?php 
session_start();
if(isset($_SESSION["loggedIn"])){
	header("Location:homepage.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home </title>
</head>
<body>
	<p style="color: red;">
	<?php 
		if(isset($_GET["m"]) && $_GET["m"]==1){
			echo "Wrong Username and Password!";
		}
	?>
	</p>
	<form action="login_process.php" method="post">
		Username : <input type="text" name="username"><br>
		Password : <input type="password" name="password"><br>
					<input type="submit" value="Login">
					<input type="reset" value="Cancel">
	</form>

</body>
</html>