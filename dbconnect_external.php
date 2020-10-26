<?php
$con_ext = mysqli_connect('kdiggler.ddns.net:3306', 'aquacontrol', 'aqua$1234', 'aquacontroldb');
if($con_ext->connect_errno > 0){
    die('Unable to connect to database [' . $con_ext->connect_error . ']');
}
// $dbh = mysql_connect($MyHostname , $MyUsername, $MyPassword);
//$selected = mysqli_select_db("arduino",$conn);
?>
