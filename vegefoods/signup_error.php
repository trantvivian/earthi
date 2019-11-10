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
              <h2 class="mb-4">Sign Up </h2>
              <p>Sign up today to get 100% fresh and organic foods either delivered 
                      to you or organize local meet ups. Let’s save the earth together!
              </p>
          </div> 	
        </div>
        <div class="row">
            <div class="col-md-12">
              <div class="limiter">
                <div class="container-login100">
                    <div class="wrap-login100">
                      <form id="signup" name="insert" action="submit.php" method="POST">
                        <div class="alert alert-danger" role="alert">It looks there's already an account under this email. Try <a href="login.php">logging in instead?</a></div>
                        <div class="form-group">
                        <span class = "label">Full Name</span>
                          <input type="text" id="full_name" name="full_name" class="form-control" placeholder="First and Last">
                        </div>
                        <div class="form-group">
                        <span class = "label">Your Email</span>
                          <input type="text" id="email" name="email" class="form-control" placeholder="you@example.com">
                        </div>
                        <div class="form-group">
                        <span class = "label">Address</span>
                        <input type="text" id="address" name="address" class="form-control" placeholder="Fill in Address">
                        </div>
                        <div class="form-group">
                        <div class = "row">
                            <div class="col-md-5">
                                <span class = "label">City</span>
                                <input type="text" id="city" name="city" class="form-control" placeholder="Fill in City">
                            </div>
                            <div class="col-md-2">
                                <span class = "label">State</span>
                                <select name="state" id="state" class="custom-select" style="height:52px!important;">
                                    <option selected value="">State</option>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="DC">D.C.</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UT">Utah</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WA">Washington</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY">Wyoming</option>
                                  </select>	
                            </div>
                            <div class="col-md-5">
                                <span class = "label">Zip Code</span>
                                <input type="text" id="zipcode" name="zipcode" class="form-control" placeholder="Fill in Zip Code">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                            <span class = "label">Password</span>
                          <input type="password" id="password" name="password" class="form-control" placeholder="Create Password">
                        </div>
                        <div class="form-group">
                                <span class = "label">Re-enter Password</span>
                                <input type="password" id="re_password" class="form-control" placeholder="Confirm Password">
                        </div>
                        <div class="form-group text-center">
                          <input type="submit" name="submit" value="Create an Account" class="btn btn-primary py-3 px-5">
                        </div>

                        </form>
                    </div>
                </div>
              </div>
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  <script>
      $(document).ready(function() {
        $('#signup').submit(function(e) {
          var full_name = $('#full_name').val();
          var email = $('#email').val();
          var address = $('#address').val();
          var city = $('#city').val();
          var state = $('#state').val();
          var zipcode = $('#zipcode').val();
          var password = $('#password').val();
          var re_password = $('#re_password').val();

          $(".error").remove();
          
          if (!/[(a-z)(A-Z)]+[\s][(a-z)(A-Z)]+/.test(full_name)){
            $('#full_name').after('<span class="error" style="color:red">Please enter a valid name</span>');
            e.preventDefault();
          }

          if(!/[^\W]+[.|_]?[A-Za-z0-9]+[.|_]?[A-Za-z0-9]+[@][A-Za-z]+[.][A-Za-z]+/.test(email)){
            $('#email').after('<span class="error" style="color:red">Please enter a valid email</span>');
            e.preventDefault();
          }

          if(!/^[a-zA-Z0-9\-\s.\#]+$/.test(address)){
            $('#address').after('<span class="error" style="color:red">Please enter a valid address</span>');
            e.preventDefault();
          }

          if(!/[a-zA-Z]+/.test(city)){
            $('#city').after('<span class="error" style="color:red">Please enter a valid city</span>');
            e.preventDefault();
          }

          if(!/^\d{5}$/.test(zipcode)){
            $('#zipcode').after('<span class="error" style="color:red">Please enter a valid zip code</span>');
            e.preventDefault();
          }

          if(state == ""){
            $('#state').after('<span class="error" style="color:red">Please select a state</span>');
            e.preventDefault();
          }

          if (password.length < 8) {
            $('#password').after('<span class="error" style="color:red">Password must be at least 8 characters long</span>');
            e.preventDefault();
          }

          if (re_password.length == 0) {
            $('#re_password').after('<span class="error" style="color:red">Please re-enter your password</span>');
            e.preventDefault();
          }

          else if (password != re_password) {
            $('#re_password').after('<span class="error" style="color:red">Passwords must match</span>');
            e.preventDefault();
          }

        });
      });
  </script>
    
  </body>
</html>