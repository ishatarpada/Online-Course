<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Arrays</title>
</head>

<body>
    <!-- 
        Array:- stored multiple values in single variable.
                An array is a special variable that can hold many values under a single name, and you can access the values by referring to an index number or name.

        PHP Array Types
        In PHP, there are three types of arrays:

            Indexed arrays - Arrays with a numeric index
            Associative arrays - Arrays with named keys
            Multidimensional arrays - Arrays containing one or more arrays

        Working With Arrays
            Create Arrays
            Access Arrays
            Update Arrays
            Add Array Items
            Remove Array Items
            Sort Arrays

     -->


    <?php

    echo "<h1>&#10022; Array</h1>";

    echo "<h3>&#10022; Access Array Item </h3>";

    $cars = array("Volvo", "BMW", "Toyota");
    echo "second item is &#10170; " . $cars[1];

    echo "<h3>&#10022;  Access Associative Array Item </h3>";

    $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    echo "model of the car is &#10170; " . $cars["model"] . "<br>";
    echo "brand of the car is &#10170; " . $cars['brand'];

    echo "<h3>&#10022; Execute a Function Item  </h3>";
    function age()
    {
        echo "age is 21 <br>";
    }

    $info = ["isha", "Patel", age()];

    function myFunction()
    {
        echo "I come from a function!";
    }

    $myArr = array("car" => "Volvo", "age" => 15, "message" => myFunction());

    echo "<h3>&#10022; Loop Through an Associative Array</h3>";
    $car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);

    foreach ($car as $x => $y) {
        echo "$x: $y <br>";
    }

    echo "<h3>&#10022; Loop Through an Indexed Array
    </h3>";
    $cars = array("Volvo", "BMW", "Toyota");
    foreach ($cars as $x) {
        echo "$x <br>";
    }

    ?>
</body>

</html>