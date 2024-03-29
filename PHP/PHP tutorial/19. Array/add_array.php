<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Arrays Items</title>
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

    echo "<h1>&#10022; Add Arrays Items</h1>";

    echo "<h3>&#10022; Add Arrays Items in Array</h3>";

    $fruits = array("Apple", "Banana", "Cherry");
    foreach ($fruits as $x) {
        echo "$x <br>";
    }
    echo "<br> <b> &#10170; Now adding item ... </b> <br>";
    $fruits = ["Orange"];
    foreach ($fruits as $x) {
        echo "$x <br>";
    }

    echo "<h3>&#10022; Add Arrays Items in Associative Array</h3>";

    $cars = array("brand" => "Ford", "model" => "Mustang");
    foreach ($cars as $x => $y) {
        echo "$x : $y <br>";
    }
    echo "<br> <b> &#10170; Now adding item ... </b> <br>";
    $cars["color"] = "Red";
    foreach ($cars as $x => $y) {
        echo "$x : $y <br>";
    }

    echo "<h3>&#10022;  Add Multiple Array Items in  Array</h3>";

    $fruits = array("Apple", "Banana", "Cherry");
    foreach ($fruits as $x => $y) {
        echo "$x : $y <br>";
    }
    echo "<br> <b> &#10170; Now adding item ... </b> <br>";
    array_push($fruits, "Orange", "Kiwi", "Lemon");
    foreach ($fruits as $x => $y) {
        echo "$x : $y <br>";
    }

    echo "<h3>&#10022;  Add Multiple Array Items in Associative  Array</h3>";

    $cars = array("brand" => "Ford", "model" => "Mustang");
    foreach ($cars as $x => $y) {
        echo "$x : $y <br>";
    }
    echo "<br> <b> &#10170; Now adding item ... </b> <br>";
    $cars += ["color" => "red", "year" => 1964];
    foreach ($cars as $x => $y) {
        echo "$x : $y <br>";
    }
    ?>
</body>

</html>