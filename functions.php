<?php
#TEMPERATUR INNEN FUNCTION
function tempindoor()
{
    $con = mysqli_connect("localhost", "arduser", "ardtest", "arduino");

    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

   $query = "SELECT MAX(celsius) AS celsius, event, DATE(event) AS date_created FROM temperatures GROUP BY DATE(event) ORDER BY celsius desc LIMIT 5";
    # $query = "SELECT ROUND(celsius, 1) AS celsius, event FROM temperature ORDER BY celsius desc LIMIT 5";

    if ($result = mysqli_query($con, $query)) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo"<tr><td>{$row["event"]}</td><td>{$row["celsius"]}</td></tr>\n";
        }

    }
    /* close connection */
    mysqli_close($con);
}

#TEMPERATUR WASSER FUNCTION
function tempaqua()
{
    $con = mysqli_connect("localhost", "arduser", "ardtest", "arduino");

    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    $query = "SELECT ROUND(celsius, 1) AS celsius, event FROM aquatemp ORDER BY celsius desc LIMIT 5";

    if ($result = mysqli_query($con, $query)) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo"<tr><td>{$row["event"]}</td><td>{$row["celsius"]}</td></tr>\n";
        }
    }

    /* close connection */
    mysqli_close($con);
}

?>
