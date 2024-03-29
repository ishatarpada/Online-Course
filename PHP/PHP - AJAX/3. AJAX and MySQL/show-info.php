<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php


    include "config.php";

    $userId = $_POST['user_id'];
    $sql = "SELECT * FROM student_info WHERE studentID = $userId";

    $result = mysqli_query($conn, $sql);

    echo "<table>
            <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone No</th>
            </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['studentID'] . "</td>";
        echo "<td>" . $row['FirstName'] . "</td>";
        echo "<td>" . $row['LastName'] . "</td>";
        echo "<td>" . $row['Email'] . "</td>";
        echo "<td>" . $row['phone_no'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    mysqli_close($conn);

    ?>
</body>

</html>