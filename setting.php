<?php require 'includes/common.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>product</title>
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="CSS/index.css">

</head>
<body>
		<?php include 'includes/header.php'; ?>
<div class="container">
      <div class="row row-style">
        <div class="col-xs-4 col-xs-offset-4">
          <h4 style="font-weight: bold;">Change Password</h4>
          <form method="post" action="setting_script.php">
          
              <div class="form-group"> 
              <input type="password" name="old_password" class="form-control" placeholder="Old Password" required="">
              </div>
    
              <div class="form-group">
              <input type="password" name="new_password" class="form-control" placeholder="New Password" required="">
              </div>
              <div class="form-group">
               <input type="password" name="retype_new_password" class="form-control" placeholder="Re-type New Password" required="">
              </div>
             
          <button type="submit" class="btn btn-primary">Change
          </button>
          <?php if(isset($_GET['error'])) {
              echo "<br><br><b class='red'>" . $_GET['error'] . "</b>"; }
           ?>
        </form>
          
        </div>
        
      </div>
      
    </div>
  <?php include 'includes/footer.php'; ?>

</body>
</html>