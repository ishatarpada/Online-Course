<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Operators</title>
</head>

<body>

    <!-- 
        Operators are used to perform operations on variables and values.

        Arithmetic Operator :- used with numeric values to perform common arithmetical operations, such as addition, subtraction, multiplication etc.

        Arithmetic operators :-
            1. Addition
            2. Substraction
            3. Multiplication
            4. Division
            5. Modulus
            6. Exponentiation
     -->


    <?php

    echo "<h1>&#10022; Arithmetic Operator</h1>";
    $num1 = 45;
    $num2 = 25;
    echo "value of first number is &#10170; " . $num1 . "<br>";
    echo "value of second number is &#10170; " . $num2 . "<br>";

    // addition
    echo "<h3>&#10022; Addition </h3>";
    $add = $num1 + $num2;
    echo "addition of two numbers is &#10170; " . $add;

    // Substraction
    echo "<h3>&#10022; Substraction </h3>";
    $sub = $num1 - $num2;
    echo "Substraction of two numbers is &#10170; " . $sub;

    // Multiplication
    echo "<h3>&#10022; Multiplication </h3>";
    $mul = $num1 * $num2;
    echo "Multiplication of two numbers is &#10170; " . $mul;

    // Division
    echo "<h3>&#10022; Division </h3>";
    $div = $num1 / $num2;
    echo "Division of two numbers is &#10170; " . $div;

    // Modulus
    echo "<h3>&#10022; Modulus </h3>";
    $mod = $num1 % $num2;
    echo "Modulus of two numbers is &#10170; " . $mod;

    // Exponentiation
    echo "<h3>&#10022; Exponentiation </h3>";
    $exp = $num1 ** $num2;
    echo "Exponentiation of two numbers is &#10170; " . $exp;


    ?>

</body>

</html>