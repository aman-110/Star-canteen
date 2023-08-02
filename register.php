<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	<div class="form_con">
		<div class="overlay">
	</div>
	<div class="error">
		<font color="red">
		<?php
			if(isset($_SESSION['error']))
			{
				echo $_SESSION['error'];
				session_destroy();
			}
		?>
	</font>
	</div>		
	<div class="titleDiv">
		<h1 class="title">Sign Up</h1>
	</div>
	<form method="post" action="adreg.php">
		<div class="row">
			<label for="username">User Name</label>
			<input type="text" name="username" id="username" required>
		</div>	
		<div class="row">
			<label for="email">Email Address</label>
			<input type="email" name="email" id="email" placeholder = "abc@gmail.com" required>
		</div>	
		<div class="row">
			<label for="phonenumber">Phone number</label>
			<input type="tel" name="phonum" id="phonenumber" placeholder="1234567890" pattern="[0-9]{4}[0-9]{3}[0-9]{3}" required> 
		</div>	
		<div class="row">
			<label for="password">Password</label>
			<input type="password" name="password" id="password" required>
		</div>	
		<div class="row" >
			<input type="submit" name="submit" id="sgn" 
			value="Sign in">
		</div>
		<span class="register">If already have an account ?</span>
		<a href="login.php">Login</a>	
	</form>
</body>
</html>