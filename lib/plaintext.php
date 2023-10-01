<?php
function readTextFile($filename) {
    $lines = [];

    if (file_exists($filename)) {
        $file = fopen($filename, 'r');

        if ($file) {
            while (($line = fgets($file)) !== false) {
                $lines[] = trim($line); 
            }

            fclose($file);
        } else {
            echo "Error opening file: $filename";
        }
    } else {
        echo "File does not exist: $filename";
    }

    return $lines;
}

$filename = 'C:\Users\vrnra\OneDrive\Desktop\Git\project\ASE230-Team-Website\plaintext.txt'; 
$data = readTextFile($filename);

foreach ($data as $line) {
    echo $line . "<br>";
}
?>
