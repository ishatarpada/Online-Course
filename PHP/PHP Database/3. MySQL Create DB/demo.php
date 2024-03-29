<?php

$server_name = "localhost";
$user_name = "root";
$password = "sql@123";

$conn = mysqli_connect($server_name, $user_name, $password);

if ($conn->connect_error) {
    die("connection failed" . mysqli_connect_error());
} else {
    echo "Connected Successfully";
}
echo "<br>";
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}


mysqli_close($conn);

?>