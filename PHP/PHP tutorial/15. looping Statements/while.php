<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loop</title>
</head>

<body>
    <!-- 
        While Loop - Loops through a block of code as long as the specified condition is true.
     -->

    <?php

    echo "<h1>&#10022; while Loop</h1>";

    echo "<h3>&#10022; print the 1 to 10 numbers</h3>";
    $i = 1;
    while ($i < 11) {
        echo $i . "<br>";
        $i++;
    }

    echo "<h3>&#10022; print the even numbers</h3>";
    $i = 1;
    while ($i < 21) {
        if ($i % 2 != 0) {
            $i++;
            continue;
        }
        echo $i . "<br>";
        $i++;
    }

    echo "<h3>&#10022; print the odd numbers</h3>";
    $i = 1;
    while ($i < 11) {
        if ($i == 2 || $i == 4 || $i == 6 || $i == 8 || $i == 10) {
            $i++;
            continue;
        }
        echo $i . "<br>";
        $i++;
    }

    echo "<h3>&#10022; print the 1 to 10 numbers</h3>";
    $i = 1;
    while ($i < 21) {
        if ($i == 11) {
            break;
        }
        echo $i . "<br>";
        $i++;
    }

    echo "<h3>&#10022; Armstrong Number</h3>";
    $num1 = 153;
    $num2 = 253;

    function armstrong($num1)
    {

        $numLength = strlen((string)$num1);

        $temp = $num1;
        $sum = 0;

        while ($temp != 0) {
            $digit  = $temp % 10;
            $sum += $digit ** $numLength;
            $temp = (int)($temp / 10);
        }
        if ($sum === $num1) {
            echo $num1 . " is an Armstrong number.";
        } else {
            echo $num1 . " is not an Armstrong number.";
        }
    }

    echo " number is &#10170; " . $num1 . "<br>";
    armstrong($num1);
    echo "<br><br>";

    echo " number is &#10170; " . $num2 . "<br>";
    armstrong($num2);

    echo "<h3>&#10022; Factorial of a Given Number </h3>";
    $num3 = 5;
    $num4 = 10;

    function factorial($num)
    {
        $fact = 1;
        $i = 1;

        while ($i <= $num) {
            $fact *= $i;
            $i++;
        }

        echo "factorial is &#10170; " . $fact;
    }

    echo " number is &#10170; " . $num3 . "<br>";
    factorial($num3);
    echo "<br><br>";

    echo " number is &#10170; " . $num4 . "<br>";
    factorial($num4);
    ?>
</body>

</html>