<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Break</title>
</head>

<body>
    <!-- 
        The break statement can be used to jump out of different kind of loops.
     -->


    <?php

    echo "<h1>&#10022; Break</h1>";

    echo "<h3>&#10022; break in for Loop </h3>";
    for($i = 0 ; $i < 10 ; $i++){
        if($i==6){
            break;
        }
        echo $i. "<br>";
    }

    echo "<h3>&#10022; break in while Loop </h3>";
    $i = 0 ;
    while($i < 10){
        if($i == 6){
            break;
        }
        echo $i. "<br>";
        $i++;
    }

    echo "<h3>&#10022; break in do while Loop </h3>";
    $i = 0 ;
    do{
        if($i == 6){
            break;
        }
        echo $i. "<br>";
        $i++;
    }while($i < 10);


    echo "<h3>&#10022; break in foreach Loop </h3>";
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $x) {
        if ($x == "blue") break;
        echo "$x <br>";
    }


    ?>
</body>

</html>