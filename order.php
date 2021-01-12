<?php

include "db_connection.php";

?>
<html>
<head>
<title>Order</title>
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
<?php

if(isset($_GET['username'])){

$customer_id = $_GET[c_id];



$select_cart = "select * from cart where ID=$customer_id";

$run_cart = mysqli_query($conn,$select_cart);

while($row_cart = mysqli_fetch_array($run_cart)){

$pro_id = $row_cart['Product ID'];

$pro_qty = $row_cart['Qty'];


$sub_total = $row_cart['Price']*$pro_qty;


$insert_customer_order = "INSERT into customer_orders (customer_id,due_amount,qty,order_date,order_status) values ('$customer_id','$sub_total','$pro_qty',NOW(),'$status')";

$run_customer_order = mysqli_query($conn,$insert_customer_order);


echo "<script>alert('Your order has been submitted,Thanks ')</script>";

echo "<script>window.open('index.php')</script>";



}
}



?>
<div class="order-box">
<h1 class="order-h1">Order Placed. Thank you.</h1>

</div>

<?php 
include "footer.php"; ?>


</body>
</html>

