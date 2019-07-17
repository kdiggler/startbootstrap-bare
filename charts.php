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

    <title>IDBI Büro 037</title>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
               <script type="text/javascript">
                google.charts.load('current', {'packages':['corechart']});
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
                                        width: 950,
                                        height: 550,
                                        legend: {position: 'right'}
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
                                        width: 950,
                                        height: 550,
                                        legend: {position: 'right'}
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
                                        width: 950,
                                        height: 550,
                                        legend: {position: 'right'}
                                };
                                // Instantiate and draw our chart, passing in some options.
                                //do not forget to check ur div ID
                                var chart = new google.visualization.AreaChart(document.getElementById('chart3_div'));
                                chart.draw(data, options);
                        }
 </script>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sensoren</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Diagramme
                        <span class="sr-only">(current)</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <table>
<tr>

  <td>
<h2>Innentemperatur</h2>
<div id="chart_div" style="width: 100%; height: 50%; margin: 25 15"></div></td>
</tr>
<tr>
<td>
  <h2>Aquariumtemperatur</h2>
<div id="chart2_div" style="width: 100%; height: 50%; margin: 25 15"></div></td>
</tr>
<tr>
<td>
  <h2>Luftfeuchtigkeit</h2>
<div id="chart3_div" style="width: 100%; height: 50%; margin: 25 15"></div></td>
</tr>

</table>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.slim.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>