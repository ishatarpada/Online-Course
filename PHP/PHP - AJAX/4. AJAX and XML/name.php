<?php

// // Create a new DOMDocument object to work with XML
$xmlDoc = new DOMDocument();

// Load the XML file
$xmlDoc->load("catalog.xml");

$artists = []; // Array to store unique artist names

// Get all CD elements from the XML file
$cds = $xmlDoc->getElementsByTagName('CD');


// Iterate through each CD element
foreach ($cds as $cd) {

    // Get the ARTIST element within the CD
    $artistNode = $cd->getElementsByTagName('ARTIST')->item(0);

    // Get the text content (artist name) of the ARTIST element
    $artistName = $artistNode->nodeValue;

    // Check if the artist name is not already in the array
    if (!in_array($artistName, $artists)) {
        $artists[] = $artistName; // Add artist name to the array if it's not already present
    }
}

// Sort the artist names alphabetically
sort($artists);

// Initialize a variable to store the HTML options for the dropdown
$options = '<option value="">Select an artist:</option>';

// Iterate through each artist name in the sorted array
foreach ($artists as $artist) {
    // Append an option tag with the artist name as both the value and display text
    $options .= "<option value='$artist'>$artist</option>";
}

// Output the generated options for the dropdown
echo $options;

?>
