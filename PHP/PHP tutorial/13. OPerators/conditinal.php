<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Assignment Operators</title>
</head>

<body>

    <?php
    echo "<h1>&#10022; Conditional Assignment Operators</h1>";

    echo "<h3>&#10022; Ternary </h3>";
    // if empty($user) = TRUE, set $status = "anonymous"
    echo $status = (empty($user)) ? "anonymous" : "logged in";
    echo ("<br>");

    $user = "John Doe";
    // if empty($user) = FALSE, set $status = "logged in"
    echo $status = (empty($user)) ? "anonymous" : "logged in";
    echo ("<br>");


    echo (5 > 2 ) ? " 5 is max number " : " 2 is max number ";

    echo "<h3>&#10022; Null coalescing </h3>";
    // variable $user is the value of $_GET['user']
    // and 'anonymous' if it does not exist
    echo $user = $_GET["user"] ?? "anonymous";
    echo ("<br>");

    // variable $color is "red" if $color does not exist or is null
    echo $color = $color ?? "red";
    echo ("<br>");

    $num = 5;
    echo $num = $num ?? "anonymous";

    ?>


</body>

</html>