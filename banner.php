<?php
//Verbindung zur Datenbank herstellen
require("config.inc.php");
// DB-Konfiguration

// Datenbank-Server (IP oder DNS)
$dbserver = "localhost";
// Datenbank-Nutzer
$nutzer = "root";
// Datenbank-Passwort
$passwort = "limabean";
// DB Name
$datenbank = "testbank";
//dbtabelle = "blog";

//Zufalls-Gewichtung festlegen
$zufall = rand (1, 3);

//Banner auslesen Dieses sind in
// der Regel mehrere!!
$satz = "SELECT * FROM banner WHERE gewicht <= '$zufall' ";
$db = mysqli_connect($dbserver,$nutzer,$passwort);
$db_fehler2 = "Verbindung fehlgeschlagen: ".mysqli_connect_error($dbserver,$nutzer,$passwort);
$sqlbanner = mysqli_query($db, $satz) or die ($db_fehler2);
$anzahlbanner = mysqli_num_rows($sqlbanner);
//Aus der so eben erzeugten Liste genau eine
//zufällige BannerID bestimmen
if($anzahlbanner == 1) {
	$show_bannerid = 0;
} else {
	$show_bannerid = rand(0,$anzahlbanner-1);
}

//Bannertag aus der Datenbank ausgeben
mysqli_data_seek($sqlbanner,$show_bannerid);
$banner = mysqli_fetch_array($sqlbanner);

//Ausgabe der Banners im <img>-Tag
echo "
<a href='$banner[bannerurl]' target='_blank'>
<img src='$banner[bannertags]' alt='$banner[name]-$banner[id]' border='0'></a>"
?>
