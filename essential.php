<?php
header("X-Clacks-Overhead: GNU Terry Pratchett");
//a man is not dead as long as his name is spoken, RIP Pterry (1948-2015)
function whodunnit()
{
	define ("ORIGCREA" , "in the year of the plague 2020");
	define ("AUTHOR" , "Dave");
	echo "Created by ".AUTHOR." ".ORIGCREA;
};
//just the credits
include 'copyright.php';
//just the copyright notice
include 'produl.php';
//responsible for handling the catalogue search variant for reg user
include 'greet.php';
//responsible for greeting User by Name
include 'adp.php';
//this is the admin page
include 'session.php';
$host = 'localhost:3306';
$usr = 'root';
$pwd = 'limabean';
//insecure, to be replaced by actual password function
define ("mymail" , "davweg96@gmail.com");
function goaway() 
{
	echo '<img src="0.png">';
	echo '<audio autoplay>';
	echo '<source src="stop.mp3" type="audio/mpeg">';
	echo '<title>Stop right there, criminal scum!</title>';
//with kind regards to Nico, possibly the biggest TES fan, from the jaws of Oblivion
	echo 'Zugang nur für Admins'; 
	header ("refresh: 2; index.php"); 
}
waw();
?>