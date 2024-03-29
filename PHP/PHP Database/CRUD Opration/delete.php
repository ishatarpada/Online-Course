<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <center class="my-2">
        <h1>All Records</h1>
    </center>
    <?php
    include 'header.php';

    if (isset($_POST['deleteBtn'])) {

        include 'config.php';

        $stu_id = $_POST['studentID'];
        $sql = "DELETE FROM Student WHERE sid = {$stu_id}";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

        header("Location: http://localhost/PHP/PHP%20Database/CRUD%20Opration/index.php");

        $conn->close();
    }
    ?>

    <h1 class="fw-bolder text-danger container my-5">Delete Record</h1>

    <form class="row g-3 container mx-auto bg-light my-5" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="col-12">
            <label class="form-label fw-bold fs-4">ID</label>
            <input type="text" class="form-control" name="studentID">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-dark btn-lg px-3" name="deleteBtn">Delete</button>
        </div>
    </form>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>