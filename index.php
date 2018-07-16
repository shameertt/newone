<?php

include('server.php')
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h1>Login</h1>
	</div>
	<form action="index.php" method="post">
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Username:</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Password:</label>
			<input type="Password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user" >Login</button>
		</div>
			<p>Not a Member? <a href="register.php">SignUp</a></p>
		
	</form>
</body>
</html>