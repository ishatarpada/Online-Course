<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>
<body>
    
    <!-- 
        String :- sequence of characters.

        =>Single quoted string literals returns the string as it is.
        =>Double quoted string literals perform operations for special characters.

        =>String Length :- strlen()


     -->


    <?php 

    $name = "isha";
    echo "Hello isha <br>";
    echo "hello $name <br>";
    echo 'hello $name <br>';

    // =>String Length :- strlen()
    echo "length of the isha is &#10170; " .strlen($name). "<br>";

    // Word Count :- str_word_count()
    $str = "Hello world!";
    echo "word of the Hello world! is &#10170; " .str_word_count($str). "<br>";
    
    // Search for Text Within a string : strpos() .
    $str1 = "Hello world!";
    echo "word of the position at &#10170; " .strpos("Hello world!", "world"). "<br>";



    ?>


</body>
</html>