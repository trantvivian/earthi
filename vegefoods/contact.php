<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>earthi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="goto-here">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
      <?php if(isset($_SESSION['session_secret'])): ?>
	      <a class="navbar-brand" href="member.php"><img src="https://www.dl.dropboxusercontent.com/s/chaogr72sdus4g8/earthi-logo.svg?dl=0"></a>
        <?php else: ?>
        <a class="navbar-brand" href="index.php"><img src="https://www.dl.dropboxusercontent.com/s/chaogr72sdus4g8/earthi-logo.svg?dl=0"></a>
        <?php endif; ?>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item">
              <a class="nav-link" href="shop.php" aria-haspopup="true" aria-expanded="false">Shop</a>
            </li>
          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
          <?php if(isset($_SESSION['session_secret'])): ?>
          <li class="nav-item"><a href="logout.php" class="nav-link">Log Out</a></li>
          <?php else: ?>
          <li class="nav-item"><a href="login.php" class="nav-link">Log In</a></li>
          <li class="nav-item"><a href="signup.php" class="nav-link">Sign Up</a></li>
          <?php endif; ?>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Contact Us</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section bg-light">
      <div class="container">
      	<div class="row d-flex mb-5 contact-info">
          <div class="w-100"></div>
          <div class="col-md-4 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Address:</span> 85 Engineers Way, Charlottesville, VA</p>
	          </div>
          </div>
          <div class="col-md-4 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Phone:</span> <a href="tel://1234567920">(123) 456-7890</a></p>
	          </div>
          </div>
          <div class="col-md-4 d-flex">
          	<div class="info bg-white p-4">
              <p><span>Email:</span> <a href="mailto:earthi.ecomm@gmail.com">earthi.ecomm@gmail.com</a></p>
	          </div>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <h5 class="text-center text-success"></h5>
            <form id="contactf" action="email.php" method="POST" class="bg-white p-5 contact-form">
              <div class="form-group">
                <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" name="email" id="email" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          </div>

          <div class="col-md-6 d-flex">
          	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d12570.241572991512!2d-78.51877076194211!3d38.034026825407516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1572021364821!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">earthi</h2>
              <p>Look deep into nature, and then you will understand everything better. 
				  <br>— <i>Albert Einstein</i></p>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="shop.php" class="py-2 d-block">Shop</a></li>
                <li><a href="about.php" class="py-2 d-block">About</a></li>
                <li><a href="contact.php" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have Any Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
					<li><span class="icon icon-map-marker"></span><span class="text">85 Engineer's Way Charlottesville, VA 22904</span></li>
					<p>
            <p></p>
            <li><a href="mailto:earthi.ecomm@gmail.com"><span class="icon icon-envelope"></span><span class="text">earthi.ecomm@gmail.com</span></a></li>
           </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/main.js"></script>

  <script>
    $(document).ready(function() {
      $('#contactf').submit(function(e) {
        var full_name = $('#full_name').val();
        var email = $('#email').val();
        var subject = $('#subject').val();
        var message = $('#message').val();

        $(".error").remove();
        
        if (!/[(a-z)(A-Z)]+[\s][(a-z)(A-Z)]+/.test(full_name)){
          $('#full_name').after('<span class="error" style="color:red">Please enter a valid name</span>');
          e.preventDefault();
        }

        if(!/[^\W]+[.|_]?[A-Za-z0-9]+[.|_]?[A-Za-z0-9]+[@][A-Za-z]+[.][A-Za-z]+/.test(email)){
          $('#email').after('<span class="error" style="color:red">Please enter a valid email</span>');
          e.preventDefault();
        }

        if(!/^[a-zA-Z0-9\-\s.\#]{0,100}$/.test(subject)){
          $('#subject').after('<span class="error" style="color:red">Please enter subject</span>');
          e.preventDefault();
        }

        if(!"".test(message)){
          $('#message').after('<span class="error" style="color:red">Please enter a valid message</span>');
          e.preventDefault();
        }

      });
    });
</script>
    
  </body>
</html>