<?php
function insert()
{
    $dbHost     = "sql103.epizy.com";
$dbUsername = "epiz_25693617";
$dbPassword = "Trav9890";
$dbName     = "epiz_25693617_boooking";
 
  $conn=mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);
    if(! $conn)
    {
        echo("Could not connect");
    }
                 mysqli_select_db($conn,'boooking');
                 $person=$_POST['person'];
                 $child=$_POST['child'];
                 $check_in=$_POST['check_in'];
                 $check_out=$_POST['check_out'];
                 $room=$_POST['room'];
                 $price=$_POST['price'];
    $sql="insert into booking_info values('$person','$child','$check_in','$check_out','$room','$price');";
    $retval=mysqli_query($conn,$sql);

    if(! $retval)
    {
        die('Faild to insert:');
    }
    echo '<script>alert("Booking DetailsRregistred Sucesfully......Redirecting to Payment Page!!!!!");
    window.location="payment.php";
    </script>';
   
    
}

?>
 
<?php
if(isset($_POST['sub']))
{
    insert();
}
?>
