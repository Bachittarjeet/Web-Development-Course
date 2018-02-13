<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MySQL Test File</title>
</head>
<body>	
	<form action="services.php" method="post" >
		Id: <input type="number" name="Id" max="30"><br>
		Name: <input type="text" name="Name" maxlength="20"><br>
		Age: <input type="number" name="Age" value="20" max="60"><br>
		Qualification: <input type="text" name="Qualification"><br>
		Actions: <input type="submit" name="SaveBtn" value="Save">
				<input type="submit" name="UpdateBtn" value="Update">
				<input type="submit" name="DeleteBtn" value="Delete">

	</form>
</body>
</html>