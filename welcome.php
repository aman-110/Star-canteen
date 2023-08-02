<?php 
	session_start();
	if(isset($_SESSION['logged_in']))
	{?>
		<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Star Canteen</title>
	<style type="text/css">
		*{  margin: 0; 
			padding: 0; 
			box-sizing: border-box;
			font-family: monospace;
		}

		nav{
			width: 100%;
			height: 10vh;
			display: flex;
			font-size: 15px;
			justify-content: space-around;
			align-items: center;
		}

		.logo a{
			color: white;
			text-decoration: none;
			font-size: 30px;
			text-transform: uppercase;
		}

		.menu ul li{
			list-style: none;
			display: inline-block;
			padding: 0 20px;
		}

		.menu ul li a{
			color: white;
		  	display: block;
		  	padding: 3px 15px;
		  	border-radius: 20px;
		  	text-decoration: none;

		}

		.search_wc a{
			color: white;
			text-decoration: none;
			text-transform: capitalize;
			font-size: 20px;
			border: 1px solid transparent;
			padding: 12px 26px;
			background-color: #d465ef;
			font-weight: 500;
		}

		.menu ul li a:hover{
			color: black;
		  	background-color: white;
		}

		.center_con{
			position: absolute;
			top: 30%;
			left: 55%;
			transform: translate(-50%, -50%);
			text-align: center;
		}

		.center_con h1{
			color: white;
			font-size: 50px;
			font-weight: 700;
			text-transform: capitalize;
			margin-bottom: 10px;
		}

		.center_con h2{
			color: white;
			font-size: 25px;
			font-weight: 400;
			text-transform: capitalize;
			margin-bottom: 10px;
		}

		.center_con h2:before{
			content:"";
			width: 235px;
			height: auto;
			border: 2px solid white;
			position: absolute;
			left: 40px;
			bottom: 0;
			margin-bottom: 10px;
		}

		.navbar::before{
			content: "";
			background-color: black;
			position: absolute;
			height: 100%;
			width: 100%;
			z-index: -1;
			opacity: 0.4;
			
		}

		.navbar{
			position: relative;
		}


		#home{
			display: flex;
			flex-direction: column;
			padding: 3px 200px;
			justify-content: center;
			align-items: center;
		}

		#home{
			display: flex;
			flex-direction: column;
			padding: 3px 200px;
			justify-content: center;
			align-items: center;
			height: 500px;
		}

		#home::before{
			content: "";
			background: url('pizza.jpg') no-repeat center center/cover;
			position: absolute;
			height: 100%;
			width: 100%;
			z-index: -1;
			opacity: 0.89;
		}

		.primary{
			font-size: 3rem;
			padding: 10px;
		}

		#home h1{
			color: white;
			text-align: center;
			text-transform: capitalize;
			font-size: 4rem;
		}

		#home p{
			color: white;
			text-align: center;
			text-transform: capitalize;
			font-size: 1.5rem;
		}

		.primary1{
			font-size: 3.8rem;
			padding: 20px;
			margin: 70px;
			text-align: center;
		}

		.btn1{
			font-size: 2.5rem;
			padding: 2px 20px;
			margin: 5px 100px;
			background-color: darkblue;
			border-radius: 1.2rem;
			color: white;
			font-size: 30px;
			cursor: pointer;
		}

		.btn1:hover{
			background-color: gray;
			color: black;
		}

		#services{
			margin: 20px;
			display: flex;
			align-items: center;
			justify-content: center;
		}	

		#services .box{
			border: 2px solid black;
			border-radius: 1.2rem;
			padding: 15px;
			margin: 5px 15px;
		}

		#services .box img{
			height: 150px;
			margin: auto;
			display: block;
		}

		.sec{
			text-align: center;
			font-size: 25px;
		}
	</style>
			<link rel="stylesheet" href="bootstrap-5/css/bootstrap.min.css">
</head>
<body>
		<nav class="navbar">
			<div class="logo">
				<a href="#">Star Canteen</a>
			</div>
			<div class="menu">
				<ul>
					<li><a href="index.php" class="active">Home</a></li>
					<li><a href="index.php">Log out</a></li>
					<li><a href="#" class="active">About us</a></li>
				</ul>
			</div>
		</nav>

	<section id="home">
		<h1 class="primary">Welcome to star canteen</h1>
		<p>Lets make order</p>
	</section>


	<section class="services">
		<h1 class="primary1 center">Products</h1>
	<div class="container-fluid">
	    <div class="row flex-nowrap">		
			 <div class="col py-3">
                <div class="row justify-content-center">
                    <div class="col-sm-11 mt-2 mx-3 ml-5 mr-5 jumbotron">    
                        <table class="table mt-5">
                        <thead class="table-dark">
                        <th>ID</th> 
                        <th>Name</th>
                        <th>Price</th>
                        <th>Catagary</th>
                        <th>Image</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
	                            <?php 
                                $con=mysqli_connect('localhost','root','','pro_db');
                                $sql="SELECT * FROM food";
                                $result=mysqli_query($con,$sql);
                                while ($row=mysqli_fetch_array($result)) 
                                {?>
                                    <tr>
                                        <td><?php echo $row['id'];?></td> 
                                        <td><?php echo $row['name'];?></td>
                                        <td><?php echo $row['price'];?></td>
                                        <td><?php echo $row['catagary'];?></td>
                                        <td><img src="./uploads/<?php echo $row['image'];?>" height="100" width="100" alt=""></td>
                                        <td><a href="viewfoodc.php?id=<?php echo $row['id']?>" type="submit" class="btn btn-danger mt-3" id="delete" name="delete">View</a></td>
                                    <tr>
                                <?php
                                }?>     
                    </tbody>
                </table>           
            </div>
        </div>
    </div>
  </div>
</div>        			
	</section>

</body>
</html>


	<?php			
	}
	else
	{
		header("location: login.php");
	}
?>
