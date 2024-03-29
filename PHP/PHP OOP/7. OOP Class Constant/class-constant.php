<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Constant</title>
</head>

<body>
    <h2>Class Constant</h2>
    <p>Class constants can be useful if you need to define some constant data within a class.</p>

    <p>A class constant is declared inside a class with the const keyword.</p>

    <p>A constant cannot be changed once it is declared.</p>

    <p>Class constants are case-sensitive. However, it is recommended to name the constants in all uppercase letters.</p>

    <p>We can access a constant from outside the class by using the class name followed by the scope resolution operator (::) followed by the constant name</p>


    <?php

    echo "<h2>&#10022; Class Constant</h2>";

    class goodbye
    {
        const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
    }

    echo goodbye::LEAVING_MESSAGE;
    echo "<br>";

    class hello
    {
        const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
        public function byebye()
        {
            echo self::LEAVING_MESSAGE;
        }
    }

    $hello = new hello();
    $hello->byebye();

    ?>
</body>

</html>