<?php

//Session starten
session_start();

echo "Willkommen auf Seite 1";

//Session Variablen setzen
$_SESSION['vorname'] = "Joseph";
$_SESSION['nachname'] = "Beuys";
$_SESSION['alter'] = 99;
$_SESSION['zeit'] = time();

echo '<br><a href="seite2.php">Weiter</a><br>';
?>