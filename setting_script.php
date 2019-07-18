<?php require 'includes/common.php';
$old_password=$_POST['old_password'];
$new_password=$_POST['new_password'];
$retype_new_password=$_POST['retype_new_password'];
$query= "SELECT password FROM users WHERE email='".$_SESSION['email']."'";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
$row=mysqli_fetch_array($result);
if ($new_password != $retype_new_password) {
    header('location: setting.php?error=The two passwords don\'t match');
} else {
    if ($old_password == $row['password']) {
       mysqli_query($con, "UPDATE users set password='$new_password' WHERE email='".$_SESSION['email']."'");
        header('location: setting.php?error=Password Updated');
    } else
        header('location: setting.php?error=Wrong Old Password');
}








/*if ($old_password == $row['password'] && $new_password == $retype_new_password) {
	mysqli_query($con, "UPDATE users set password='$new_password' WHERE email='".$_SESSION['email']."'");
	echo "<script>alert('Password Changed')</script>"; 
}else{
	echo "<script>alert('Password does not changed.')</script>";
} */

//Either you have entered an incorrect current password or your both the new entered password doesn't match

?>