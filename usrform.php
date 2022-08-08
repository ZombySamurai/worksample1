<?php
require_once 'essential.php';
//Formular ausgeben Modus form
if ($_REQUEST["mode"] == "form") {
	echo '<title>Neuen User erstellen</title>';
	echo '<form action="usrform.php" method="post">';
	echo '<input type="hidden" name="mode" value="add">';
	echo '<p>Vorname: <input type="text" name="name" /></p>';
	echo '<p>Nachname: <input type="text" name="surname" /></p>';
	echo '<p><input type="radio" name="type" value="admin" />Admin';
	echo '<input type="radio" name="type" value="user" />User</p>';
	//wegen Dropdown gucken!!
	echo '<p><input type="submit" /></p>';
	echo '</form>';
	echo '<div align="center"><a href="index.php">Zurück</a></div>';
}

if ($_REQUEST["mode"] == "add") {
	$host = 'localhost:3306';
	$usr = 'root';
	$pwd = 'limabean';
	$dbname = 'users';
	// Verbindung zum mysqli Server
	$db = mysqli_connect ($host, $usr, $pwd, $dbname);
	//Verbindung prüfen
	if (!$db) {
		die('Verbindung fehlgeschlagen: ' . mysqli_connect_error());
	}
//	/Datenbank Produkte abfragen
//INSERT INTO    VALUES
$sql = 'INSERT INTO usrperms (usrname, usrsurname, usrtype) VALUES ("'.$_REQUEST["name"].'", "'.$_REQUEST["surname"].'", "'.$_REQUEST["type"].'")';
//die($sql);
if ($result = mysqli_query ($db, $sql)) {
	mysqli_close ($db);
	header ("Location: usrform.php?mode=success");
} else {
	echo '<title>Failure</title>';
	echo '<b>Fehler beim Speichern des Datensatzes';
	echo '<br><br>';
	echo "Fehlertyp: " . mysqli_error($db);
	mysqli_close ($db);
	echo '<br><br>';
	echo '<br>';
	adp();
	//echo '<a href="usrform.php?mode=form">Nochmal versuchen</a>';
	//echo '<p><a href="form.php?mode=form">ANLEGEN</a></p>';
	//echo '<p><a href="changedata.php?mode=form">PREISE ANPASSEN</a></p>';
	//echo '<p><a href="usrform.php?mode=form">NEUEN USER ANLEGEN</a></P>';
	//echo '<br></br>';
	//echo '<p><a href="index.php">Zurück</a></p>';
}
//Verbindung beenden
//bitte um Seite 261 herum nochmal nachschauen
//mysqli_close ($db);
//header ("Refresh: 2; usrform.php?mode=over");
}
if ($_REQUEST["mode"] == "success") {
	echo '<title>Success</title>';
	echo '<br><br>';
	echo 'User erfolgreich angelegt';
	adp();
}
?>