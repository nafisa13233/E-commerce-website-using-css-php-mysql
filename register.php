<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" href="img/logo1.png" type="image/png" sizes="16x12">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>
</head>
<body>
  <?php 
  include "header.php"; ?>
  
  <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Register</h2>
                        <form action="register_action.php" method="post">
                        
                            <div class="group-input">
                                <label for="Username">
                                Username *</label>
                                <input type="text" id="Username" name="username" required="required">
                            </div>
                            <div class="group-input">
                                <label for="Email">
                                Email address *</label>
                                <input type="text" id="Email" name="useremail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3}$" required="required">
                            </div>
                            <div class="group-input">
                                <label for="Phone">Phone *</label>
                                <input type="text" id="Phone" name="userphone"  pattern="[0]{1}[1]{1}[3-9]{1}[0-9]{8}" required="required">
                            </div>
                            <div class="group-input">
                                <label for="Address">Address *</label>
                                <input type="text" id="Address" name="useraddress" required="required">
                            </div>
                            <div class="group-input">
                                <label for="pass">Password *</label>
                                <input type="Password" id="pass" name="password_1" required="required">
                            </div>
                            <div class="group-input">
                                <label for="con-pass">Confirm Password *</label>
                                <input type="Password" id="con-pass" name="password_2" required="required">
                            </div>
                            <input type="submit" class="register-btn" value="Send">
                        </form>
                        <div class="switch-login">
                            <a href="./login.html" class="or-login">Or Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->
<?php 
include "footer.php"; ?>


  
</body>
</html>