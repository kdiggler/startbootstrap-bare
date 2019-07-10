<?php

$onoroff = $_GET['state'];
$textfile = "../mysensor/ledstate.txt";

$file = fopen($textfile, 'w') or die("Something went wrong!");
$stringToWrite = "$onoroff"; // Write either 1 or 0 depending on request from index.html
fwrite($file, $stringToWrite); // Writes it to the .txt file
fclose($file);

header('Location: index.php'); // Return to frontend

?>

