<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Travitude</title>
	
    <meta name="viewport" content="width=device-width; initial-scale=1.0;"> 
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="jquery-ui-1.12.1/jquery-ui.css">
    <link rel="stylesheet" href="fontawesome\css\all.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <script src="bootstrap-4.4.1-dist/js/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
 <script src="jquery-ui-1.12.1/jquery-ui.js"></script>
 <script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
 <script src="bootstrap-4.4.1-dist/js/popper.min.js"></script>
 <script src="js/jquery.js"></script>
	<script src="myscript.js"></script> 
	<link rel="stylesheet" href="form.css">
    
</head>

<body>

	<header>
		<div class="menue">
			
			<div class="menu-toggle" id="hamburger">
				<i class="fas fa-bars"></i>
			</div>
			<div class="overlay">
			</div> 
			
			<div class="container-fluid c">
				
				<nav> 
					<h1 class="brand"><a href="index.php" class="bar">TR<span id="s1">av</span>itude</a></h1>
					<ul>
						<li><a href="index.php" class="bar">HOME</a></li>
						<li><a href="destination.php" class="bar">DESTINATION</a></li>
						<li><a href="getintouch.php" class="bar">GET IN TOUCH</a></li>
						<li><a href="aboutus.php" class="bar">ABOUT</a></li>
						<li><a href="form.php" class="bar">MY ACCOUNT</a></li>
					</ul>
				</nav>
	</div>
		</div>
	</header>
	
	<div class="logo1">
	  <a href="index.php">
	  <img src="images/Travitude Logo.png" alt="">
	</a>
	</div>
	<!--End Of Navbar-->
	 
	<div class="head-form">
		<h2 class="login-head">Login  &  Registration Form</h2>
		<div class="container contain" id="container">
			<div class="form-container sign-up-container">
				<form action="register.php" class="frstfrm" method="POST">
					<h1 class="welcome">Create Account</h1>
			<div class="social-container">
						<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
						<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
						<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
					</div> 
				<span class="sppn">or use your email for registration</span>
					<input type="text" placeholder="Name" class="frm-input" name="Name" required/>
					<input type="email" placeholder="Email" class="frm-input" name="Email"  required/>
					<input type="password" placeholder="Password" class="frm-input" name="Password"  required/>
					<input type="checkbox" class="check-box" id="check" />
        <span class="pass">
          I agree to the
          <a class="click" href="Terms and Condition.php" target="_blank">
            terms & conditions
          </a>
		</span>
		<br>
					<button class="signbtn" name="sub" id="btncheck">Sign Up</button>
				</form>
			</div>
			<div class="form-container sign-in-container">
				<form action="signin.php" class="frstfrm" method="POST">
					<h1 class="welcome">Sign in</h1>
					<div class="social-container">
						<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
						<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
						<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
					</div>
					<span class="sppn">or use your account</span> 
					<input type="email" placeholder="Email" class="frm-input" name="Email1" required />
					
					<input type="password" placeholder="Password" class="frm-input" name="Password1" required/>
					
					<a href="#" class="social">Forgot your password?</a>
					<button class="signbtn"  type="submit" name="sub1">Sign In</button>
				</form>
			</div>
			<div class="overlay-container">
				<div class="overlay1">
					<div class="overlay-panel overlay-left">
						<h1 class="welcome">Welcome Back!</h1>
						<p class="welcome-info">To keep connected with us please login with your personal info</p>
						<button class="ghost signbtn" id="signIn" >Sign In</button>
					</div>
					<div class="overlay-panel overlay-right">
						<h1 class="welcome">Hello, Friend!</h1>
						<p class="welcome-info">Enter your personal details and start journey with us</p>
						<button class="ghost signbtn" id="signUp">Sign Up</button>
					</div>
				</div>
			</div>
		</div>
		
	</div>
    <!--Footer Starts-->
    <footer class="footer-section">
		<div class="container c4">
			
			<div class="footer-content pt-5 pb-5">
				<div class="row">
					<div class="col-xl-4 col-lg-4 mb-50">
						<div class="footer-widget">
							<div class="footer-logo">
								<a href="index.php" class="logo">TR<span style="color: #ff304f;">AV</span>ITUDE</a>
							</div>
							<div class="footer-text">
								<p class="ft">Experiance a Unique  Way Of Travel Like Never Before!</p>
							</div>
							<div class="footer-social-icon">
								<span class="fllow">Follow us</span>
								<a href="https://en-gb.facebook.com/login/" class="link"><i class="fa fa-facebook-square facebook-bg icons"></i></a>
								<a href="https://twitter.com/hashtag/login?lang=en" class="link"><i class="fab fa-twitter twitter-bg icons"></i></a>
								<a href="https://www.instagram.com/accounts/login/?hl=en" class="link"><i class="fab fa-instagram insta-bg icons"></i></a>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 mb-30">
						<div class="footer-widget">
							<div class="footer-widget-heading">
								<h3 class="head">Quick Links</h3>
							</div>
							<br>
							<br>
							<br>
							<ul class="foot">
								<li class="inn"><a href="index.php" class="tx">Home</a></li>
								<li class="inn"><a href="destination.php" class="tx">Destinations</a></li>
								<li class="inn"><a href="getintouch.php" class="tx">Get In Touch</a></li>
								<li class="inn"><a href="aboutus.php" class="tx">About us</a></li>
								<li class="inn"><a href="form.php" class="tx">My Account</a></li>
								<li class="inn"><a href="meetourteam.php" class="tx">Meet Our Team</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 mb-50">
						<div class="footer-widget">
							<div class="footer-widget-heading">
								<h3 class="head">Address</h3>
							</div>
							<div class="footer-text mb-25">
							  <br>
							  <br>
								<div class="single-cta">
									<i class="fas fa-map-marker-alt location"></i>
									&nbsp;&nbsp;&nbsp;&nbsp;      <span style="color: #878787; font-size: 18px;">400065, Madh Island , Mumbai</span>
									</div>
									<br>
									<div class="single-cta">
							<i class="far fa-envelope-open mail"></i>
						   &nbsp;&nbsp;&nbsp;&nbsp; <span style="color: #878787; font-size: 18px;">travitudeinfo@gmail.com</span>
									</div>
							</div>
							<br>
							<div class="footer-widget-heading">
								<h3 class="head">Any Query...!! Feel Free To Write Us</h3>
							</div>
							
						   <br>
						   <br>
							<div class="subscribe-form">
								<form action="thankyou.php">
									
									<input type="text" class="input" placeholder="Email Address" required>
									<hr>
									<input type="area" class="input" placeholder="Your Message!" required>
									<button class="send"><i class="fab fa-telegram-plane tele"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright-area">
			<div class="container c5">
				<div class="row">
					<div class="col-xl-6 col-lg-6 text-center text-lg-left">
						<div class="copyright-text">
							<p class="ft">Copyright &copy; 2020, All Right Reserved <a href="https://www.instagram.com/aman_v.07/" class="tx">Aman</a></p>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</footer>
	  <!--End Of Footer-->
  
	  <script>
		$('#check')
		  .change(function () {
			$('#btncheck').prop('disabled', !this.checked)
		  })
		  .change()
	  </script>
<script>
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>
<script>
	  
          var open = document.getElementById('hamburger');
          var changeIcon = true;
          open.addEventListener("click", function(){
              var overlay = document.querySelector('.overlay');
              var nav = document.querySelector('nav');
              var icon = document.querySelector('.menu-toggle i');
          
              overlay.classList.toggle("menu-open");
              nav.classList.toggle("menu-open");
          
              if (changeIcon) {
                  icon.classList.remove("fa-bars");
                  icon.classList.add("fa-times");
          
                  changeIcon = false;
              }
              else {
                  icon.classList.remove("fa-times");
                  icon.classList.add("fa-bars");
                  changeIcon = true;
              }
          });
          </script>
</body>
</html>