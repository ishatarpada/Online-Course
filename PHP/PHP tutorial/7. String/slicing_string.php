<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slicing Strings</title>
</head>
<body>
    <!-- 
        Slicing Strings :- You can return a range of characters by using the substr() function.
        Specify the start index and the number of characters you want to return

        slicing :- substr($varname , starting idx , ending idx);

        slice to end :- substr($varname , starting idx);

        slice to from the end  :- substr($varname , negative_starting idx , ending idx);

        negative length :- 
     -->


     <?php

        // slicing
        $x = "Hello World!";
        echo substr($x, 6, 5) ."<br>";

        // slice to end
        $x = "Hello World!";
        echo substr($x, 6) ."<br>";

        // slice to from the end
        $x = "Hello World!";
        echo substr($x, -5, 3) ."<br>";

        // negative length
        $x = "Hi, how are you?";
        echo substr($x, 5, -3) ."<br>";

     ?>
</body>
</html>