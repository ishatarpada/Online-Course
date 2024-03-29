<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <center class="my-2">
        <h1>All Records</h1>
    </center>
    <?php
    include 'header.php';
    ?>
    <form class="row g-3 container mx-auto bg-light my-5" action="save_data.php" method="post">
        <h1 class="fw-bold text-primary fs-1">Add New Record</h1>
        <div class="col">
            <label for="inputName" class="form-label fw-bold fs-4">Name</label>
            <input type="text" class="form-control" name="studentName" placeholder="First name" aria-label="First name">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label fw-bold fs-4">Address</label>
            <input type="text" class="form-control" name="studentAddress" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="col-md-4">
            <label for="inputClass" class="form-label fw-bold fs-4">Class</label>
            <select id="inputClass" class="form-select" name="studentClass">
                <option selected>Choose...</option>

                <?php

                include 'config.php';

                $sql = "SELECT * FROM  student_class";
                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

                while ($row = mysqli_fetch_assoc($result)) {

                ?>
                    <option value="<?php echo $row['cid'] ?>"><?php echo $row['class_name'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="col-12">
            <label for="inputNumber" class="form-label fw-bold fs-4">Phone Number</label>
            <input type="tel" class="form-control" name="studentNumber" id="inputNumber">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-dark btn-lg px-3">Save</button>
        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>