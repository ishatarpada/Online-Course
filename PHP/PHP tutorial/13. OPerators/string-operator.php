<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Operator</title>
</head>

<body>

    <!-- 
        String Operator :-  1. Concatenation
                            2. Concatenation assignment
     -->



    <?php

    $str1 = "Hello";
    $str2 = " Isha";

    // Concatenation
    echo "<h3>&#10022; Concatenation</h3>";
    echo "Concatenation of two string is &#10170; " . $str1.$str2;

    // Concatenation assignment
    echo "<h3>&#10022; Concatenation assignment</h3>";
    $str1 .= $str2;
    echo "Concatenation assignment of two string is &#10170; " . $str1;


    ?>
</body>

</html>