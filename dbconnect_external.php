<?php
$con = mysqli_connect('kdiggler.ddns.net:3306', 'aquacontrol1', 'aqua$1234', 'aquacontroldb');
if($con->connect_errno > 0){
    die('Unable to connect to database [' . $con->connect_error . ']');
}
// $dbh = mysql_connect($MyHostname , $MyUsername, $MyPassword);
//$selected = mysqli_select_db("arduino",$conn);
?>
