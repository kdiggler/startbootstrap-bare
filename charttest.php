<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="stylesheet.css">

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

<style>
</style>
</head>
<body>
<div class="topnav">
  <a href="mysensor.php">Home</a>
  <a class="active">Diagramme</a>
  <a href="#contact">Contact</a>
  <a class="about.php">About</a>
</div>



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
  </body>
</html>
