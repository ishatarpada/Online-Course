<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Casting</title>
</head>

<body>

    <?php

    $a = 5;       // Integer
    echo " &#10170;  value of a is &#10170; " . $a . "<br>";
    $b = 5.34;    // Float
    echo " &#10170;  value of b is &#10170; " . $b . "<br>";
    $c = "hello"; // String
    echo " &#10170;  value of c is &#10170; " . $c . "<br>";
    $d = true;    // Boolean
    echo " &#10170;  value of d is &#10170; " . $d . "<br>";
    $e = NULL;    // NULL
    echo " &#10170;  value of e is &#10170; NULL" . $e . "<br>";

    // Cast To array
    echo "<h2>&#10022; Cast to Array</h2>";

    echo "<h3>&#10022; Integer to Array</h3>";
    echo "value of a is &#10170; " . $a . "<br>";
    echo "data type of a is &#10170; " . gettype($a) . "<br>";
    echo "casting Integer to Array &#10170; ";
    echo "<pre>";
    print_r((array)$a);
    echo "</pre>";
    echo "data type is &#10170; " . gettype((array)$a) . "<br><br>";

    echo "<h3>&#10022; Float to Array</h3>";
    echo "value of b is &#10170; " . $b . "<br>";
    echo "data type of b is &#10170; " . gettype($b) . "<br>";
    echo "casting Float to Array &#10170; ";
    echo "<pre>";
    print_r((array)$b);
    echo "</pre>";
    echo "data type is &#10170; " . gettype((array)$b) . "<br><br>";

    echo "<h3>&#10022; String to Array</h3>";
    echo "value of c is &#10170; " . $c . "<br>";
    echo "data type of c is &#10170; " . gettype($c) . "<br>";
    echo "casting String to Array &#10170; ";
    echo "<pre>";
    print_r((array)$c);
    echo "</pre>";
    echo "data type is &#10170; " . gettype((array)$c) . "<br><br>";

    echo "<h3>&#10022; Boolean to Array</h3>";
    echo "value of d is &#10170; " . ($d ? 'true' : 'false') . "<br>";
    echo "data type of d is &#10170; " . gettype($d) . "<br>";
    echo "casting Boolean to Array &#10170; ";
    echo "<pre>";
    print_r((array)$d);
    echo "</pre>";
    echo "data type is &#10170; " . gettype((array)$d) . "<br><br>";

    echo "<h3>&#10022; Null to Array</h3>";
    echo "value of e is &#10170; NULL" . $e . "<br>";
    echo "data type of e is &#10170; " . gettype($e) . "<br>";
    echo "casting Null to Array &#10170; ";
    echo "<pre>";
    print_r((array)$e);
    echo "</pre>";
    echo "data type is &#10170; " . gettype((array)$e) . "<br><br>";

    class Car
    {
        public $color;
        public $model;

        public function __construct($color, $model)
        {
            $this->color = $color;
            $this->model = $model;
        }

        public function message()
        {
            return "My car is a " . $this->color . " " . $this->model . "!";
        }
    }

    $myCar = new Car("red", "Volvo");

    echo "<h3>&#10022; Object to Array</h3>";

    var_dump($myCar);
    echo "value of car object is &#10170; <br>";
    echo "data type of car is &#10170; " . gettype($myCar) . "<br>";
    echo "casting object to Array ";
    $carArray = (array)$myCar;
    echo "<pre>";
    print_r($carArray);
    echo "</pre>";
    echo "data type of car is &#10170; " . gettype($carArray) . "<br><br>";


    ?>

</body>

</html>