<?php 
include "db_connection.php" ?>
              
<?php 
$username = $_POST['username'];
$useremail = $_POST['useremail'];
$userphone = $_POST['userphone'];
$usertext = $_POST['usertext'];

$sql = "INSERT INTO contact (Name,Email,Phone,Message)
        values ('$username','$useremail','$userphone','$usertext')";
if ($conn->query($sql)) {
            echo "Sucessfull";
            header("location:contact.php");
}
else{
            echo "Error:".$sql ."<br>". $conn->error;
}
?> 
  