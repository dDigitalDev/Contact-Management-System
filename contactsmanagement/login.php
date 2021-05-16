<?php
	include("server.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>CONTACTS MANAGEMENT SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

	<div id="frm">
		<form action="login.php" method="POST">
			<h3>|CONTACTS MANAGEMENT SYSTEM| Admin Login</h3>
			<p>
				<label>Username:</label>
				<input type="text" placeholder="username" id="user" name="user" /> 
			</p>
			<p>
				<label>Password:</label>
				<input type="Password" placeholder="Password" id="pass" name="pass" /> 
			</p>
			<p>
				<input type="submit" id="submit" value="Login" name="submit" />
			</p>
			<span><?php echo $error; ?></span>

		</form>
	</div>

</body>
</html>