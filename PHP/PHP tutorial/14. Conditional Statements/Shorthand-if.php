<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shorthand if / if-else</title>
</head>
<body>
    <!-- 
        Shorthand if / if-else :- 
     -->

     <?php
        $a = 5;
        if ($a < 10) $b = "Hello";
        echo $b;
        echo "<br>";

        $c = 13;

        $d = $c < 10 ? "Hello" : "Good Bye";

        echo $d;
     ?>
</body>
</html>