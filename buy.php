<!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>buy</title>
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

        .menu ul li a:hover{
      color: black;
        background-color: white;
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
      background: url('bfbrg.jpg');
      position: absolute;
      height: 100%;
      width: 100%;
      z-index: -1;
      opacity: 0.89;
    }

   </style>
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

    <div id="services">
      <div class="box">
        <img src="delish.jpg">
        <h3 class="sec">Name:</h3>
        <h3 class="sec">Price:</h3>
        <button class="btn1">Buy</button>
         <input type="hidden" name="PName" value="Richwon Men Green">
                  <input type="hidden" name="PPrice" value="999">
                  
                  <input type="number" name="PQuantity" value="" min="1" max="10" class="form-control"  placeholder="Enter Quantity" required><br>
                  <button type="submit" name="addCart" class="btn btn-primary ">Add to Cart</button>
                  <button class="btn btn-warning me-2" type="submit"><a style="text-decoration: none;" href="../home.php">back</a></button>
      </div>
     </div> 
    </body>
 </html>