<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_POST</title>
</head>

<body>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['fname']);
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }

    $name = $_POST['fname'];
    echo $name;
    ?>

</body>

</html>