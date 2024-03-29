<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math</title>
</head>

<body>

    <!-- 
        Math :- set of math function that allows you to perform mathematical tasks on numbers.

        1. pi() => return value of PI
        2. min() => return min number in given numbers.
        3. max() => return max number in given numbers.
        4. abs() => return positive value of numbers.
        5. sqrt() => return square root of number.
        6. round() => return rounds a floating-point number to its nearest integer
        7. rand() => return the random numbers
     -->

    <?php

    // pi function
    echo "<h2>&#10022; pi() Function</h2>";
    echo "value of PI is &#10170; " . pi() . "<br>";

    // min() function
    echo "<h2>&#10022; min() Function</h2>";
    $numbers = array(0, 150, 30, 20, -8, -200);
    echo " numbers of array is &#10170; ";
    echo "<pre>";
    print_r($numbers);
    echo "</pre>";
    echo "min number is &#10170; " . min($numbers) . "<br>";

    // min() function
    echo "<h2>&#10022; max() Function</h2>";
    $numbers = array(0, 150, 30, 20, -8, -200);
    echo " numbers of array is &#10170; ";
    echo "<pre>";
    print_r($numbers);
    echo "</pre>";
    echo "max number is &#10170; " . max($numbers) . "<br>";

    // abs() function
    echo "<h2>&#10022; abs() Function</h2>";
    $num = -56.23;
    echo " number is &#10170; " . $num . "<br>";
    echo "abs number is &#10170; " . abs($num) . "<br>";

    // sqrt() function
    echo "<h2>&#10022; sqrt() Function</h2>";
    $num1 =  64;
    echo " number is &#10170; " . $num1 . "<br>";
    echo "sqrt number is &#10170; " . sqrt($num1) . "<br>";

    // round() function
    echo "<h2>&#10022; round() Function</h2>";
    $num2 =  64.256;
    $num3 =  64.756;
    echo " number is &#10170; " . $num2 . "<br>";
    echo " number is &#10170; " . $num3 . "<br>";
    echo "round number is &#10170; " . round($num2) . "<br>";
    echo "round number is &#10170; " . round($num3) . "<br>";

    // rand() function
    echo "<h2>&#10022; rand() Function</h2>";
    echo "rand number is &#10170; " . rand(1, 10) . "<br>";
    echo "rand number is &#10170; " . rand(10, 100) . "<br>";
    echo "rand number is &#10170; " . rand(10, 1000) . "<br>";
    echo "rand number is &#10170; " . rand(1, 1000) . "<br>";


    ?>

</body>

</html>