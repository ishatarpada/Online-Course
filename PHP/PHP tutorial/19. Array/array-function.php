<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Function</title>
</head>

<body>

    <?php

    echo "<h1>&#10022; PHP Array Functions</h1>";


    echo "<h3>&#10022; Create Array using array()</h3>";
    $fruits = array("Apple" => "Red", "Banana" => "Yellow", "Orange" => "Orange", "Mango" => "Orange", "Watermelon" => "green", "strawbarry" => "pink");
    foreach ($fruits as $key => $value) {
        echo "$key: $value <br>";
    }

    echo "<h3>&#10022; array_change_key_case() : Changes all keys in an array to lowercase or uppercase</h3>";

    $fruits = array_change_key_case($fruits); // Change keys to lowercase

    foreach ($fruits as $key => $value) {
        echo "$key: $value <br>";
    }

    echo "<h3>&#10022; array_chunk() Splits an array into chunks of arrays</h3>";

    // Split the array into chunks of arrays
    $chunked_fruits = array_chunk($fruits, 3, true);

    // Iterate over each chunk and display its contents
    foreach ($chunked_fruits as $key => $chunk) {
        echo "Chunk $key:<br>";
        foreach ($chunk as $key => $value) {
            echo "$key: $value <br>";
        }
        echo "<br>";
    }

    echo "<h3>&#10022; array_column()	Returns the values from a single column in the input array</h3>";

    $info = array(
        array(
            'id' => 5698,
            'first_name' => 'Peter',
            'last_name' => 'Griffin',
        ),
        array(
            'id' => 4767,
            'first_name' => 'Ben',
            'last_name' => 'Smith',
        ),
        array(
            'id' => 3809,
            'first_name' => 'Joe',
            'last_name' => 'Doe',
        )
    );

    $last_names = array_column($info, 'last_name');
    echo "<pre>";
    print_r($last_names);
    echo "</pre>";

    echo "<h3>&#10022; array_combine()	creates an array by using the elements from one 'keys' array and one 'values' array.</h3>";

    $fname = array("Peter", "Ben", "Joe");
    $age = array("35", "37", "43");

    $combine_array = array_combine($fname, $age);
    foreach ($combine_array as $x => $y) {
        echo "$x:$y  <br>";
    }

    echo "<h3>&#10022; array_count_values() Counts all the values of an array</h3>";
    $count = array_count_values($fruits);
    echo "<pre>";
    print_r($count);
    echo "</pre>";

    // foreach ($count as $fruit => $value) {
    //     echo "There are " . $value . " occurrences of " . $fruit . " in the array.<br>";
    // }

    echo "<h3>&#10022;array_diff()  Compare arrays, and returns the differences (compare values only)</h3>";

    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    $a2 = array("e" => "red", "f" => "green", "g" => "blue");

    $difference = array_diff($a1, $a2);
    echo "<pre>";
    print_r($difference);
    echo "</pre>";

    echo "<h3>&#10022; array_diff_assoc() Compare arrays, and returns the differences (compare keys and values) </h3>";

    // Define two arrays
    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    $a2 = array("a" => "red", "b" => "green", "c" => "blue");

    // Find the differences between the two arrays
    $result = array_diff_assoc($a1, $a2);

    // Print the differences
    echo "<pre>";
    print_r($result);
    echo "</pre>";

    echo "<h3>&#10022; array_diff_key()	Compare arrays, and returns the differences (compare keys only) </h3>";

    // Define two arrays
    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    $a2 = array("e" => "red", "f" => "green", "c" => "blue");

    // Find the differences between the two arrays
    $result_1 = array_diff_key($a1, $a2);

    // Print the differences
    echo "<pre>";
    print_r($result_1);
    echo "</pre>";


    echo "<h3>&#10022; array_diff_uassoc()	Compare arrays, and returns the differences (compare keys and values, using a user-defined key comparison function) </h3>";

    // Define two arrays
    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    $a2 = array("e" => "red", "f" => "green", "c" => "blue");

    function myFunction($a, $b)
    {
        if ($a === $b) {
            return 0;
        }
        return ($a > $b) ? 1 : -1;
    }

    // Find the differences between the two arrays
    $result_2 = array_diff_uassoc($a1, $a2, "myFunction");

    // Print the differences
    echo "<pre>";
    print_r($result_2);
    echo "</pre>";

    echo "<h3> &#10022; array_diff_ukey()	Compare arrays, and returns the differences (compare keys only, using a user-defined key comparison function)</h3>";

    $a1 = array("a" => "red", "b" => "green", "c" => "blue");
    $a2 = array("a" => "blue", "b" => "black", "e" => "blue");

    $result_3 = array_diff_ukey($a1, $a2, "myFunction");
    print_r($result_3);

    echo "<h3> &#10022; array_fill() function fills an array with values.</h3>";

    $fill_arr = array_fill(3, 4, "blue");
    echo "<pre>";
    print_r($fill_arr);
    echo "</pre>";

    echo "<h3> &#10022; array_fill_keys() function fills an array with values, specifying keys.</h3>";
    $keys = array("a", "b", "c", "d");
    $a1 = array_fill_keys($keys, "blue");
    echo "<pre>";
    print_r($a1);
    echo "</pre>";

    echo "<h3> &#10022; array_filter() function filters the values of an array using a callback function.</h3>";
    function test_odd($var)
    {
        return ($var & 1);
    }

    $a1 = array(1, 3, 2, 3, 4);
    echo "<pre>";
    print_r(array_filter($a1, "test_odd"));
    echo "</pre>";

    echo "<h3> &#10022; array_flip() function flips/exchanges all keys with their associated values in an array.</h3>";
    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    $result = array_flip($a1);
    echo "<pre>";
    print_r($result);
    echo "</pre>";

    echo "<h3> &#10022; array_intersect() function compares the values of two (or more) arrays, and returns the matches.</h3>";
    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    $a2 = array("e" => "red", "f" => "green", "g" => "purple");

    $result = array_intersect($a1, $a2);
    echo "<pre>";
    print_r($result);
    echo "</pre>";

    echo "<h3> &#10022; array_intersect_assoc()	Compare arrays and returns the matches (compare keys and values)</h3>";
    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    $a2 = array("e" => "red", "f" => "green", "g" => "purple");

    $result = array_intersect_assoc($a1, $a2);
    echo "<pre>";
    print_r($result);
    echo "</pre>";

    echo "<h3> &#10022; array_intersect_key()	Compare arrays, and returns the matches (compare keys only).</h3>";
    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    $a2 = array("e" => "red", "f" => "green", "g" => "purple");

    $result = array_intersect_key($a1, $a2);
    echo "<pre>";
    print_r($result);
    echo "</pre>";

    echo "<h3> &#10022; array_intersect_uassoc()	Compare arrays, and returns the matches (compare keys and values, using a user-defined key comparison function).</h3>";
    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    $a2 = array("e" => "red", "f" => "green", "g" => "purple");

    $result = array_intersect_uassoc($a1, $a2, "myFunction");
    echo "<pre>";
    print_r($result);
    echo "</pre>";

    echo "<h3> &#10022; array_intersect_ukey()	Compare arrays, and returns the matches (compare keys only, using a user-defined key comparison function).</h3>";
    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    $a2 = array("e" => "red", "f" => "green", "g" => "purple");

    $result = array_intersect_ukey($a1, $a2, "myFunction");
    echo "<pre>";
    print_r($result);
    echo "</pre>";

    echo "<h3> &#10022; array_key_exists() function checks an array for a specified key, and returns true if the key exists and false if the key does not exist.</h3>";

    $a = array("Volvo" => "XC90", "BMW" => "X5");
    if (array_key_exists("Volvo", $a)) {
        echo "Key exists! <br>";
    } else {
        echo "Key does not exist!<br>";
    }
    if (array_key_exists("Audi", $a)) {
        echo "Key exists! <br>";
    } else {
        echo "Key does not exist!<br>";
    }

    echo "<h3> &#10022; array_keys()	Returns all the keys of an array.</h3>";

    $a = array("Volvo" => "XC90", "BMW" => "X5");
    $ans = array_keys($a);
    echo "<pre>";
    print_r($ans);
    echo "</pre>";


    echo "<h3> &#10022; array_map() function sends each value of an array to a user-made function, and returns an array with new values, given by the user-made function.</h3>";
    function func($v)
    {
        return ($v * $v);
    }

    $a = array(1, 2, 3, 4, 5);
    $b = array(6, 7, 8, 9, 10);
    echo "<pre>";
    print_r(array_map("func", $a));
    echo "</pre>";

    echo "<h3> &#10022; array_merge()	Merges one or more arrays into one array</h3>";

    $a = array(1, 2, 3, 4, 5);
    echo "<pre>";
    print_r(array_merge($a, $b));
    echo "</pre>";

    echo "<h3> &#10022; array_merge_recursive()	Merges one or more arrays into one array recursively</h3>";

    $a = array(1, 2, 3, 4, 5);
    echo "<pre>";
    print_r(array_merge_recursive($a, $b));
    echo "</pre>";

    echo "<h3> &#10022; array_multisort() Sorts multiple or multi-dimensional arrays</h3>";

    $a = array("Dog", "Cat", "Horse", "Bear", "Zebra");
    array_multisort($a);
    echo "<pre>";
    print_r($a);
    echo "</pre>";

    echo "<h3> &#10022; array_pad()	Inserts a specified number of items, with a specified value, to an array</h3>";

    $a = array("red", "green");
    echo "<pre>";
    print_r(array_pad($a, 5, "blue"));
    echo "</pre>";

    echo "<h3> &#10022; array_product()	Calculates the product of the values in an array. </h3>";

    echo "<pre>";
    $arr = array(10, 20);
    print_r(array_product($arr));
    echo "</pre>";

    echo "<h3> &#10022; array_pop()	Deletes the last element of an array.</h3>";

    echo "<pre>";
    print_r(array_pop($fruits));
    echo "</pre>";

    echo "<h3> &#10022; array_push() Inserts one or more elements to the end of an array.</h3>";

    echo "<pre>";
    print_r(array_push($fruits, "guava"));
    echo "</pre>";

    echo "<h3> &#10022; array_rand()	Returns one or more random keys from an array.</h3>";

    $fruits = array("apple", "banana", "orange", "grape", "watermelon");

    $random_keys = array_rand($fruits, 3); // Get two random keys
    if (is_array($random_keys)) {
        foreach ($random_keys as $x => $y) {
            echo "$x : $fruits[$y] <br>";
        }
    } else {
        echo "Random key: $random_keys, Fruit: $fruits[$random_keys] <br>";
    }

    echo "<h3> &#10022; array_reduce()	Returns an array as a string, using a user-defined function.</h3>";
    function reduceFunction($v1, $v2)
    {
        return $v1 . "-" . $v2;
    }
    echo "<pre>";
    print_r(array_reduce($fruits, "reduceFunction"));
    echo "</pre>";

    echo "<h3> &#10022; array_replace()	Replaces the values of the first array with the values from following arrays.</h3>";

    $a1 = array("red", "green");
    $a2 = array("blue", "yellow");
    echo "<pre>";
    print_r(array_replace($a1, $a2));
    echo "</pre>";

    echo "<h3> &#10022; array_replace_recursive()	Replaces the values of the first array with the values from following arrays recursively.</h3>";

    $a1 = array("a" => array("red"), "b" => array("green", "blue"),);
    $a2 = array("a" => array("yellow"), "b" => array("black"));
    echo "<pre>";
    print_r(array_replace_recursive($a1, $a2));
    echo "</pre>";

    echo "<h3> &#10022; array_reverse()	Returns an array in the reverse order.</h3>";

    echo "<pre>";
    print_r(array_reverse($fruits));
    echo "</pre>";

    echo "<h3> &#10022; array_search()	Searches an array for a given value and returns the key.</h3>";

    echo "<pre>";
    print_r(array_search("orange", $fruits));
    echo "<br>";
    print_r(array_search("banana", $fruits));
    echo "<br>";
    print_r(array_search("watermelon", $fruits));
    echo "</pre>";

    echo "<h3> &#10022; array_shift()	Removes the first element from an array, and returns the value of the removed element.</h3>";

    echo "<pre>";
    print_r(array_shift($fruits));
    echo "</pre>";

    echo "<h3> &#10022; array_unshift()	Adds one or more elements to the beginning of an array.</h3>";

    echo "<pre>";
    print_r(array_unshift($fruits, "guava"));
    echo "</pre>";

    echo "<h3> &#10022;array_slice() Returns selected parts of an array</h3>";

    echo "<pre>";
    print_r(array_slice($fruits, 2));
    echo "</pre>";

    echo "<h3> &#10022; array_splice()	Removes and replaces specified elements of an array </h3>";

    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    $a2 = array("a" => "purple", "b" => "orange", "c" => "black");
    echo "<pre>";
    print_r(array_splice($a1, 0, 3, $a2));
    echo "</pre>";

    echo "<h3> &#10022; array_sum()	Returns the sum of the values in an array </h3>";
    $a = array(5, 15, 25);
    echo array_sum($a);

    echo "<h3> &#10022; array_udiff()	Compare arrays, and returns the differences (compare values only, using a user-defined key comparison function).</h3>";

    $a1 = array("a" => "red", "b" => "green", "c" => "blue");
    $a2 = array("a" => "blue", "b" => "black", "e" => "blue");

    $result = array_udiff($a1, $a2, "myFunction");
    echo "<pre>";
    print_r($result);
    echo "</pre>";

    echo "<h3> &#10022; array_udiff_assoc()	Compare arrays, and returns the differences (compare keys and values, using a built-in function to compare the keys and a user-defined function to compare the values).</h3>";;

    $result = array_udiff_assoc($a1, $a2, "myFunction");
    echo "<pre>";
    print_r($result);
    echo "</pre>";

    echo "<h3> &#10022; array_udiff_uassoc()	Compare arrays, and returns the differences (compare keys and values, using two user-defined key comparison functions).</h3>";

    function myFunction_key($a, $b)
    {
        if ($a === $b) {
            return 0;
        }
        return ($a > $b) ? 1 : -1;
    }

    function myFunction_value($a, $b)
    {
        if ($a === $b) {
            return 0;
        }
        return ($a > $b) ? 1 : -1;
    }

    $result = array_udiff_uassoc($a1, $a2, "myFunction_key", "myFunction_value");
    echo "<pre>";
    print_r($result);
    echo "</pre>";

    echo "<h3> &#10022; array_uintersect()	Compare arrays, and returns the matches (compare values only, using a user-defined key comparison function).</h3>";

    $a1 = array("a" => "red", "b" => "green", "c" => "blue");
    $a2 = array("a" => "blue", "b" => "black", "e" => "blue");

    $result = array_uintersect($a1, $a2, "myFunction");
    echo "<pre>";
    print_r($result);
    echo "</pre>";

    echo "<h3> &#10022; array_uintersect_assoc()	Compare arrays, and returns the matches (compare keys and values, using a built-in function to compare the keys and a user-defined function to compare the values).</h3>";;

    $result = array_uintersect_assoc($a1, $a2, "myFunction");
    echo "<pre>";
    print_r($result);
    echo "</pre>";

    echo "<h3> &#10022; array_uintersect_uassoc()	Compare arrays, and returns the matches (compare keys and values, using two user-defined key comparison functions).</h3>";

    $result = array_uintersect_uassoc($a1, $a2, "myFunction_key", "myFunction_value");
    echo "<pre>";
    print_r($result);
    echo "</pre>";

    echo "<h3> &#10022; array_unique()	Removes duplicate values from an array.</h3>";
    $num = array(12, 215, 12, 256, 10, 23, 1, 10, 230);
    echo "<pre>";
    print_r($num);
    echo "</pre>";

    echo " unique array is &#10170; <br> ";
    echo "<pre>";
    print_r(array_unique($num));
    echo "</pre>";

    echo "<h3> &#10022; array_values()	Returns all the values of an array.</h3>";
    echo "<pre>";
    print_r(array_values($num));
    echo "</pre>";

    echo "<h3> &#10022; array_walk() Applies a user function to every member of an array.</h3>";

    function walk_function($value, $key)
    {
        echo "The key $key has the value $value <br>";
    }

    echo "<pre>";
    print_r(array_walk($num, "walk_function"));
    echo "</pre>";

    // Use array_walk_recursive() to apply walk_function recursively
    echo "<h3>&#10022; array_walk_recursive() Applies a user function recursively to every member of an array.</h3>";
    echo "<pre>";
    print_r(array_walk_recursive($num, "walk_function"));
    echo "</pre>";

    echo "<h3>&#10022; sort() - sort arrays in ascending order</h3>";

    echo "<br/><b> &#10170; in  ascending alphabetical order ... </b><br><br>";
    $fruits = array("Apple", "Banana", "Cherry", "Mango", "Orange", "Kiwi", "Watermelon");
    foreach ($fruits as $x => $y) {
        echo "$x : $y <br/>";
    }
    echo "<b> &#10174; Now Sorting items ... </b><br/>";
    sort($fruits);
    foreach ($fruits as $x => $y) {
        echo "$x : $y <br/>";
    }

    echo "<br/><b> &#10170; in  ascending Numeric order ... </b><br><br>";

    $numbers = array(4, 6, 2, 22, 11);
    foreach ($numbers as $x => $y) {
        echo "$x : $y <br/>";
    }
    echo "<b> &#10174; Now Sorting items ... </b><br/>";
    sort($numbers);
    foreach ($numbers as $x => $y) {
        echo "$x : $y <br/>";
    }


    echo "<h3>&#10022; rsort() - sort arrays in descending order</h3>";

    echo "<br/><b> &#10170; in  descending alphabetical order ... </b><br><br>";
    $fruits = array("Apple", "Banana", "Cherry", "Mango", "Orange", "Kiwi", "Watermelon");
    foreach ($fruits as $x => $y) {
        echo "$x : $y <br/>";
    }
    echo "<b> &#10174; Now Sorting items ... </b><br/>";
    rsort($fruits);
    foreach ($fruits as $x => $y) {
        echo "$x : $y <br/>";
    }

    echo "<br/><b> &#10170; in  descending Numeric order ... </b><br><br>";

    $numbers = array(4, 6, 2, 22, 11);
    foreach ($numbers as $x => $y) {
        echo "$x : $y <br/>";
    }
    echo "<b> &#10174; Now Sorting items ... </b><br/>";
    rsort($numbers);
    foreach ($numbers as $x => $y) {
        echo "$x : $y <br/>";
    }

    echo "<h3>&#10022; asort() - sort associative arrays in ascending order, according to the value</h3>";

    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    foreach ($age as $x => $y) {
        echo "$x : $y <br/>";
    }
    echo "<b> &#10174; Now Sorting items ... </b><br/>";
    asort($age);
    foreach ($age as $x => $y) {
        echo "$x : $y <br/>";
    }

    echo "<h3>&#10022; ksort() - sort associative arrays in ascending order, according to the key</h3>";

    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    foreach ($age as $x => $y) {
        echo "$x : $y <br/>";
    }
    echo "<b> &#10174; Now Sorting items ... </b><br/>";
    ksort($age);
    foreach ($age as $x => $y) {
        echo "$x : $y <br/>";
    }

    echo "<h3>&#10022; arsort() - sort associative arrays in descending order, according to the value</h3>";

    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    foreach ($age as $x => $y) {
        echo "$x : $y <br/>";
    }
    echo "<b> &#10174; Now Sorting items ... </b><br/>";
    arsort($age);
    foreach ($age as $x => $y) {
        echo "$x : $y <br/>";
    }

    echo "<h3>&#10022; krsort() - sort associative arrays in descending order, according to the key</h3>";

    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    foreach ($age as $x => $y) {
        echo "$x : $y <br/>";
    }
    echo "<b> &#10174; Now Sorting items ... </b><br/>";
    krsort($age);
    foreach ($age as $x => $y) {
        echo "$x : $y <br/>";
    }
    ?>
</body>

</html>