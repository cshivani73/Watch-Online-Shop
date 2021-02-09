<?php include ("myheader.php");
session_start();
echo $_SESSION['Uname'];

require 'connection1.php';
$conn = Connect();

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

 <div class="container" style=" " >
 
 	<div class="row">
 		 <div class="col-lg-7" style="border:2px solid grey;border-radius: 10px; ">
       <div>
         <h3>Product Details</h3>
        

       </div>


     </div>
     <div class="col-md-4" style="border:2px solid grey; border-radius: 10px; margin-left: 10px;">
       <div>
         <h3>Personal Details</h3>
           <?php
                 
                 $username=$_SESSION['Username']; 
                 $query = "SELECT * FROM `users` WHERE name='$username' ";
                 $queryfire = mysqli_query($conn, $query);

                $num = mysqli_num_rows($queryfire); 

            if($num >0)
            {

              
              while($product = mysqli_fetch_array($queryfire))
              {
                
          ?>
             <div class="card" >
               <table>
               <tbody>
                 <div style="margin-left: 30px; font-size:35px; font-family: sans-serif; line-height: 20px; letter-spacing: .5rem; text-align: center;">
                   <tr>
                   <td ><b>Name -   <?php echo $product['name'] ?></b></td><br></tr>
                  <tr> <td><b>Email Address -  <?php echo $product['email'] ?></b></td> </tr>
                 </tr>
                 </div>
                 <tr>
                   <td><b>Phone -  <?php echo $product['phone'] ?></b></td>
                 </tr>
                 <tr><td><b>City -  <?php echo $product['city'] ?></b></td></tr>
               </tbody>
             </table>
             <br><br>

             </div>

                <?php

            }
          }  
                 ?>

                <h3>Address Details</h3> 

                <?php
                
                 
                 $username=$_SESSION['Username'];
                 
                 $q = "SELECT * FROM `order_details` WHERE username='$username' ";
                 $qfire = mysqli_query($conn, $q);

                  $n = mysqli_num_rows($qfire); 

            if($n >0)
            {

              
              while($row = mysqli_fetch_array($qfire))
              {
                
            ?>
             <div class="card" >
               <table>
               <tbody>
                 <div style="margin-left: 30px; font-size:35px; font-family: sans-serif; line-height: 20px; letter-spacing: .5rem; text-align: center;">
                   <tr>
                   <td ><b>Optional Phone No. -   <?php echo $row['mobile'] ?></b></td><br></tr>
                  <tr> <td><b>Street -  <?php echo $row['street'] ?></b></td> </tr>
                 </tr>
                 </div>
                 <tr>
                   <td><b>Pincode -  <?php echo $row['pincode'] ?></b></td>
                 </tr>
                 <tr><td><b>Landmark -  <?php echo $row['landmark'] ?></b></td></tr>
                
               </tbody>
             </table>
             <br><br>

             </div>

                <?php

            }
          }  
                 



                ?>
       </div>
     </div>
      
 		</div>

 	</div>
 	
</body>
</html>

