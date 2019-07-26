<?php
function temptest()
{
    $con = mysqli_connect("localhost", "arduser", "ardtest", "arduino");

    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    $query = "SELECT ROUND(celsius, 1) AS celsius, event FROM temperature ORDER BY celsius desc LIMIT 5";

    if ($result = mysqli_query($con, $query)) {

        echo"<table border=1>";
        echo"<tr><td>Datum</td><td>Temperatur °C</td></tr>\n";

        /* fetch associative array */
        while ($row = mysqli_fetch_assoc($result)) {
            echo"<tr><td>{$row["event"]}</td><td>{$row["celsius"]}</td></tr>\n";
        }
        echo"</table>";
    }

    /* close connection */
    mysqli_close($con);
}
?>
