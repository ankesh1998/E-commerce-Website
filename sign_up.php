<?php require 'includes/common.php'; 
?>
<html>
  <head>
    <title>Sign_up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="CSS/index.css">
</head>
  <body>
   <?php include 'includes/header.php' ?>
<div class="container">
      <div class="row row-style">
        <div class="col-xs-4 col-xs-offset-4">
          <h4 align="center">Register yourself</h4>
          <form method="post" action="signup_script.php">
          
              <div class="form-group"> 
              <input type="text" name="name" class="form-control" placeholder="Name" required="">
              </div>
    
              <div class="form-group">
              <input type="text" name="email" class="form-control" placeholder="E-mail" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
              <?php 
                  if( isset( $_GET['m1'])) {
                  echo $_GET['m1'];  }
               ?>
              </div>
              <div class="form-group">
               <input type="password" name="password" class="form-control" placeholder="Password" required="" pattern=".{6,}" title="Must be at least SIX characters">
              </div>
              <div class="form-group">
              <input type="text" name="contact" class="form-control" placeholder="Contact" required="" pattern="[0-9]{10}" maxlength="10">
              <?php
                  if( isset($_GET['m2'])) {
               echo $_GET['m2']; }
              ?>
              </div>
              <div class="form-group">
              <input type="text" name="city" class="form-control" placeholder="City" required="">
              </div>
              <div class="form-group">
              <input type="text" name="address" class="form-control" placeholder="Address" required="">
              </div>
          <button type="submit" class="btn btn-primary btn-block">Sign Up
          </button>
        </form>
          
        </div>
        
      </div>
      
    </div>
  <?php include 'includes/footer.php'; ?>

</body>
</html>
