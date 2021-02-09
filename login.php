<?php

include('login_u.php'); 

if(isset($_SESSION['login_user2'])){

}
?>


<html>

  <head>
    <title> Login</title>
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
  <body>


    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
    

 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    
      <a class="navbar-brand" href="#">Sugam</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="# " style="margin-left: 20px;">Home</a></li>
        <li>
          <a href="cloths.php"><font style="size:25px; ">Account</a></font></li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Contact <span class="caret"></span></a>
        <ul class="dropdown-menu">

          <li><a href="contact.php">About</a></li>
          <li><a href="contact.php">Page 1-2</a></li>
         
        </ul>
      </li>
      <li><a href="#">Post</a></li>
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php" style="margin-right: 20px;"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php" style="margin-right: 40px;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li></font>
    </ul>
  </div>
</nav>  
    <br>

    
    <div class="container"  >
    <div class="col-md-5" style="float: none; margin: 0 auto; ">
      <div class="form-area" style="border-radius: 20px;">
        <form method="post" action="">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Login Form</h3>

         

          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Username" required>
          </div>   
          
          <div class="form-group">
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
          </div>
                  
            <a href="signup.php"><h6 style="color: blue;">Create new Account</h6> </a>      
          <input type="submit" name="submit" type="button" id="submit" name="submit" class="btn btn-primary pull-right"/>    
        </form>

        
      </div>
    </div>
      
    </div>

    
    </div>

    

     </body>

  
</html>