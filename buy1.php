<?php
session_start();

if(isset($_POST['buy']))
{

    $pname=$_POST['PName'];
    $pprice=$_POST['PPrice'];
    $pquantity=$_POST['PQuantity'];
    $name=$_POST['uname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $pincode=$_POST['pincode'];
    $address=$_POST['Address'];
    $total=$_POST['total'];
    $select=$_POST['select'];
    
    $conn=mysqli_connect('localhost','root','','pro_db');
    $result=mysqli_query($conn,"insert into order_db(food_name, food_price , food_quantity ,user_name ,email ,phone ,pincode ,address ,total,pay_status) values ('$pname','$pprice','  $pquantity','$name',' $email','$phone','$pincode','$address','$total','$select')");
    if($result)
    {
        //echo $alert="<script> alert('Your Order Is Successfully..!');</script>";
        //header("Location:checkout.php");
    }
    else
    {
        echo $alert="<script>alert('Pls Try Again..!');</script>";
    }
           
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Star Canteen</title>

    <!-- bootstrap-5 link -->
    <link rel="stylesheet" href="bootstrap-5/css/bootstrap.min.css">


</head>
<body>

<div class="col py-3">
            
        <h1 style="color:rgb(47, 255, 0);" class="text-center mt-5 d-print-none">Your Order Is Successfully</h1> 


                <div style="margin-left:180px;" class="row">
                    <div class="col-sm-1 mt-2 mx-7 ml-5 jumbotron">    
                        <table class="table mt-3 table-bordered">
                        <thead class="table-dark">
                        
                        <th>Food name</th>
                        <th>Food price</th>
                        <th>Food quantity</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Pincode</th>
                        <th>Address</th>
                        <th>Total</th>
                        <th>Payment<th>
                        </thead>
                        <tbody>
                            <?php
                            $conn=mysqli_connect('localhost','root','','pro_db');
                            $quser=mysqli_query($conn,"select * from order_db WHERE user_name='$name' ");
                            while($urow=mysqli_fetch_array($quser)){
                            ?>    
                                    <tr>
                                        
                                        <td><?php  echo $urow['food_name']; ?></td>
                                        <td><?php  echo $urow['food_price']; ?></td>
                                        <td><?php  echo $urow['food_quantity']; ?></td>
                                        <td><?php  echo $urow['user_name']; ?></td>
                                        <td><?php  echo $urow['email']; ?></td>
                                        <td><?php  echo $urow['phone']; ?></td>
                                        <td><?php  echo $urow['pincode']; ?></td>
                                        <td><?php  echo $urow['address']; ?></td>
                                        <td><?php  echo $urow['total']; ?></td>
                                        <td><?php  echo $urow['pay_status']; ?></td>
                                        
                                        
                                    <tr>
                            <?php
						    }
                            ?>
                                              
                        </tbody>
                        </table> 
                    </div>
                </div>





    </div>
</div>


<!--javascript bootstrap-5 link-->   
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="../bootstrap-5/js/bootstrap.bundle.js"></script>

</body>
</html>