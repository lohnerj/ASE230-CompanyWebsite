$Open = fopen("info.csv", "r");
$data = fgetcsv($Open, 1000, ",");
while (($data = fgetcsv($Open, 1000, ",")) !== FALSE) 
{
  $array[] = $data    
}

fclose($Open);