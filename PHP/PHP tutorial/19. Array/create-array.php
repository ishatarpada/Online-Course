<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Arrays</title>
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

    echo "<h3>&#10022; Create Array using array()</h3>";

    $cars = array("Volvo", "BMW", "Toyota");
    foreach ($cars as $x) {
        echo "$x <br>";
    }

    echo "<h3>&#10022;  Create Array using [] brackets </h3>";

    $cars = array("Volvo", "BMW", "Toyota");
    foreach ($cars as $x) {
        echo "$x <br>";
    }

    echo "<h3>&#10022; Create Array using  Multiple lines  </h3>";
    $cars = [
        "Volvo",
        "BMW",
        "Toyota"
    ];
    foreach ($cars as $x) {
        echo "$x <br>";
    }

    echo "<h3>&#10022; Create Array using Trailing comma </h3>";
    $cars = [
        "Volvo",
        "BMW",
        "Toyota",
    ];
    foreach ($cars as $x) {
        echo "$x <br>";
    }

    echo "<h3>&#10022; Create Array with array keys </h3>";
    $cars = [
        0 => "Volvo",
        1 => "BMW",
        2 => "Toyota"
    ];
    foreach ($cars as $x => $y) {
        echo "$x: $y <br>";
    }
    echo "<br>";
    $myCar = [
        "brand" => "Ford",
        "model" => "Mustang",
        "year" => 1964
    ];
    foreach ($myCar as $x => $y) {
        echo "$x: $y <br>";
    }

    echo "<h3>&#10022; Declare Empty Array </h3>";
    $cars = [];
    $cars[0] = "Volvo";
    $cars[1] = "BMW";
    $cars[2] = "Toyota";
    foreach ($cars as $x => $y) {
        echo "$x: $y <br>";
    }

    echo "<h3>&#10022; Mixing Array Keys </h3>";
    $myArr = [];
    $myArr[0] = "apples";
    $myArr[1] = "bananas";
    $myArr["fruit"] = "cherries";
    foreach ($myArr as $x => $y) {
        echo "$x: $y <br>";
    }
    ?>
</body>

</html>