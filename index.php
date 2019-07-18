<?php require 'includes/common.php'; 
if (isset($_SESSION['email'])) {
 header('location: product.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lifestyle Store</title>
	 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		<!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="CSS/index.css">


</head>
<body style="padding-top: 50px;">
	<?php include'includes/header.php';?>		
<div class="content">
	<div class="banner-image">
		<div class="inner-banner-image" align="center">
			<div class="banner_content">
				<h1>We sell lifestyle.</h1>
				<p>Flat 40% OFF on premium brands</p>
				<a class="btn btn-danger btn-lg-active" href="product.php">Shop Now</a>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row text-center">
			<div class="col-md-4">
				<a href="product.php" class="btn"><div class="thumbnail">
					 <img src="index-image/camera.jpg" alt="camera" style="width:100%" class="img-responsive">
          <div class="caption">
            <h2>Cameras</h2>
            <p>Choose among the best available in the world.</p>
          </div>
				</div></a>
			</div>
			<div class="col-md-4">
				<a href="product.php" class="btn"><div class="thumbnail">
					 <img src="index-image/watch.jpg" alt="watch" style="width:100%" class="img-responsive">
          <div class="caption">
            <h2>Watches</h2>
            <p>Original watches from best brands.</p>
          </div>
				</div></a>
			</div>
			<div class="col-md-4">
				<a href="product.php" class="btn"><div class="thumbnail">
					 <img src="index-image/shirt.jpg" alt="shirt" style="width:100%" class="img-responsive">
          <div class="caption">
            <h2>Shirts</h2>
            <p>Our exquisite collection of shirts.</p>
          </div>
				</div></a>
			</div>
		</div>
	</div>

<?php include 'includes/footer.php'; ?>
</body>
</html>