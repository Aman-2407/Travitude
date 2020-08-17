<!DOCTYPE html>
<body lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Travitude</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="jquery-ui-1.12.1/jquery-ui.css">
    <link rel="stylesheet" href="fontawesome\css\all.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="bootstrap-4.4.1-dist/js/jquery.min.js"></script>
 <script src="jquery-ui-1.12.1/jquery-ui.js"></script>
 <script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
 <script src="bootstrap-4.4.1-dist/js/popper.min.js"></script>
<script src="myscript.js"></script>
</head>
<body>
<?php
function login()
{
  $dbHost     = "sql103.epizy.com";
$dbUsername = "epiz_25693617";
$dbPassword = "Trav9890";
$dbName     = "epiz_25693617_client_register";
 
  $conn=mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);
 $Password1="";
 $Email1="";
 
 
  if(! $conn)
  {
      echo("Could not connect" );
      
  }
 
      mysqli_select_db($conn,'client_register');
      $Email1=$_POST['Email1'];
      $Password1=$_POST['Password1'];   
 
   
  if ($Password1!="" and $Email1!="")
  {
 $check=mysqli_query($conn,"select * from create_account  where Email='$Email1' and Password='$Password1'");   
      if(mysqli_num_rows($check)>=1)
      {
        echo '<script>alert("Login Sucessfull..!!!!!");
        window.location="index.php";
        </script>';
     
 
      }    
 else {
  echo '<script>alert("Incorrect Email or Password..!!!!!");
  window.location="form.php";
  </script>';
  
 }     
  }
 
}

 ?> 
  
  <?php
  if(isset($_POST['sub1']))
  {
      login();
  }
  ?>


</body>
</html>




