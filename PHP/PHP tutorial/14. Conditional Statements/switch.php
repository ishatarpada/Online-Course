<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch Statement</title>
</head>

<body>

    <!-- 
        switch statement :- is used to perform different actions based on different conditions.

        Syntax
            switch (expression) {
            case label1:
                //code block
                break;
            case label2:
                //code block;
                break;
            case label3:
                //code block
                break;
            default:
                //code block
            }

        This is how it works:
        => The expression is evaluated once
        => The value of the expression is compared with the values of each case
        => If there is a match, the associated block of code is executed
        => The break keyword breaks out of the switch block
        => The default code block is executed if there is no match

        The break Keyword
        => When PHP reaches a break keyword, it breaks out of the switch block.
        => This will stop the execution of more code, and no more cases are tested.
        => The last block does not need a break, the block breaks (ends) there anyway.
     -->

    <?php

    echo "<h1>&#10022; switch Statement </h1>";


    echo "<h3>&#10022; choose favorite color </h3>";
    function chooseColor($favColor)
    {
        switch ($favColor) {
            case "red":
                echo "Your favorite color is red!";
                break;
            case "blue":
                echo "Your favorite color is blue!";
                break;
            case "green":
                echo "Your favorite color is green!";
                break;
            default:
                echo "Your favorite color is neither red, blue, nor green!";
        }
    }

    echo "color is red <br>";
    chooseColor("red");
    echo "<br><br>";
    echo "color is blue <br>";
    chooseColor("blue");
    echo "<br><br>";
    echo "color is black <br>";
    chooseColor("black");
    echo "<br><br>";

    echo "<h3>&#10022; calculator </h3>";
    function calculator($num1, $num2, $op)
    {
        switch ($op) {
            case "+":
                echo "Addition is &#10170;" . ($num1 + $num2);
                break;
            case "-":
                echo "Substraction is &#10170;" . ($num1 - $num2);
                break;
            case "*":
                echo "Multiplication is &#10170;" . ($num1 * $num2);
                break;
            case "/":
                echo "Division is &#10170;" . ($num1 / $num2);
                break;
            case "%":
                echo "Modulo is &#10170;" . ($num1 % $num2);
                break;
            case "**":
                echo "Exponentiation is &#10170;" . ($num1 ** $num2);
                break;
            default:
                echo "please enter valid operator";
        }
    }

    $num1 = 40;
    $num2 = 5 ;
    echo "the number is &#10170; " .$num1. "<br>";
    echo "the number is &#10170; " .$num2. "<br>";
    echo "<br><br>";

    $op = "+";
    echo "user choose addition <br>";
    calculator($num1 , $num2 , $op);
    echo "<br><br>";

    
    $op = "/";
    echo "user choose division <br>";
    calculator($num1 , $num2 , $op);
    echo "<br><br>";

    
    $op = "**";
    echo "user choose Exponentiation <br>";
    calculator($num1 , $num2 , $op);
    echo "<br><br>";

    
    $op = "@";
    echo "user choose @ <br>";
    calculator($num1 , $num2 , $op);
    echo "<br><br>";


    ?>

</body>

</html>