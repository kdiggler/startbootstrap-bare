<!DOCTYPE html>
<?php
include('dbconnect_external.php');
include('dbconnect.php');

    $query = "SELECT ROUND(celsius, 1) AS celsius FROM outdoortemp1 ORDER BY id desc LIMIT 1";
    $result = mysqli_query($con_ext, $query);
#    $outdoortemp_ext =  mysqli_fetch_assoc($result);

    $SQL = "INSERT INTO arduino.outdoortemp1 (sensor, celsius) VALUES ('WS_temp1', '$result')";

// Execute SQL statement
    mysqli_query($con,$SQL);
    

?>

<strong><?= $result ?> &deg;C</strong>

