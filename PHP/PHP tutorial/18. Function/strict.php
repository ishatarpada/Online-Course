<?php

declare(strict_types=1);

// echo "<h3>&#10022; Strict Mode </h3>";
//     function addNumbers(int $a, int $b) {
//         return $a + $b;
//       }
//       echo addNumbers(5, "5 days");

echo "<h3>&#10022;PHP Return Type Declarations</h3>";
function addNumbers(float $a, float $b): float
{
    return $a + $b;
}
echo addNumbers(1.2, 5.2). "<br>";

function addNumber(float $a, float $b): int
{
    return (int)($a + $b);
}
echo addNumber(1.2, 5.2);
