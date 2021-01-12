<?php 
include "db_connection.php";  ?>


<html>
<head>
<title>Product Details</title>  
<link rel="icon" href="img/logo1.png" type="image/png" sizes="16x12">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>
</head>
<body>
 <?php 
  include "header.php" ?>
  <div class="container">
		<div class="card">
			<div class="container">
				<div class="row">
					<?php 
				
					$single_product_query =  "SELECT `Product_ID`, `Title`, `Price`, `Image1`, `Image2`, `parent_cat`, `cat_id`, `Description`, `Status`, `Qty` FROM `product` WHERE Product_ID=$_GET[product_id] ORDER BY Product_ID ASC";
                    $single_product_queryfire = mysqli_query($conn , $single_product_query);
                    $single_product = mysqli_fetch_array($single_product_queryfire) ?>
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="<?php echo $single_product['Image1']; ?>"></div>
						</div>
					</div>
					<br>
					<div class="details col-md-6 col-sm-12">
						<h3 class="product-title"><?php echo $single_product['Title']; ?></h3>
						<p class="product-description"><?php echo $single_product['Description']; ?>
						</p>
						<h4 class="price">PRICE: <span><?php echo $single_product['Price']; ?></span></h4>
						<h5 class="sizes">SIZE :
							<select name="size">
								<option value="null"></option>
    							<option value="small">Small</option>
    							<option value="medium">Medium</option>
    							<option value="large">Large</option>
    							<option value="extra large">Extra Large</option>
  							</select>
						</h5>


						
						<form method="get" action="addtocart.php">
							<div class="quantity">
								
								<h4 class="quantity">Quantity:</h4> 
									<input type="hidden" name="id" value="<?php echo $single_product['Product_ID']; ?>">
									<input type="text" name="quant" placeholder="1">
							</div>
							<div class="shop-btn-wrap">
								<button class="add-to-cart"  name="add_cart" type="submit" value="Add to Cart">add to cart</button>
							</div>
						</form>



					</div>
				</div>
			</div>
		</div>
	</div>

	

<?php 
include "footer.php"; ?>


</body>
</html>