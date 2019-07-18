<?php require 'includes/common.php'; 

$name=mysqli_real_escape_string($con, $_POST['name']);
$email=mysqli_real_escape_string($con, $_POST['email']);
$password=mysqli_real_escape_string($con, $_POST['password']);
//$password=md5($password); //Encrypt the password
$contact=mysqli_real_escape_string($con, $_POST['contact']);
$city=mysqli_real_escape_string($con, $_POST['city']);
$address=mysqli_real_escape_string($con, $_POST['address']);

	$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
	$regex_num = "/^[789][0-9]{9}$/";

$query= "SELECT * FROM users WHERE email='$email' OR contact='$contact' ";
$result = mysqli_query($con,$query);
$num=mysqli_num_rows($result);
	if ($num != 0) {
    $m = "<span class='red'> Email or Contact Already Exists</span>";
    header('location: sign_up.php?m1=' . $m);
  } else if (!preg_match($regex_email, $email)) {
    $m = "<span class='red'> Not a valid Email Id</span>";
    header('location: sign_up.php?m1=' . $m);
  } else if (!preg_match($regex_num, $contact)) {
    $m = "<span class='red'> Not a valid phone number</span>";
    header('location: sign_up.php?m2=' . $m);
  }else{
	$q="insert into users(name,email,password,contact,city,address)values('$name','$email','$password','$contact','$city','$address')";
	$user_registration_submit=mysqli_query($con,$q)
	or die(mysqli_error($con));
	$user_id = mysqli_insert_id($con); //Get newly inserted id when the user get successfully registered.
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header("location:product.php");
}
?>