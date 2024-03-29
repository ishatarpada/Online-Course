<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
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

    $car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    var_dump($car);

    echo "<h3>&#10022; Access Associative Arrays </h3>";

    $car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    echo "brand is &#10170; " . $car["brand"] . "<br>";
    echo "Model is &#10170; " . $car["model"] . "<br>";
    echo "year is &#10170; " . $car["year"] . "<br>";

    echo "<h3>&#10022; Change Value </h3>";
    $car["year"] = 2024;
    var_dump($car);

    echo "<h3>&#10022; Loop Through an Indexed Array </h3>";
    foreach ($car as $x => $y) {
        echo "$x: $y <br>";
      }

    ?>
</body>

</html>