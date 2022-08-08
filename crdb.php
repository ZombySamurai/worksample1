<?php
require_once 'essential.php';
if ($_REQUEST["mode"] == "form") {
echo '<form action="?form=adddb" method="post">';
echo '<input type="hidden" name="mode" value="adddb">';
echo '<p>Datenbankname: <input type="text" name="newdbname" /></p>';
echo '<p><input type="submit" /></p>';
echo '</form>'; }

if ($_REQUEST["mode"] == "adddb") {
	$cdb = new mysqli($host, $usr, $pwd);
	$dbnt = $_REQUEST['newdbname'];
	
	
if ($cdb->connect_error) {
die("Connection failed: " . $cdb->connect_error);}
$sql = "CREATE DATABASE ".$_REQUEST['newdbname'];
if ($cdb->query($sql) === TRUE) {
	echo "Database ".($_REQUEST['newdbname'])." created successfully!";
	//echo '<a href="crdb.php?mode=addcolform">Weiter</a>';
} else {
	echo "Error creating Database <br><br>".$cdb->error;
}
//nachfragen:
mysqli_close($cdb); 
adp();}
/* if ($_REQUEST["mode"] == "addcolform") {
	echo 'Bitte Spaltennamen definieren:';
	echo '<form action="crdb.php?form=addcol" method="post">';
	echo '<input type="hidden" name="mode" value="addcol">';
	echo '<p>Datenbank: <input type="text" name="datba" /></p>';
	echo '<p>Spalte 1: <input type="text" name="newdbsp1" /></p>';
	echo '<p>Spalte 2: <input type="text" name="newdbsp2" /></p>';
	echo '<p>Spalte 3: <input type="text" name="newdbsp3" /></p>';
	echo '<p>Spalte 4: <input type="text" name="newdbsp4" /></p>';
	echo '<p><input type="submit" /></p>';
	echo '</form>';
}
if ($_REQUEST["mode"] == "addcol") {
	$conn = mysqli_connect($host, $usr, $pwd, ('.$_REQUEST["datba"].'));

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);}
//gekludged, nur temporär
$sqlc = 'ALTER TABLE '.$_REQUEST["datba"] .'ADD ('.$_REQUEST["newdbsp1"].' VARCHAR(15), '.$_REQUEST["newdbsp2"].' VARCHAR(15), '.$_REQUEST["newdbsp3"].' VARCHAR(15), '.$_REQUEST["newdbsp4"].' VARCHAR(15))';
if ($conn->query($sqlc) === TRUE) {
	echo "Spalte(n) erfolgreich hinzugefügt!";
	echo '<a href="crdb.php?mode=form">Zurück</a>';
} else {
	echo "Fehler beim Einfügen der Spalte(n) in ".$datba.". ".$conn->error;
	echo $datba;
}} */
?>
	