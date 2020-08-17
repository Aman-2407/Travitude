<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
    <link rel="stylesheet" href="style4.css"/>
    <script src="myscript.js"></script> 
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
                <h1 class="brand"><a href="date.html" class="bar">TR<span id="s1">av</span>itude</a></h1>
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
    <br>
    <br>
<div class="row">
    <div class="col-sm-4">
      <div class="select">
        <hr style="border-top: 2px solid #ff304f; margin-left: 10px;"> 
        <span style="margin-left: 30%; font-size: 25px;">Select Your State</span> 
        <hr style="border-top: 2px solid #ff304f; margin-left: 10px;">
      </div>
     
        <div class="container c1 shadow">
          
            <br>
            <br>
            <div class="md-chip white">
            <a href="assam.php">
            <div class="md-chip-img">
                  <img src="images/assam.jpg">
                </div>
                <span class="md-chip-text">ASSAM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span>
            </a>
                
              </div>
              <hr class="my-4">
              <div class="md-chip white">
              <a href="">
              <div class="md-chip-img">
                  <img src="images/kolkata.jpg">
                </div>
                <span class="md-chip-text">WEST BENGAL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
              </a>
                
              </div>
              <hr class="my-4">
              <div class="md-chip white">
                <div class="md-chip-img">
                  <img src="images/kashmir.jpg">
                </div>
                <span class="md-chip-text">HIMACHAL PRADESH </span>
              </div>
              <hr class="my-4">
              <div class="md-chip white">
                <div class="md-chip-img">
                  <img src="images/rajasthan.jpg">
                </div>
                <span class="md-chip-text">RAJASTHAN &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;
                </span>
              </div>
              <hr class="my-4">
              <div class="md-chip white">
                <div class="md-chip-img">
                  <img src="images/maharashtra.jpg">
                </div>
                <span class="md-chip-text">MAHARASHTRA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;
                </span>
              </div>
              <hr class="my-4">
              <div class="md-chip white">
                <div class="md-chip-img">
                  <img src="images/goa.jpg">
                </div>
                <span class="md-chip-text">GOA
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span>
              </div>
              <hr class="my-4">
              <div class="md-chip white">
                <div class="md-chip-img">
                  <img src="images/kerala.jpg">
                </div>
                <span class="md-chip-text">KERALA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;
                </span>
              </div>

        </div>
       
    </div>
    <div class="col-sm-2">
      
    <br>
    <br>
    </div>
    
    <div class="col-sm-6">
    
      <div class="container-fluid cf"><div id="map">
        <div style="max-width:200%;overflow:hidden;color:black;width:100%;height:550px;">
          <div id="embedmap-canvas" style="height:100%; width:100%;max-width:100%;">
            <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=India&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8">
            </iframe>
          </div>
          <a class="googlehtml" rel="nofollow" href="https://www.embed-map.com" id="enablemap-data">https://www.embed-map.com</a>
          <style>
          #embedmap-canvas img.text-marker
          {
            max-width:none!important;
            background:none!important;
            }
            img
            {
              max-width:none
              }
              </style>
              </div>
          
      </div>
  </div>
</div>
      </div>





<br>
<br><br>

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
                                <p>Experiance a Unique  Way Of Travel Like Never Before!</p>
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
                            <p>Copyright &copy; 2020, All Right Reserved <a href="https://www.instagram.com/aman_v.07/">Aman</a></p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>
      
     <!--End Of Footer-->
      
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