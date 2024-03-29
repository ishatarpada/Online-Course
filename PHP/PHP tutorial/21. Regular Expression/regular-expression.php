<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Regular Expressions</title>
</head>

<body>
    <!-- 
        Regular Expression
            A regular expression is a sequence of characters that forms a search pattern. When you search for data in a text, you can use this search pattern to describe what you are searching for.

            A regular expression can be a single character, or a more complicated pattern.

            Regular expressions can be used to perform all types of text search and text replace operations.

            Regular Expression Functions
            PHP provides a variety of functions that allow you to use regular expressions.

            The most common functions are:

            Function	        Description
            preg_match()	    Returns 1 if the pattern was found in the string and 0 if not
            preg_match_all()	Returns the number of times the pattern was found in the string, which may also be 0
            preg_replace()	    Returns a new string where matched patterns have been replaced with another string
     -->


    <?php

    echo "<h1>&#10022; Regular Expressions</h1>";

    // function
    echo "<h2>&#10022; Regular Expression Functions</h2>";

    echo "<p>&#10022; Using preg_match() </p>";

    $str = "Visit W3Schools";
    $pattern = "/w3schools/i";
    echo preg_match($pattern, $str);

    echo "<p>&#10022; Using preg_match_all() </p>";

    $str = "The rain in SPAIN falls mainly on the plains.";
    $pattern = "/ain/i";
    echo preg_match_all($pattern, $str);

    echo "<p>&#10022; Using preg_replace() </p>";

    $str = "Visit Microsoft!";
    $pattern = "/microsoft/i";
    echo preg_replace($pattern, "W3Shcools", $str);



    // modifiers
    echo "<h2>&#10022; Regular Expression Modifiers</h2>";

    echo "<p>&#10022; i &#10170; Performs a case-insensitive search </p>";

    $txt = "W3Schools";
    $pattern = "/s/i";
    echo preg_match_all($pattern, $txt);


    echo "<p>&#10022; m &#10170; Performs a multiline search (patterns that search for a match at the beginning or end of a string will now match the beginning or end of each line) </p>";

    $txt = "you are better than\nyou think";
    $pattern = "/^you/m";
    echo preg_match_all($pattern, $txt);

    echo "<p>&#10022; u &#10170; Enables correct matching of UTF-8 encoded patterns</p>";
    $text = "Café is a great place to have coffee. ☕";
    $pattern = '/Café/u';
    echo preg_match_all($pattern, $text);

    echo "<h2>&#10022; Regular Expression Patterns </h2>";
    $text = "Café is a great place to have coffee. ☕";
    echo $text . "<br><br>";

    echo "<p>&#10022; [abc] &#10170; Find one or many of the characters inside the brackets</p>";

    $text = "Café is a great place to have coffee. ☕";
    $pattern = "/[WS]/";
    echo preg_match_all($pattern, $text);


    echo "<p>&#10022; [^abc] &#10170; Find any character NOT between the brackets </p>";

    $text = "Café is a great place to have coffee. ☕";
    $pattern = "/[^eo]/";
    echo preg_match_all($pattern, $text);

    echo "<p>&#10022; [a-z] &#10170; Find any character alphabetically between two letters</p>";
    $text = "Café is a great place to have coffee. ☕";
    $pattern = '/[a-m]/u';
    echo preg_match_all($pattern, $text);


    echo "<p>&#10022; [A-z] &#10170; Find any character alphabetically between a specified upper-case letter and a specified lower-case letter</p>";
    $text = "Café is a great place to have coffee. ☕";
    $pattern = '/[A-m]/u';
    echo preg_match_all($pattern, $text);


    echo "<p>&#10022; [A-Z] &#10170; Find any character alphabetically between two upper-case letters.</p>";
    $text = "Café is a great place to have coffee. ☕";
    $pattern = '/[A-M]/u';
    echo preg_match_all($pattern, $text);

    echo "<p>&#10022; [a-z] &#10170; Find any character alphabetically between two letters</p>";
    $text = "Café is a great place to have coffee. ☕";
    $pattern = '/[a-m]/u';
    echo preg_match_all($pattern, $text);


    echo "<p>&#10022; [A-z] &#10170; Find any character alphabetically between a specified upper-case letter and a specified lower-case letter</p>";
    $text = "Café is a great place to have coffee. ☕";
    $pattern = '/[A-m]/u';
    echo preg_match_all($pattern, $text);


    echo "<p>&#10022; [A-Z] &#10170; Find any character alphabetically between two upper-case letters.</p>";
    $text = "Café is a great place to have coffee. ☕";
    $pattern = '/[A-M]/u';
    echo preg_match_all($pattern, $text);

    // Metacharacters
    echo "<h2>&#10022; Regular Expression Metacharacters </h2>";
    $text = "Café is a great place to have coffee. ☕";
    echo $text . "<br><br>";

    echo "<p>&#10022; | &#10170; Find a match for any one of the patterns separated by | as </p>";

    $text = "Café is a great place to have coffee. ☕";
    $pattern = "/have | great | place /";
    echo preg_match_all($pattern, $text);


    echo "<p>&#10022; . &#10170; Find any character </p>";

    $text = "Café is a great place to have coffee. ☕";
    $pattern = "/./";
    echo preg_match_all($pattern, $text);

    echo "<p>&#10022; ^ &#10170; Finds a match as the beginning of a string as</p>";
    $text = "Café is a great place to have coffee. ☕";
    $pattern = '/^Ca/';
    echo preg_match_all($pattern, $text);


    echo "<p>&#10022; $ &#10170; 	Finds a match at the end of the string as in: </p>";
    $pattern = '/☕$/';
    echo preg_match_all($pattern, $text);


    echo "<p>&#10022; \d &#10170; Find any digits </p>";
    $text = "Café is a great place to have coffee. ☕";
    $pattern = '/\d/';
    echo preg_match_all($pattern, $text);

    echo "<p>&#10022; \D &#10170; Find any non-digits</p>";
    $text = "Café is a great place to have coffee. ☕";
    $pattern = '/\D/';
    echo preg_match_all($pattern, $text);


    echo "<p>&#10022; \s &#10170; 	Find any whitespace character.</p>";
    $pattern = '/\s/';
    echo preg_match_all($pattern, $text);


    echo "<p>&#10022; \S &#10170; 	Find any non-whitespace character</p>";
    $text = "Café is a great place to have coffee. ☕";
    $pattern = '/\S/';
    echo preg_match_all($pattern, $text);

    echo "<p>&#10022; \b &#10170; 	Find a match at the beginning of a word like this: \bWORD, or at the end of a word like this: WORD\b </p>";
    $text = "café is a great place to have coffee. ☕";
    $pattern = '/\bc/';
    echo preg_match_all($pattern, $text);


    echo "<p>&#10022; \w &#10170; 	Find any alphabetical letter (a to Z) and digit (0 to 9) </p>";
    $pattern = '/\w/';
    echo preg_match_all($pattern, $text);


    echo "<p>&#10022; \W &#10170; 	Find any non-alphabetical and non-digit character </p>";
    $pattern = '/\W/';
    echo preg_match_all($pattern, $text);



    // quantifiers

    echo "<h2>&#10022; Regular Expression quantifiers </h2>";
    $text = "Café is a great place to have coffee. ☕";
    echo $text . "<br>";

    echo "<p>&#10022; n+ &#10170; Matches any string that contains at least one n </p>";
    $pattern = "/a+/";
    echo preg_match_all($pattern, $text);

    echo "<p>&#10022; n* &#10170; 	Matches any string that contains zero or more occurrences of n</p>";
    $pattern = '/a*/';
    echo preg_match_all($pattern, $text);


    echo "<p>&#10022; n? &#10170; Matches any string that contains zero or one occurrences of n </p>";
    $pattern = '/a?/';
    echo preg_match_all($pattern, $text);


    echo "<p>&#10022; n{3} &#10170; Matches any string that contains a sequence of 3 n's </p>";
    $pattern = '/a{3}/';
    echo preg_match_all($pattern, $text);

    echo "<p>&#10022; n{2,5} &#10170; 	Matches any string that contains a sequence of at least 2, but not more that 5 n's</p>";
    $pattern = '/e{0,1}/';
    echo preg_match_all($pattern, $text);


    echo "<p>&#10022; n{3,} &#10170; Matches any string that contains a sequence of at least 3 n's</p>";
    $pattern = '/e{0,}/';
    echo preg_match_all($pattern, $text);

    // grouping
    echo "<h2>&#10022; Regular Expression Grouping  </h2>";
    $str = "Apples and bananas.";
    $pattern = "/ba(na){2}/i";
    echo preg_match($pattern, $str);
    ?>
</body>

</html>