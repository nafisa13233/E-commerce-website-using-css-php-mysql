

<?php

    include 'db_connection.php';
    if(isset($_SESSION['username'])){
                                                            
    $sql = "SELECT `ID`, `Username`, `Email`, `Phone`, `Address`, `Password`, `Status`, `Created Date` FROM `user` WHERE Email='".$_SESSION['username']."'";
    $query = mysqli_query($conn, $sql);
    }else {
                                                        
    header("Location: login.php");
    }

?>
       
<!DOCTYPE>
<html>
<head>
<title>My Account</title> 
<link rel="icon" href="img/logo1.png" type="image/png" sizes="16x12"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="css/themify-icons.css" type="text/css">
<link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
<link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="css/nice-select.css" type="text/css">
<link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
<link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
</head>   
</head>
<body>


<?php

    include 'header.php';
   
?>
<br>

<h1 class="order-h1">My Account</h1>

<div class="container profile-card" style="margin-top: 50px; ">
    <div class="row profile-row">
            
        <div class="col-md-6 col-sm-6 col-6">
                <table class="profile-heading1">
                    <thead >
                    <tr><th>Name:</th></tr>
                    <tr><th>Email:</th></tr>
                    <tr><th>Phone:</th></tr>
                    <tr><th>Address:</th></tr>
                    </thead>   
                </table>
        </div>
        <div class="col-md-6 col-sm-6 col-6">
                <table class="profile-heading2">
                    <?php
                        if($query = $conn->query($sql)){
                          $fetch = $query -> fetch_assoc();
                            echo "<tr><th>".$fetch['Username']."</th></tr>
                            <tr><th>".$fetch['Email']."</th></tr>
                            <tr><th>".$fetch['Phone']."</th></tr>
                            <tr><th>".$fetch['Address']."</th></tr>";
                        }
                        $conn -> close();
                      ?>
                </table>      
            </div>                                                  
    </div>    
</div>
                           

<?php 
include "footer.php"; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>