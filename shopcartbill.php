<?php include ("myheader.php");
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>My_Cart_Bil</title>
</head>
<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="home.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
<body>

	<br>
	<br><br>
	<br>

 <div class="container" style="border:2px solid grey; " >
 
 	<div class="row">
 		<div class="col-lg-8 text-center border rounded bg-light" style="float: left;">

 			 <h3>My Cart</h3>

		 <table class="table">
		  <thead class="text-center">
		    <tr>
		      <th scope="col">S/no.</th>
		      <th scope="col">Product_Name</th>
		      <th scope="col">Product_Id </th>
          <th width="10%">Quantity</th>
          <th scope="col">Price</th>
          
		      
		    </tr>
		  </thead>
		  <tbody class="text-center">
		  	


<?php  

$total = 0;
foreach($_SESSION["cartt"] as $keys => $values)
{
?>
<tr>
<td><?php echo $values["p_name"]; ?></td>
<td><?php echo $values["p_id"]; ?></td>
<td><?php echo $values["p_quantity"] ?></td>
<td>&#8377; <?php echo $values["p_price"]; ?></td>
<td>&#8377; <?php echo number_format($values["p_quantity"] * $values["p_price"], 2); ?></td>
<td><a href="shopcart.php?action=delete&id=<?php echo $values["p_id"]; ?>">
  <span class="text-danger">Remove</span></a></td>
</tr>

<?php 
$total = $total + ($values["p_quantity"] * $values["p_price"]);
}
?>
<tr>
<td colspan="3" align="right">Total</td>
<td align="right">&#8377; <?php echo number_format($total, 2); ?></td>
<td></td>
</tr>
</table>
<?php
  echo '<a href="shopcartbill.php?action=empty"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Empty Cart</button></a>&nbsp;<a href="shopcart.php"><button class="btn btn-warning">Continue Shopping</button></a>&nbsp;<a href="payment.php">
  <button class="btn btn-success pull-right">
  <a href="payment.php">
  <span class="glyphicon glyphicon-share-alt"></span> Check Out</button></a>';
?>
</div>
<br><br><br><br><br><br><br>
<?php

if(empty($_SESSION["cartt"]))
{
  ?>
  <div class="container">
      <div class="jumbotron">
        <h1>Your Shopping Cart</h1>
        <p>Oops! Your Cart is empty. Go back and <a href="shopcart.php">order now.</a></p>
        
      </div>
      
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
   
    <?php
}
?>


<?php


if(isset($_POST["Add_To_Cart"]))
{
    if(isset($_SESSION["cartt"]))
    {
      $item_array_id = array_column($_SESSION["cartt"], "p_id");
      if(!in_array($_GET["product_id"], $item_array_id))
      {
          $count = count($_SESSION["cartt"]);

          $item_array = array(
          
          'p_id'=>$_GET['id'],
          'p_name' => $_POST["hname"],
          'p_id' => $_POST["hproduct_id"],
          'p_price' => $_POST["hprice"],
          'pid' => $_POST["hid"],
          'p_quantity' => $_POST["quantity"]
          );
          $_SESSION["cartt"][$count] = $item_array;
          echo '<script>window.location="cart.php"</script>';
          }
       else
        {
        echo '<script>alert("Products already added to cart")</script>';
        echo '<script>window.location="cart.php"</script>';
        }
     }
    else
    {
      $item_array = array(
      'p_id'=>$_GET['id'],
          'p_name' => $_POST["hname"],
          'p_id' => $_POST["hproduct_id"],
          'p_price' => $_POST["hprice"],
          'pid' => $_POST["hid"],
          'p_quantity' => $_POST["quantity"]
      );
      $_SESSION["cartt"][0] = $item_array;
    }
}





?>


		    
		    
		  </tbody>
		</table>

 		</div>
 		
 	</div>
 	<div class="col-lg-3 " style="background-color:grey; float: right;">
 		<div class="border bg-light rounded p-4 ">
 			<h4>Total:</h4>
 		<h5 class="text-right"><?php echo $total ?></h5>
 		
 		<form action="shopbuynow1.php">
 			<button class="btn btn-success btn-block">Buy Now</button>
 		</form>
 		</div>
 	</div>
 	
</body>
</html>