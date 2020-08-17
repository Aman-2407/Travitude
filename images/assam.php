<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
   margin-top: -25px;
    margin-left: 400px;
    width: 350px;
    border: 1px solid black;
}
.text
{
    margin-top: 65px;
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
		transform-origin: top left;
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
   <div class="row">
       <div class="col-sm-12">
        <img src="images/assam-mp.jpg" alt="" class="map-image">
       </div>
    
   </div>
           
    
    <div class="row">
        <div class="col-sm-8">
            <div class="text">
                <p class="display-4">Assam</p>
            </div>
            <hr class="line">
            <div class="content">
                <p class="lead">
                   <span class="letter">A</span>ssam, state of India. It is located in the northeastern part of 
                    the country and is bounded to the north by the kingdom of 
                    Bhutan and the state of Arunachal Pradesh, to the east by 
                    the states of Nagaland and Manipur, to the south by the 
                    states of Mizoram and Tripura, and to the west by 
                    Bangladesh and the states of Meghalaya and West Bengal.
                     The name Assam is derived from the word asama, meaning “peerless” in the now extinct Ahom language. The neighbouring states of Arunachal Pradesh,
                     Nagaland, Mizoram, and Meghalaya were once part of Assam.
                     
                </p>
                <hr style="border-top: 1px solid darkslategrey;">
                <h2>
                    Capital:
                </h2>
                <p class="lead">
                    <b>Dispur Location: North East India</b>

                </p>
                <hr style="border-top: 1px solid darkslategrey;">
                <h2>
                    BEST TIME TO VISIT ASSAM:
                </h2>
                <p class="lead">
                    To be a part of the euphoric festival celebration; check out one of the kind nature phenomena - river island at Majuli; sample scrumptious Machor Tenga and Duck Roast; visit the oldest temple in the history of India; go boat cruising on Brahmaputra river; purchase 
                    traditional silk garment and raft over ferocious Jia Bhorali River
                </p>
                <hr style="border-top: 1px solid darkslategrey;">
                <h2>
                    Tourist Hotspots
                </h2>
                <p class="lead">
                    For the purposes of tourism there are wildlife reserves like the 
                    <b>Kaziranga National Park, Manas National Park, 
                    Pobitora Wildlife Sanctuary, Nameri National Park,
                     Dibru-Saikhowa National Park </b>etc.
                      It has a rich cultural heritage going back to the Ahom Dynasty which governed 
                    the region for many centuries before the British occupation.
                </p>
            </div>
        </div>
        <div class="vertical-line"></div>
        <div class="col-sm-3">
            <img src="images/assam1.jpg" alt="" class="side-image">
            <hr>
            
            <img src="images/assam2.jpg" alt="" class="side-image">
            <hr>
            
            <img src="images/assam3.jpg" alt="" class="side-image">
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