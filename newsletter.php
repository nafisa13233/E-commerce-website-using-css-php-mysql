<?php 
$email = $_POST['email'];

include "db_connection.php";

$sql = "INSERT INTO newsletter (Email)
	    values ('$email')";
if ($conn->query($sql)) {
	echo "Sucessfull";
	header("location:index.php");

}

 ?>