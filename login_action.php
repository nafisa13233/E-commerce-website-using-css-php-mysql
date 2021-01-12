<?php 
include "db_connection.php"; 

if (isset($_POST['username']) and isset($_POST['password'])){
	
// Assigning POST values to variables.
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['username'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `user` WHERE Username='$username' or Email='$email' and Password='$password'";
 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";
echo "<script type='text/javascript'>alert('Logged In.')</script>";
$_SESSION['username'] = $username;
$_SESSION['success'] = "You are now logged in";
header("location:index.php");
}else{
echo "<script type='text/javascript'>alert('Login Failed.')</script>";
echo "<script>window.open('login.php','_self')</script>";
//echo "Invalid Login Credentials";
}
}


 ?>