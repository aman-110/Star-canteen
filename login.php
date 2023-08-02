<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User login</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	
	<div class="form_con">
		<div class="overlay">
	</div>
	<div class="error">
		<font color="red">
		<?php
			if(isset($_SESSION['loginerror']))
			{
				echo $_SESSION['loginerror'];
				session_destroy();
			}
		?>
	</font>
	</div>	
	<div class="titleDiv">
		<h1 class="title">Login</h1>
	</div>

	<form method="post" action="adlog.php">
		<div class="row">
			<label for="username">User Name</label>
			<input type="text" name="username" id="username" required>
		</div>	

		<div class="row">
			<label for="password">Password</label>
			<input type="password" name="password" id="password" >
		</div>	
		<div class="row" >
			<input type="submit" name="submit" id="lgn" 
			" value="Login">
		</div>

		<span class="register">Don't have an account ?</span>
		<a href="register.php">Register</a>	
	</form>
	
</body>
</html>