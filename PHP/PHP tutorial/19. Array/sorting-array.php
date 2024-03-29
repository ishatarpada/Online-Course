<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting Arrays Items</title>
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

        PHP - Sort Functions For Arrays
            In this chapter, we will go through the following PHP array sort functions:

                sort() - sort arrays in ascending order
                rsort() - sort arrays in descending order
                asort() - sort associative arrays in ascending order, according to the value
                ksort() - sort associative arrays in ascending order, according to the key
                arsort() - sort associative arrays in descending order, according to the value
                krsort() - sort associative arrays in descending order, according to the key

     -->


    <?php

    echo "<h1>&#10022; PHP Sorting Arrays </h1>";

    echo "<h3>&#10022; sort() - sort arrays in ascending order</h3>";

    echo "<br/><b> &#10170; in  ascending alphabetical order ... </b><br><br>";
    $fruits = array("Apple", "Banana", "Cherry", "Mango", "Orange", "Kiwi", "Watermelon");
    foreach ($fruits as $x => $y) {
        echo "$x : $y <br/>";
    }
    echo "<b> &#10174; Now Sorting items ... </b><br/>";
    sort($fruits);
    foreach ($fruits as $x => $y) {
        echo "$x : $y <br/>";
    }

    echo "<br/><b> &#10170; in  ascending Numeric order ... </b><br><br>";

    $numbers = array(4, 6, 2, 22, 11);
    foreach ($numbers as $x => $y) {
        echo "$x : $y <br/>";
    }
    echo "<b> &#10174; Now Sorting items ... </b><br/>";
    sort($numbers);
    foreach ($numbers as $x => $y) {
        echo "$x : $y <br/>";
    }


    echo "<h3>&#10022; rsort() - sort arrays in descending order</h3>";

    echo "<br/><b> &#10170; in  descending alphabetical order ... </b><br><br>";
    $fruits = array("Apple", "Banana", "Cherry", "Mango", "Orange", "Kiwi", "Watermelon");
    foreach ($fruits as $x => $y) {
        echo "$x : $y <br/>";
    }
    echo "<b> &#10174; Now Sorting items ... </b><br/>";
    rsort($fruits);
    foreach ($fruits as $x => $y) {
        echo "$x : $y <br/>";
    }

    echo "<br/><b> &#10170; in  descending Numeric order ... </b><br><br>";

    $numbers = array(4, 6, 2, 22, 11);
    foreach ($numbers as $x => $y) {
        echo "$x : $y <br/>";
    }
    echo "<b> &#10174; Now Sorting items ... </b><br/>";
    rsort($numbers);
    foreach ($numbers as $x => $y) {
        echo "$x : $y <br/>";
    }

    echo "<h3>&#10022; asort() - sort associative arrays in ascending order, according to the value</h3>";

    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    foreach ($age as $x => $y) {
        echo "$x : $y <br/>";
    }
    echo "<b> &#10174; Now Sorting items ... </b><br/>";
    asort($age);
    foreach ($age as $x => $y) {
        echo "$x : $y <br/>";
    }

    echo "<h3>&#10022; ksort() - sort associative arrays in ascending order, according to the key</h3>";

    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    foreach ($age as $x => $y) {
        echo "$x : $y <br/>";
    }
    echo "<b> &#10174; Now Sorting items ... </b><br/>";
    ksort($age);
    foreach ($age as $x => $y) {
        echo "$x : $y <br/>";
    }

    echo "<h3>&#10022; arsort() - sort associative arrays in descending order, according to the value</h3>";

    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    foreach ($age as $x => $y) {
        echo "$x : $y <br/>";
    }
    echo "<b> &#10174; Now Sorting items ... </b><br/>";
    arsort($age);
    foreach ($age as $x => $y) {
        echo "$x : $y <br/>";
    }

    echo "<h3>&#10022; krsort() - sort associative arrays in descending order, according to the key</h3>";

    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    foreach ($age as $x => $y) {
        echo "$x : $y <br/>";
    }
    echo "<b> &#10174; Now Sorting items ... </b><br/>";
    krsort($age);
    foreach ($age as $x => $y) {
        echo "$x : $y <br/>";
    }

    ?>
</body>

</html>