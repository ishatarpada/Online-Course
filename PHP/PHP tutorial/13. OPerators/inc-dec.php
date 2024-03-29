<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Increment / Decrement Operators</title>
</head>

<body>

    <!--
        Increment / Decrement Operators :-increment operators are used to increment a variable's value.

        decrement operators are used to decrement a variable's value
      -->

    <?php

    $num = 5;

    // Pre-increment
    echo "<h3>&#10022; Pre-increment</h3>";
    echo "Pre-increment of numbers is &#10170; " . $num++;

    // post-increment
    echo "<h3>&#10022; post-increment</h3>";
    echo "post-increment of numbers is &#10170; " . ++$num;


    // pre-decrement
    echo "<h3>&#10022; Pre-decrement</h3>";
    echo "Pre-decrement of numbers is &#10170; " . $num--;


    // post-decrement
    echo "<h3>&#10022; post-decrement</h3>";
    echo "post-decrement of numbers is &#10170; " . --$num;


    ?>

</body>

</html>