<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travitude</title>
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

</head>
<style>
    * {
	box-sizing: border-box;
}
*{
	margin: 0;
	padding: 0;

}

.map-image
{
   
    
    margin-left: 400px;
    width: 325px;
    border: 1px solid black;
}
.text
{
    margin-top: 75px;
    margin-left: 75px;
}
.display-4
{
    margin-top: -75px;
    color: darkslategrey;
    font-weight: 450;
}
b
{
    color: blue;
}
.line
{
    border-top: 3px solid #ff304f;
}
.content
{
    margin: 30px;
    letter-spacing: 1px;
}
.letter
{
font-size: 45px;
}
.wrap
  {
	  text-align: center;
  }
  .vertical-line
  {
      border-left: 3px solid black;
      height: 850px;
  }
  .side-image
  {
      width: 425px;
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
    @media screen and (max-width: 900px)
    {
		
        .b1
        {
			margin-top: -25px;
            width: 100px;
            height: 30px;
            font-size: 10px;
            line-height: 13px;
            
        }
    }
  
</style>
<body>
   <br>
   <br>
            <img src="images/maha-mp2.jpg" alt="" class="map-image">
    
    <div class="row">
        <div class="col-sm-8">
            <div class="text">
                <p class="display-4">Maharashtra</p>
            </div>
            <hr class="line">
            <div class="content">
                <p class="lead">
                   <span class="letter">M</span>aharashtra is a state in the western peninsular region of India occupying a substantial portion of the Deccan Plateau. 
                   As the home of the Marathi people, Maharashtra is the second-most populous state and third-largest state by area in India. 
                   Spread over 307,713 km2, it is also the world's second-most populous country subdivision.
                    Maharashtra is bordered by the Arabian Sea to the west, the Indian states of Karnataka and Goa to the south, Telangana to the southeast and Chhattisgarh to the east, 
                    Gujarat and Madhya Pradesh to the north, 
                   and the Indian union territory of Dadra and Nagar Haveli and Daman and Diu to the northwest
                     
                </p>
                <hr style="border-top: 1px solid darkslategrey;">
                <h2>
                    Capital:
                </h2>
                <p class="lead">
                    <b>MUMBAI</b>

                </p>
                <hr style="border-top: 1px solid darkslategrey;">
                <h2>
                    BEST TIME TO VISIT MAHARASHTRA:
                </h2>
                <p class="lead">
                    Decked with vast expanses of magnetizing canvas, Maharashtra is one of the most exotic traveler’s hotspots in India.October to March is the best time to visit Maharashtra. Offering a great climate to its visitors, this time is ideal for vacationers to witness the scenic beauty of this destination.
                </p>
                <hr style="border-top: 1px solid darkslategrey;">
                <h2>
                    Tourist Hotspots
                </h2>
                <p class="lead">
                    Mumbai, the biggest and the most cosmopolitan city in India attracts tourists from all over the world for its many attractions including colonial architecture, beaches, movie industry, shopping, and an active nightlife. Pune, called the cultural capital of Maharashtra, 
                    also attracts many visitors during the annual Ganeshotsav festival. 
                    <b> World Heritage Sites of Ajanta and Ellora caves, the Daulatabad Fort, and the Bibi Ka Maqbara in Aurangabad,Khandoba temple at Jejuri in Pune </b>etc.
                      It has a rich cultural heritage going back to the Ahom Dynasty which governed 
                    the region for many centuries before the British occupation.

                </p>
                
            </div>
            
        </div>
        <div class="vertical-line"></div>
        <div class="col-sm-3">
            <img src="images/maha1.jpg" alt="" class="side-image">
            <hr>
            
            <img src="images/maha2.jpg" alt="" class="side-image">
            <hr>
            
            <img src="images/maha3.jpg" alt="" class="side-image">
        </div>
    </div>
    <hr style="border-top: 1px solid darkslategrey;">
    <br>
    <br>
<!--Button-->
    <div class="wrap">
        <div class="exp">
          <a href="index.php" class="b1">Back To Home</a>
            </div>
            </div>
      <br>

      <br>
      <br>
      <br>
    
</body>
</html>