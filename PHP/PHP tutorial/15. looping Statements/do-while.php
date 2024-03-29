<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>do while Loop</title>
</head>

<body>
    <!-- 
            do...while loop - Loops through a block of code once, and then repeats the loop as long as the specified condition is true.
         -->


    <?php

    echo "<h1>&#10022; do while Loop</h1>";

    echo "<h3>&#10022; print the 1 to 10 numbers</h3>";
    $i = 1;
    do {
        echo $i . "<br>";
        $i++;
    } while ($i <= 10);

    echo "<h3>&#10022; break Statement</h3>";
    $i = 1;

    do {
        if ($i == 3) break;
        echo $i . "<br>";
        $i++;
    } while ($i < 6);

    echo "<h3>&#10022; continue Statement</h3>";
    $i = 1;

    do {
        if ($i == 3) {
            $i++;
            continue;
        }
        echo $i . "<br>";
        $i++;
    } while ($i < 6);

    ?>
</body>

</html>