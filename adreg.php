<?php
	session_start();
	if(!empty($_POST))
	{
		$uname = $_POST['username'];
		$email = $_POST['email'];
		$phone = $_POST['phonum'];
		$pass = $_POST['password'];

		$con = mysqli_connect('localhost','root','','pro_db');
		if(!$con)
		{
			die("Connection error...");
		}

		$sql = "INSERT INTO user_db(User_name,Email,Phone,Password) VALUES('$uname','$email','$phone','$pass')";

		$result	= mysqli_query($con,$sql);

		if($result === FALSE)
		{
			$_SESSION['error']="Error while inserting";
		}
		elseif (!$uname || !$email || !$phone || !$pass) 
		{
			$_SESSION['error']="All Fileds Are Required";	
		}
		else
		{
			header("location:login.php");
		}	
	}	
?>