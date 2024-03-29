<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Casting</title>
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

    // Cast to Object
    echo "<h2>&#10022; Cast to Object</h2>";

    echo "<h3>&#10022; Integer to Object</h3>";
    echo "value of a is &#10170; " . $a . "<br>";
    echo "data type of a is &#10170; " . gettype($a) . "<br>";
    echo "casting Integer to Object &#10170; ";
    echo "<pre>";
    print_r((object)$a);
    echo "</pre>";
    echo "data type is &#10170; " . gettype((object)$a) . "<br><br>";

    echo "<h3>&#10022; Float to Object</h3>";
    echo "value of b is &#10170; " . $b . "<br>";
    echo "data type of b is &#10170; " . gettype($b) . "<br>";
    echo "casting Float to Object &#10170; ";
    echo "<pre>";
    print_r((object)$b);
    echo "</pre>";
    echo "data type is &#10170; " . gettype((object)$b) . "<br><br>";

    echo "<h3>&#10022; String to Object</h3>";
    echo "value of c is &#10170; " . $c . "<br>";
    echo "data type of c is &#10170; " . gettype($c) . "<br>";
    echo "casting String to Object &#10170; ";
    echo "<pre>";
    print_r((object)$c);
    echo "</pre>";
    echo "data type is &#10170; " . gettype((object)$c) . "<br><br>";

    echo "<h3>&#10022; Boolean to Object</h3>";
    echo "value of d is &#10170; " . ($d ? 'true' : 'false') . "<br>";
    echo "data type of d is &#10170; " . gettype($d) . "<br>";
    echo "casting Boolean to Object &#10170; ";
    echo "<pre>";
    print_r((object)$d);
    echo "</pre>";
    echo "data type is &#10170; " . gettype((object)$d) . "<br><br>";

    echo "<h3>&#10022; Null to Object</h3>";
    echo "value of e is &#10170; NULL" . $e . "<br>";
    echo "data type of e is &#10170; " . gettype($e) . "<br>";
    echo "casting Null to Object &#10170; ";
    echo "<pre>";
    print_r((object)$e);
    echo "</pre>";
    echo "data type is &#10170; " . gettype((object)$e) . "<br><br>";





    ?>

</body>

</html>