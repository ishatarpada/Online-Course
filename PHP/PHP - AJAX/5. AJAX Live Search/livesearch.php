<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("link.xml");

$x = $xmlDoc->getElementsByTagName('link');

// Get the q parameter from URL
$q = $_GET["q"];

// Initialize hint
$hint = "";

// Lookup all links from the XML file if length of q > 0
if (strlen($q) > 0) {
    for ($i = 0; $i < $x->length; $i++) {
        $y = $x->item($i)->getElementsByTagName('title');
        $z = $x->item($i)->getElementsByTagName('url');
        if ($y->item(0)->nodeType == 1) {
            // Find a link matching the search text
            if (stripos($y->item(0)->nodeValue, $q) !== false) {
                $hint .= "<a href='" . $z->item(0)->nodeValue . "' target='_blank'>" . $y->item(0)->nodeValue . "</a><br />";
            }
        }
    }
}

// Set output to "no suggestion" if no hint was found
$response = $hint ? $hint : "no suggestion";

// Output the response
echo $response;
?>
</body>
</html>
