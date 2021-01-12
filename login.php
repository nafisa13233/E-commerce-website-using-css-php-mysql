<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
  

  <!--Login Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        <h2>Login</h2>
                        <form action="login_action.php" method="post">
                            <div class="group-input">
                                <label for="username">Email address *</label>
                                <input type="text" id="username" name="username">
                            </div>
                            <div class="group-input">
                                <label for="Password">Password *</label>
                                <input type="Password" id="password" name="password">
                            </div>
                            <div class="group-input gi-check">
                                <div class="gi-more">
                                    <a href="#" class="forget-pass">Forget your Password</a>
                                </div>
                            </div>
                            <input type="submit" class="login-btn" value="Log In">
                        </form>
                        <div class="switch-login">
                            <a href="register.php" class="or-login">Or Create An Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Section End -->

<?php 
include "footer.php"; ?>


</body>
</html>
