<?php
$con = mysqli_connect('localhost', 'arduser', 'ardtest', 'arduino');
if($con->connect_errno > 0){
    die('Unable to connect to database [' . $con->connect_error . ']');
}
// $dbh = mysql_connect($MyHostname , $MyUsername, $MyPassword);
//$selected = mysqli_select_db("arduino",$conn);
?>
