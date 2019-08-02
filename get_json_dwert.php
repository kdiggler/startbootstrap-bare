
<?php
include("dbconnect.php");

// write your SQL query here (you may use parameters from $_GET or $_POST if you need them)
// $query = mysqli_query($con, "SELECT event, celsius FROM temperature");
#$query = mysqli_query($con, "SELECT event,celsius FROM temperature WHERE event > DATE_SUB(NOW(),INTERVAL 168 HOUR)");
$query = mysqli_query($con, "SELECT ROUND(AVG(celsius) ,2) AS celsius,DATE_FORMAT(event,'%M') AS event FROM temperature WHERE YEAR(event) = 2019 GROUP BY MONTH(event),YEAR(event) ORDER BY event DESC");



$table = array();
$table['cols'] = array(
	/* define your DataTable columns here
	 * each column gets its own array
	 * syntax of the arrays is:
	 * label => column label
	 * type => data type of column (string, number, date, datetime, boolean)
	 */
	// I assumed your first column is a "string" type
	// and your second column is a "number" type
	// but you can change them if they are not
    array('label' => 'event', 'type' => 'string'),
	array('label' => 'Celsius', 'type' => 'number')
);

$rows = array();
while($r = mysqli_fetch_assoc($query)) {
    $temp = array();
	// each column needs to have data inserted via the $temp array
	$temp[] = array('v' => $r['event']);
	$temp[] = array('v' => (float) $r['celsius']); // typecast all numbers to the appropriate type (int or float) as needed - otherwise they are input as strings
	
	// insert the temp array into $rows
    $rows[] = array('c' => $temp);
}

// populate the table with rows of data
$table['rows'] = $rows;

// encode the table as JSON
$jsonTable = json_encode($table);

// set up header; first two prevent IE from caching queries
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');

// return the JSON data
echo $jsonTable;
?>
