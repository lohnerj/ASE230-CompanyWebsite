<?php
function readJsonFile($filePath) {
    // Check if the file exists
    if (file_exists($filePath)) {
        // Read the JSON file contents
        $jsonContents = file_get_contents($filePath);

        // Decode the JSON data into a PHP array
        $dataArray = json_decode($jsonContents, true);

        if ($dataArray === null) {
            // JSON decoding failed
            return null;
        }

        return $dataArray;
    } else {
        // File does not exist
        return null;
    }
}




?>
