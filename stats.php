<!DOCTYPE html>
<?php
include('dbconnect.php');
include('functions.php');
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
                <h2 class="mt-5">Stats</h2>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-header">
                                Luftfeuchtigkeit
                            </div>
                            <div class="card-body">
                                <p>TOP 5</p>
                                <p style="color:black;font-size:22px;"></p>
                                <table class="table table-striped w-100">
                                    <thead>
                                        <tr>
                                            <th>Datum</th>
                                            <th>Hum %</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?= relhum(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-header">
                                Innentemperatur
                            </div>
                            <div class="card-body">
                                <p>TOP 5</p>
                                <p style="color:black;font-size:22px;"></p>

                                <table class="table table-striped w-100">
                                    <thead>
                                        <tr>
                                            <th>Datum</th>
                                            <th>Temp °C</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?= tempindoor(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-header">
                                Wassertemperatur
                            </div>
                            <div class="card-body">
                                <p>TOP 5</p>
                                <p style="color:black;font-size:22px;"></p>

                                <table class="table table-striped w-100">
                                    <thead>
                                        <tr>
                                            <th>Datum</th>
                                            <th>Temp °C</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?= tempaqua(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-header">
                                Luftfeuchtigkeit
                            </div>
                            <div class="card-body">
                                <p>TOP 5</p>
                                <p style="color:black;font-size:22px;"></p>
                                <table class="table table-striped w-100">
                                    <thead>
                                        <tr>
                                            <th>Datum</th>
                                            <th>Hum %</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?= relhum(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-header">
                                Innentemperatur
                            </div>
                            <div class="card-body">
                                <p>TOP 5</p>
                                <p style="color:black;font-size:22px;"></p>

                                <table class="table table-striped w-100">
                                    <thead>
                                        <tr>
                                            <th>Datum</th>
                                            <th>Temp °C</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?= tempindoor(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-header">
                                Wassertemperatur
                            </div>
                            <div class="card-body">
                                <p>TOP 5</p>
                                <p style="color:black;font-size:22px;"></p>

                                <table class="table table-striped w-100">
                                    <thead>
                                        <tr>
                                            <th>Datum</th>
                                            <th>Temp °C</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?= tempaqua(); ?>
                                    </tbody>
                                </table>
                            </div>
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