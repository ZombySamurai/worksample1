<?php
$host = 'localhost:3306';
$usr = 'root';
$pwd = 'limabean';
$dbname = 'product';
// Verbindung zum mysqli Server
$db = mysqli_connect ($host, $usr, $pwd, $dbname);
//Verbindung prüfen
if (!$db) {
	die('Verbindung fehlgeschlagen: ' . mysqli_connect_error());
}
//Datenbank Produkte abfragen
$sql = 'SELECT * from app';
if ($result = mysqli_query ($db, $sql)) {
	echo 'Datenbank erfolgreich abgefragt';
	print '<br>';
	print '<br>';
	print_r ($result);
	print '<br>';
	while ($row = mysqli_fetch_row ($result)) {
		//print_r dient zum Debuggen
		print_r ($row);
		print '<br>';
		print $row[0].' '.$row[1].'<br><br>';
	}
} else {
	echo 'Fehler beim Abfragen der Datenbank: ' . mysqli_error
	();
}

//Verbindung beenden
mysqli_close ($db);
?>