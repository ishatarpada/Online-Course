<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract Classes</title>
</head>

<body>
    <?php

    echo "<h1>&#10022; Abstract Class </h1>";

    abstract class parentClass
    {
        public $name;
        public $age;

        // public function __construct($name , $age){
        //         $this->name = $name;
        //         $this->age = $age;
        // }

        abstract protected function show($name, $age);
    }

    class childClass extends parentClass
    {

        public function show($name, $age)
        {
            $this->name = $name;
            $this->age = $age;
            echo "my name is {$this->name} and age is {$this->age} .";
        }
    }

    $test = new childClass();
    $test->show("isha patel", 21);
    echo "<br>";

    abstract class A{
        public $a;
        public $b;

        abstract protected function add($a , $b);
    }

    class calc extends A{
        public function add($a , $b){
            echo $a + $b;
        }
    }

    // $test1 = new calc();
    $test1->add(25 , 35);

    ?>
</body>

</html>