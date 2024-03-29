<?php

namespace myArea;

class Fruit
{
    public function value()
    {
        return Fruit::class;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Constants</title>
</head>

<body>

    <!-- 
        Magic Constants :- nine predefined constants that change value depending on where they are used, and therefor they are called "magic constants".

        These magic constants are written with a double underscore at the start and the end, except for the ClassName::class constant.

        Magic Constants :-
            1. __CLASS__
            2. __DIR__
            3. __FILE__
            4. __FUNCTION__
            5. __LINE__
            6. __METHOD__ 
            7. __NAMESPACE__	
            8. __TRAIT__
            9. ClassName::class

     -->


    <?php

    echo "<h1>&#10022; Magic Constants </h1>";

    echo "<h3>&#10022; __CLASS__ </h3>";
    class Fruits
    {
        public function display()
        {
            return __CLASS__;
        }
    }
    $name = new Fruits();
    echo $name->display();

    echo "<h3>&#10022; __DIR__ </h3>";
    echo __DIR__;

    echo "<h3>&#10022; __FILE__ </h3>";
    echo __FILE__;

    echo "<h3>&#10022; __FUNCTION__ </h3>";
    function display()
    {
        return __FUNCTION__;
    }
    echo display();

    echo "<h3>&#10022; __LINE__ </h3>";
    echo __LINE__;

    echo "<h3>&#10022; __METHOD__ </h3>";
    class car
    {
        public function model()
        {
            return __METHOD__;
        }
    }
    $carObj = new car();
    echo $carObj->model();

    echo "<h3>&#10022; __NAMESPACE__ </h3>";
    function show()
    {
        return __NAMESPACE__;
    }
    echo show();

    echo "<h3>&#10022; __TRAIT__ </h3>";
    trait msg1
    {
        public function msg()
        {
            echo __TRAIT__;
        }
    }
    class Welcome
    {
        use msg1;
    }

    $obj = new Welcome();
    $obj->msg();

    echo "<h3>&#10022; ClassName::class </h3>";
    $kiwi = new Fruit();
    echo $kiwi->value();
    ?>

</body>

</html>