<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo and Print</title>
</head>
<body>
    
    <!-- 
        echo and print :- used for output data for screen.

        echo has no return value and print has return value.

        echo take multiple parameter when print take only one argument .

        echo is faster than print.

        echo :- The echo statement can be used with or without parentheses: echo or echo().

        print :- The print statement can be used with or without parentheses: print or print().
     -->


     <?php

        // echo statement
        echo "<h2>PHP is fun</h2>";
        echo "Hello world!<br>";
        echo "I'm about to learn PHP!<br>";
        echo "This ", "string ", "was ", "made ", "with multiple parameters.";

        // display variable
        $txt1 = "Learn PHP";
        $txt2 = "W3schools.com";
        $x = 5 ;
        $y = 4;

        echo "<h2>".$txt1."</h2>";
        echo "Study PHP at " . $txt2 . "<br>";
        echo $x + $y;


        // print statement
        print "<h2>PHP is fun</h2>";
        print "Hello world!<br>";
        print "I'm about to learn PHP!<br>";

        // display variable
        print "<h2>".$txt1."</h2>";
        print "Study PHP at " . $txt2 . "<br>";
        print $x + $y;
    ?>


</body>
</html>