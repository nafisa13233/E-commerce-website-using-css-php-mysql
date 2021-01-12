<?php 
if (isset($_SESSION['username'])) {
  $user = $_SESSION['username'];
  
}
else{
  $user = "Log in";
}
?>
<?php 
if (isset($_SESSION['username'])) {
  $registration = "Logout";
  
}
else{
  $registration = "Register";
}
?>
<header>
    <div class="banner">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.php" target="_blank">
            <img src="img/logo.png">
        </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="category.php?cat_id=1">Men</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="category.php?cat_id=2">Women</a>
                </li>
              </ul>
              <ul class="navbar-nav ml-auto">
      
                <li class="nav-item">
                    <a class="nav-link" href="login.php"><?php echo "$user"; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php"><?php echo "$registration"; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
                </li>
      
            </ul>
            </div>
      </nav>
    </div>
  </header>