<?php

$dbHost     = "sql103.epizy.com";
$dbUsername = "epiz_25693617";
$dbPassword = "Trav9890";
$dbName     = "epiz_25693617_searchbar";
// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
$searchTerm = $_GET['term'];
$query = "
 SELECT * FROM db_image
 WHERE City LIKE '%".$searchTerm."%' 
 ORDER BY City  ASC
 ";
 $result = $db->query($query);
 $userData = array();
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $name =  $row['City'];
        $data['label'] = '
        
        <a href="assam.html"><img src="suggimg/'.$row['image'].'" width="70" />
        </a>'.$row['City'].'';
        array_push($userData, $data);
    }
}
echo json_encode($userData);