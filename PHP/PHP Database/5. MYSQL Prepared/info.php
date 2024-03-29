<?php
$servername = "localhost";
$username = "root";
$password = "sql@123";
$dbname = "lgininfo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
