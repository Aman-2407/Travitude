<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
 <script src="js/bootstrap.min.js"></script>
 <script src="js/popper.min.js"></script>
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
            <img src="images/raj-mp.jpg" alt="" class="map-image">
    
    <div class="row">
        <div class="col-sm-8">
            <div class="text">
                <p class="display-4">Rajasthan</p>
            </div>
            <hr class="line">
            <div class="content">
                <p class="lead">
                   <span class="letter">R</span>ajasthan  is a state in northern India. The state covers an area of 342,239 square kilometres (132,139 sq mi) or 10.4 percent of the total geographical area of India.
                    It is the largest Indian state by area and the seventh largest by population. 
                    Rajasthan is located on the northwestern side of India, where it comprises most of the wide and inhospitable Thar Desert (also known as the "Great Indian Desert") and shares a border with the Pakistani provinces of Punjab to the northwest and Sindh to the west, along the Sutlej-Indus river valley.
                </p>
                <hr style="border-top: 1px solid darkslategrey;">
                <h2>
                    Capital:
                </h2>
                <p class="lead">
                    <b> ‎Jaipur</b>

                </p>
                <hr style="border-top: 1px solid darkslategrey;">
                <h2>
                    BEST TIME TO VISIT RAJASTHAN:
                </h2>
                <p class="lead">
                    Although you can visit Rajasthan throughout the year but the best time to visit Rajasthan is during winter months of November to February, when the temperature is not too high. During December and January, there can be a severe variation in temperatures during the day and the night.
                </p>
                <hr style="border-top: 1px solid darkslategrey;">
                <h2>
                    Tourist Hotspots
                </h2>
                <p class="lead">
                    Rajasthan is known for its custom culture colors, majestic forts, and palaces, folk dances and music, local festivals, local food, sand dunes, carved temples, beautiful havelis
                    <b>  Keoladeo National Park, Ranthambore National Park, Sariska Tiger Reserve, Tal Chhapar Sanctuary</b> are wildlife attractions of Rajasthan 
                      
                </p>
                
            </div>
            
        </div>
        <div class="vertical-line"></div>
        <div class="col-sm-3">
            <img src="images/raj1.jpg" alt="" class="side-image">
            <hr>
            
            <img src="images/raj2.jpg" alt="" class="side-image">
            <hr>
            
            <img src="images/raj3.jpg" alt="" class="side-image">
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