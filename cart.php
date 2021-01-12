<?php 
require_once 'db_connection.php';
$cart = $_SESSION['cart'];
?>

<html>
<head>
<title>Shopping Cart</title>
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


   <!-- SHOP CONTENT -->
	<section id="content">
		<div class="content-blog">
			<div class="container">
				<div class="row">
					<div class="page_header text-center">
						<h2>Shop Cart</h2>
					
					</div>

	<div class="col-12">
		<div class="table-responsive">

     <table class="cart-table table table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Product Image</th>
						<th>Product</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Total</th>
						<th>&nbsp;</th>
					</tr>
				</thead>
				<tbody>
				<?php
					
				$total = 0;
					foreach ($cart as $key => $value) {
					
						$cartsql = "SELECT * FROM product WHERE Product_ID=$key";
						$cartres = mysqli_query($conn, $cartsql);
						$cartr = mysqli_fetch_assoc($cartres);

					
				 ?>
					<tr>
						<td>
							<img src="<?php echo $cartr['Image1']; ?>" alt="" height="90" width="70">					
						</td>
						<td>
							<?php echo substr($cartr['Title'], 0 , 30); ?>				
						</td>
						<td>
							<span class="amount">&#2547;<?php echo $cartr['Price']; ?></span>					
						</td>
						<td>
							<div class="quantity"><?php echo $value['quantity']; ?></div>
						</td>
						<td>
							<span class="amount">&#2547;<?php echo ($cartr['Price']*$value['quantity']); ?></span>					
						</td>
						<td>
							<a class="remove" href="delcart.php?id=<?php echo $key; ?>"><i class="fa fa-times"></i></a>
						</td>
					</tr>
				<?php 
					$total = $total + ($cartr['Price']*$value['quantity']);
				
				} ?>

				<tr>
					<td>
						<a href="checkout.php?" class="checkout-button">Checkout </a>
					</td>
				</tr>
					
				</tbody>
			</table>
			</div>		

					<div class="cart_totals">
						<div class="col-md-6 push-md-6 no-padding">
							<h4 class="heading">Cart Totals</h4>
							<table class="table table-bordered col-md-6">
								<tbody>
									<tr>
										<th>Cart Subtotal</th>
										<td><span class="amount">&#2547;<?php echo $total; ?></span></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>			
							
					</div>
				</div>
			</div>
		</div>
	</section>




<?php 
include "footer.php"; ?>


</body>
</html>

