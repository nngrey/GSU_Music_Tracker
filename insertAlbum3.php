<?php
$host = 'localhost';
$username = 'c43740';
$pswd = '1db23';

$con = mysql_connect($host, $username, $pswd);
if (!$con){
	die('Could not connect: ' . mysql_error());
	}
mysql_select_db("c43740", $con);

$sqlc = "CREATE TABLE Artist(
	Name varchar(128),
	Song varchar(128),
	YearBorn smallint(4)      
	)";
	
mysql_query($sqlc, $con);

$sql3="INSERT INTO Artist 
	(Name, Song, YearBorn)
	VALUES ('$_POST[nameArtist]',
	'$_POST[song]',
	'$_POST[born]')";

$result3 = mysql_query($sql3);

if ($result3=="1"){
	echo "1 record added";
	echo "<form action='albums.html'>";
    echo "<input type='submit' value='Add Another?'>";
	echo "</form>";
}

mysql_close($con);

?>

