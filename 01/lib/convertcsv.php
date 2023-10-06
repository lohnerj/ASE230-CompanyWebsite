<?php
$file='info.csv';
$fp=fopen($file, 'r');
while(!feof($fp)) {
  $content=fgets($fp);
  $award=explode('", ', $content);
  echo "<ul>";
    echo "<li>$award[0] </li>";
    echo "<li>$award[1] </li>";
  echo "</ul>";
  '<br >';
}
fclose($fp);
echo '<hr>';
?>
