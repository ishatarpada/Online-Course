<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>OOP- Classes and Objects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        * {
            margin: 2%;
        }
    </style>
</head>

<body>
    <p class="text-danger fs-4 text-center m-2">OOP -- Constructor</p>
    <p>A constructor allows you to initialize an object's properties upon creation of the object.</p>
    <p>If you create a __construct() function, PHP will automatically call this function when you create an object from a class.</p>

    <!-- define a class -->
    <p class="fs-5 m-2">Define a Class :- </p>
    <?php

    // define a class
    class Fruit
    {
        public $name;
        public $color;

        function __construct($name , $color)
        {
            $this->name = $name;
            $this->color = $color;
        }
        function get_name()
        {
            return $this->name;
        }
        function get_color()
        {
            return $this->color;
        }
    }

    $apple = new Fruit("Apple" , "Red");
    echo $apple->get_name();
    echo "<br>";
    echo $apple->get_color();
    
    ?>



</body>

</html>