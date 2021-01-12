<?php
include "db_connection.php";
?>


<html>
<head>
<title>Checkout</title>  
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
<body>
	<?php 
include "header.php"; ?>

<div id="content" ><!-- content Starts -->
	<div class="container" ><!-- container Starts -->
		<div class="col-md-12" ><!-- col-md-12 Starts -->
		<?php
		if(!isset($_SESSION['username'])){
		header("location:login.php");

		}else{
			include("payment_options.php");
		}
		?>

		</div><!-- col-md-12 Ends -->
	</div><!-- container Ends -->
</div><!-- content Ends -->



<?php

include "footer.php";

?>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

</body>
</html>
