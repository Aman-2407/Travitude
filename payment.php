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
    <script src="parallax.js-1.5.0\parallax.js"></script>
    <script src="myscript.js"></script> 
</head>
<style>
*{
  margin:0;
  padding:0;
}
html
{
	font-size: 10px;
	font-family: "Roboto Cn", sans-serif;
	scroll-behavior: smooth;
}
body
{
	margin: 0;
	padding: 0;
	overflow-x: hidden;
	background-color: #ebf5fc;
  
}
/*NAVBAR*/
.logo1
{
visibility: hidden;

}

.c
{
	max-width: 140%;
    width: 100%;
	background-color:  #3f3b3b;
	margin: 0 auto;
    
}

.bar{
	text-decoration: none !important;
	color:#fff;
	font-weight: bold;
}
.bar:hover
{
	color: #fff;
}
header{

  overflow: hidden;
  
}


.menu-toggle{
	position: fixed;
	top: 2.5rem;
	right: 2.5rem;
	color: red;
	font-size: 3rem;
	cursor: pointer;
	z-index: 1000;
	display: none;
}

nav{
	padding-top: 2rem;
	display: flex;
	justify-content: space-between;
	align-items: center;
	text-transform: uppercase;
	font-size: 1.6rem;
}
.brand{
	font-size: 4rem;
	font-weight: 300;
	transform: translateX(-100rem);
	animation: slideIn .5s forwards;
}

.brand #s1{
	color: #ff304f;
}

nav ul{
	display: flex;
  font-size: 1.9rem;
  
}
nav ul li{
	list-style: none;
	transform: translateX(100rem);
	animation: slideIn .5s forwards;
}
nav ul li:nth-child(1){
	animation-delay: 0s;
}

nav ul li:nth-child(2){
	animation-delay: .5s;
}

nav ul li:nth-child(3){
	animation-delay: 1s;
}

nav ul li:nth-child(4){
	animation-delay: 1.5s;
}
nav ul li:nth-child(5){
	animation-delay: 2s;
}

nav ul li a{
	padding: 1rem 0;
	margin: 0 3rem;
	position: relative;
	letter-spacing: 2px;
}

nav ul li a:last-child{
	margin-right: 0;
}

nav ul li a::before,
nav ul li a::after{
	content: '';
	position: absolute;
	width: 100%;
	height: 2px;
	background-color: #ff304f;
	left: 0;
	transform: scaleX(0);
	transition: all .5s;
}

nav ul li a::before{
	top: 0;
	transform-origin: left;
}
nav ul li a::after{
	bottom: 0;
	transform-origin: right;
}

.overlay{
	display: inline-block;
	background-color:black;
	position: fixed;
	width: 100%;
	
	right: 0;
	left: 0;
	top: 0;
	bottom: 0;
	transition: opacity 650ms;
	transform: scale(0);
	opacity: 0;
   overflow: hidden;
}
nav ul li a:hover::before,
nav ul li a:hover::after{
	transform: scaleX(1);
}
@keyframes slideIn {
	from{

	}
	to{
		transform: translateX(0);
	}
}

.wrapper{
  
  height:480px;
  width:700px;
  background:#fff;
  border:1px solid grey;
  font-size: 17px;
  border-radius:10px;
  margin:3em auto 0 auto;
  overflow:hidden;
  box-shadow:0px 2px 25px #000;
}
.row{
  display:flex;
  justify-content:center;
}
.row:nth-of-type(1) .col-xs-5{
  display:flex;
  flex-direction:column;
  align-items:center;
  background:#e6e6e6;
/*   border:solid 1px transparent; */
  border-radius:4px;
  margin:1em 5px;
}
.row:nth-of-type(1) .col-xs-5 #cards{
  display:flex;
  flex-direction:row;
  flex-wrap:nowrap;
  justify-content:center;
}
.row:nth-of-type(1) .col-xs-5 #cards img{
  width:100px;
  height:100px;
}

.row:nth-of-type(2) .col-xs-5{
  display:flex;
  flex-direction:column;
  justify-content:space-around;
  flex-basis:45%;
}
.row:nth-of-type(2) .col-xs-5 .input{
  border:2px solid lightgrey;
  height:35px;
  border-radius:10px;
  padding-left:10px;
}
.row .col-xs-5 .input:focus, .row:nth-of-type(3) .col-xs-2 .input:focus{
  border-color:#ff304f;
  outline:0;
}
label{
  position:relative;
}
 .icon{
  position:absolute;
  margin-top: 17px;
  margin-left: 300px;
}
.icon1{
  position:absolute;
  margin-top: 17px;
  margin-left: 300px;
}
.icon2{
  position:absolute;
  margin-top: 10px;
  margin-left: 185px;
}
.icon3{
  position:absolute;
  margin-top: 10px;
  margin-left: 185px;
}
.row-three{
  display:flex;
  justify-content:space-around;
  align-items:baseline;
  align-content:space-between;
  margin:2em 1em 2.4em 1em;
}
.row:nth-of-type(3) .col-xs-2{
  flex-basis:50%;
}
.row:nth-of-type(3) .col-xs-5{
  flex-basis:40%;
  align-items:baseline;
}
.row:nth-of-type(3) .col-xs-2 .input{
  height:35px;
  border:2px solid lightgrey;
  border-radius:10px;
  padding-left:10px;
}
.row:nth-of-type(3) .col-xs-5 .small{
  font-size:11px;
}
.ft-btn{
  height:120px;
  
  background:#e6e6e6;
  display:flex;
  flex-direction:row;
  justify-content:space-between;
  align-items:center;
}
.ft-btn .btn {
  margin:10px 20px 125px 15px;
  border-radius:20px;
  padding:.65em 1.6em;
  font-size: 15px;
}
.ft-btn :nth-child(1){
  background-color:#fff;
  color:#ff304f;
  
  border: 1px solid #ff304f;
}
.ft-btn :nth-child(2) {
  background-color:#fff;
  color:#ff304f;
  
  border: 1px solid #ff304f;
}
.col-xs-5.highlight{
  border:solid 1px blue;
}

/*Footer*/
.foot {
    margin: 0px;
    padding: 0px;
}
.footer-section {
  background: #151414;
  position: absolute;
  width: 100%;
  z-index: -1;
}
.footer-cta {
  border-bottom: 1px solid #373636;
}


.footer-content {
  position: relative;
  z-index: 2;
}

.footer-logo {
  margin-bottom: 30px;
}
.footer-logo .logo {
    font-size: 45px;
    color:white;
    font-weight: 700;
    text-decoration: none !important;
}
.footer-text p
{
    color: #878787;
    font-size: 18px;
}
.mb-25 .single-cta .location{
    color: #ff304f;
  margin-bottom: 14px;
  font-size: 30px;
  line-height: 28px;
}
 .mail
{
	color: #ff304f;
  margin-bottom: 14px;
  font-size: 30px;
  line-height: 28px;
}
.footer-social-icon .fllow {
  color: #fff;
  display: block;
  font-size: 20px;
  font-weight: 700;
  font-family: 'Poppins', sans-serif;
  margin-bottom: 20px;
}
.footer-social-icon .link {
  color: #fff;
  font-size: 16px;
  margin-right: 15px;
}
.footer-social-icon .icons {
  height: 40px;
  width: 40px;
  text-align: center;
  line-height: 38px;
  border-radius: 23%;
  border: .5px solid #fff;
  outline: none;
}
.facebook-bg:hover{
  background: #3B5998;
  transition: 0.5s ease;
  border: none;
}
.twitter-bg:hover{
  background: #55ACEE;
  transition: 0.5s ease;
  border: none;
}
.insta-bg:hover{
  background: rgba(223, 4, 40, 0.973);
  transition: 0.5s ease;
  border: none;
}
.footer-widget-heading .head {
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 40px;
  position: relative;
}
.footer-widget-heading .head::before {
  content: "";
  position: absolute;
  left: 0;
  bottom: -15px;
  height: 2px;
  width: 75px;
  background: #ff304f;
}
.footer-widget .foot .inn {
  display: inline-block;
  float: left;
  width: 50%;
  margin-bottom: 25px;
  font-size: 17px;
}
.footer-widget .foot .inn .tx:hover{
  color: #ff304f;
}
.footer-widget .foot .inn .tx {
  color: #878787;
  text-transform: capitalize;
}
.subscribe-form {
  position: relative;
  overflow: hidden;
  
}
.subscribe-form .input {
  width: 100%;
  padding: 15px;
  background: #2E2E2E;
  border: 1px solid #2E2E2E;
  color: #fff;
  font-size: 13px;
  font-family: 'Poppins', sans-serif;
  
}
.subscribe-form .send {
    position: absolute;
    right: 0px;
    background: #ff304f;
    padding: 11px 15px;
    border: 1px solid #ff304f;
    top: 73px;
}
::placeholder {
	color: #878787;
	opacity: 1; 
  }
  
.subscribe-form .send .tele {
  color: #fff;
  font-size: 25px;
  transform: rotate(-6deg);
}
.subscribe-form .send .tele:hover
{
color: black;
transition: 0.3s ease-in-out;
}
.copyright-area{
	
  background: #202020;
  padding: 23px 0;
}
.copyright-text p {
	text-align: center;
  margin: 0;
  font-size: 15px;
  color: #878787;
}
.copyright-text p a{
  color: #ff304f;
}

@media screen and (max-width: 1000px){
  /*BACKGROUND*/
  body
  {
    overflow-x: hidden;
  }
 
    /*TOGGLE*/
    
    .menu-toggle{
      display: block;
      margin-top: -20px;
    
    }
  
    nav{
    
      padding-top: 0;
      display: none;
      flex-direction: column;
      justify-content: space-evenly;
      align-items: center;
      height: 100vh;
      text-align: center;
    
    }
  
    nav ul{
      flex-direction: column;
    }
  
    nav ul li{
      margin-top: 6rem;
    }
  
    nav ul li a{
      margin: 0;
      font-size: 2rem;
    }
  
    .brand{
      font-size: 4rem;
    }
    
    .overlay.menu-open,
    nav.menu-open{
      display: flex;
      width: 100%;
      height: 100%;
      transform: scale(1);
      opacity: 1;

                  }
}

</style>
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

    <div class="wrapper">
      <div class="row">
        <div class="col-xs-5">
          <div id="cards">
            <img src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/Visa-icon.png">
            <img src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/Master-Card-icon.png">
          </div><!--#cards end-->
          <div class="form-check">
      <label class="form-check-label" for='card'>
        <input id="card" class="form-check-input" type="checkbox" value="">
        Pay $150.00 with credit card
      </label>
    </div>
        </div><!--col-xs-5 end-->
        <div class="col-xs-5">
          <div id="cards">
            <img src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/Paypal-icon.png">
          </div><!--#cards end-->
          <div class="form-check">
      <label class="form-check-label" for='paypal'>
        <input id="paypal" class="form-check-input" type="checkbox" value="">
        Pay $150.00 with PayPtm
      </label>
    </div>
        </div><!--col-xs-5 end-->
      </div><!--row end-->
      <div class="row">
        <div class="col-xs-5">
        
          <label for="cardholder">Cardholder's Name</label>
          <i class="fas fa-user icon"></i>
          <input type="text" id="cardholder" class="input" required>
        </div><!--col-xs-5-->
        <div class="col-xs-5">
          
          <label for="cardnumber">Card Number</label>
          <i class="far fa-credit-card icon1"></i>
          <input type="text" id="cardnumber" class="input" required>
        </div><!--col-xs-5-->
      </div><!--row end-->
      <div class="row row-three">
        <div class="col-xs-2">
          
          <label for="date">Valid thru</label>
          <br>
          <i class="far fa-calendar-alt icon2"></i>
          <input type="text" placeholder="MM/YY" id="date" class="input" required>
        </div><!--col-xs-3-->
        <div class="col-xs-2">
          
          <label for="date">CVV / CVC *</label>
          <br>
          <i class="fas fa-lock icon3"></i>
          <input type="password" class="input" required>
        </div><!--col-xs-3-->
        <div class="col-xs-5">
          <span class="small">* CVV or CVC is the card security code, unique three digits number on the back of your card seperate from its number.</span>
        </div><!--col-xs-6 end-->
      </div><!--row end-->
      <footer class="ft-btn">
        <button class="btn" type="submit"><a href="#" style="text-decoration: none; border: none;"> Back </a></button>
        <button class="btn" type="submit"><a href="thankyoupayment.php" style="text-decoration: none; border: none;"> Pay </a></buton>
      </footer>
    </div>
  <br>
  <br>
  <!--wrapper end-->
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
          $('input[type="checkbox"]').on('click',function(){
var selected = $(this).parent().parent().parent();    $(selected).toggleClass('highlight');
});
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