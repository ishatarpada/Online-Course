<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update Arrays</title>
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

    echo "<h3>&#10022; Update Array Item</h3>";

    $cars = array("Volvo", "BMW", "Toyota");
    foreach ($cars as $x) {
        echo "$x <br>";
    }
    echo "<br> <b> &#10170; now updated array is ...</b> <br><br>";
    $cars[1] = "ford";
    foreach ($cars as $x) {
        echo "$x <br>";
    }

    echo "<h3>&#10022; Update Associative Array Item</h3>";

    $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    foreach ($cars as $x => $y) {
        echo "$x : $y <br>";
    }
    echo "<br> <b> &#10170; now updated array is ...</b> <br><br>";
    $cars["year"] = 2024;
    foreach ($cars as $x => $y) {
        echo "$x : $y <br>";
    }


    echo "<h3>&#10022; Update Array Items in a Foreach Loop </h3>";
    $car = [
        "Volvo",
        "BMW",
        "Toyota"
    ];
    foreach ($car as $x => $y) {
        echo "$x : $y <br>";
    }
    echo "<br> <b> &#10170; now updated array is ...</b> <br><br>";
    foreach ($car as &$x) {
        $x = "Ford";
    }
    unset($x);
    foreach ($car as $x => $y) {
        echo "$x : $y <br>";
    }
    echo "<br><br>";


    $cars = array("Volvo", "BMW", "Toyota");
    foreach ($cars as $x => $y) {
        echo "$x : $y <br>";
    }
    echo "<br> <b> &#10170; now updated array is ...</b> <br><br>";
    foreach ($cars as &$x) {
        $x = "Ford";
    }

    $x = "ice cream";

    foreach ($cars as $x => $y) {
        echo "$x : $y <br>";
    }

    ?>
</body>

</html>