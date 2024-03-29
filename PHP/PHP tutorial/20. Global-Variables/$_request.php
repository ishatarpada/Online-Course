<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - $_REQUEST</title>
</head>

<body>
    
    <!-- 
       $_REQUEST
            $_REQUEST is a PHP super global variable which contains submitted form data, and all cookie data.

            In other words, $_REQUEST is an array containing data from $_GET, $_POST, and $_COOKIE.

            You can access this data with the $_REQUEST keyword followed by the name of the form field, or cookie
     -->

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_REQUEST['fname']);
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }

    echo "Study " . $_REQUEST['subject'] . " at " . $_REQUEST['web'];

    ?>
</body>

</html>