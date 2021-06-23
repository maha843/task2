<?php
$servername = "localhost";
$username = "root";
$password = "";

  $conn = new mysqli($servername, $username, $password);
  // set the PDO error mode to exception
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE if not exists direction";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}


$conn->close();
?>