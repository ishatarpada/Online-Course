<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP $GLOBALS</title>
</head>

<body>
    <!-- 
        Global Variable :- $GLOBALS is an array that contains all global variables

        Global variables are variables that can be accessed from any scope.

        Variables of the outer most scope are automatically global variables, and can be used by any scope, e.g. inside a function.

        To use a global variable inside a function you have to either define them as global with the global keyword, or refer to them by using the $GLOBALS syntax.

     -->


    <?php

    echo "<h1>&#10022; PHP GLOBALS</h1>";

    echo "<h3>&#10022; referring to a global variable with the GLOBALS syntax:</h3>";
    $x = 75;
    function myFunction()
    {
        echo "Global variable is &#10170; ";
        echo $GLOBALS['x'];
    }
    myFunction();

    echo "<br><br>";

    echo "<h3>&#10022; referring to a global variable without the GLOBALS syntax:</h3>";
    function func()
    {
        echo $x;
    }
    func();

    echo "<br><br>";

    echo "<h3>&#10022; referring to a global variable with the GLOBALS syntax:</h3>";
    $x = 55;
    function func1()
    {
        echo "Global variable is &#10170; ";
        global $x;
        echo $x;
    }
    func1();
    echo "<br><br>";

    echo "<h3>&#10022; Create Global Variables using GLOBALS</h3>";
    $x = 100;

    echo $GLOBALS["x"] . "<br>";
    echo $x;
    echo "<br><br>";

    echo "<h3>&#10022; Create a global variable from inside a function, and use it outside of the function</h3>";

    function func2()
    {
        $GLOBALS["x"] = 100;
    }

    func2();

    echo $GLOBALS["x"]. "<br>";
    echo $x;


    ?>
</body>

</html>