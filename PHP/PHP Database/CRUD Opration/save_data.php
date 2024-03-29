<?php


include 'config.php';
// $student_id = $_POST['studentID'];
$studentName = $_POST['studentName'];
$studentAddress = $_POST['studentAddress'];
$studentClass = $_POST['studentClass'];
$studentNumber = $_POST['studentNumber'];


$sql = "INSERT INTO Student(student_name , student_adress , student_class , student_phone) VALUES('{$studentName}' , '{$studentAddress}' ,  '{$studentClass}' ,  '{$studentNumber}'  )";

$result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

header("Location: http://localhost/PHP/PHP%20Database/CRUD%20Opration/index.php");

$conn->close();
?>