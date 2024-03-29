<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Inheritance and the Protected Access Modifier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <h1 class="fs-4 text-center text-danger"> Inheritance and the Protected Access Modifier</h1>


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

        class Strawberry extends Fruits{
            public function message(){
                echo "Am I a fruit or a berry? ";
            }
        }

        $strawberry = new Strawberry("Strawberry" , "red");
        $strawberry->message();

        // give the error because intro method is protected , protected method can't access outside of the class it only access in derived class.
        // $strawberry->intro();
    ?>


</body>

</html>