<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
</head>

<body>

    <!-- 
        PHP Constants :- A constant is an identifier (name) for a simple value. The value cannot be changed during the script.

        A valid constant name starts with a letter or underscore (no $ sign before the constant name).

        Note: Unlike variables, constants are automatically global across the entire script.

        const vs. define()
            const are always case-sensitive
            define() has has a case-insensitive option.
            const cannot be created inside another block scope, like inside a function or inside an if statement.
            define can be created inside another block scope.

        Constants are automatically global and can be used across the entire script.

     -->

    <?php

    // create a constants
    echo "<h2>&#10022; Create constant using define() function</h2>";
    define("GREETING", "Welcome to W3Schools.com!");
    echo GREETING;
    // define("str" , "Welcome to PHP" , true);
    // echo str;
    // echo STR;

    // const keyword
    echo "<h2>&#10022; Create constant using const Keyword</h2>";
    const car = "Volvo";
    echo car;

    // constant arrays
    echo "<h2>&#10022; Constant array</h2>";
    define("cars", [
        "BMW",
        "Toyota",
        "Range Rover"
    ]);
    echo cars[0] . " , " . cars[1], " , " . cars[2];

    // Constants are Global
    echo "<h2>&#10022; Constant are Global</h2>";
    function myTest()
    {
        echo GREETING;
    }

    myTest();

    ?>


</body>

</html>