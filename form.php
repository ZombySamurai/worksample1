<?php
require_once 'essential.php';
//Formular ausgeben Modus form
if ($_REQUEST["mode"] == "form") {
	echo '<form action="form.php" method="post">';
	echo '<input type="hidden" name="mode" value="add">';
	echo ' <p>Produktname: <input type="text" name="name" /></p>';
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
//	/Datenbank Produkte abfragen
//INSERT INTO    VALUES
$sql = 'INSERT INTO app (name, released, price, supportquali) VALUES ("'.$_REQUEST["name"].'", "'.$_REQUEST["jahr"].'", "'.$_REQUEST["preis"].'", "'.$_REQUEST["sptd"].'")';
//die($sql);
	if ($result = mysqli_query ($db, $sql)) {
		echo "Datensatz erfolgreich gespeichert";
	} else {
		echo "Fehler beim Speichern des Datensatzes: " . mysqli_error($db);
	}
	//Verbindung beenden
	mysqli_close ($db);
	adp();
}
?>