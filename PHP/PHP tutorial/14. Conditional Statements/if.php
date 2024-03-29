<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if Statements</title>
</head>

<body>


    <!-- 
        if Statements :- executes some code if one condition is true

        syntax :- 
        if (condition) {
            // code to be executed if condition is true;
        }
     -->

    <?php

    echo "<h1>&#10022; if Statements</h1>";

    $num1 = 56;
    $num2 = 56;
    $num3 = 50;
    $num4 = 96;

    if ($num1 == $num2) {
        echo "both numbers are equal";
    }
    echo "<br>";

    if (5 > 3) {
        echo "Have a good Day!";
    }
    echo "<br>";

    if ($num1 > $num3) {
        echo $num1 . " is max number";
    }
    echo "<br>";

    if ($num1 > $num3 && $num1 < $num4) {
        echo "56 is greater then 50 and 56 less than 96";
    }
    echo "<br>";

    if ($num1 ==  50 || $num2 == 52 || $num1 ==  54 || $num2 == 56 || $num1 ==  58 || $num2 == 60) {
        echo $num1 . " is between 50 to 60";
    }
    echo "<br>";


    ?>

</body>

</html>