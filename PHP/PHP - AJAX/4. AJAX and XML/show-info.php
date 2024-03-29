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
    $xmlDoc->load("catalog.xml");

    $artistName = $_POST['artist_name'];

    $x = $xmlDoc->getElementsByTagName('ARTIST');

    for ($i = 0; $i < $x->length; $i++) {
        // Process only element nodes
        if ($x->item($i)->nodeType == 1) {
            if ($x->item($i)->childNodes->item(0)->nodeValue == $artistName) {
                $cd = ($x->item($i)->parentNode);
            }
        }
    }

    $cdDetails = ($cd->childNodes);

    $output = '';
    for ($i = 0; $i < $cdDetails->length; $i++) {
        // Process only element nodes
        if ($cdDetails->item($i)->nodeType == 1) {
            $output .= "<b>" . $cdDetails->item($i)->nodeName . ":</b> ";
            $output .= $cdDetails->item($i)->childNodes->item(0)->nodeValue;
            $output .= "<br>";
        }
    }

    echo $output;
    ?>

</body>

</html>