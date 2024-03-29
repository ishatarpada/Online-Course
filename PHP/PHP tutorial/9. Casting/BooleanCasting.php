<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolean Casting</title>
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

    // Cast to Boolean
    echo "<h2>&#10022; Cast to Boolean</h2>";

    echo "<h3>&#10022; Integer to Boolean</h3>";
    echo " value of a is &#10170; " . $a . "<br>";
    echo " data type of a is &#10170; ";
    echo var_dump($a) . "<br>";
    echo "casting Integer to Boolean &#10170; ";
    echo (bool)$a . "<br>";
    echo " data type is &#10170; ";
    echo var_dump((bool)$a) . "<br><br>";

    echo "<h3>&#10022; Float to Boolean</h3>";
    echo " value of b is &#10170; " . $b . "<br>";
    echo " data type of b is &#10170; ";
    echo var_dump($b) . "<br>";
    echo "casting Float to Boolean &#10170; ";
    echo (bool)$b . "<br>";
    echo " data type is &#10170; ";
    echo var_dump((bool)$b) . "<br><br>";

    echo "<h3>&#10022; String to Boolean</h3>";
    echo " value of c is &#10170; " . $c . "<br>";
    echo " data type of c is &#10170; ";
    echo var_dump($c) . "<br>";
    echo "casting String to Boolean &#10170; ";
    echo (bool)$c . "<br>";
    echo " data type is &#10170; ";
    echo var_dump((bool)$c) . "<br><br>";

    echo "<h3>&#10022; Boolean to Boolean</h3>";
    echo " value of d is &#10170; " . $d . "<br>";
    echo " data type of d is &#10170; ";
    echo var_dump($d) . "<br>";
    echo "casting Boolean to Boolean &#10170; ";
    echo (bool)$d . "<br>";
    echo " data type is &#10170; ";
    echo var_dump((bool)$d) . "<br><br>";

    echo "<h3>&#10022; Null to Boolean</h3>";
    echo " value of e is &#10170; NULL" . $e . "<br>";
    echo " data type of e is &#10170; ";
    echo var_dump($e) . "<br>";
    echo "casting Null to Boolean &#10170; ";
    echo (bool)$e . "<br>";
    echo " data type is &#10170; ";
    echo var_dump((bool)$e) . "<br><br>";

    ?>

</body>

</html>