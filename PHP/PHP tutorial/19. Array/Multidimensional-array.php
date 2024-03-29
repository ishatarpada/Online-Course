<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Arrays Items</title>
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

    echo "<h1>&#10022; Multidimensional Arrays</h1>";

    echo "<h3>&#10022; Two-dimensional Arrays</h3>";

    $cars = array(
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
    );

    echo "<h3>&#10022; item print using print_r() method in Two-dimensional Arrays</h3>";

    echo "<pre>"; // Adding <pre> tag for better formatting
    print_r($cars);
    echo "</pre>";

    echo "<h3>&#10022; print Two-dimensional Arrays</h3>";

    echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>";
    echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".<br>";
    echo $cars[2][0] . ": In stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . ".<br>";
    echo $cars[3][0] . ": In stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . ".<br>";

    echo "<h3>&#10022; item print using for loop in Two-dimensional Arrays</h3>";

    for ($i = 0; $i < 4; $i++) {
        echo "<p><b>Row number $i</b></p>";
        echo "<ul>";
        for ($j = 0; $j < 3; $j++) {
            echo "<li>" . $cars[$i][$j] . "</li>";
        }
        echo "</ul>";
    }
    ?>
</body>

</html>