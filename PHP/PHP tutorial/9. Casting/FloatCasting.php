<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Float Casting</title>
</head>

<body>

    <?php

    $a = 5;       // Integer
    echo " &#10170;  value of a is &#10170; " . $a . "<br>";
    $b = 5.34;    // Float
    echo " &#10170;  value of b is &#10170; " . $b . "<br>";
    $c = "hello"; // String
    echo " &#10170;  value of c is &#10170; " . $c . "<br>";
    $d = true;    // Boolean
    echo " &#10170;  value of d is &#10170; " . $d . "<br>";
    $e = NULL;    // NULL
    echo " &#10170;  value of e is &#10170; NULL" . $e . "<br>";

    // Cast to Float
    echo "<h2>&#10022; Cast to Float</h2>";

    echo "<h3>&#10022; Integer to Float</h3>";
    echo " value of a is &#10170; " . $a . "<br>";
    echo " data type of a is &#10170; ";
    echo var_dump($a) . "<br>";
    echo "casting Integer to Float &#10170; ";
    echo (float)$a . "<br>";
    echo " data type is &#10170; ";
    echo var_dump((float)$a) . "<br><br>";

    echo "<h3>&#10022; Float to Float</h3>";
    echo " value of b is &#10170; " . $b . "<br>";
    echo " data type of b is &#10170; ";
    echo var_dump($b) . "<br>";
    echo "casting Float to Float &#10170; ";
    echo (float)$b . "<br>";
    echo " data type is &#10170; ";
    echo var_dump((float)$b) . "<br><br>";

    echo "<h3>&#10022; String to Float</h3>";
    echo " value of c is &#10170; " . $c . "<br>";
    echo " data type of c is &#10170; ";
    echo var_dump($c) . "<br>";
    echo "casting String to Float &#10170; ";
    echo (float)$c . "<br>";
    echo " data type is &#10170; ";
    echo var_dump((float)$c) . "<br><br>";

    echo "<h3>&#10022; Boolean to Float</h3>";
    echo " value of d is &#10170; " . $d . "<br>";
    echo " data type of d is &#10170; ";
    echo var_dump($d) . "<br>";
    echo "casting Boolean to Float &#10170; ";
    echo (float)$d . "<br>";
    echo " data type is &#10170; ";
    echo var_dump((float)$d) . "<br><br>";

    echo "<h3>&#10022; Null to Float</h3>";
    echo " value of e is &#10170; NULL" . $e . "<br>";
    echo " data type of e is &#10170; ";
    echo var_dump($e) . "<br>";
    echo "casting Null to Float &#10170; ";
    echo (float)$e . "<br>";
    echo " data type is &#10170; ";
    echo var_dump((float)$e) . "<br><br>";


    ?>

</body>

</html>