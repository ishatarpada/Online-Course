<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment Operators</title>
</head>

<body>

    <!-- 
        Operators are used to perform operations on variables and values.

        Assignment Operator :- used with numeric values to write a value to a variable.

        Assignment operators :-
            1. =
            2. +=
            3. -=
            4. *=
            5. /=
            6. %=
     -->


    <?php

    echo "<h1>&#10022; Assignment Operator</h1>";
    $num1 = 45;
    $num2 = 25;
    echo "value of first number is &#10170; " . $num1 . "<br>";
    echo "value of second number is &#10170; " . $num2 . "<br>";

    // addition
    echo "<h3>&#10022; Addition(+ =) </h3>";
    $num1 += $num2;
    echo "addition of two numbers is &#10170; " . $num1;

    // Substraction
    echo "<h3>&#10022; Substraction(- =) </h3>";
    $num1 -= $num2;
    echo "Substraction of two numbers is &#10170; " . $num1;

    // Multiplication
    echo "<h3>&#10022; Multiplication(* =) </h3>";
    $num1 *= $num2;
    echo "Multiplication of two numbers is &#10170; " . $num1;

    // Division
    echo "<h3>&#10022; Division(/ =) </h3>";
    $num1 /= $num2;
    echo "Division of two numbers is &#10170; " . $num1;

    // Modulus
    echo "<h3>&#10022; Modulus(% =) </h3>";
    $num1 %=  $num2;
    echo "Modulus of two numbers is &#10170; " . $num1;

    ?>

</body>

</html>