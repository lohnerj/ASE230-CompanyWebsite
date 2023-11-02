<?php
function readCSVFile($filename) {
  $data = array(); // Initialize an empty array to store the CSV data
  
  if (($handle = fopen($filename, "r")) !== false) {
      // Read each line from the CSV file
      while (($row = fgetcsv($handle, 0, ",")) !== false) {
          $data[] = $row; // Add each row as an array to the data array
      }
      fclose($handle); // Close the CSV file
  } else {
      // Handle any errors, e.g., file not found
      return false;
  }
  
  return $data;
}


?>


