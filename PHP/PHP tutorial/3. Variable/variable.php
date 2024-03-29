<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable</title>
</head>

<body>
    <?php

    /*
            PHP variable :- variable create using $ sign.
                            ex:- $var_name = "value".

            in php , text are between quotes.

            Get Variable type :-    var_dump() function returns the data type and the value
                                    var_dump($var_name);

            PHP supports the following data types:
                String
                Integer
                Float (floating point numbers - also called double)
                Boolean
                Array
                Object
                NULL
                Resource
        */

    // Assign integer to a Variable
    echo "<h3>Assign integer to a Variable</h3>";
    $num1 = 25;
    $num2 = 30;
    echo  "num is &#10170; $num1 <br>";

    // Assign String to a Variable
    echo "<h3>Assign String to a Variable</h3>";
    $txt = "Hello Isha";

    echo  "txt is &#10170; $txt <br>";
    echo "num is &#10170; " . $num1 . " txt is &#10170; " . $txt . "<br>";
    echo "addition is &#10170;";
    echo $num1 + $num2;

    //Get the Type 
    echo "<h3>get the variable type</h3>";
    echo var_dump($num1) . "<br>";
    echo var_dump(5) . "<br>";
    echo var_dump("John") . "<br>";
    echo var_dump(3.14) . "<br>";
    echo var_dump(true) . "<br>";
    echo var_dump([2, 3, 56]) . "<br>";
    echo var_dump(NULL) . "<br>";

    // Assign Multiple Values
    echo "<h3>Assign Multiple Values</h3>";
    $num1 = $num2 = $num3 = 25;
    echo $num1 ."<br>";
    echo $num2 ."<br>";
    echo $num3 ."<br>";


    ?>
</body>

</html>