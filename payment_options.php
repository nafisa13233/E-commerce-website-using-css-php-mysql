<html>
<head>
<title>Fashion Store</title> 
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

	<div class="payment-box">

			<?php

			$select_customer = "SELECT `ID`, `Username`, `Email`, `Phone`, `Address`, `Password`, `Status`, `Created Date` FROM `user` WHERE Email='".$_SESSION['username']."'";

			$run_customer = mysqli_query($conn,$select_customer);

			$row_customer = mysqli_fetch_array($run_customer);



			?>

			<h1 class="payment-h1">Payment Options For You</h1>

			<p class="lead text-center">

			<a href="order.php?c_id=<?php echo $row_customer['ID']; ?>"><button class="Payment-button" >Pay Off line</button></a>

			</p>
			<div class="col-md-12 text-center online-payment">
				<h1 class="payment-h1">Online Payment</h1>
				<a class="payment-image" href="404.php"><img src="img/1.png"></a>
				<a class="payment-image" href="404.php"><img src="img/2.png"></a>
				<a class="payment-image" href="404.php"><img src="img/3.png"></a>
				<a class="payment-image" href="404.php"><img src="img/4.png"></a>
				<a class="payment-image" href="404.php"><img src="img/5.png"></a>
				
			</div>
    </div>
</body>
</html>

