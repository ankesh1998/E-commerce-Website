<?php require 'includes/common.php'; 
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['itemsid'];

//We will change the status of the items purchased by the user to 'Confirmed'
$query = "UPDATE users_items SET status='Confirmed' WHERE users_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
mysqli_query($con, $query) or die(mysqli_error($con));

?>
<!DOCTYPE html>
<html>
<head>
	<title>success | LifeStyle Store</title>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		<!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<center>
	<img src="index-image/success.jpg" alt="confirm">
<P style="font-size: 50px;margin-top: 50px;color: green;font-style: bold;">Your order is confirmed.</P><br><br>
<p style="font-size: 20px">Thank you for shopping with us!</p>
<a href="product.php">Click Here</a> to purchase any other item.
</center>
</body>
</html>