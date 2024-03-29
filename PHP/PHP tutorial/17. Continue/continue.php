<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>continue</title>
</head>

<body>
    <!-- 
        The continue statement can be used to jump out of different kind of loops.
     -->

    <?php

    echo "<h1>&#10022; continue</h1>";

    echo "<h3>&#10022; continue in for Loop </h3>";
    for ($i = 0; $i < 10; $i++) {
        if ($i == 6) {
            continue;
        }
        echo $i . "<br>";
    }

    echo "<h3>&#10022; continue in while Loop </h3>";
    $i = 0;
    while ($i < 10) {
        if ($i == 6) {
            $i++;
            continue;
        }
        echo $i . "<br>";
        $i++;
    }

    echo "<h3>&#10022; continue in do while Loop </h3>";
    $i = 0;
    do {
        if ($i == 6) {
            $i++;
            continue;
        }
        echo $i . "<br>";
        $i++;
    } while ($i < 10);


    echo "<h3>&#10022; continue in foreach Loop </h3>";
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $x) {
        if ($x == "blue") continue;
        echo "$x <br>";
    }


    ?>
</body>

</html>
