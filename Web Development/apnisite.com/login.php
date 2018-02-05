<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Page | Demo Site</title>
	<style type="text/css">
		table{
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<form action="login_service.php" method="post">
		<table width="300" border="1" height="150">
			<tr>
				<td colspan="2">Login Form</td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="email" name="username" id="username1"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="Password" name="password" id="password1"></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" value="Login">
					<input type="reset" value="Cancel">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>