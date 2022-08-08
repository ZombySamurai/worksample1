<?php
require_once 'essential.php';
function adp() {
	echo '<title>Admins Page</title>';
	echo '<p><a href="cookcook.php?mode=form">COOKIES ANLEGEN</a></p>';
	echo '<p><a href="form.php?mode=form">ANLEGEN</a></p>';
	echo '<p><a href="changedata.php?mode=form">PREISE ANPASSEN</a></p>';
	echo '<p><a href="usrform.php?mode=form">NEUEN USER ANLEGEN</a></P>';
	echo '<p><a href="crdb.php?mode=form">NEUE DATENBANK ANLEGEN</a></P>';
	echo '<p><a href="contactus.php?mode=inf">UNFERTIGE FUNKTION EMAIL</a></P>';
	echo '<p><a href="crdb.php?mode=addcolform">UNFERTIG NEUE SPALTEN ANLEGEN</a></P>';
	//später vereinen in 1
	echo '<br></br>';
	echo '<p><a href="index.php">Zurück</a></p>'; 
} 
?>