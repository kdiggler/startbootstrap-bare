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

   $query = "SELECT MAX(celsius) AS celsius, event, DAY(event) AS date_created FROM temperature GROUP BY DAY(event) ORDER BY celsius desc LIMIT 5";
    # $query = "SELECT ROUND(celsius, 1) AS celsius, event FROM temperature ORDER BY celsius desc LIMIT 5";

    if ($result = mysqli_query($con, $query)) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo"<tr><td>{$row["date_created"]}</td><td>{$row["celsius"]}</td></tr>\n";
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
    $query = "SELECT MAX(celsius) AS celsius, event, DATE(event) AS date_created FROM aquatemp GROUP BY DATE(event) ORDER BY celsius desc LIMIT 5";
   # $query = "SELECT ROUND(celsius, 1) AS celsius, event FROM aquatemp ORDER BY celsius desc LIMIT 5";

    if ($result = mysqli_query($con, $query)) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo"<tr><td>{$row["event"]}</td><td>{$row["celsius"]}</td></tr>\n";
        }
    }

    /* close connection */
    mysqli_close($con);
}

#TEMPERATUR LUFTFEUCHTIGKEIT FUNCTION
function relhum()
{
    $con = mysqli_connect("localhost", "arduser", "ardtest", "arduino");

    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    $query = "SELECT MAX(relhum) AS relhum, event, DATE(event) AS date_created FROM humidity GROUP BY DATE(event) ORDER BY relhum desc LIMIT 5";
    #$query = "SELECT MAX(relhum) AS relhum, DATE(event) AS date_created FROM humidity GROUP BY DATE(event) ORDER BY id desc LIMIT 5";

    if ($result = mysqli_query($con, $query)) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo"<tr><td>{$row["event"]}</td><td>{$row["relhum"]}</td></tr>\n";
        }
    }

    /* close connection */
    mysqli_close($con);
}

#TEMPERATUR INNEN FUNCTION MIN
function tempindoor_min()
{
    $con = mysqli_connect("localhost", "arduser", "ardtest", "arduino");

    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

   $query = "SELECT MIN(celsius) AS celsius, event, DATE(event) AS date_created FROM temperature GROUP BY DATE(event) ORDER BY celsius asc LIMIT 5";
    # $query = "SELECT ROUND(celsius, 1) AS celsius, event FROM temperature ORDER BY celsius desc LIMIT 5";

    if ($result = mysqli_query($con, $query)) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo"<tr><td>{$row["event"]}</td><td>{$row["celsius"]}</td></tr>\n";
        }

    }
    /* close connection */
    mysqli_close($con);
}

#TEMPERATUR WASSER FUNCTION MIN
function tempaqua_min()
{
    $con = mysqli_connect("localhost", "arduser", "ardtest", "arduino");

    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    $query = "SELECT MIN(celsius) AS celsius, event, DATE(event) AS date_created FROM aquatemp GROUP BY DATE(event) ORDER BY celsius asc LIMIT 5";
   # $query = "SELECT ROUND(celsius, 1) AS celsius, event FROM aquatemp ORDER BY celsius desc LIMIT 5";

    if ($result = mysqli_query($con, $query)) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo"<tr><td>{$row["event"]}</td><td>{$row["celsius"]}</td></tr>\n";
        }
    }

    /* close connection */
    mysqli_close($con);
}

#TEMPERATUR LUFTFEUCHTIGKEIT FUNCTION MIN
function relhum_min()
{
    $con = mysqli_connect("localhost", "arduser", "ardtest", "arduino");

    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    $query = "SELECT MIN(relhum) AS relhum, event, DATE(event) AS date_created FROM humidity GROUP BY DATE(event) ORDER BY relhum asc LIMIT 5";
    #$query = "SELECT MAX(relhum) AS relhum, DATE(event) AS date_created FROM humidity GROUP BY DATE(event) ORDER BY id desc LIMIT 5";

    if ($result = mysqli_query($con, $query)) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo"<tr><td>{$row["event"]}</td><td>{$row["relhum"]}</td></tr>\n";
        }
    }

    /* close connection */
    mysqli_close($con);
}

#TEMPERATUR INNEN DURCHSCHNITT FUNCTION
function tempindoor_avg_pm($year)
{
    $con = mysqli_connect("localhost", "arduser", "ardtest", "arduino");

    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

  $query = "SELECT ROUND(AVG(celsius) ,2) AS celsius,DATE_FORMAT(event,'%M') AS event FROM temperature WHERE YEAR(event) = $year GROUP BY MONTH(event),YEAR(event) ORDER BY MONTH(event) ASC";

  if ($result = mysqli_query($con, $query)) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo"<tr><td>{$row["event"]}</td><td>{$row["celsius"]}</td></tr>\n";
    }

    }
    /* close connection */
    mysqli_close($con);
}

?>