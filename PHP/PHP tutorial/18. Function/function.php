<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>

<body>
    <!-- 
        Function :- The real power of PHP comes from its functions.
        PHP has more than 1000 built-in functions, and in addition you can create your own custom functions.

        PHP User Defined Functions
        Besides the built-in PHP functions, it is possible to create your own functions.

        A function is a block of statements that can be used repeatedly in a program.
        A function will not execute automatically when a page loads.
        A function will be executed by a call to the function.

        Create a Function
            A user-defined function declaration starts with the keyword function, followed by the name of the function:

                ExampleGet your own PHP Server
                function myMessage() {
                echo "Hello world!";
                }

     -->


    <?php 

    echo "<h1>&#10022; Function</h1>";

    echo "<h3>&#10022; create a function for print pyramid </h3>";
    function pyramid()
    {
        for ($i = 1; $i <= 5; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo " * ";
            }
            echo "<br>";
        }
    }
    pyramid();

    echo "<h3>&#10022; create a function with arguments </h3>";
    function add($num1, $num2)
    {
        $ans = $num1 + $num2;
        echo "ans is &#10170; " . $ans;
    }

    add(56, 44);
    echo "<br>";

    add(6, 4);
    echo "<br>";

    add(560, 440);

    echo "<h3>&#10022; create a function with two arguments </h3>";

    function familyName($fname, $year)
    {
        echo "$fname Refsnes. Born in $year <br>";
    }

    familyName("Hege", "1975");
    echo "<br>";

    familyName("Stale", "1978");
    echo "<br>";

    familyName("Kai Jim", "1983");
    echo "<br>";

    echo "<h3>&#10022; PHP Default Argument Value </h3>";

    function setHeight($minheight = 50)
    {
        echo "The height is : $minheight <br>";
    }

    setHeight(350);
    setHeight();
    setHeight(135);
    setHeight(80);

    echo "<h3>&#10022; PHP Functions - Returning values </h3>";
    function sub($x, $y)
    {
        $z = $x - $y;
        return $z;
    }

    echo "5 - 10 = " . sub(5, 10) . "<br>";
    echo "7 - 13 = " . sub(7, 13) . "<br>";
    echo "2 - 4 = " . sub(2, 4);

    echo "<h3>&#10022; Passing Arguments by Reference </h3>";
    function inc(&$value)
    {
        $value += 10;
    }

    $num = 10;
    inc($num);
    echo $num . "<br>";

    echo "<h3>&#10022; Variable Number of Arguments</h3>";

    function sumMyNumbers(...$x)
    {
        $n = 0;
        $len = count($x);
        for ($i = 0; $i < $len; $i++) {
            $n += $x[$i];
        }
        return $n;
    }

    $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
    echo $a . "<br><br>";

    function myFamily($lastname, ...$firstname)
    {
        $ans = "";
        $len = count($firstname);
        for ($i = 0; $i < $len; $i++) {
            $ans = $ans . "Hi, $firstname[$i] $lastname.<br>";
        }
        return $ans;
    }

    $a = myFamily("Doe", "Jane", "John", "Joey");
    echo $a;

    

    ?>
</body>

</html>