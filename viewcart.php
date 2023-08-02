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

	      <section style="margin-top: 90px;margin-bottom: 50px;" class="contact">
          <div class="container text-center">
          <div class="text-center my-5">
              <h1>ADD TO <span class="text-primary">CART</span></h1>
              <hr / class="w-25 m-auto">
          </div>
          <div class="row">

              <div class="col-sm-12 col-md-6 col-lg-9 col-12">
                  <form class="row g-3" method="POST">
                    
                  <div class="row justify-content-center">
                    <div class="col-sm-12 jumbotron">    
                        <table class="table table-bordered mt-2">
                        <thead class="table-dark">
                        <th>No.</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Update</th>
                        <th>Clear Cart</th>
                        </thead>
                        <tbody>

                        <?php
                           
                          $ptotal=0;
                          $total=0;
                          $i=0;

                          if(isset($_SESSION['cart']))
                          {
                            foreach($_SESSION['cart'] as $key => $value)
                            {
                              $ptotal = $value['productPrice'] * $value['productQuantity'];
                              $total += $value['productPrice'] * $value['productQuantity'];
                              $i = $key + 1;
                               echo "
                                  <form action='insertcart.php' method='POST'>  
                                    <tr>
                                        <td>$i</td> 
                                        <td><input type='hidden' name='PName' value='$value[productName]'>$value[productName]</td>
                                        <td><input type='hidden' name='PPrice' value='$value[productPrice]'>₹ $value[productPrice]</td>
                                        <td><input type='number' name='PQuantity' value='$value[productQuantity]'></td>
                                        <td>₹ $ptotal</td>
                                        <td><button type='submit' name='update' class='btn btn-warning'>Update</button></td>
                                        <td><button type='submit' name='remove' class='btn btn-danger'>Remove</button></td>
                                        <input type='hidden' name='item' value='$value[productName]'>
                                    <tr>
                                    
                                  </form>
                                  
                                    ";
                            }
                          }  
                        ?>  
                        <tr>
                                        <td colspan='2'><button class='btn btn-warning me-2 text-white' type='submit'><a style='text-decoration: none;' href='welcome.php'><i class='fa fa-shopping-cart'></i> Continue Shopping</a></button></td>
                                        <td colspan='2'><b>Total Price : </b></td>
                                        <td><b><?php echo "₹ $total"?></b></td>
                                        <td colspan='2'><button class='btn btn-info me-2 text-white' type='submit'><a style='text-decoration: none;' href='checkout.php'>Proceed to Checkout</a></button></td>
                        </tr>  
                                
                                    
                                       
                        </tbody>
                        </table>
                    </div>
                    </div>

                    </form>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 col-12 text-center">
                <h3>TOTAL</h3>
                <h1 class="bg-danger text-white"><?php echo number_format($total,2) ?><h1>
                
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
