<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <center class="my-2">
        <h1>All Records</h1>
    </center>
    <?php
    include 'header.php';
    ?>
    <h1 class="fw-bolder text-success container">Update Record</h1>

    <form class="row g-3 container mx-auto bg-light my-5" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="col-12">
            <label class="form-label fw-bold fs-4">ID</label>
            <input type="text" class="form-control" name="studentID">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-dark btn-lg px-3" name="showBtn">Show Button</button>
        </div>
    </form>

    <?php

    if (isset($_POST['showBtn'])) {
        include 'config.php';

        $stu_id = $_POST['studentID'];
        $sql = "SELECT * FROM  Student WHERE sid = {$stu_id}";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {
    ?>

                <form class="row g-3 container mx-auto bg-light my-5" action="update_data.php" method="post">
                    <div class="col">
                        <label for="inputName" class="form-label fw-bold fs-4">Name</label>
                        <input type="hidden" class="form-control" name="studentID" value="<?php echo $row['sid']; ?>">
                        <input type="text" class="form-control" name="studentName" placeholder="First name" aria-label="First name" value="<?php echo $row['student_name']; ?>">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label fw-bold fs-4">Address</label>
                        <input type="text" class="form-control" name="studentAddress" id="inputAddress" placeholder="1234 Main St" value="<?php echo $row['student_adress']; ?>">
                    </div>
                    <div class="col-md-4">
                        <label for="inputClass" class="form-label fw-bold fs-4">Class</label>
                        <?php
                        $sql1 = "SELECT * FROM student_class";
                        $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful");

                        if (mysqli_num_rows($result1) > 0) {
                            echo '<select class="form-select" name = "student_class" >';
                            while ($row1 = mysqli_fetch_assoc($result1)) {
                                if ($row['student_class'] == $row1['cid']) {
                                    $select = "selected";
                                } else {
                                    $select = "";
                                }
                                echo "<option {$select} value='{$row1['cid']}'>{$row1['class_name']}</option>";
                            }
                            echo "</select>";
                        }
                        ?>
                    </div>
                    <div class="col-12">
                        <label for="inputNumber" class="form-label fw-bold fs-4">Phone Number</label>
                        <input type="tel" class="form-control" name="studentNumber" id="inputNumber" value="<?php echo $row['student_phone']; ?>">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-dark btn-lg px-3">UPDATE</button>
                    </div>
                </form>

    <?php

            }
        }
    }
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>