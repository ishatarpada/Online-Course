<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if...elseif...else Statement</title>
</head>

<body>

    <!-- 
        if...elseif...else Statement :- executes different codes for more than two conditions.
        Syntax :- 
            if (condition) {
                //code to be executed if this condition is true;
            } elseif (condition) {
                // code to be executed if first condition is false and this condition is true;
            } else {
                // code to be executed if all conditions are false;
            }
     -->

    <?php

    echo "<h1>&#10022; if...elseif...else Statement</h1>";

    $num1 = 56;
    $num2 = 56;
    $num3 = 50;
    $num4 = 96;
    $num5 = -12;
    $num6 = 0;
    $str1 = "a";
    $str2 = "f";
    $str3 = "$";
    echo "value of first number is &#10170; " . $num1 . "<br>";
    echo "value of second number is &#10170; " . $num2 . "<br>";
    echo "value of third number is &#10170; " . $num3 . "<br>";
    echo "value of fourth number is &#10170; " . $num4 . "<br>";
    echo "value of fifth number is &#10170; " . $num5 . "<br>";
    echo "value of sixth number is &#10170; " . $num6 . "<br>";
    echo "value of first character is &#10170; " . $str1 . "<br>";
    echo "value of second character is &#10170; " . $str2 . "<br>";
    echo "value of third character is &#10170; " . $str3 . "<br>";


    echo "<h3>&#10022; find the max number</h3>";
    echo " number is &#10170; " . $num1 . "<br>";
    echo " number is &#10170; " . $num3 . "<br>";
    echo " number is &#10170; " . $num4 . "<br>";
    if ($num1 > $num3 && $num1 > $num4) {
        echo $num1 . " is max number";
    } elseif ($num3 > $num1 && $num3 > $num4) {
        echo $num3 . " is max number ";
    } else {
        echo $num4 . " is max number ";
    }

    echo "<h3>&#10022; check given numbers positive or negative or zero</h3>";
    echo "number is &#10170; " . $num1 . "<br>";
    if ($num1 > 0) {
        echo $num1 . " is positive number";
    } elseif ($num1 == 0) {
        echo $num1 . " is zero number ";
    } else {
        echo $num1 . " is negative number ";
    }
    echo "<br><br>";

    echo " number is &#10170; " . $num5 . "<br>";
    if ($num5 > 0) {
        echo $num5 . " is positive number";
    } elseif ($num5 == 0) {
        echo $num5 . " is zero number ";
    } else {
        echo $num5 . " is negative number ";
    }
    echo "<br><br>";

    echo " number is &#10170; " . $num6 . "<br>";
    if ($num6 > 0) {
        echo $num6 . " is positive number";
    } elseif ($num6 == 0) {
        echo $num6 . " is zero number ";
    } else {
        echo $num6 . " is negative number ";
    }

    echo "<h3>&#10022; Character Is Vowel or Not or special character</h3>";
    echo "character is &#10170; " . $str1 . "<br>";
    if ($str1 == "a" || $str1 == "e" || $str1 == "i" || $str1 == "o" || $str1 == "u") {
        echo $str1 . " is vowel";
    } elseif ($str1 == "&" || $str1 == "@" || $str1 == "_" || $str1 == "$" || $str1 == "#") {
        echo $str1 . " is special character";
    } else {
        echo $str1 . " is not vowel ";
    }
    echo "<br><br>";

    echo "character is &#10170; " . $str2 . "<br>";
    if ($str2 == "a" || $str2 == "e" || $str2 == "i" || $str2 == "o" || $str2 == "u") {
        echo $str2 . " is vowel";
    } elseif ($str2 == "&" || $str2 == "@" || $str2 == "_" || $str2 == "$" || $str2 == "#") {
        echo $str2 . " is special character";
    } else {
        echo $str2 . " is not vowel ";
    }
    echo "<br><br>";

    echo "character is &#10170; " . $str3 . "<br>";
    if ($str3 == "a" || $str3 == "e" || $str3 == "i" || $str3 == "o" || $str3 == "u") {
        echo $str3 . " is vowel";
    } elseif ($str3 == "&" || $str3 == "@" || $str3 == "_" || $str3 == "$" || $str3 == "#") {
        echo $str3 . " is special character";
    } else {
        echo $str3 . " is not vowel ";
    }
    echo "<br><br>";

    ?>

</body>

</html>