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
					<li><a href="welcome.php" class="active">Home</a></li>
					<li><a href="index.php">Log out</a></li>
					<li><a href="#" class="active">About us</a></li>
				</ul>
			</div>
		</nav>

      <div style="margin-top:100px;" class="card-body shadow">
        <div class="row">
          <div class="text-center my-5">
              <h1>CHECKOUT<span class="text-primary"> PROCESS</span></h1>
              <hr / class="w-25 m-auto">
          </div>
            

            <div class="col-md-12 mb-3">
              
            
            <form action='buy1.php' method='POST'>  

                    <div class="row justify-content-center">
                      <div class="col-sm-12 jumbotron">    
                          <table class="table table-bordered mt-2">
                          <thead class="table-dark">
                          
                          <th>Name</th>
                          <th>Price</th>
                          <th>Quantity</th>
                          
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

                                   
                                      <tr>
                                          
                                          <td><input type='hidden' name='PName' value='$value[productName]'>$value[productName]</td>
                                          <td><input type='hidden' name='PPrice' value='$value[productPrice]'>$value[productPrice]</td>
                                          <td><input type='hidden' name='PQuantity' value='$value[productQuantity]'>$value[productQuantity]</input></td>
                                         
                                          
                                          <input type='hidden' name='item' value='$value[productName]'>
                                      <tr>

                                    
                                      ";
                                    
                              }
                              
                            }  
                          ?>  

                                              
                          </tbody>
                          </table>
                      </div>
                      </div>

                      <h5>Delivery Details</h5>
                                      <hr>
                                      <div class='row'>

                
                                      <div class='col-md-6 mb-3'>
                                      <label class='fw-bold'>User Name</label>
                                      <input type='text' name='uname' placeholder='Enter Your Name' class='form-control' required>
                                      </div>

                                      <div class='col-md-6 mb-3'>
                                      <label class='fw-bold'>E-mail</label>
                                      <input type='text' name='email' placeholder='Example@gmail.com' class='form-control' required>
                                      </div>

                                      <div class='col-md-6 mb-3'>
                                      <label class='fw-bold'>Phone</label>
                                      <input type='text' name='phone' placeholder='Enter Your Contact Number' class='form-control' required>
                                      </div>

                                      <div class='col-md-6 mb-3'>
                                      <label class='fw-bold'>Pincode</label>
                                      <input type='text' name='pincode' placeholder='Pincode' class='form-control' required>
                                      </div>

                                      <div class='col-md-12 mb-3'>
                                      <label class='fw-bold'>Address</label>
                                      <input type='text' name='Address' class='form-control' rows='2' required></input>       
                                      </div>

                                      <select name="select" class="form-select" aria-label="Default select example">
                                        <option name="Chash On Delivery">Chash On Delivery</option>
                                        <option name="paytm">Paytm</option>
                                      </select>

                                    </div>

                                    <div>
                                    <h3>TOTAL</h3>
                                    <input type='hidden' name='total' value="<?php echo "₹ $total" ?>"></input>
                                    <h1 class='bg-danger text-white'><?php echo "₹ $total"?><h1>
                                    <center><button name='buy' class='btn btn-info me-2 text-white' type='submit'>Buy</button></center>  
                                    </div>
  
            </form>                      
                    
            </div>  
        </div>  
    </div>    


</body>
</html>

	<?php			
	}

	else
	{
		header("location: login.php");
	}
?>

