<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travitude</title>
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="jquery-ui-1.12.1/jquery-ui.css">
    <link rel="stylesheet" href="fontawesome\css\all.css"/>
    <script src="bootstrap-4.4.1-dist/js/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
 <script src="jquery-ui-1.12.1/jquery-ui.js"></script>
 <script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
 <script src="bootstrap-4.4.1-dist/js/popper.min.js"></script>
</head>
<style>
    .wrap
  {
	  text-align: center;
	margin-top: 100px;
  }
	.b1 {
    position: absolute;
		transform: translate(-50%, -50%);
		text-decoration: none !important;
		text-transform: uppercase;
		background: #262626;
		width: 150px;
		height: 50px;
		line-height: 50px;
		color: #FFF;
		padding: 0px 5px;
		letter-spacing: 2px;
		text-align: center;
		font-size: 15px;
		font-weight: bold;
		transition: 0.5;
		overflow: hidden;
		border-radius: 25px;
	}
  .b1:before {
		content: '';
		position: absolute;
		bottom: 0;
		left: 0;
		width: 0;
		height: 0;
		/*    background: #F00;*/
		z-index: -1;
		transition: 1s;
		border-style: solid;
		border-color: #ff304f;
		border-width: 80px 100px;
		transform: rotate(360deg);
		transform-origin: top left
	}
	.b1:hover:before {
		border-color: #00F;
		transform: rotate(44deg)
	}
	
	.b1:hover {
		color: #ff0;
		transition: 0.5s;
		transition-delay: 0.3s;
	}
    @media screen and (max-width: 400px)
    {
        .b1
        {
            width: 100px;
            height: 30px;
            font-size: 10px;
            line-height: 13px;
            
        }
    }
  
</style>
<body>
<div class="jumbotron text-center">
  <div class="fa-4x">
  
    <i class="fas fa-check" style="color:#2ECC71"></i>

  </div>
  <h1 class="display-4">Thank you</h1>
  <p class="lead"><strong>"Your concern have been recived by our team."</p></strong>
  <hr  style="border-top: 2px solid #ff304f;">
  <p>
   <h4>We will get back to you shortly</h4>
  </p>
  <div class="wrap">
  <div class="exp">
    <a href="index.php" class="b1">Back To Home</a>
      </div>
      </div>
    
</div>

</body>
</html>
