<html>
<head>
<title>Contact</title> 
<link rel="icon" href="img/logo1.png" type="image/png" sizes="16x12"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>
</head>
<body>
<?php 
include "header.php"; ?>


  <section id="contact">
  <div class="container">
    <div class="well well-sm">
      <h3 class="C-header"><strong>CONTACT US</strong></h3>
    </div>
	
	<div class="row">
	  <div class="col-md-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.539280055518!2d90.40456541493334!3d23.763803384582836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c77decb5f845%3A0xc2eadd2f3b867792!2sAhsanullah%20University%20of%20Science%20and%20Technology!5e0!3m2!1sen!2sbd!4v1599575267076!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>

      <div class="contact-form col-md-6">
          <h4><strong>Get in Touch</strong></h4>

          <form class="contact-form" action="db_contact.php" method="post">
          <div class="form-group">
            <input type="text" class="form-control" name="username"  placeholder="Name"  required="required">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="useremail" placeholder="E-mail"  required="required">
          </div>
          <div class="form-group">
            <input type="tel" class="form-control" name="userphone" placeholder="Phone"  required="required">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="usertext" rows="3" placeholder="Message" required="required"></textarea>
          </div>
          <input type="submit" class="contact-form-btn" value="Send">
        </form>
      </div>
      <div class="col-md-6 contact-image">
        <img src="img/thanks.png" width="500px" height="300px">
        
      </div>
    </div>
  </div>
</section>
    
    <!--Contact Section End -->



<?php 
include "footer.php"; ?>

	



</body>
</html>