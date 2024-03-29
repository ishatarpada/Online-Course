<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical Operators</title>
</head>

<body>
    <!-- 
        Logical Operators :- used to combine conditional statements.
     -->

    <?php

    echo "<h1>&#10022; Logical Operator</h1>";
    $num1 = 45;
    $num2 = 25;
    $num3 = 5;
    echo "value of first number is &#10170; " . $num1 . "<br>";
    echo "value of second number is &#10170; " . $num2 . "<br>";
    echo "value of Third number is &#10170; " . $num3 . "<br>";

    // and
    echo "<h3>&#10022; And</h3>";
    if ($num1 > $num2 and $num1 > $num3) {
        echo $num1 . " is max number.<br>";
    }
    if ($num3 < $num2 && $num3 < $num1) {
        echo $num3 . " is min number.";
    }

    // or
    echo "<h3>&#10022; Or</h3>";
    if ($num1 > $num2 or $num1 > $num3) {
        echo $num1 . " is max number.<br>";
    }
    if ($num3 < $num2 || $num3 < $num1) {
        echo $num3 . " is min number.";
    }

    // xor
    echo "<h3>&#10022; Or</h3>";
    if ($num1 > $num2 xor $num1 < $num3) {
        echo $num1 . " is max number.<br>";
    }

    // not
    echo "<h3>&#10022; Not</h3>";
    if (!($num1 < $num2)) {
        echo $num1 . " is max number.<br>";
    }

    ?>

</body>

</html>