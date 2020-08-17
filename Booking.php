<html>
  <head>
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
    <script src="parallax.js-1.5.0\parallax.js"></script>
    <script src="myscript.js"></script> 
    <link rel="stylesheet" href="Booking page .css">
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
      
      
      <!--End Of Navbar-->
    <br><br>
    <!--Booking page starts here-->

    <div class="booking-form-box">
      <div class="radio-btn">
        <input type="radio" class="btnn" name="check" checked="checked" />
        <span class="rad">Silver</span>
        <input type="radio" class="btnn" name="check" />
        <span class="rad">Gold</span>
        <input type="radio" class="btnn" name="check" />
        <span class="rad">Platinum</span>
      </div>
      <div class="booking-form">
        <form action="bookingdata.php" method="POST">
          <div class="input group">
            <label>Adults</label>
            <input type="number" class="form-control" value="1" name="person" />
          </div>
          <div class="input group">
            <label>children</label>
            <input type="number" class="form-control" value="0" name="child"/>
          </div>
  
          <div class="input-grp">
            <label>Check-in</label>
            <input type="date" class="form-control select date" name="check_in" />
          </div>
          <div class="input-grp">
            <label>Check-Out</label>
            <input type="date" class="form-control select date" name="check_out" />
          </div>
  
          <div class="input-grp">
            <label>Rooms</label>
            <select class="form-control" id="combo" onchange="gt(this)" name="room">
              <option value=" ">Select type of Room</option>
              <option value="2000">Single Room</option>
              <option value="3500">Double Room</option>
              <option value="5000">Triple Room</option>
            </select>
          </div>
          <div class="input-grp">
            <label>Price</label>
            <input type="default" class="form-control" id="txt1" readonly name="price">
          </div>
          
          <div class="input-grp">
            <button type="submit" class="Booking-btn" name="sub"> Book</button>
          </div>
          
        </form>
        
      </div>
    </div>

    <!--Booking page Ends here-->
<br>
<br>
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
                          <i class="far fa-envelope-open mail"></i>
                         &nbsp;&nbsp;&nbsp;&nbsp; <span style="color: #878787; font-size: 18px;">travitudeinfo@gmail.com</span>
                                  </div>
                              <div class="single-cta">
                                  <i class="fas fa-map-marker-alt location"></i>
                                  &nbsp;&nbsp;&nbsp;&nbsp;      <span style="color: #878787; font-size: 18px;">400065, Madh Island , Mumbai</span>
                                  </div>
                                  <br>
                                 
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
      var price;
      function gt(selectObject)
      {
        price=selectObject.value;
        txt1.value=price;
      }
    </script>

    <script>
      var open = document.getElementById('hamburger')
      var changeIcon = true
      open.addEventListener('click', function () {
        var overlay = document.querySelector('.overlay')
        var nav = document.querySelector('nav')
        var icon = document.querySelector('.menu-toggle i')

        overlay.classList.toggle('menu-open')
        nav.classList.toggle('menu-open')

        if (changeIcon) {
          icon.classList.remove('fa-bars')
          icon.classList.add('fa-times')

          changeIcon = false
        } else {
          icon.classList.remove('fa-times')
          icon.classList.add('fa-bars')
          changeIcon = true
        }
      })
    </script>
    
  </body>
</html>
