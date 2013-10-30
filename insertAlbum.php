<?php
$host = 'localhost';
$username = 'c43740';
$pswd = '1db23';

$con = mysql_connect($host, $username, $pswd);
if (!$con){
	die('Could not connect: ' . mysql_error());
	}
mysql_select_db("c43740", $con);

$sqla = "CREATE TABLE Album(
	Title varchar(128),
	Artist varchar(128),
	YearRel smallint(4)      
	)";
	
mysql_query($sqla, $con);

$sql1="INSERT INTO Album 
	(Title, Artist, YearRel)
	VALUES ('$_POST[title]',
	'$_POST[artist]',
	'$_POST[yearReleased]')";

$result1 = mysql_query($sql1);

if ($result1=="1"){
	echo "1 record added";
	echo "<form action='albums.html'>";
    echo "<input type='submit' value='Add Another?'>";
	echo "</form>";
}

mysql_close($con);

?>

