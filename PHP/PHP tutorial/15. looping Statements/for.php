<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For loop</title>
</head>

<body>
    <!-- 
        For Loop :-  is used when you know how many times the script should run.
     -->


    <?php

    echo "<h1>&#10022; for Loop</h1>";

    echo "<h3>&#10022; print the 1 to 10 numbers</h3>";
    for ($i = 0; $i < 10; $i++) {
        echo $i . "<br>";
    }

    echo "<h3>&#10022; break Statement</h3>";
    for ($x = 0; $x <= 10; $x++) {
        if ($x == 3) break;
        echo "The number is: $x <br>";
    }

    echo "<h3>&#10022; continue Statement</h3>";
    for ($x = 0; $x <= 10; $x++) {
        if ($x == 3) continue;
        echo "The number is: $x <br>";
    }

    echo "<h3>&#10022; print the 1 to 100 numbers</h3>";
    for ($x = 0; $x <= 100; $x += 10) {
        echo "The number is: $x <br>";
    }
    ?>
</body>

</html>