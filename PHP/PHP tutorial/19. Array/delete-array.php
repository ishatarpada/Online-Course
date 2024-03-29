<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Arrays Items</title>
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

    echo "<h1>&#10022; Delete Arrays Items</h1>";

    echo "<h3>&#10022; Delete Arrays Items in Array using the array_splice()</h3>";

    $fruits = array("Apple", "Banana", "Cherry", "Mango", "Orange", "kiwi", "Watermelon");
    foreach ($fruits as $x => $y) {
        echo "$x : $y <br>";
    }
    echo "<br> <b> &#10170; Now deleting item ... </b> <br>";
    array_splice($fruits, 1, 1);
    foreach ($fruits as $x => $y) {
        echo "$x : $y <br>";
    }

    echo "<h3>&#10022; Delete Arrays Items in Array Using the unset Function</h3>";

    $fruits = array("Apple", "Banana", "Cherry", "Mango", "Orange", "kiwi", "Watermalon");
    foreach ($fruits as $x => $y) {
        echo "$x : $y <br>";
    }
    echo "<br> <b> &#10170; Now deleting item ... </b> <br>";
    unset($fruits[1]);
    foreach ($fruits as $x => $y) {
        echo "$x : $y <br>";
    }

    echo "<h3>&#10022; Delete Multiple Arrays Items in Array using the array_splice()</h3>";

    $fruits = array("Apple", "Banana", "Cherry", "Mango", "Orange", "kiwi", "Watermalon");
    foreach ($fruits as $x => $y) {
        echo "$x : $y <br>";
    }
    echo "<br> <b> &#10170; Now deleting item ... </b> <br>";
    array_splice($fruits, 1, 2);
    foreach ($fruits as $x => $y) {
        echo "$x : $y <br>";
    }

    echo "<h3>&#10022; Delete Multiple Arrays Items in Array Using the unset Function</h3>";

    $fruits = array("Apple", "Banana", "Cherry", "Mango", "Orange", "kiwi", "Watermalon");
    foreach ($fruits as $x => $y) {
        echo "$x : $y <br>";
    }
    echo "<br> <b> &#10170; Now deleting item ... </b> <br>";
    unset($fruits[1], $fruits[2]);
    foreach ($fruits as $x => $y) {
        echo "$x : $y <br>";
    }

    echo "<h3>&#10022; Remove Item From an Associative Array</h3>";

    $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    foreach ($cars as $x => $y) {
        echo "$x : $y <br>";
    }
    echo "<br> <b> &#10170; Now deleting item ... </b> <br>";
    unset($cars["model"]);
    foreach ($cars as $x => $y) {
        echo "$x : $y <br>";
    }

    echo "<h3>&#10022; Remove Item From an Associative Array Using the array_diff Function</h3>";

    $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    foreach ($cars as $x => $y) {
        echo "$x : $y <br>";
    }
    echo "<br> <b> &#10170; Now deleting item ... </b> <br>";
    $newArray = array_diff($cars, ["Mustang", 1964]);
    foreach ($newArray as $x => $y) {
        echo "$x : $y <br>";
    }

    echo "<h3>&#10022; Remove the Last Item</h3>";

    $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    foreach ($cars as $x => $y) {
        echo "$x : $y <br>";
    }
    echo "<br> <b> &#10170; Now deleting item ... </b> <br>";
    array_pop($cars);
    foreach ($cars as $x => $y) {
        echo "$x : $y <br>";
    }

    echo "<h3>&#10022; Remove the First Item</h3>";

    $car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    foreach ($car as $x => $y) {
        echo "$x : $y <br>";
    }
    echo "<br> <b> &#10170; Now deleting item ... </b> <br>";
    array_shift($car);
    foreach ($newArray as $x => $y) {
        echo "$x : $y <br>";
    }
    ?>
</body>

</html>