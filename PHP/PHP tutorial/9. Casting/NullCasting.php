<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Null Casting</title>
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

    echo "<h2>&#10022; Cast to Null</h2>";

    echo "<h3>&#10022; Integer to Null</h3>";
    echo "value of a is &#10170; " . $a . "<br>";
    echo "data type of a is &#10170; " . var_dump($a) . "<br>";
    echo "casting Integer to Null &#10170; ";
    echo "<pre>";
    print_r((unset)$a);
    echo "</pre>";
    echo "data type is &#10170; " . var_dump((unset)$a) . "<br><br>";

    echo "<h3>&#10022; Float to Null</h3>";
    echo "value of b is &#10170; " . $b . "<br>";
    echo "data type of b is &#10170; " . var_dump($b) . "<br>";
    echo "casting Float to Null &#10170; ";
    echo "<pre>";
    print_r((unset)$b);
    echo "</pre>";
    echo "data type is &#10170; " . var_dump((unset)$b) . "<br><br>";

    echo "<h3>&#10022; String to Null</h3>";
    echo "value of c is &#10170; " . $c . "<br>";
    echo "data type of c is &#10170; " . var_dump($c) . "<br>";
    echo "casting String to Null &#10170; ";
    echo "<pre>";
    print_r((unset)$c);
    echo "</pre>";
    echo "data type is &#10170; " . var_dump((unset)$c) . "<br><br>";

    echo "<h3>&#10022; Boolean to Null</h3>";
    echo "value of d is &#10170; " . ($d ? 'true' : 'false') . "<br>";
    echo "data type of d is &#10170; " . var_dump($d) . "<br>";
    echo "casting Boolean to Null &#10170; ";
    echo "<pre>";
    print_r((unset)$d);
    echo "</pre>";
    echo "data type is &#10170; " . var_dump((unset)$d) . "<br><br>";

    echo "<h3>&#10022; Null to Null</h3>";
    echo "value of e is &#10170; NULL" . $e . "<br>";
    echo "data type of e is &#10170; " . var_dump($e) . "<br>";
    echo "casting Null to Null &#10170; ";
    echo "<pre>";
    print_r((unset)$e);
    echo "</pre>";
    echo "data type is &#10170; " . var_dump((unset)$e) . "<br><br>";
    ?>

</body>

</html>