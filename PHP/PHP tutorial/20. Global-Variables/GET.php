<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_GET
    </title>
</head>

<body>
    Welcome <?php echo $_GET["name"]; ?><br>
    Your email address is: <?php echo $_GET["email"]; ?>

    <?php
    echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
    ?>
</body>

</html>