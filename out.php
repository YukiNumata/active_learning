<?php

ini_set( 'display_errors', 1 );

$name = "Lui";
$age = "30";

$fp = fopen("out.txt", "a");
fwrite($fp, $name.",".$age."\n");

fclose($fp);

?>
