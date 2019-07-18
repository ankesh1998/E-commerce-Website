<?php require 'includes/common.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="CSS/index.css">

</head>
<body>
	<?php include 'includes/header.php';?>
<div class="container">
	<div class="row row-style">
  		<div class="col-xs-6 col-xs-offset-3">
  			<div class="panel panel-primary">
   				 <div class="panel-heading" align="center">Login to make a purchase</div>
   				 <div class="panel-body">
   					 	<form method="post" action="login_submit.php">
  							<div class="form-group">
   							<label for="email">Email address:</label>
						    <input type="email" class="form-control" name="email" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
  							</div>
 							<div class="form-group">
   							<label for="pwd">Password:</label>
  						    <input type="password" class="form-control" name="pwd" required="" pattern=".{6,}">
 							</div>
  							<div class="checkbox">
   							<label><input type="checkbox"> Remember me</label>
 							</div>
  							<button type="submit" class="btn btn-block btn-primary">Login</button><br>
                <?php 
                if(isset($_GET['error'])) {
                echo $_GET['error']; }
                ?>
						</form>
  				 </div>
   				 <div class="panel-footer">
   				 	Don't have an account?
   				 	<a href="sign_up.php" class="text-primary" style="text-decoration: none;"> Register</a>
   				 </div>
 			</div>
 		</div>
	</div>
</div>
  <?php include 'includes/footer.php'; ?>
</body>
</html>