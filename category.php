<?php 
include "db_connection.php";
$cat_query = "SELECT cat_id FROM category WHERE status=1 ";
$cat_res = mysqli_query($conn,$cat_query);
$cat_arr=array();
while ($row = mysqli_fetch_assoc($cat_res)) {
  $cat_arr[] = $row;
}
 ?>

<html>
<head>
<title>Category</title>  
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


<div class="slider">
	<?php  
       $cat_id = $_GET['cat_id'];
       if($cat_id == 1){

       	$banner_query =  "SELECT `banner_id`, `cat_id`, `parent_cat`, `cat_name`, `image1`, `image2`, `image3`  FROM `banner` WHERE cat_id =1 ORDER BY cat_id ASC";

       $banner_queryfire = mysqli_query($conn , $banner_query);
       $banner_num = mysqli_num_rows($banner_queryfire);
       if ($banner_num > 0) {
         while ($banner = mysqli_fetch_array($banner_queryfire)) {
            ?>
       	<div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?php echo $banner['image1']; ?>" height="" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="<?php echo $banner['image2']; ?>" height="" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="<?php echo $banner['image3']; ?>" height="" class="d-block w-100">
            </div>
        </div>
        <ol class="carousel-indicators">
            <li data-target="#slider" data-slide-to="0" class="active"></li>
            <li data-target="#slider" data-slide-to="1"></li>    
            <li data-target="#slider" data-slide-to="2"></li>
        </ol>
    </div>
    <?php  
       }
      } 
    }
       else if($cat_id == 2){

       	$banner_query =  "SELECT `banner_id`, `cat_id`, `parent_cat`, `cat_name`, `image1`, `image2`, `image3`  FROM `banner`  WHERE cat_id =2 ORDER BY cat_id ASC ";

       $banner_queryfire = mysqli_query($conn , $banner_query);
       $banner_num = mysqli_num_rows($banner_queryfire);
       if ($banner_num > 0) {
         while ($banner = mysqli_fetch_array($banner_queryfire)) {
            ?>
       	<div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?php echo $banner['image1']; ?>" height="" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="<?php echo $banner['image2']; ?>" height="" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="<?php echo $banner['image3']; ?>" height="" class="d-block w-100">
            </div>
        </div>
        <ol class="carousel-indicators">
            <li data-target="#slider" data-slide-to="0" class="active"></li>
            <li data-target="#slider" data-slide-to="1"></li>    
            <li data-target="#slider" data-slide-to="2"></li>
        </ol>
    </div>
    <?php 
       }
      }
     } 
    ?>

</div>

    <div class="row">
      <?php  
       $cat_id = $_GET['cat_id'];
       if($cat_id == 1){
       	$sub_cat_query =  "SELECT `cat_id`, `cat_name`, `parent_cat`, `cat_image` FROM `category`  WHERE parent_cat != 0 and parent_cat = 1 ORDER BY cat_id ASC";
       $sub_cat_queryfire = mysqli_query($conn , $sub_cat_query);

      $sub_cat_num = mysqli_num_rows($sub_cat_queryfire);

      if ($sub_cat_num > 0) {
         while ($category = mysqli_fetch_array($sub_cat_queryfire)) {
            ?>
        <div class="col-lg-4 col-md-6 col-sm-12">
        	<a href="product.php?cat_id=<?php echo $category['cat_id'];?>">
            <section class="category">
                <img src="<?php echo $category['cat_image']; ?>" height="600px" width="100%">
                <p id="text"><?php echo $category['cat_name']; ?></p>
            </section>
          </a>
        </div> 
        <?php 


        }
    }
       }
       else if($cat_id == 2){
       	$sub_cat_query =  "SELECT `cat_id`, `cat_name`, `parent_cat`, `cat_image` FROM `category`  WHERE parent_cat != 0 and parent_cat =2 ORDER BY cat_id ASC";
       $sub_cat_queryfire = mysqli_query($conn , $sub_cat_query);

      $sub_cat_num = mysqli_num_rows($sub_cat_queryfire);

      if ($sub_cat_num > 0) {
         while ($category = mysqli_fetch_array($sub_cat_queryfire)) {
            ?>
        <div class="col-lg-4 col-md-6 col-sm-12">
        	<a href="product.php?cat_id=<?php echo $category['cat_id'];?>">
            <section class="category">
                <img src="<?php echo $category['cat_image']; ?>" height="600px" width="100%">
                <p id="text"><?php echo $category['cat_name']; ?></p>
            </section>
          </a>
        </div> 
        <?php 


        }
    }
       }
       
    ?>
</div>

    
<?php 
include "footer.php"; ?>


</body>
</html>