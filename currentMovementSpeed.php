<?php
$fileName = "movementSpeed.txt";
$file = fopen($fileName, "r");
$state = fread($file, filesize($fileName));
echo $state;
fclose($file);
?>