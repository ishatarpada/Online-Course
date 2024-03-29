<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indexed Arrays</title>
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

    echo "<h3>&#10022; PHP Indexed Arrays </h3>";

    $cars = array("Volvo", "BMW", "Toyota");
    var_dump($cars);

    echo "<h3>&#10022; Access Indexed Arrays </h3>";

    echo "array item is on index number 0 &#10170 " . $cars[0] . "<br>";
    echo "array item is on index number 1 &#10170 " . $cars[1] . "<br>";
    echo "array item is on index number 2 &#10170 " . $cars[2] . "<br>";

    echo "<h3>&#10022; Change Value </h3>";
    $cars[1] = "Ford";
    var_dump($cars);

    echo "<h3>&#10022; Loop Through an Indexed Array </h3>";
    foreach ($cars as $x) {
        echo "$x <br>";
    }

    echo "<h3>&#10022; Index Number </h3>";
    $cars[0] = "Volvo";
    $cars[1] = "BMW";
    $cars[2] = "Toyota";
    array_push($cars, "Audi");
    foreach ($cars as $x) {
        echo "$x <br>";
    }
    echo "<br>";

    $cars[5] = "Volvo";
    $cars[7] = "BMW";
    $cars[14] = "Toyota";
    array_push($cars, "Audi");
    foreach ($cars as $x) {
        echo "$x <br>";
    }

    ?>
</body>

</html>