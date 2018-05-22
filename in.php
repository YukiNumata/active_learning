<?php

ini_set( 'display_errors', 1 );

$csv  = array();

$file = 'out.txt';
$fp   = fopen($file, "r");

while (($data = fgetcsv($fp, 0, ",")) !== FALSE) {
  $csv[] = $data;
}
fclose($fp);

echo "<table>";

echo "<tr>";
echo "<td>Name</td>";
echo "<td>Age</td>";
echo "<td>Hometown</td>";
echo "</tr>";

for ($i=0; $i<count($csv); $i++){
	$user_info = $csv[$i];
	echo "<tr>";
	echo "<td>".$user_info[0]."</td>";
	echo "<td>".$user_info[1]."</td>";
	echo "<td>".$user_info[2]."</td>";
	echo "</tr>";
}
echo "</table>";

// var_dump($csv);

?>
