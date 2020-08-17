<?php

//fetch.php;

if(isset($_GET["term"]))
{
 $connect = new PDO("mysql:host=localhost:3306; dbname=searchbar", "Aman", "12345");

 $query = "
 SELECT * FROM db_image
 WHERE City LIKE '%".$_GET["term"]."%' 
 ORDER BY City  ASC
 ";

 $statement = $connect->prepare($query);

 $statement->execute();

 $result = $statement->fetchAll();

 $total_row = $statement->rowCount();

 $output = array();
 if($total_row > 0)
 {
  foreach($result as $row)
  {
   $temp_array = array();
   $temp_array['value'] = $row['City'];
   $temp_array['label'] = '<img src="suggimg/'.$row['image'].'" width="70" />&nbsp;&nbsp;&nbsp;'.$row['City'].'';
   $output[] = $temp_array;
  }
 }
 else
 {
  $output['value'] = '';
  $output['label'] = 'Sorry Cannot Reach There!!!';
 }

 echo json_encode($output);
}

?>