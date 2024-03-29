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
    <p class="text-danger fs-4 text-center m-2">OOP -- Classes and Objects</p>

    <!-- define a class -->
    <p class="fs-5 m-2">Define a Class :- </p>
    <?php

    // define a class
    class fruits
    {

        // properties
        public $name;
        public $color;

        // methods
        function set_name($name)
        {
            $this->name = $name;
        }

        function get_name()
        {
            return $this->name;
        }

        function set_color($color)
        {
            $this->color = $color;
        }

        function get_color()
        {
            return $this->color;
        }
    }


    // define a object
    $apple = new fruits();

    // set the name
    $apple->set_name('Apple');
    // set the color
    $apple->set_color('Red');

    // get the name
    echo "fruit name is :- ";
    echo $apple->get_name();
    echo "<br>";
    // get the color
    echo "fruit color is :- ";
    echo $apple->get_color();
    echo "<br>";

    // define a object
    $banana = new fruits();

    // set the name
    $banana->set_name('Banana');
    // set the color
    $banana->set_color('Yellow');

    // get the name
    echo "fruit name is :- ";
    echo $banana->get_name();
    echo "<br>";
    // get the color
    echo "fruit color is :- ";
    echo $banana->get_color();
    echo "<br>";

    ?>

    <p class="text-danger fs-5 m-2"><b>The $this Keyword</b> :- $this keyword refers to the current object, and is only available inside methods.</p>

    <?php
    class Fruitss
    {
        public $name;
        function set_name($name)
        {
            $this->name = $name;
        }
    }
    $apple = new Fruitss();
    $apple->set_name("Apple");

    echo $apple->name;
    echo "<br>";


    $mango = new Fruitss();
    $mango->name = "Mango";

    echo $mango->name;
    echo "<br>";

    var_dump($mango instanceof Fruit);

    ?>

</body>

</html>