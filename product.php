<?php 
include "db_connection.php";  ?>

<html>
<head>
<title>Product</title>
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
    <br>
  

  <div class="container">
    <div class="row">

  <?php  
    

    $query =  "SELECT `Product_ID`, `Title`, `Price`, `Image1`, `Image2`, `parent_cat`, `cat_id`, `Description`, `Status`, `Qty` FROM `product` WHERE cat_id=$_GET[cat_id] ORDER BY Product_ID ASC";
    $queryfire = mysqli_query($conn , $query);

    $num = mysqli_num_rows($queryfire);

    if ($num > 0) {
        while ($product = mysqli_fetch_array($queryfire)) {
            ?>
            <div class="col-md-4 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="product-details.php?product_id=<?php echo $product['Product_ID'];?>">
                          <img class="pic-1" src="<?php echo $product['Image1']; ?>">
                          <img class="pic-2" src="<?php echo $product['Image2']; ?>">
                        </a>
                    </div>
                    <div class="product-content">
                        <h4> &#2547;<?php echo $product['Price']; ?>
                        <h3 class="title"><?php echo $product['Title']; ?></h3>
                        <a class="all-deals" href="product-details.php?product_id=<?php echo $product['Product_ID'];?>">See Details<i class="fa fa-angle-right icon"></i></a>
                   </div>
                   <br>
                </div>
            </div>

            <?php 


        }
    }
    ?>
    </div>
</div>

<?php 
include "footer.php"; ?>


</body>
</html>
