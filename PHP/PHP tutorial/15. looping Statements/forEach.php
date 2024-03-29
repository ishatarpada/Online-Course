<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach Loop</title>
</head>

<body>
    <!-- 
        foreach Loop :-  Loops through a block of code for each element in an array or each property in an object.

        Foreach Byref
        When looping through the array items, any changes done to the array item will, by default, NOT affect the original array:
     -->


    <?php

    echo "<h1>&#10022; foreach Loop</h1>";

    echo "<h3>&#10022; foreach Loop on Arrays </h3>";
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $i) {
        echo "$i <br>";
    }

    echo "<h3>&#10022; foreach Loop on Associative  Arrays </h3>";
    $members = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

    foreach ($members as $x => $y) {
        echo "$x : $y <br>";
    }

    echo "<h3>&#10022; foreach Loop on Objects </h3>";
    class Car
    {
        public $color;
        public $model;
        public function __construct($color, $model)
        {
            $this->color = $color;
            $this->model = $model;
        }
    }

    $myCar = new Car("red", "Volvo");

    foreach ($myCar as $x => $y) {
        echo "$x: $y <br>";
    }

    echo "<h3>&#10022; break Statement </h3>";
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $x) {
        if ($x == "blue") break;
        echo "$x <br>";
    }

    echo "<h3>&#10022; continue Statement </h3>";
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $x) {
        if ($x == "blue") continue;
        echo "$x <br>";
    }

    echo "<h3>&#10022; Foreach Byref </h3>";
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $x) {
        if ($x == "blue") $x = "pink";
        echo "$x <br>";
    }
    var_dump($colors);
    echo "<br><br>";

    foreach ($colors as &$x) {
        if ($x == "blue") $x = "pink";
        echo "$x <br>";
    }
    var_dump($colors);

    echo "<h3>&#10022; Foreach Byref </h3>";
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $x) :
        echo "$x <br>";
    endforeach;
    echo "<br><br>";

    ?>
</body>

</html>