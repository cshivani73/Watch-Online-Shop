<?php 
include ("myheader.php");
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>My_Cart_BuyNow_More_Details</title>
</head>
<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="home.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
<body>

	<br>
	<br><br>
	<br>


<div class="container" style=" float: left;box-shadow:3px solid grey; ">
	<div class="row">
		<div class="col-lg-9" style="border:1px solid grey; border-radius:5% ;margin-top:20px; ; height: 450px;margin-left: 50px;">
      
             <form  action="" method="POST">
			<div class="col-md-5" style=" margin-left:50px; ">
				<br><br>
				
				<div class="form-group">
                <input type="text" class="form-control" id="name" name="username" placeholder="User Name" required>
                </div> 
	             
	             <h3>Address Details</h3>
	           
	            	  <div class="form-group">
	                   <input type="Number" class="form-control" id="moblie" name="moblie" placeholder="Mobile Number" required>
	                 </div>
	                 <div class="form-group">
	                    <textarea class="form-control" type="textarea" id="street" name="street" placeholder="street" maxlength="100" rows=""></textarea>
	                     <span class="help-block"><p id="characterLeft" class="help-block">Max Character length : 100 </p></span>
	                 </div>

		            <div class="form-group" >
		            	<label>Choose Special Date</label>
		              <input type="date" class="form-control" id="date " name="date" placeholder="Date_On_Delivery" required>
		            </div> 

		           </td>

			 </div>
			<div class="col-md-5" style="margin-left: 50px;margin-top:130px; ">

				      <div class="form-group">
			            <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
			          </div>
			          <div class="form-group">
			            <input type="number" class="form-control" id="pincode" name="pincode" placeholder="pincode" required>
			          </div>
			          <div class="form-group">
			            <input type="text" class="form-control" id="landmark" name="landmark" placeholder="Landmark" required>
			          </div>
			          <div class="form-group">
			            <input type="text" class="form-control" id="state" name="state" placeholder="State" required>
			          </div>
			    
			     <div style="margin-right: 500px; margin-top: 40px;">
			    
	     	      <input type="submit" name="submit" type="submit" id="submit"  class="btn btn-Danger pull-right"/>
	            </div>
	             <input onclick="address()" name="oo" value="Already Have Address"  class="btn btn-success pull-right"/>
	             <script type="text/javascript">
	             	function address(){
	           window.location.href='shopay.php';
	           
	             	}
	             </script>
	            </div>
	     </div> 
	</form>   
	<?php
	require 'connection1.php';
    $conn = Connect();

if (isset($_POST['submit']))
{

$username = $conn->real_escape_string($_POST['username']);
$moblie = $conn->real_escape_string($_POST['moblie']);
$street = $conn->real_escape_string($_POST['street']);
$date = $conn->real_escape_string($_POST['date']);
$city = $conn->real_escape_string($_POST['city']);
$pincode = $conn->real_escape_string($_POST['pincode']);
$landmark = $conn->real_escape_string($_POST['landmark']);
$state = $conn->real_escape_string($_POST['state']);



$q ="INSERT INTO `order_details`( `username`, `mobile`, `street`, `date`, `city`, `pincode`, `landmark`, `state`) VALUES('$username','$moblie','$street','$date','$city','$pincode','$landmark','$state') ";

$success = $conn->query($q);

if (!$success){
  die("Couldnt enter data: ".$conn->error);
   echo "<script>
	           alert('Not Enter data');
	           window.location.href='shopbuynow1.php';
	           </script>";

}

else{
  echo 
  " <script>
	           alert('successful submitted Address details');
	           window.location.href='shopay.php';
	           </script>";

}
$conn->close();
}
?>


			
		</div>


		 
		
		</div>
	</div>	
		<br><br>
	


</body>
</html>   