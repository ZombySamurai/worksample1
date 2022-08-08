<?php
require_once 'adp.php';
if ($_REQUEST["mode"] == "form") {
	echo '<form action="cookcook.php?mode=cookme" method="post">';
	echo '<input type="hidden" name="mode" value="cookme">';
	echo '<p>Cookiename: <input type="text" name="cnam" /></p>';
	echo '<p>Cookieinhalt: <input type="text" name="cinh" /></p>';
	echo '<p>Cookie-Verfallszeit: <input type="text" name="expiry" /></p>';
	echo '<p><input type="submit"/></p>';
	echo '</form>';
	echo '<div align="center"><a href="?mode=goback">Zurück</a></div>';
}
if ($_REQUEST["mode"] == "cookme") {
	$name = $_REQUEST["cnam"];
	$expiry = $_REQUEST["expiry"];
	$inhalt = $_REQUEST["cinh"];
//setcookie $_REQUEST["cnam"]', '$_REQUEST["cinh"]', time() '$_REQUEST["expiry"];
	$sco = setcookie("$name", "$inhalt", time()."$expiry"); 
	shell_exec ($sco);
	// Prüfen
	if (!$_COOKIE[$name]) {
		echo "Cookie ist nicht vorhanden!";
	} else { 
		echo $_COOKIE[$name];
	}
}
if ($_REQUEST["mode"] == "goback") {
	adp();
}
?>