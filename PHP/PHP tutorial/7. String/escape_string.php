<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape Characters</title>
</head>
<body>
    

    <!-- 
        Escape Characters :- 
        To insert characters that are illegal in a string, use an escape character.

        An escape character is a backslash \ followed by the character you want to insert.

        An example of an illegal character is a double quote inside a string that is surrounded by double quotes:
     -->

     <?php

        $x = "We are the so-called \"Vikings\" from the north.";
        echo $x ."<br>";

        // $y = "We are the so-called "Vikings" from the north.";
        // echo $y ."<br>";

        $x = "We are the so-called \'Vikings\' from the north.";
        echo $x ."<br>";

        $var = "Vikings";
        $x = "We are the so-called \$var from the north.";
        echo $x ."<br>";

        $x = "Hello\nWorld";
        echo $x ."<br>";

        $x = "Hello\rWorld";
        echo $x ."<br>";

        $x = "Hello\tWorld";
        echo $x ."<br>";

        $x = "\110\145\154\154\157";
        echo $x ."<br>";

        $x = "\x48\x65\x6c\x6c\x6f";
        echo $x ."<br>";



     ?>



</body>
</html>