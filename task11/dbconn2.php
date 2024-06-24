<?php

$server = "localhost";
$username = "root";
$pw = "";
$dbname = "school";




try{
  $conn =new PDO("mysql:host=$server;dbname=$dbname",
  $username,
  $pw
  ); 
  
  #set the PDO error mode to expection

  $conn->setAttribute(
    PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION
  );
  echo"connected successfully";


} catch(PDOException $e) {
    echo"connection failed: " . $e->getMessage();
}




?>