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
	   <?php include 'includes/header.php'; 
           include 'includes/check-if-added.php';
     ?>

<div class="container">
	<div class="jumbotron"><h1>Welcome to our Lifestyle Store!</h1>
		<p> We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
	</div>
</div>
<div class="container">
	<div class="row text-center" id="cameras">
    <div class="col-md-3 col-sm-6">
      <div class="thumbnail">
          <img src="camera/canon-eos-100d.jpg" alt="canon-eos-100d" style="width:100%" class="img-responsive">
          <div class="caption">
            <h3>Canon-EOS-100D</h3>
            <p>Price:Rs. 25000</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
          </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="thumbnail">
          <img src="camera/fujifilm.jpg" alt="fujifilm-X-T1" style="width:100%;"class="img-responsive">
          <div class="caption">
            <h3>Fujifilm-x-T1</h3>
            <p>Price:Rs.25000</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            
          </div>
        </div>
    </div>
    
    <div class="col-md-3 col-sm-6">
      <div class="thumbnail">
          <img src="camera/nikon.jpg" alt="Nikon-D5300" style="width:100%" class="img-responsive">
          <div class="caption">
            <h3>Nikon-D5300</h3>
            <p>Price:Rs.95000</p>
                           <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            
          </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="thumbnail">
          <img src="camera/sony-alpha-a9.jpg" alt="sony-alpha-a9" style="width:100%;" class="img-responsive">
          <div class="caption">
            <h3>Sony-alpha-a9</h3>
            <p>Price:Rs.80000</p>
                           <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            
          </div>
      </div>
    </div>
 </div>
  <div class="row text-center" id="watches">
    <div class="col-md-3 col-sm-6">
      <div class="thumbnail">
          <img src="watches/watch1.jpg" alt="BVLGARI watch" style="width:100%" class="img-responsive">
          <div class="caption">
            <h3>BVLGARI 142F</h3>
            <p>Price:Rs. 5000</p>
                           <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            
          </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="thumbnail">
          <img src="watches/watch2.jpg" alt="Rolex Watch" style="width:100%" class="img-responsive">
          <div class="caption">
            <h3>ROLEX 426M</h3>
            <p>Price:Rs.125000</p>
                           <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
          </div>
      </div>
    </div>
    
    <div class="col-md-3 col-sm-6">
      <div class="thumbnail">
          <img src="watches/watch3.jpg" alt="MEGIR Watch" style="width:100%" class="img-responsive">
          <div class="caption">
            <h3>MEGIR</h3>
            <p>Price:Rs.5000</p>
                           <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            
          </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="thumbnail">
          <img src="watches/watch4.jpg" alt="JORD watch" style="width:100%;" class="img-responsive">
          <div class="caption">
            <h3>JORD 342L</h3>
            <p>Price:Rs.6000</p>
                           <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            
          </div>
      </div>
    </div>
    
  </div>
  <div class="row text-center" id="shirts">
    <div class="col-md-3 col-sm-6">
      <div class="thumbnail">
          <img src="shirt/parx.jpg" alt="Parx shirt" style="width:100%" class="img-responsive">
          <div class="caption">
            <h3>Parx plain shirt</h3>
            <p>Price:Rs. 999</p>
                           <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
          </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="thumbnail">
          <img src="shirt/printed.jpg" alt="Spyker shirt" style="width:100%;" class="img-responsive">
          <div class="caption">
            <h3>Spyker Printed shirt</h3>
            <p>Price:Rs.1199</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            
          </div>
      </div>
    </div>
    
    <div class="col-md-3 col-sm-6">
      <div class="thumbnail">
          <img src="shirt/raymond.jpg" alt="Raymond Shirt" style="width:100%" class="img-responsive">
          <div class="caption">
            <h3>Raymond Shirt</h3>
            <p>Price:Rs.1999</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                           
          </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="thumbnail">
          <img src="shirt/t-m-lewin.jpg" alt="T-M-lewin Shirt" style="width:100%;" class="img-responsive">
          <div class="caption">
            <h3>T-M-Lewin shirt</h3>
            <p>Price:Rs.1499</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
          </div>
      </div>
    </div>
    
  </div>
</div>
  <?php include 'includes/footer.php'; ?>

</body>
</html>