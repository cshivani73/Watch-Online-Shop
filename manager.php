<?php

session_start();

?>



<!DOCTYPE html>
<html>
<head>
	<title>Manager</title>
 </head> 
	<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="home.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Pacifico&family=Ranchers&display=swap" rel="stylesheet">
  <style >
 .container{

  background-color: #e6fff2;
  width: 300px;
  height:260px;
  float: left;
  margin-left: 30px;
  border :1px solid #e5e5cc ; 
  margin-top: 50px;
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
 }
 .col1{

  margin-top: 10px;
  margin-left: 10px;
  margin-bottom: 10px;


 }
 .form_con{

  margin-left: 50px;
  width: 400px;
  height: 400px;
  float: center;
 }
</style>


</head>
<body  style="background-color:#e6ffff">
 <header>
  <nav class="navbar navbar-inverse" style="position: fixed; width: 100%;">
  <div class="container-fluid">
    <div class="navbar-header">
    
    <li>
     <a href="#">
     <img src="images\logo.png" style="width:190px; height:60px;">
     </a>
     </li>
    </div>
    <ul class="nav navbar-nav">
     
      <li class="active"><a href="shopcart.php " style="margin-left: 60px;"> &#10506;Home</a></li>
      	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Category <span class="caret"></span></a>
        <ul class="dropdown-menu">

          <li><a href="women.php">Women</a></li>
          <li><a href="#">men</a></li>
          <li><a href="#">Girl</a></li>
          <li><a href="#">Boy</a></li>
         
        </ul>
      </li>
        <li>
      		<a href="contact.php"><font style="size:25px; ">&#9993; Contact</a></font>
        </li>
        <li>
          <a href="manager.php"><font style="size:25px; ">&#9993; Manager</a></font>
        </li>
         <li>
         <a href="itemadd.php" class="fas fa-cart-plus"><font style="size:25px; "> Cart</a></font>
       </li>
        <li>
        <input class="form-control" type="search" placeholder="Search" aria-label="Search" style="width: 150px; height:30px; margin-top:10px; margin-left: 19px; "></li>
        <li> <button class="btn btn-primary my-2 my-sm-0" type="submit" style="margin-top: 10px; height: 30px;
        ">Search</button></li>
         
      
    </ul> 

      
  
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php" style="margin-right: 10px;"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="logout.php" style="margin-right: 10px;"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li></font>
    </ul>
  </div>
</nav>
</header> 

  <!--main-->
 
 
 <br><br>
 <!-- Model for View -->   
  <div class="container" >
    <div class="col1">
               
          <!-- Trigger the modal with a button -->
          <button type="button" class="btn btn-info btn-lg btn-active" data-toggle="modal" data-target="#myModal" style="width: 200px; height: 50px;">Add Product</button>

          <!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h3 class="modal-title" style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Add New Product Form</h3>

                </div>
                <div class="modal-body">
                   <div class="form_con">
                      <form method="post" action="">
                      <br style="clear: both">
                       
                        <div class="form-group">
                          <input type="text" class="form-control" id="name" name="name" placeholder="Name" required autofocus="">
                        </div>
                        <div class="form-group">
                        <input type="text" class="form-control" id="product_id" name="product_id" placeholder="Product_id" required autofocus="">
                        </div>
                        <div class="form-group">
                          
                            <input type="file" id="myFile" name="filename" name="file_image">
                        </div>

                         <div class="form-group">
                          <input type="text" name="image" placeholder="image" id="image">
                          
                         </div>
                       <br>
                        <div class="form-group">
                          <input type="text" class="form-control" id="price" name="price" placeholder="price" required>
                        </div>

                       
                        <input type="submit" name="submit" type="button" id="submit" class="btn btn-warning pull-right"/>    
                      </form> 

                   </div>

                   <?php
if (isset($_POST['submit'])){
require 'connection1.php';
$conn = Connect();

$name = $conn->real_escape_string($_POST['name']);
$product_id = $conn->real_escape_string($_POST['product_id']);
$file_image=$conn->real_escape_string($_POST['file_image']);
$image = $conn->real_escape_string($_POST['image']);
$price = $conn->real_escape_string($_POST['price']);



$query = "INSERT into product(name,product_id, file_image ,image,price) VALUES('$name', '$product_id', 
'$file_image','$image','$price')";
$success = $conn->query($query);

if (!$success){
  die("Couldnt enter data: ".$conn->error);
}

else{
  echo "successful submitted";
}
$conn->close();
}
?>
                </div>
               
              </div>
              
            </div>
    </div>
      </div>

      <!-- Model for View I end-->   
      <!-- Model for View II -->   
    <div class="col1">
         <!-- Trigger the modal with a button -->
          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1" style="width: 200px; height: 50px;">Edit Product</button>

          <!-- Modal -->
          <div class="modal fade" id="myModal1" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h3 class="modal-title" style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Edit Product Form</h3>

                </div>
                <div class="modal-body">
                   <div class="form_con">
                      <form method="post" action="manager.php">
                      <br style="clear: both">
                        <div class="form-group">
                        <input type="text" class="form-control" id="product_id" name="product_id" placeholder="Product_id" required autofocus="">
                        </div> 
                       
                        <div class="form-group">
                          <input type="text" class="form-control" id="name" name="name" placeholder="Name" required autofocus="">
                        </div>

                          <div class="form-group">
                          <input type="text" name="image" placeholder="image" id="image">
                          
                         </div>
                       <br>
                        <div class="form-group">
                          <input type="text" class="form-control" id="price" name="price" placeholder="price" required>
                        </div>                       
                        </div> 
                        <input type="submit" name="submit" type="button" id="submit" class="btn btn-warning pull-right"/>    
                      </form> 

                   </div>

                   <?php
if (isset($_POST['submit'])){

$conn = Connect();

$product_id = $conn->real_escape_string($_POST['product_id']);
$name = $conn->real_escape_string($_POST['name']);
$image = $conn->real_escape_string($_POST['image']);
$price = $conn->real_escape_string($_POST['price']);


$qry=" UPDATE `product` SET `name`=[$name],`image`=[$image],`price`=[$price] WHERE product_id='$product_id'";

/*$query = "INSERT into product(name,product_id,image,price) VALUES('$name','$product_id','$image',
'$price')";*/
$result = $conn->query($qry);

if (!$result){
  die("Couldnt enter data: ".$conn->error);
}

else{
  echo "<script>
  alert('Not Enter data');
  window.location.href='manager.php';
  </script>";

}
$conn->close();
}
?>
                </div>
               
              </div>
              
            </div>

       </div>

   <!-- Model for View  II end-->   
   <!-- Model for View III -->       
    <div class="col1">
       <!-- Trigger the modal with a button -->
          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2" style="width: 200px; height: 50px;">Delete Product</button>

          <!-- Modal -->
          <div class="modal fade" id="myModal2" role="dialog" >
            <div class="modal-dialog" style="width: 500px; height: 200px; ">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h3 class="modal-title" style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Delete Product</h3>

                </div>
                <div class="modal-body">
                   <div class="form_con">
                      <form method="post" action="">
                      <br>
                       
                        <div class="form-group">
                          <input type="text" class="form-control" id="name" name="name" placeholder="Name" required autofocus="">
                        </div>

                        <input type="submit" name="delete" type="button" id="delete" class="btn btn-warning pull-right"/>    
                      </form> 

                   </div>

<?php
      if (isset($_POST['delete'])){
      require 'connection1.php';
      $conn = Connect();

      $name = $conn->real_escape_string($_POST['name']);

      $query = "DELETE FROM `product` WHERE name='$name' ";
      $success = $conn->query($query);

      if (!$success){
        die("Couldnt enter data: ".$conn->error);
        echo "not delete";
      }

      else{
        echo "successful delete";
      }
      $conn->close();
      }
?>
                </div>
               
              </div>
              
            </div>
    </div>
  </div>
 <!-- Model for View III End-->   
  <!-- Model for View IV-->   
    <div class="col1">
      <!-- Trigger the modal with a button -->
          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3" style="width: 200px; height: 50px;">view Product</button>

          <!-- Modal -->
          <div class="modal fade" id="myModal3" role="dialog" style="width: 100%;">
            <div class="modal-dialog" style="width: 700px;">

             
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title" style="margin-bottom: 25px; text-align: center; font-size: 30px;"> View Product Details</h3>


                </div>
                <div class="modal-body">
                 

    <div class="" style="width:600px; ">
      <div class="form-area" style="padding: 0px 10px 10px 10px;  ">
        <form action="" method="POST">
        <br >
          <h3 style="margin-bottom: 5px; text-align: center; font-size: 20px;"> Product Items List </h3>


<?php


      require 'connection1.php';
      $conn=connect();
      $sql = "SELECT * FROM product ";
      $result = mysqli_query($conn, $sql);
      $i=1;   

      if (mysqli_num_rows($result)> 0)
      {

  ?>

  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th>S.No  </th>
        <th> Pro_ID </th>
        <th> Name </th>
        <th>Image</th>
        <th>Image-Path</th>
        <th> Price </th>
        <th> Brand</th>
      </tr>
    </thead>

    <?PHP
      //OUTPUT DATA OF EACH ROW
      while($row = mysqli_fetch_assoc($result)){
    ?>

  <tbody>
    <tr>
      <td> <?php echo $i?> </td>
      <td><?php echo $row["id"]; ?></td>
      <td><?php echo $row["name"]; ?></td>
      <td><img style=" height:40px; width: 40px; "  src="<?php echo $row['image']?>"></td>
      <td><?php echo $row['image'] ?></td>
      <td><?php echo $row["price"]; ?></td>
      <td><?php echo $row["Brand"]; ?></td>
    </tr>
  </tbody>
  
  <?php 

   $i++;
   } ?>
  </table>
    <br>


  <?php } else { ?>

  <h4><center>RESULTS</center> </h4>

  <?php } ?>

        </form>

        
        </div>
      
    </div>
</div>

                </div>
               
               <!-- Model for View Iv end-->   
              </div>
              
            </div>
    </div>


  </div>





  


<!--Footer-->
<footer>
<div class="footer1">
</div>

</footer>
<!--Footer end-->
</body>
</html>