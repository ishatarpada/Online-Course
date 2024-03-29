<?php

$stu_id = $_GET['id'];

include 'config.php';


$sql = "DELETE FROM Student WHERE sid = {$stu_id}";


$result = mysqli_query($conn , $sql) or die("Query Unsuccessful");

header("Location: http://localhost/PHP/PHP%20Database/CRUD%20Opration/index.php");

$conn->close();
?>