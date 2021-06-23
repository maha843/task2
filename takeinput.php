<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "direction";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['uu'])){

  $d1= $_POST['uu'];
  



  $ins_query="insert into movement(directionvalue)
  values('$d1')";
  
     if ($conn->query($ins_query) === TRUE) {
   
      echo $d1 ;
     
  } else {
   echo "Error: " . $ins_query . "<br>" . $conn->error;
  }
}





?>
