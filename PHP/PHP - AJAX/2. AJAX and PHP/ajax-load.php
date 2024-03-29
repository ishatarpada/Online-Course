<?php
include "config.php";

$sql = "SELECT * FROM student_info";
$result = mysqli_query($conn, $sql) or die("SQL query failed");

if (mysqli_num_rows($result) > 0) {
    echo '<table class="table table-dark table-striped my-5 container">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>phone no</th>
        </tr>';

    while ($row = mysqli_fetch_assoc($result)) {
        $output = "<tr><td>{$row['studentID']}</td><td>{$row['FirstName']} {$row['LastName']}</td><td>{$row['Email']}</td><td>{$row['phone_no']}</td></tr>";
        echo $output;
    }

    echo "</table>";
    mysqli_close($conn);
} else {
    echo "<h2>No Record Found</h2>";
}
