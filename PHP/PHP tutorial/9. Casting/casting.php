<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casting</title>
</head>

<body>

    <!-- 
        Casting :- change the data type.
        Change Data Type
            => Casting in PHP is done with these statements:
                (string) - Converts to data type String
                (int) - Converts to data type Integer
                (float) - Converts to data type Float
                (bool) - Converts to data type Boolean
                (array) - Converts to data type Array
                (object) - Converts to data type Object
                (unset) - Converts to data type NULL

    -->

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

    // Cast to String
    echo "<h1>&#10022; Cast to String</h1>";

    echo "<h3>&#10022; String to Integer</h3>";
    echo " value of a is &#10170; " . $a . "<br>";
    echo " data type of a is &#10170; ";
    echo var_dump($a) . "<br>";
    echo "casting Integer to String &#10170; ";
    echo (string)$a . "<br>";
    echo " data type is &#10170; ";
    echo var_dump((string)$a) . "<br><br>";

    echo "<h3>&#10022; Float to String</h3>";
    echo " value of b is &#10170; " . $b . "<br>";
    echo " data type of b is &#10170; ";
    echo var_dump($b) . "<br>";
    echo "casting Float to String &#10170; ";
    echo (string)$b . "<br>";
    echo " data type is &#10170; ";
    echo var_dump((string)$b) . "<br><br>";

    echo "<h3>&#10022; String to String</h3>";
    echo " value of c is &#10170; " . $c . "<br>";
    echo " data type of c is &#10170; ";
    echo var_dump($c) . "<br>";
    echo "casting String to String &#10170; ";
    echo (string)$c . "<br>";
    echo " data type is &#10170; ";
    echo var_dump((string)$c) . "<br><br>";

    echo "<h3>&#10022; Boolean to String</h3>";
    echo " value of d is &#10170; " . $d . "<br>";
    echo " data type of d is &#10170; ";
    echo var_dump($d) . "<br>";
    echo "casting Boolean to String &#10170; ";
    echo (string)$d . "<br>";
    echo " data type is &#10170; ";
    echo var_dump((string)$d) . "<br><br>";

    echo "<h3>&#10022; Null to String</h3>";
    echo " value of e is &#10170; NULL" . $e . "<br>";
    echo " data type of e is &#10170; ";
    echo var_dump($e) . "<br>";
    echo "casting Null to String &#10170; ";
    echo (string)$e . "<br>";
    echo " data type is &#10170; ";
    echo var_dump((string)$e) . "<br><br>";

    // cast to Integer
    echo "<h2>&#10022; Cast to Integer</h2>";

    echo "<h3>&#10022; Integer to Integer</h3>";
    echo " value of a is &#10170; " . $a . "<br>";
    echo " data type of a is &#10170; ";
    echo var_dump($a) . "<br>";
    echo "casting Integer to integer &#10170; ";
    echo (int)$a . "<br>";
    echo " data type is &#10170; ";
    echo var_dump((int)$a) . "<br><br>";

    echo "<h3>&#10022; Float to Integer</h3>";
    echo " value of b is &#10170; " . $b . "<br>";
    echo " data type of b is &#10170; ";
    echo var_dump($b) . "<br>";
    echo "casting Float to integer &#10170; ";
    echo (int)$b . "<br>";
    echo " data type is &#10170; ";
    echo var_dump((int)$b) . "<br><br>";

    echo "<h3>&#10022; String to Integer</h3>";
    echo " value of c is &#10170; " . $c . "<br>";
    echo " data type of c is &#10170; ";
    echo var_dump($c) . "<br>";
    echo "casting String to integer &#10170; ";
    echo (int)$c . "<br>";
    echo " data type is &#10170; ";
    echo var_dump((int)$c) . "<br><br>";

    echo "<h3>&#10022; Boolean to Integer</h3>";
    echo " value of d is &#10170; " . $d . "<br>";
    echo " data type of d is &#10170; ";
    echo var_dump($d) . "<br>";
    echo "casting Boolean to integer &#10170; ";
    echo (int)$d . "<br>";
    echo " data type is &#10170; ";
    echo var_dump((int)$d) . "<br><br>";

    echo "<h3>&#10022; Null to Integer</h3>";
    echo " value of e is &#10170; NULL" . $e . "<br>";
    echo " data type of e is &#10170; ";
    echo var_dump($e) . "<br>";
    echo "casting Null to integer &#10170; ";
    echo (int)$e . "<br>";
    echo " data type is &#10170; ";
    echo var_dump((int)$e) . "<br><br>";

    // Cast to Float
    echo "<h2>&#10022; Cast to Float</h2>";

    echo "<h3>&#10022; Integer to Float</h3>";
    echo " value of a is &#10170; " . $a . "<br>";
    echo " data type of a is &#10170; ";
    echo var_dump($a) . "<br>";
    echo "casting Integer to Float &#10170; ";
    echo (float)$a . "<br>";
    echo " data type is &#10170; ";
    echo var_dump((float)$a) . "<br><br>";

    echo "<h3>&#10022; Float to Float</h3>";
    echo " value of b is &#10170; " . $b . "<br>";
    echo " data type of b is &#10170; ";
    echo var_dump($b) . "<br>";
    echo "casting Float to Float &#10170; ";
    echo (float)$b . "<br>";
    echo " data type is &#10170; ";
    echo var_dump((float)$b) . "<br><br>";

    echo "<h3>&#10022; String to Float</h3>";
    echo " value of c is &#10170; " . $c . "<br>";
    echo " data type of c is &#10170; ";
    echo var_dump($c) . "<br>";
    echo "casting String to Float &#10170; ";
    echo (float)$c . "<br>";
    echo " data type is &#10170; ";
    echo var_dump((float)$c) . "<br><br>";

    echo "<h3>&#10022; Boolean to Float</h3>";
    echo " value of d is &#10170; " . $d . "<br>";
    echo " data type of d is &#10170; ";
    echo var_dump($d) . "<br>";
    echo "casting Boolean to Float &#10170; ";
    echo (float)$d . "<br>";
    echo " data type is &#10170; ";
    echo var_dump((float)$d) . "<br><br>";

    echo "<h3>&#10022; Null to Float</h3>";
    echo " value of e is &#10170; NULL" . $e . "<br>";
    echo " data type of e is &#10170; ";
    echo var_dump($e) . "<br>";
    echo "casting Null to Float &#10170; ";
    echo (float)$e . "<br>";
    echo " data type is &#10170; ";
    echo var_dump((float)$e) . "<br><br>";

    // Cast to Boolean
    echo "<h2>&#10022; Cast to Boolean</h2>";

    echo "<h3>&#10022; Integer to Boolean</h3>";
    echo " value of a is &#10170; " . $a . "<br>";
    echo " data type of a is &#10170; ";
    echo var_dump($a) . "<br>";
    echo "casting Integer to Boolean &#10170; ";
    echo (bool)$a . "<br>";
    echo " data type is &#10170; ";
    echo var_dump((bool)$a) . "<br><br>";

    echo "<h3>&#10022; Float to Boolean</h3>";
    echo " value of b is &#10170; " . $b . "<br>";
    echo " data type of b is &#10170; ";
    echo var_dump($b) . "<br>";
    echo "casting Float to Boolean &#10170; ";
    echo (bool)$b . "<br>";
    echo " data type is &#10170; ";
    echo var_dump((bool)$b) . "<br><br>";

    echo "<h3>&#10022; String to Boolean</h3>";
    echo " value of c is &#10170; " . $c . "<br>";
    echo " data type of c is &#10170; ";
    echo var_dump($c) . "<br>";
    echo "casting String to Boolean &#10170; ";
    echo (bool)$c . "<br>";
    echo " data type is &#10170; ";
    echo var_dump((bool)$c) . "<br><br>";

    echo "<h3>&#10022; Boolean to Boolean</h3>";
    echo " value of d is &#10170; " . $d . "<br>";
    echo " data type of d is &#10170; ";
    echo var_dump($d) . "<br>";
    echo "casting Boolean to Boolean &#10170; ";
    echo (bool)$d . "<br>";
    echo " data type is &#10170; ";
    echo var_dump((bool)$d) . "<br><br>";

    echo "<h3>&#10022; Null to Boolean</h3>";
    echo " value of e is &#10170; NULL" . $e . "<br>";
    echo " data type of e is &#10170; ";
    echo var_dump($e) . "<br>";
    echo "casting Null to Boolean &#10170; ";
    echo (bool)$e . "<br>";
    echo " data type is &#10170; ";
    echo var_dump((bool)$e) . "<br><br>";

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
    
    // Cast to Object
    echo "<h2>&#10022; Cast to Object</h2>";

    echo "<h3>&#10022; Integer to Object</h3>";
    echo "value of a is &#10170; " . $a . "<br>";
    echo "data type of a is &#10170; " . gettype($a) . "<br>";
    echo "casting Integer to Object &#10170; ";
    echo "<pre>";
    print_r((object)$a);
    echo "</pre>";
    echo "data type is &#10170; " . gettype((object)$a) . "<br><br>";

    echo "<h3>&#10022; Float to Object</h3>";
    echo "value of b is &#10170; " . $b . "<br>";
    echo "data type of b is &#10170; " . gettype($b) . "<br>";
    echo "casting Float to Object &#10170; ";
    echo "<pre>";
    print_r((object)$b);
    echo "</pre>";
    echo "data type is &#10170; " . gettype((object)$b) . "<br><br>";

    echo "<h3>&#10022; String to Object</h3>";
    echo "value of c is &#10170; " . $c . "<br>";
    echo "data type of c is &#10170; " . gettype($c) . "<br>";
    echo "casting String to Object &#10170; ";
    echo "<pre>";
    print_r((object)$c);
    echo "</pre>";
    echo "data type is &#10170; " . gettype((object)$c) . "<br><br>";

    echo "<h3>&#10022; Boolean to Object</h3>";
    echo "value of d is &#10170; " . ($d ? 'true' : 'false') . "<br>";
    echo "data type of d is &#10170; " . gettype($d) . "<br>";
    echo "casting Boolean to Object &#10170; ";
    echo "<pre>";
    print_r((object)$d);
    echo "</pre>";
    echo "data type is &#10170; " . gettype((object)$d) . "<br><br>";

    echo "<h3>&#10022; Null to Object</h3>";
    echo "value of e is &#10170; NULL" . $e . "<br>";
    echo "data type of e is &#10170; " . gettype($e) . "<br>";
    echo "casting Null to Object &#10170; ";
    echo "<pre>";
    print_r((object)$e);
    echo "</pre>";
    echo "data type is &#10170; " . gettype((object)$e) . "<br><br>";


    
    // Cast To Null
    // echo "<h2>&#10022; Cast to Null</h2>";

    // echo "<h3>&#10022; Integer to Null</h3>";
    // echo "value of a is &#10170; " . $a . "<br>";
    // echo "data type of a is &#10170; " . var_dump($a) . "<br>";
    // echo "casting Integer to Null &#10170; ";
    // echo "<pre>";
    // print_r((unset)$a);
    // echo "</pre>";
    // echo "data type is &#10170; " . var_dump((unset)$a) . "<br><br>";

    // echo "<h3>&#10022; Float to Null</h3>";
    // echo "value of b is &#10170; " . $b . "<br>";
    // echo "data type of b is &#10170; " . var_dump($b) . "<br>";
    // echo "casting Float to Null &#10170; ";
    // echo "<pre>";
    // print_r((unset)$b);
    // echo "</pre>";
    // echo "data type is &#10170; " . var_dump((unset)$b) . "<br><br>";

    // echo "<h3>&#10022; String to Null</h3>";
    // echo "value of c is &#10170; " . $c . "<br>";
    // echo "data type of c is &#10170; " . var_dump($c) . "<br>";
    // echo "casting String to Null &#10170; ";
    // echo "<pre>";
    // print_r((unset)$c);
    // echo "</pre>";
    // echo "data type is &#10170; " . var_dump((unset)$c) . "<br><br>";

    // echo "<h3>&#10022; Boolean to Null</h3>";
    // echo "value of d is &#10170; " . ($d ? 'true' : 'false') . "<br>";
    // echo "data type of d is &#10170; " . var_dump($d) . "<br>";
    // echo "casting Boolean to Null &#10170; ";
    // echo "<pre>";
    // print_r((unset)$d);
    // echo "</pre>";
    // echo "data type is &#10170; " . var_dump((unset)$d) . "<br><br>";

    // echo "<h3>&#10022; Null to Null</h3>";
    // echo "value of e is &#10170; NULL" . $e . "<br>";
    // echo "data type of e is &#10170; " . var_dump($e) . "<br>";
    // echo "casting Null to Null &#10170; ";
    // echo "<pre>";
    // print_r((unset)$e);
    // echo "</pre>";
    // echo "data type is &#10170; " . var_dump((unset)$e) . "<br><br>";

    ?>

</body>

</html>