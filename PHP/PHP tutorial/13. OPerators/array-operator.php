<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array operator</title>
</head>

<body>


    <?php
    echo "<h1>&#10022; Array Operator</h1>";
    $arr1 = array("a" => "red", "b" => "green");
    $arr2 = array("c" => "blue", "d" => "yellow");
    $arr3 = array("c" => "blue", "d" => "yellow");

    echo "value of first array is &#10170; ";
    print_r($arr1);
    echo "<br>";

    echo "value of second array is &#10170; ";
    print_r($arr2);
    echo "<br>";

    echo "value of third array is &#10170; ";
    print_r($arr3);
    echo "<br>";


    // Union
    echo "<h3>&#10022; Union </h3>";
    $union = $arr1 + $arr2;
    echo "Union of two arrays is &#10170; " . $union;

    // Equality
    echo "<h3>&#10022; Equality </h3>";
    echo "first and second  array is equal ? &#10170; ";
    echo var_dump($arr1 == $arr2) . "<br>";
    echo "second and third  array is equal ? &#10170; ";
    echo var_dump($arr2 == $arr3) . "<br>";

    // Identity
    echo "<h3>&#10022; Identity </h3>";
    echo "first and second  array is equal or data type ? &#10170; ";
    echo var_dump($arr1 === $arr2) . "<br>";
    echo "second and third  array is equal or data type ? &#10170; ";
    echo var_dump($arr2 === $arr3) . "<br>";

    // Inequality (!= , <>)
    echo "<h3>&#10022; Inequality </h3>";
    echo "first and second  array is unequal  ? &#10170; ";
    echo var_dump($arr1 != $arr2) . "<br>";
    echo "second and third  array is unequal  ? &#10170; ";
    echo var_dump($arr2 != $arr3) . "<br>";
    echo "first and second  array is unequal  ? &#10170; ";
    echo var_dump($arr1 <> $arr2) . "<br>";
    echo "second and third  array is unequal  ? &#10170; ";
    echo var_dump($arr2 <> $arr3) . "<br>";

    // Non-identity
    echo "<h3>&#10022; Non-identity </h3>";
    echo "first and second  array is unequal or data type ? &#10170; ";
    echo var_dump($arr1 !== $arr2) . "<br>";
    echo "second and third  array is unequal or data type ? &#10170; ";
    echo var_dump($arr2 !== $arr3) . "<br>";
    ?>
</body>

</html>