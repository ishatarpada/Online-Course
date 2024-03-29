<?php

include 'config.php';
$student_id = $_POST['studentID'];
$studentName = $_POST['studentName'];
$studentAddress = $_POST['studentAddress'];
$studentClass = $_POST['student_class'];
$studentNumber = $_POST['studentNumber'];


$sql = "UPDATE Student SET student_name = '{$studentName}', student_adress = '{$studentAddress}', student_class = '{$studentClass}', student_phone = '{$studentNumber}' WHERE sid = {$student_id}";


$result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

header("Location: http://localhost/PHP/PHP%20Database/CRUD%20Opration/index.php");

$conn->close();
?>