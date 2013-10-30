<?php
$host = 'localhost';
$username = 'c43740';
$pswd = '1db23';

$con = mysql_connect($host, $username, $pswd);
if (!$con){
	die('Could not connect: ' . mysql_error());
	}
mysql_select_db("c43740", $con);

$sqlb = "CREATE TABLE Band(
	bandName varchar(128),
	Singer varchar(128),
	YearForm smallint(4)      
	)";
	
mysql_query($sqlb, $con);

$sql2="INSERT INTO Band 
	(bandName, Singer, YearForm)
	VALUES ('$_POST[bandName]',
	'$_POST[singer]',
	'$_POST[dateFormed]')";

$result2 = mysql_query($sql2);

if ($result2=="1"){
	echo "1 record added";
	echo "<form action='albums.html'>";
    echo "<input type='submit' value='Add Another?'>";
	echo "</form>";
}

mysql_close($con);

?>

