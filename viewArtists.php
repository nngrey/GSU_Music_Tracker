<?php
$host = 'localhost';
$username = 'c43740';
$pswd = '1db23';

$con = mysql_connect($host, $username, $pswd);
if (!$con){
	die('Could not connect: ' . mysql_error());
	}
mysql_select_db("c43740", $con);

$table_name = 'Artist';
print '<font size="5" color="blue">';
print "$table_name Data</font><br>";
$query = "SELECT * FROM $table_name";
$results_id = mysql_query($query, $con);
if ($results_id) {
	print '<table border=1>';
	while ($row = mysql_fetch_row($results_id)){
		print '<tr>';
		foreach ($row as $field) {
			print "<td>$field</td> ";
		}
		print '</tr>';
	}
	print '</table>';
} else { 
	die ("Query=$query failed!"); }

echo "<p><form action='albums.html'>";
echo "<input type='submit' value='Return'>";
echo "</form></p>";

mysql_close($con);

?>

