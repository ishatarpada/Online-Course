<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Operators</title>
</head>

<body>

    <!-- 
        Operators are used to perform operations on variables and values.

        Comparison Operator :- used to compare two values 

        Comparison operators :-
            1. Equal
            2. Identical
            3. Not equal
            4. Not identical
            5. Greater than
            6. Less than
            7. Greater than or equal to
            8. Less than or equal to
            9. Spaceship
     -->


    <?php

    echo "<h1>&#10022; Comparison Operator</h1>";
    $num1 = 45;
    $num2 = 25;
    $num3 = 45;
    $num4 = "25";
    echo "value of first number is &#10170; " . $num1 . "<br>";
    echo "value of second number is &#10170; " . $num2 . "<br>";
    echo "value of third number is &#10170; " . $num3 . "<br>";
    echo "value of fourth number is &#10170; " . $num4 . "<br>";

    // Equal to
    echo "<h3>&#10022; Equal to (==)</h3>";
    echo "first and second numbers is equal to ? &#10170; ";
    echo var_dump($num1 == $num2) . "<br>";
    echo "first and third numbers is equal to ? &#10170; ";
    echo var_dump($num1 == $num3) . "<br>";
    echo "second and fourth numbers is equal to ? &#10170; ";
    echo var_dump($num2 == $num4) . "<br>";

    // Identical
    echo "<h3>&#10022; Identical (===) </h3>";
    echo "first and third numbers are equal to and same data type ? &#10170; ";
    echo  var_dump($num1 === $num3) . "<br>";
    echo "second and fourth numbers are equal to and same data type ? &#10170; ";
    echo var_dump($num2 === $num4) . "<br>";

    // Not Equal to
    echo "<h3>&#10022; Not equal (!= , <>) </h3>";
    echo "first and second numbers is equal to ? &#10170; ";
    echo var_dump($num1 != $num2) . "<br>";
    echo "first and third numbers is equal to ? &#10170; ";
    echo var_dump($num1 <> $num3) . "<br>";
    echo "second and fourth numbers is equal to ? &#10170; ";
    echo var_dump($num2 != $num4) . "<br>";

    // Not identical
    echo "<h3>&#10022; Not identical(!==) </h3>";
    echo "first and third numbers are equal to and same data type ? &#10170; ";
    echo  var_dump($num1 !== $num3) . "<br>";
    echo "second and fourth numbers are equal to and same data type ? &#10170; ";
    echo var_dump($num2 !== $num4) . "<br>";

    // Greater than
    echo "<h3>&#10022; Greater than (>) </h3>";
    echo "first number greater than second number ? &#10170;";
    echo var_dump($num1 > $num2) . "<br>";
    echo "first number greater than third number ? &#10170;";
    echo var_dump($num1 > $num3) . "<br>";

    // Greater than or equal to
    echo "<h3>&#10022; Greater than or equal to (>=) </h3>";
    echo "first number greater than  or equal to second number ? &#10170;";
    echo var_dump($num1 >= $num2) . "<br>";
    echo "first number greater than  or equal to third number ? &#10170;";
    echo var_dump($num1 >= $num3) . "<br>";

    // less than
    echo "<h3>&#10022; less than (>) </h3>";
    echo "first number less than second number ? &#10170;";
    echo var_dump($num1 < $num2) . "<br>";
    echo "first number less than third number ? &#10170;";
    echo var_dump($num1 < $num3) . "<br>";

    // less than or equal to
    echo "<h3>&#10022; less than or equal to (>=) </h3>";
    echo "first number less than  or equal to second number ? &#10170;";
    echo var_dump($num1 <= $num2) . "<br>";
    echo "first number less than  or equal to third number ? &#10170;";
    echo var_dump($num1 <= $num3) . "<br>";

    echo "<h3>&#10022; Spaceship (<=>) </h3>";

    $x = 5;
    $y = 10;
    echo ($x <=> $y). "<br>"; // returns -1 because $x is less than $y
    echo "<br>";

    $x = 10;
    $y = 10;
    echo ($x <=> $y). "<br>"; // returns 0 because values are equal
    echo "<br>";

    $x = 15;
    $y = 10;
    echo ($x <=> $y). "<br>"; // returns +1 because $x is greater than $y


    ?>

</body>

</html>