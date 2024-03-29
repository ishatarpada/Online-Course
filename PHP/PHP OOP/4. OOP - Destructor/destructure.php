<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>OOP- Destructor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        * {
            margin: 2%;
        }
    </style>
</head>

<body>
    <p class="text-danger fs-4 text-center m-2"> OOP - Destructor</p>
    <p>A destructor is called when the object is destructed or the script is stopped or exited.</p>
    <p>If you create a __destruct() function, PHP will automatically call this function at the end of the script.</p>

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
        function __destruct() {
            echo "The fruit is {$this->name} and color is {$this->color} .";
          }
    }

    $apple = new Fruit("Apple" , "Red");
    
    ?>



</body>

</html>