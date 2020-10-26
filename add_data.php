<?php
include("dbconnect.php");
// Prepare the SQL statement
$SQL = "INSERT INTO arduino.temperature (sensor ,celsius) VALUES ('".$_GET["serial"]."', '".$_GET["temperature"]."')";
// Execute SQL statement
mysqli_query($con,$SQL);

include('dbtest.php');

?>
