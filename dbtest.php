<!DOCTYPE html>
<?php
include('dbconnect_external.php');
?>

<?php
    $query = "SELECT ROUND(celsius, 1) AS celsius FROM outdoortemp1 ORDER BY id desc";
    $result = mysqli_query($con, $query);
    $row2 =  mysqli_fetch_assoc($result);

?>    

<strong><?= $row2['celsius'] ?> &deg;C</strong>