<!DOCTYPE html>
<?php
include('dbconnect.php');
?>

<html lang="en">

</html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Statistiken</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html {
            height: 100%;
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        body {
            position: relative;
            margin: 0;
            padding-bottom: 6rem;
            min-height: 100%;
            font-family: "Helvetica Neue", Arial, sans-serif;
        }


        /**
 * Footer Styles
 */

        .footer {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            padding: 1rem;
            background-color: #efefef;
            text-align: center;
        }
    </style>
</head>

<body>

    <?php
    $query = "SELECT ROUND(celsius, 1) AS celsius FROM temperature ORDER BY celsius desc LIMIT 5";
    $result = mysqli_query($con, $query);
    $row =  mysqli_fetch_assoc($result);
    $query = "SELECT ROUND(celsius, 1) AS celsius FROM aquatemp ORDER BY id desc";
    $result = mysqli_query($con, $query);
    $row7 =  mysqli_fetch_assoc($result);
    $query = "SELECT celsius FROM temperatur2 ORDER BY id desc";
    $result = mysqli_query($con, $query);
    $row2 =  mysqli_fetch_assoc($result);
    $query = "SELECT ROUND(max(celsius), 1) AS max_temp, ROUND(min(celsius), 1) AS min_temp FROM temperature";
    $result = mysqli_query($con, $query);
    $row3 =  mysqli_fetch_assoc($result);
    $query = "SELECT ROUND(max(celsius), 1) AS max_temp, ROUND(min(celsius), 1) AS min_temp FROM temperatur2";
    $result = mysqli_query($con, $query);
    $row4 =  mysqli_fetch_assoc($result);
    $query = "SELECT ROUND(max(celsius), 1) AS max_temp, ROUND(min(celsius), 1) AS min_temp FROM aquatemp";
    $result = mysqli_query($con, $query);
    $row8 =  mysqli_fetch_assoc($result);
    $query = "SELECT ROUND(relhum, 0) AS relhum FROM humidity ORDER BY id desc";
    $result = mysqli_query($con, $query);
    $row5 =  mysqli_fetch_assoc($result);
    $query = "SELECT ROUND(max(relhum), 0) AS max_relhum, ROUND(min(relhum), 0) AS min_relhum FROM humidity";
    $result = mysqli_query($con, $query);
    $row6 =  mysqli_fetch_assoc($result);
    ?>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="#">IDBI Sensoren</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sensors.php">Sensoren</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="charts.php">Diagramme</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="mt-5">Statistiken</h1>

                <h2 class="mt-5">LED's</h2>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-header">
                                Beleuchtung
                            </div>
                            <div class="card-body">
                                <img src="IMAGES/pictogram/led1.png" alt="Led1">
                                <h5 class="card-title">LED Blau</h5>
                                <p>
                                    <a class="btn btn-secondary" href="ledonoff.php?state=<led2_1>" role="button">An</a>
                                    <a class="btn btn-secondary" href="ledonoff.php?state=<led2_0>" role="button">Aus</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="mt-5">Stats</h2>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-header">
                                Luftfeuchtigkeit
                            </div>
                            <div class="card-body">
                                <img src="IMAGES/pictogram/hum1.png" alt="Hum1">
                                <p style="color:black;font-size:22px;">
                                    <strong><?= $row5['relhum'] ?> %</strong>
                                </p>
                                <p>
                                    Min: <?= $row6['min_relhum'] ?> %<br />
                                    Max: <?= $row6['max_relhum'] ?> %
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-header">
                                Aussentemperatur
                            </div>

                            <div class="card-body">
                                <img src="IMAGES/pictogram/temp1.png" alt="Temp1">
                                <p style="color:black;font-size:22px;">
                                    <strong><?= $row2['celsius'] ?> &deg;C</strong>
                                </p>
                                <p>
                                    Min: <?= $row?> &deg;C<br />
                                    Max: <?= $row4['max_temp'] ?> &deg;C
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-header">
                                Innentemperatur
                            </div>
                            <div class="card-body">
                                <p>TOP 5 Tage</p>
                                <img src="IMAGES/pictogram/temp1.png" alt="Temp1">
                                <p style="color:black;font-size:22px;">
                                    <strong><?= $row['celsius'] ?> &deg;C</strong>
                                </p>
                                <p>
                                    Min: <?= $row3['min_temp'] ?> &deg;C<br />
                                    Max: <?= $row3['max_temp'] ?> &deg;C
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-header">
                                Wassertemperatur
                            </div>
                            <div class="card-body">
                                <img src="IMAGES/pictogram/temp2.png" alt="Temp2">
                                <p style="color:black;font-size:22px;">
                                    <strong><?= $row7['celsius'] ?> &deg;C</strong>
                                </p>
                                <p>
                                    Min: <?= $row8['min_temp'] ?> &deg;C<br />
                                    Max: <?= $row8['max_temp'] ?> &deg;C

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">D'Site isch vor Gruppe BI designt u programmiert , <strong>no cöpyreit 2019</strong>.</div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.slim.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>