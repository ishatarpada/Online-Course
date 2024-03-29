<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
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

    echo "<h3>&#10022; Array Items </h3>";

    function myFunction()
    {
        echo "Good Morning <br>";
    }
    $myArr = array("volvo",  28, ["apples", "bananas"], myFunction());
    echo $myArr[0] . "<br>";
    echo $myArr[1] . "<br>";
    // echo $myArr[2]. "<br>";
    echo $myArr[3] . "<br>";

    echo "<h3>&#10022; Array Functions </h3>";

    $cars = array("Volvo", "BMW", "Toyota");
    echo count($cars);
    ?>
</body>

</html>