
<?php
session_start();

echo $_SESSION['Username'];
?>



<html>

  <head>
    <title>  Sugam</title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="contact.css">

  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style type="text/css">
    #container{

    
      align-items: center;
      justify-content: center;
      margin-left:5%;
      float: center;

    }
  	
  .card{

  	width: 270px;
  	margin-top: 30px;
  	border: 1px solid lightgrey ;
  	background-color: #cceeff;
    text-align: center;
  }
  .img-fluid{

  	width: 180px;
  	height: 170px;
  	padding-top: 5px; 
  }


  </style>
  <body>


    
    

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    
    <li>
     <a href="#">
     <img src="images\logo.png" style="width:170px; height:60px;">
     </a>
     </li>
    </div>
    <ul class="nav navbar-nav">
     
      <li class="active"><a href="home.php " style="margin-left: 60px;">Home</a></li>
      	<li>
      		<a href="shopcart.php"><font style="size:25px; ">Shop</a></font></li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Contact <span class="caret"></span></a>
        <ul class="dropdown-menu">

          <li><a href="contact.php">About</a></li>
          <li><a href="contact.php">Page 1-2</a></li>
         
        </ul>
      </li>
      <li><a href="manager.php">Manager</a></li>
    <li class="active" ><a href="shopcartbil.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
             (<?php
              if(isset($_SESSION["cartt"])){
              $count = count($_SESSION["cartt"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
              </a></li>
    </ul>
    
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php" style="margin-right: 20px;"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="logout.php" style="margin-right: 40px;"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li></font>
    </ul>
  </div>
</nav>
  

<div class="row">
<?php

		require 'connection1.php';
		$conn = Connect();
	
		$query = "SELECT * FROM `product` order by id ASC ";

		$queryfire = mysqli_query($conn, $query);

		$num = mysqli_num_rows($queryfire); 

		if($num >0)
		{

			
			while($product = mysqli_fetch_array($queryfire))
			{
				
	?>



  <div class="col-lg-3 col-md-3 col-sm-12" id="container" style="margin-left:0px; ">
  	<form action="shopmanage.php" method="POST">
  		<div class="card" >
  			
  			<h3 class="card-title bg-info text-white p-2 text-uppercase">
  				<b><?php echo $product['name'];  ?></b> </h3>
          <h5><b>ID</b>:<?php echo $product['product_id']; ?></h5>
  			<div class="body">
  				
  				<img src="<?php echo $product['image']; ?>" class="img-fluid mb-2">
          <p>Quantity: <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 50px;margin-left:100px; "> </p>
  				<h3>&#x20b9; <?php echo $product['price'] ; ?>
  				 
  			    </h3>
  			
  			<h6 class="badge badge-success">4.3<i class="fa fa-star"></i></h6>
  			</div>
        
  			<div class="btn-group d-flex">  
  			
  				<button class="btn btn-primary flex-fill" style="float: left;">Buy Now</button>
          
         
             <input type="hidden" name="name" value="<?php echo $product['name']?>">
             <input type="hidden" name="product_id" value="<?php echo $product['product_id']?>">
             <input type="hidden" name="price" value=" <?php echo $product['price']?>">
        
            <button  type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>

    </form>

        <!--   <a href="cart.php">
            <input type="cart.php" name="Cart" class="btn btn-success" value="Cart" style="float: right;width: 120px;"></a>  -->

  			</div>
  			 
  		</div>

  	
  </div>



 <?php
			}
		}

  ?>



    
    
</div>
     </body>

  
</html>