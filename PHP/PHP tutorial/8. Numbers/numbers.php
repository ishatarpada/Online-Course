<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers</title>
</head>

<body>


    <!-- 
        Numbers :- There are three numeric types .
                    1. Integer : this type of numbers is without decimal point.
                    2. Float : this type of numbers is with decimal point.
                    3. Number Strings : variable is numeric

        In addition, PHP has two more data types used for numbers.
        1. Infinity : number is largest than PHP_FLOAT_MAX then that number is infinite number.
        2. NaN : is used for impossible mathematical operations.

        PHP Casting Strings and Floats to Integers : The (int), (integer), and intval() functions are often used to convert a value to an integer.

     -->



    <?php

    echo "<h2>&#10022; Numbers</h2>";

    // variables
    $a = 52;
    $b = 52.145;
    $c = "561411";

    // get the datatype
    echo var_dump($a) . "<br>";
    echo var_dump($b) . "<br>";
    echo var_dump($c) . "<br><br>";

    // integer 
    $num = 125676;
    echo "<h3>&#10170; Integer</h3>";
    echo  "the number is &#10170; " . $num . "<br>";

    echo "data type is &#10170; ";
    echo var_dump($num) . "<br>";

    echo "is integer ? &#10170; ";
    // echo is_int($num) . "<br>";
    echo var_dump(is_int($num)) . "<br>";

    echo "is integer ? &#10170; ";
    // echo is_integer($num) . "<br>";
    echo var_dump(is_integer($num)) . "<br>";

    echo "is integer ? &#10170; ";
    // echo is_int($num) . "<br>";
    echo var_dump(is_int($num)) . "<br>";

    echo "is integer ? &#10170; ";
    // echo is_long($num) . "<br>";
    echo var_dump(is_long(56.2568)) . "<br>";

    // largest Integer number
    echo "largest Integer numbers is &#10170; " .PHP_INT_MAX . "<br>";

    // smallest Integer number
    echo "smallest Integer numbers is &#10170; " .PHP_INT_MIN . "<br>";

    // size of the integer
    echo "size of the integer &#10170; " .PHP_INT_SIZE. "<br>";

    // floats 
    $num1 = 56.235;
    echo "<h3>&#10170; Float</h3>";
    echo  "the number is &#10170; " . $num1 . "<br>";

    echo "data type is &#10170; ";
    echo var_dump($num1) . "<br>";

    echo "is float ? &#10170; ";
    // echo is_float($num1) . "<br>";
    echo var_dump(is_float(56.2568)) . "<br>";

    echo "is float ? &#10170; ";
    // echo is_double($num1) . "<br>";
    echo var_dump(is_double(56.2568)) . "<br>";

    echo "is float ? &#10170; ";
    // echo is_float($num1) . "<br>";
    echo var_dump(is_float($num)) . "<br>";

    // largest float number
    echo "largest float numbers is &#10170; " . PHP_FLOAT_MAX . "<br>";

    // smallest float number
    echo "smallest float numbers is &#10170; " . PHP_FLOAT_MIN . "<br>";

    //  number of decimal digits that can be rounded into a float and back without precision loss
    echo "decimal digits that can be rounded into a float  is &#10170; " . PHP_FLOAT_DIG . "<br>";

    // smallest positive float numbers
    echo "smallest positive float numbers is &#10170; " . PHP_FLOAT_EPSILON . "<br>";


    // Infinity
    echo "<h3>&#10170; Infinity</h3>";

    $num2 = 56.2e35;
    $num3 = 1.7976931348623E+309;
    echo  "the finite number is &#10170; " . $num2 . "<br>";
    echo  "the infinite number is &#10170; " . $num3 . "<br>";

    echo "finite number data type is &#10170; ";
    echo var_dump($num2) . "<br>";
    echo "infinite number data type is &#10170; ";
    echo var_dump($num3) . "<br>";

    echo "is finite ? &#10170; ";
    // echo is_finite($num2) . "<br>";
    echo var_dump(is_finite($num2)) . "<br>";
    echo "is finite ? &#10170; ";
    // echo is_finite($num3) . "<br>";
    echo var_dump(is_finite($num3)) . "<br>";

    echo "is infinite ? &#10170; ";
    // echo is_infinite($num2) . "<br>";
    echo var_dump(is_infinite($num2)) . "<br>";
    echo "is infinite ? &#10170; ";
    // echo is_infinite($num3) . "<br>";
    echo var_dump(is_infinite($num3)) . "<br>";

    // NaN : Not a Number
    echo "<h3>&#10170; NaN</h3>";

    $num4 = acos(8);
    $num5 = asin(56);
    echo  "the NaN number is &#10170; " . $num4 . "<br>";
    echo  "the NaN number is &#10170; " . $num5 . "<br>";

    echo "NaN number data type is &#10170; ";
    echo var_dump($num4) . "<br>";
    echo "NaN number data type is &#10170; ";
    echo var_dump($num5) . "<br>";

    echo "is NaN ? &#10170; ";
    // echo is_nan($num4) . "<br>";
    echo var_dump(is_nan($num4)) . "<br>";
    echo "is NaN ? &#10170; ";
    // echo is_nan($num5) . "<br>";
    echo var_dump(is_nan($num5)) . "<br>";

    echo "is NaN ? &#10170; ";
    // echo is_nan($num4) . "<br>";
    echo var_dump(is_nan($num4)) . "<br>";
    echo "is NaN ? &#10170; ";
    // echo is_nan($num5) . "<br>";
    echo var_dump(is_nan($num5)) . "<br><br>";

    // Numeric String
    echo "<h3>&#10170; Numeric String</h3>";

    $str = 5985;
    $str1 = "5985";
    $str2 = "59.580" + 5201;
    $str3 = "ISHA";

    echo "value is " .$str. "<br>";
    echo "is Numeric ? ";
    echo var_dump(is_numeric($str)). "<br>";
    echo "value is " .$str1. "<br>";
    echo "is Numeric ? ";
    echo var_dump(is_numeric($str1)). "<br>";
    echo "value is " .$str2. "<br>";
    echo "is Numeric ? ";
    echo var_dump(is_numeric($str2)). "<br>";
    echo "value is " .$str3. "<br>";
    echo "is Numeric ? ";
    echo var_dump(is_numeric($str3)). "<br>";


    //Casting Strings and Floats to Integers
    echo "<h3>&#10170; Casting Strings and Floats to Integers</h3>";

    $x = 23465.768;
    echo "value is " .$x. "<br>";
    echo " data type is &#10170; ";
    echo var_dump($x). "<br>";
    echo "casting float to integer &#10170; ";
    echo (int)$x. "<br>";
    echo " data type is &#10170; ";
    echo var_dump((int)$x). "<br>";

    $y = "23456.21";
    echo "value is " .$y. "<br>";
    echo " data type is &#10170; ";
    echo var_dump($y). "<br>";
    echo "casting string to integer &#10170; ";
    echo (int)$y. "<br>";
    echo " data type is &#10170; ";
    echo var_dump((int)$y). "<br>";
    ?>


</body>

</html>