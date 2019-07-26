<?php
function temptest(){
$con = mysqli_connect("localhost", "arduser", "ardtest", "arduino");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT ROUND(celsius, 1) AS celsius, event FROM temperature ORDER BY celsius desc LIMIT 5";

if ($result = mysqli_query($con, $query)) {

    /* fetch associative array */
    while ($row = mysqli_fetch_row($result)) {
        echo $row[0]." ".$row[1]."<br/>";
       # printf ("%s (%s)\n", $row[0], $row[1]);
    }
}

/* close connection */
mysqli_close($link);
}
?>