<?php 
include "db_connection.php";
$cat_query = "SELECT cat_id FROM category WHERE status=1 ";
$cat_res = mysqli_query($conn,$cat_query);
$cat_arr=array();
while ($row = mysqli_fetch_assoc($cat_res)) {
  $cat_arr[] = $row;
}
 ?>

<!DOCTYPE>
<html>
<head>
<title>Fashion Store</title>  
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
  include "header.php"; ?>

    
	<div class="box">
    	<div class="row no-gutters">
		 	<div class="col-sm-12 col-md-12 col-lg-6 no-gutters">
			 	<div>
          
				 	<a href="category.php?cat_id=1">
					 	<img src="img/banner-men.jpg" width="100%" height="" >
				 	</a>	
			 	</div>
		 	</div>
		 		<div class="col-sm-12 col-md-12 col-lg-6 no-gutters">
       				<div>
         				<a href="category.php?cat_id=2">
          					<img src="img/banner-women.jpg" width="100%" height="">
         				</a>
       				</div>
		 		</div>
		</div>
	</div>



<?php 
include "footer.php"; ?>

</body>
</html>