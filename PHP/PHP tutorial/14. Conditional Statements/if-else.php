<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if...else Statements</title>
</head>

<body>

    <!-- 
        if...else Statements :- executes some code if a condition is true and another code if that condition is false.

        Syntax :- 
            if (condition) {
                // code to be executed if condition is true;
            } else {
                // code to be executed if condition is false;
            }
     -->

    <?php

    echo "<h1>&#10022; if...else Statements</h1>";

    $num1 = 56;
    $num2 = 56;
    $num3 = 50;
    $num4 = 96;
    $num5 = -12;
    $num6 = 0;
    $str1 = "a";
    $str2 = "f";
    echo "value of first number is &#10170; " . $num1 . "<br>";
    echo "value of second number is &#10170; " . $num2 . "<br>";
    echo "value of third number is &#10170; " . $num3 . "<br>";
    echo "value of fourth number is &#10170; " . $num4 . "<br>";
    echo "value of fifth number is &#10170; " . $num5 . "<br>";
    echo "value of sixth number is &#10170; " . $num6 . "<br>";
    echo "value of first character is &#10170; " . $str1 . "<br>";
    echo "value of second character is &#10170; " . $str2 . "<br>";

    echo "<h3>&#10022; check given numbers min or max</h3>";
    echo " first number is &#10170; " . $num1 . "<br>";
    echo " second number is &#10170; " . $num3 . "<br>";
    if ($num1 > $num3) {
        echo $num1 . " is max number";
    } else {
        echo $num3 . " is max number ";
    }

    echo "<h3>&#10022; check given numbers positive or negative</h3>";
    echo "number is &#10170; " . $num1 . "<br>";
    if ($num1 > 0) {
        echo $num1 . " is positive number";
    } else {
        echo $num1 . " is negative number ";
    }
    echo "<br><br>";

    echo " number is &#10170; " . $num5 . "<br>";
    if ($num5 > 0) {
        echo $num5 . " is positive number";
    } else {
        echo $num5 . " is negative number ";
    }

    echo "<h3>&#10022;  Character Is Vowel or Not</h3>";
    echo "character is &#10170; " . $str1 . "<br>";
    if ($str1 == "a" || $str1 == "e" || $str1 == "i" || $str1 == "o" || $str1 == "u") {
        echo $str1 . " is vowel";
    } else {
        echo $str1 . " is not vowel ";
    }
    echo "<br><br>";

    echo " character is &#10170; " . $str2 . "<br>";
    if ($str2 == "a" || $str2 == "e" || $str2 == "i" || $str2 == "o" || $str2 == "u") {
        echo $str2 . " is vowel";
    } else {
        echo $str2 . " is not vowel ";
    }

    ?>

</body>

</html>