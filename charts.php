<!DOCTYPE html>

<html lang="en">

</html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IDBI Büro 037</title>

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

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);
        google.charts.setOnLoadCallback(drawChart2);
        google.charts.setOnLoadCallback(drawChart3);

        function drawChart() {
            var json = $.ajax({
                url: 'get_json.php', // make this url point to the data file
                dataType: 'json',
                async: false
            }).responseText;

            // Create our data table out of JSON data loaded from server.
            var data = new google.visualization.DataTable(json);
            var options = {
                title: 'Temp',
                legend: {
                    position: 'right'
                }
            };
            // Instantiate and draw our chart, passing in some options.
            //do not forget to check ur div ID
            var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }

        function drawChart2() {
            var json = $.ajax({
                url: 'get_json2.php', // make this url point to the data file
                dataType: 'json',
                async: false
            }).responseText;

            // Create our data table out of JSON data loaded from server.
            var data = new google.visualization.DataTable(json);
            var options = {
                title: 'Temp',
                legend: {
                    position: 'right'
                }
            };
            // Instantiate and draw our chart, passing in some options.
            //do not forget to check ur div ID
            var chart = new google.visualization.AreaChart(document.getElementById('chart2_div'));
            chart.draw(data, options);
        }

        function drawChart3() {
            var json = $.ajax({
                url: 'get_json3.php', // make this url point to the data file
                dataType: 'json',
                async: false
            }).responseText;

            // Create our data table out of JSON data loaded from server.
            var data = new google.visualization.DataTable(json);
            var options = {
                title: 'humidity1',
                legend: {
                    position: 'right'
                }
            };
            // Instantiate and draw our chart, passing in some options.
            //do not forget to check ur div ID
            var chart = new google.visualization.AreaChart(document.getElementById('chart3_div'));
            chart.draw(data, options);
        }

        $(window).resize(function() {
            drawChart();
            drawChart2();
            drawChart3();
        });
    </script>
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
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sensors.php">Sensoren</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="charts.php">Diagramme</a>
                    </li>
                    <li class="nav-item active dropdown">
                        <a class="nav-link dropdown-toggle" href="stats.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Statistiken
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="stats.php">Statistiken</a>
                            <a class="dropdown-item" href="stats.php#max">Max Werte</a>
                            <a class="dropdown-item" href="stats.php#min">Min Werte</a>
                            <a class="dropdown-item" href="stats.php#dwert">Durschnittswerte</a>
                            <!--<div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>-->
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <h2 class="mt-5">Innentemperatur</h2>
            <div id="chart_div" style="width: 100%; height: 450px; margin: 0"></div>

            <h2 class="mt-5">Aquariumtemperatur</h2>
            <div id="chart2_div" style="width: 100%; height: 450px; margin: 0"></div>

            <h2 class="mt-5">Luftfeuchtigkeit</h2>
            <div id="chart3_div" style="width: 100%; height: 450px; margin: 0"></div>
        </div>
    </div>

    <div class="footer">D'Site isch vor Gruppe BI designt u programmiert , <strong>no cöpyreit 2019</strong>.</div>

    <!-- Bootstrap core JavaScript -->
    <!-- <script src="vendor/jquery/jquery.slim.min.js"></script> -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>