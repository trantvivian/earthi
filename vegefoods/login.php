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
	      <a class="navbar-brand" href="index.php"><img src="https://www.dl.dropboxusercontent.com/s/chaogr72sdus4g8/earthi-logo.svg?dl=0"></a>
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
        <li class="nav-item"><a href="login.php" class="nav-link">Log In</a></li>
        <li class="nav-item"><a href="signup.php" class="nav-link">Sign Up</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->



		<section class="ftco-section ftco-category ftco-no-pt">
		</section>

    <section class="ftco-section">
    	<div class="container">
			<div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Log In </h2>
                    <p>Log into your account to get 100% fresh and organic foods either delivered 
                            to you or organize local meet ups. Let’s save the earth together!
                    </p>
                </div> 	
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="limiter">
                            <div class="container-login100">
                                <div class="wrap-login100">
                                        <form id="login" action="signin.php" method="POST" class="bg-white contact-form">
                                                <div class="form-group">
                                                    <span class = "label">Your Email</span>
                                                  <input type="text" id="email" name="email" class="form-control" placeholder="you@example.com">
                                                </div>
                                                <div class="form-group">
                                                    <span class = "label">Password</span>
                                                  <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                                </div>
                                                <div class="form-group text-center">
                                                  <input type="submit" name="submit" value="Log In" class="btn btn-primary py-3 px-5">
                                                </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                </div>	
            </div>
    	</div>
        
        
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script>
      $(document).ready(function() {
        $('#login').submit(function(e) {
          var email = $('#email').val();
          var password = $('password').val();
          $(".error").remove();      
        
        if(!/[^\W]+[.|_]?[A-Za-z0-9]+[.|_]?[A-Za-z0-9]+[@][A-Za-z]+[.][A-Za-z]+/.test(email)){
            $('#email').after('<span class="error" style="color:red">Please enter a valid email</span>');
            e.preventDefault();
          }
      });
    });
  </script>      
    
  </body>
</html>