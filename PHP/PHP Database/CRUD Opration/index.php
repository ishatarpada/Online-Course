<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>


    <div id="main-content" class="container-fluid mx-2">
        <center>
            <h1>All Records</h1>
        </center>
        <?php include 'header.php'; ?>

        <?php

        include 'config.php';

        $sql = "SELECT * FROM Student JOIN student_class WHERE Student.student_class = student_class.cid";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

        if (mysqli_num_rows($result) > 0) {
        ?>

            <center>
                <table cellpadding="7px" border="1px solid black" class="table table-striped">
                    <thead>
                        <th>student ID</th>
                        <th>student Name</th>
                        <th>student Address</th>
                        <th>student Class</th>
                        <th>student Phone</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?php echo $row['sid'] ?></td>
                                <td><?php echo $row['student_name'] ?></td>
                                <td><?php echo $row['student_adress'] ?></td>
                                <td><?php echo $row['class_name'] ?></td>
                                <td><?php echo $row['student_phone'] ?></td>
                                <td class="d-flex justify-content-center align-items-center flex-wrap">
                                    <a href="edit.php?id=<?php echo $row['sid'] ?>" class="text-decoration-none bg-success text-light fw-bolder px-3 py-1 rounded mx-1 my-1 fs-5">Edit</a>
                                    <a href="delete-inline.php?id=<?php echo $row['sid'] ?>" class="text-decoration-none bg-danger text-light fw-bolder px-3 py-1 rounded mx-1 my-1 fs-5">Delete</a>
                                </td>
                            </tr>
                        <?php  } ?>
                    </tbody>
                </table>
            <?php } ?>
            </center>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>