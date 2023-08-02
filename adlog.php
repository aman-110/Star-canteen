<?php
	session_start();
	$user = $_POST['username'];
	$pass = $_POST['password'];
	if(!$user || !$pass)
	{
		$_SESSION['loginerror'] = "Username and Password are required";
		header("location: login.php");
	}

	$con = mysqli_connect("localhost","root","","pro_db")or die("Not connected");
	echo $sql = "SELECT * FROM `user_db` WHERE `User_name`='$user' and `Password`='$pass'";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);
	print_r($row);
	echo $n= mysqli_num_rows($result);
	if($n>0)
	{
		$_SESSION['logged_in'] = TRUE;
		header("location: welcome.php");
	}
	else
	{
		$_SESSION['loginerror'] = "Username and Password are not match";
		header("location: login.php");
	}
		
	/*if($user != $row['User_name'] || $pass != $row['Password'])
	{
		$_SESSION['loginerror'] = "Username and Password are not match";
		header("location: login.php");
	}
	elseif(!$user || !$pass)
	{
		$_SESSION['loginerror'] = "Username and Password are required";
		header("location: login.php");
	}
	else
	{
		$_SESSION['logged_in'] = TRUE;
		header("location: welcome.php"); 
	}*/
?>