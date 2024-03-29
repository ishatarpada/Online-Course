<?php
// start the session
session_start();

// check if session exists and redirect to dashboard if already logged in
if (isset($_SESSION['id'])) {
    header("location: dashboard.php");
    exit; // always exit after redirecting to prevent further execution
}

// include database connection file
include 'info.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prepared</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <h1 class="text-success fs-1 fw-bold text-center my-5">User Login</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="container mx-auto my-5 bg-light p-5">
        <div class="mb-3 row">
            <label class="col-sm-2 form-label">Username</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="username">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-5">
                <input type="password" class="form-control" id="inputPassword" name="password">
            </div>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-info text-light" name="login">Login</button>
        </div>
    </form>

    <?php
    // check if the login form is submitted
    if (isset($_POST['login'])) {
        // check if username and password are provided
        if (empty($_POST['username']) || empty($_POST['password'])) {
            echo '<div class="message error">Please fill in all the fields.</div>';
        } else {
            $username = $_POST["username"];
            $password = $_POST["password"];

            // prepare and execute the SQL query using prepared statements
            $sql = $conn->prepare("SELECT * FROM UserInfo WHERE Mail_ID = ? AND Password = ?");
            $sql->bind_param("ss", $username, $password);
            $sql->execute();

            // get the result set
            $result = $sql->get_result();

            // check if any row is returned
            if ($result->num_rows > 0) {
                // fetch the user data
                $row = $result->fetch_assoc();

                // start the session and store user data
                session_start();
                $_SESSION["id"] = $row['id'];
                $_SESSION["First_Name"] = $row['First_Name'];

                // redirect to dashboard
                header("location: dashboard.php");
                exit; // always exit after redirecting
            } else {
                echo '<div class="message error">Email and password do not match.</div>';
            }
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
