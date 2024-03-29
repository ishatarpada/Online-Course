<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify String</title>
</head>
<body>
    
    <!-- 
        Modify String :- php has a set of built in function that we can use to modify string.

        Upper case :- strtoupper();

        Lower case :- strtolower();

        replace the string :- str_replace();

        reverse the string :- strrev();

        string to array :- explode();

        remove white space :- trim();

     -->

    <?php

    $x = " Isha ";

    // uppercase
    echo strtoupper($x) ."<br>";
    
    // lowercase
    echo strtolower($x) ."<br>";

    // Replace the string
    echo str_replace("Isha" , "Hello Isha" , $x) ."<br>";

    // reverse
    echo strrev($x) ."<br>";

    // remove white space
    echo trim($x) ."<br>";

    // convert string to array
    $str = "hello isha study at gecr";
    $y = explode(" " , $str);
    print_r($y);


    ?>
</body>
</html>