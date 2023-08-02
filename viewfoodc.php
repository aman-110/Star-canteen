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
			padding: 0px 20px;
		}

		.menu ul li{
			list-style: none;
			display: inline-block;
			padding: 0 40px;
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

		<section>
			<?php 
				$id=$_GET['id'];
				$con=mysqli_connect('localhost','root','','pro_db');
				$sql="SELECT * FROM food WHERE id='$id'";
				$result=mysqli_query($con,$sql);
				$row=mysqli_fetch_array($result);
			?>			

					
			  <div class="row justify-content-center" data-aos="fade-right">
            <div style="margin-top:150px;margin-bottom:100px;" class="col-sm-12 col-md-3 col-lg-3 col-12">
            <form action="insertcart.php" method="POST">
                <div class="card" style="width: 18rem;">
               
                  <img src="./uploads/<?php echo $row['image']?>" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                  <h5 class="card-title"><?php echo $row['name'];?></h5>
                  <p class="card-text"><span>price : </span><?php echo $row['price'];?></p>
                    
                  <input type="hidden" name="PName" value="<?php echo $row['name'];?>">
                  <input type="hidden" name="PPrice" value="<?php echo $row['price'];?>">
                  
                  <input type="number" name="PQuantity" value="1" min="1" max="10" class="form-control"  placeholder="Enter Quantity" required><br>
                  <button type="submit" name="addCart" class="btn btn-primary ">Add to Cart</button>
                  <button class="btn btn-warning me-2" type="submit"><a style="text-decoration: none;" href="welcome.php">back</a></button>
               
                </div>
            </form>
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
