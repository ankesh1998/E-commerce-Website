<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="index.php" class="navbar-brand">Lifestyle Store</a>
				</div>
				<div>
					<ul class="nav navbar-nav navbar-right collapse navbar-collapse" id="myNavbar">
						<?php 
 							if (isset($_SESSION['email']) && $_SESSION['email']==true ) {
 								?>
 								<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
								<li><a href="setting.php"><span class="glyphicon glyphicon-wrench"></span> Setting</a></li>
								<li><a href="log_out.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
							      
 								<?php
 								} else {
 								?>							
								<li><a href="sign_up.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
								<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
 								
 								<?php
 								}
						?>

					</ul>
				</div>
			</div>
</div>