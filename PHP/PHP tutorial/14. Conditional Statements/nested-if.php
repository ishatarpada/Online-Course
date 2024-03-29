<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nested if Statement</title>
</head>

<body>

    <!-- 
        Nested if Statement :-  if statements inside if statements, this is called nested if statements.
     -->

    <?php

    echo "<h1>&#10022; if...elseif...else Statement</h1>";

    echo "<h3>&#10022; candidate eligible or not</h3>";
    $maths = 84;
    $physics = 67;
    $chemistry = 85;
    $total_marks = $maths + $physics + $chemistry;
    $mat_phy_mark = $maths + $physics;

    echo "Maths mark is &#10170; " . $maths . "<br>";
    echo "physics mark is &#10170; " . $physics . "<br>";
    echo "Chemistry mark is &#10170; " . $chemistry . "<br>";
    echo "Total mark is &#10170; " . $total_marks . "<br>";
    echo "Total mark of maths and physics is &#10170; " . $mat_phy_mark . "<br><br>";

    if ($maths >= 65 && $physics >= 55 && $chemistry >= 50) {
        if ($total_marks >= 190 && $mat_phy_mark >= 140) {
            echo " candidate is eligible";
        }
    } elseif ($maths <= 65 && $physics <= 55 && $chemistry <= 50) {
        if ($total_marks >= 190 && $mat_phy_mark >= 140) {
            echo " candidate is not eligible";
        }
    } else {
        return false;
    }

    echo "<br><br>";

    $maths = 55;
    $physics = 47;
    $chemistry = 45;
    $total_marks = $maths + $physics + $chemistry;
    $mat_phy_mark = $maths + $physics;

    echo "Maths mark is &#10170; " . $maths . "<br>";
    echo "physics mark is &#10170; " . $physics . "<br>";
    echo "Chemistry mark is &#10170; " . $chemistry . "<br>";
    echo "Total mark is &#10170; " . $total_marks . "<br>";
    echo "Total mark of maths and physics is &#10170; " . $mat_phy_mark . "<br><br>";

    if ($maths >= 65 && $physics >= 55 && $chemistry >= 50) {
        if ($total_marks >= 190 && $mat_phy_mark >= 140) {
            echo " candidate is eligible";
        }
    } elseif ($maths <= 65 && $physics <= 55 && $chemistry <= 50) {
        if ($total_marks <= 190 && $mat_phy_mark <= 140) {
            echo " candidate is not eligible";
        }
    } else {
        return false;
    }
    ?>

</body>

</html>