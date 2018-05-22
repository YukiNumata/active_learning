<?php

ini_set( 'display_errors', 1 );

$name = $_POST["name"];
$age = $_POST["age"];
$hometown = $_POST["hometown"];

$fp = fopen("out.txt", "a");
fwrite($fp, $name.",".$age.",".$hometown."\n");
fclose($fp);

print("Hello, ".$name."(".$age.")!, Your hometown is ".$hometown);

?>
