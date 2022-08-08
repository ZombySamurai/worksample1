<?php
//Buch Seite 287
session_start();
echo 'Willkommen auf Seite 2<br>';
echo $_SESSION['vorname']."<br>";
echo $_SESSION['nachname']."<br>";
echo $_SESSION['alter']."<br>";
echo date('d.m.Y H:i:s', $_SESSION['zeit'])."<br>";
echo '<br><a href="seite1.php">Zum Anfang</a>';
echo '<br><a href="clean.php?mode=sn">CLEAN MODE</a>';
?>