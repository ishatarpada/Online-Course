<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overriding Inherited Methods</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <h1 class="fs-4 text-center text-danger">Overriding Inherited Methods</h1>


    <?php

        class Fruits{
            public $name;
            public $color;

            public function __construct($name , $color)
            {
                $this->name = $name;
                $this->color = $color;
            }

            protected function intro(){
                echo "The Fruit is {$this->name} and the color is {$this->color}";
            }
        }

        class Apple extends Fruits{
            public $weight;
            public function __construct($name, $color, $weight) {
              $this->name = $name;
              $this->color = $color;
              $this->weight = $weight;
            }
            public function intro() {
              echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
            }
        }

        $apple = new Apple("apple" , "red" , 50);
        $apple->intro();
    ?>


</body>

</html>