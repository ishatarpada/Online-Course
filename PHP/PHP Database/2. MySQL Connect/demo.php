<?php

$server_name = "localhost";
$user_name = "root";
$password = "sql@123";

$conn = mysqli_connect($server_name , $user_name , $password);

if($conn->connect_error){
    die("connection failed" . mysqli_connect_error());
}
else{
    echo "Connected Successfully";
}

?>