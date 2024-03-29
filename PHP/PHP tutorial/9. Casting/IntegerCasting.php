<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integer Casting</title>
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

    // cast to Integer
    echo "<h2>&#10022; Cast to Integer</h2>";

    echo "<h3>&#10022; Integer to Integer</h3>";
    echo " value of a is &#10170; " . $a . "<br>";
    echo " data type of a is &#10170; ";
    echo var_dump($a) . "<br>";
    echo "casting Integer to integer &#10170; ";
    echo (int)$a . "<br>";
    echo " data type is &#10170; ";
    echo var_dump((int)$a) . "<br><br>";

    echo "<h3>&#10022; Float to Integer</h3>";
    echo " value of b is &#10170; " . $b . "<br>";
    echo " data type of b is &#10170; ";
    echo var_dump($b) . "<br>";
    echo "casting Float to integer &#10170; ";
    echo (int)$b . "<br>";
    echo " data type is &#10170; ";
    echo var_dump((int)$b) . "<br><br>";

    echo "<h3>&#10022; String to Integer</h3>";
    echo " value of c is &#10170; " . $c . "<br>";
    echo " data type of c is &#10170; ";
    echo var_dump($c) . "<br>";
    echo "casting String to integer &#10170; ";
    echo (int)$c . "<br>";
    echo " data type is &#10170; ";
    echo var_dump((int)$c) . "<br><br>";

    echo "<h3>&#10022; Boolean to Integer</h3>";
    echo " value of d is &#10170; " . $d . "<br>";
    echo " data type of d is &#10170; ";
    echo var_dump($d) . "<br>";
    echo "casting Boolean to integer &#10170; ";
    echo (int)$d . "<br>";
    echo " data type is &#10170; ";
    echo var_dump((int)$d) . "<br><br>";

    echo "<h3>&#10022; Null to Integer</h3>";
    echo " value of e is &#10170; NULL" . $e . "<br>";
    echo " data type of e is &#10170; ";
    echo var_dump($e) . "<br>";
    echo "casting Null to integer &#10170; ";
    echo (int)$e . "<br>";
    echo " data type is &#10170; ";
    echo var_dump((int)$e) . "<br><br>";


    ?>

</body>

</html>