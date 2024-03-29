<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Scope</title>
</head>

<body>


    <!-- 
            Variable Scope :- variable can be declared anywhere in the script.
            
            there are three different variable scopes.
            1. local :- A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:
            2. global :- A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function
            3. static :-  when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.
            use the static keyword when you first declare the variable.

    -->


    <?php

    // global scope :- 
    echo "<h2>Global Scope</h2>";
    $global_var = 5;

    function myfunc()
    {
        // using global_var inside this function will generate an error.
        // echo "<p>Global variable inside the function is : $global_var</p>";
    }
    myfunc();

    echo "<p>Global variable outside the function is : $global_var</p>";

    // local Scope :-
    echo "<h2>Local Scope</h2>";
    function myFunction()
    {
        $local_var = 25;
        // using local_var inside this function will generate an error.
        echo "<p>Local variable inside the function is : $local_var</p>";
    }
    myFunction();

    echo "<p>Local variable outside the function is : $local_var</p>";


    // PHP the global Keyword
    echo "<h2>PHP the global Keyword</h2>";
    $num1 = 25 ;
    $num2 = 56;
    $num3 = $num1 + $num2;

    function addition(){
        global $num1 , $num2;
        $num1 = $num1 + $num2;
    }

    addition();
    echo "addition is &#10170; " .$num1;
    echo "<br>";
    echo "addition is &#10170; " .$num3;
    echo "<br>";

    function substraction(){
        $GLOBALS['num1'] = $GLOBALS['num1'] + $GLOBALS['num2'];
    }
    substraction();
    echo "substraction is &#10170; " .$num1;


    // static keyword
    echo "<h2>PHP the global Keyword</h2>";
    function increment(){
        static $inc = 0;
        echo $inc;
        $inc++;
    }

    increment();
    echo "<br>";
    increment();
    echo "<br>";
    increment();
    ?>

</body>

</html>