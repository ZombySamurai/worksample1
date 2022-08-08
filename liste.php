<?php
require_once 'essential.php';
//Formular ausgeben Modus form
if ($_REQUEST["mode"] == "form") {
	echo '<form action="liste.php" method="post">';
	echo '<input type="hidden" name="mode" value="add">';
	echo '<p>Produktname: <input type="text" name="name" /></p>';
	echo '<p>Erscheinungsjahr: <input type="text" name="jahr" /></p>';
	echo '<p>Preis <input type="text" name="preis" /></p>';
	echo '<p>Noch unterstützt? <input type="support" name="sptd" /></p>';
	echo '<p><input type="submit" /></p>';
	echo '</form>';
	echo '<div align="center"><a href="index.php">Zurück</a></div>';
}
if ($_REQUEST["mode"] == "add") {
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
$sql = 'SELECT * from APP where (name LIKE ("%'.$_REQUEST["name"].'%")) AND (released LIKE ("%'.$_REQUEST["jahr"].'%")) AND (price LIKE ("%'.$_REQUEST["preis"].'%")) AND (supportquali LIKE ("%'.$_REQUEST["sptd"].'%"))';
//$sql = 'SELECT * from APP where name="'.$_REQUEST["name"].'"';
if ($result = mysqli_query ($db, $sql)) {
	echo 'Datenbank erfolgreich abgefragt';
	print '<br>';
	print '<br>';
	//print_r ($result);
	print '<br>';
	while ($row = mysqli_fetch_row ($result)) {
		//print_r dient zum Debuggen
		//print_r ($row);
		print '<br>';
		print $row[0].' '.$row[1].' '.$row[2].' '.$row[3].' '.$row[4].'<br><br>';	
	}
} else {
	echo 'Fehler beim Abfragen der Datenbank: ' . mysqli_error($db);
	header ("Refresh: 5; liste.php?mode=form");
} 
print '<a href="index.php">Zurück</a>';

//Verbindung beenden
mysqli_close ($db);
}
?>