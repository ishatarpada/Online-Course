<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types</title>
</head>

<body>


    <!-- 
        Data Types :- variable can store data of different types it's called data types.

        Data Types :- 
        1. Strings
        2. Integer
        3. Float
        4. Boolean
        5. Array
        6. Object
        7. NULL
        8. Resource

        getting the data type :- var_dump() function.
        var_dump() return the data type of variable.

        Change Data Type : using the casting

     -->


    <?php

    // integer
    $x = 5;
    echo "var_dump($x) &#10170; " .$x. "<br>";
    echo var_dump($x) ."<br>";


    // string
    $txt = "Isha Patel";
    echo "var_dump($txt) &#10170; " .$txt. "<br>";
    echo var_dump($txt) ."<br>";


    // float 
    $y = 55.26;
    echo "var_dump($y) &#10170; " .$y. "<br>";
    echo var_dump($y) ."<br>";


    // Boolean 
    $var1 = true;
    $var2 = false;
    echo "var_dump($var1) &#10170; " .$var1. "<br>";
    echo var_dump($var1) ."<br>";
    echo "var_dump($var2) &#10170; " .$var2. "<br>";
    echo var_dump($var2) ."<br>";


    // arrays 
    $cars = array("Volvo","BMW","Toyota");
    // echo "var_dump($car) &#10170; " .$car. "<br>";
    echo var_dump($cars) ."<br>";

    // object
    class Dog {
        public $color;
        public $name;

        public function __construct($color , $name){
            $this->color = $color;
            $this->name = $name;
        }          
        public function message(){
            return "My Dog name is a " .$this->name. " and color is " .$this->color. " ! ";
        }
    }

    $myDog = new Dog("black" , "john");
    // echo $myDog;
    echo var_dump($myDog) ."<br>";

    // null
    $var3 = null;
    echo var_dump($var3) ."<br>";


    // change the data type 
    $x = 5;
    echo var_dump($x) ."<br>";
    $x = (string) $x;
    echo var_dump($x) ."<br>";
    ?>


</body>

</html>