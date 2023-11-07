<?php
// Get the POST data
$data = json_decode(file_get_contents('php://input'), true);

// Ensure that the data is not empty
if (!empty($data['headerId']) && !empty($data['alignmentClass'])) {
    // Sanitize the data if necessary
    $headerId = htmlspecialchars($data['headerId']);
    $alignmentClass = htmlspecialchars($data['alignmentClass']);

    // Save the data to a text file
    $file = 'saved_alignments.txt';
    $current = file_get_contents($file);
    $current .= "Header ID: $headerId, Alignment Class: $alignmentClass\n";
    file_put_contents($file, $current);
    echo "Data saved successfully.";
} else {
    echo "Error: Invalid data received.";
}
?>
