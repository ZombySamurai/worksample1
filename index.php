<!doctype html>
<?php
//checking and loading if vital files are available
require_once 'essential.php';
?>
<html>
<head>
<title>ExciteSoft: Makers Of XOS and X-Suite</title>
<style type="text/css">
.auto-style1 {
	font-family: "OCR A Extended";
	text-decoration: underline;
}
.auto-style2 {
	font-family: "Rockwell Condensed";
	font-weight: bold;
}
.auto-style3 {
	font-family: "Segoe Print";
	font-size: xx-small;
	text-align: left;
}
</style>
</head>
<header class="auto-style1">ExciteSoft: Modular Office Management Solutions and more</header>
<br>
<body>
<span class="auto-style2">Modular Office Management Solutions and more...</span>
<p class="auto-style3">We DO kludge around here.</p>
<!--no foolin'!-->
<form action="admelem.php" method="post">
<p>Ihr Name: <input type="text" name="name" /></p>
<p>Ihr Alter: <input type="text" name="alter" /></p>
<p><input type="submit" /></p>
</form>
<br>
<p><a href="liste.php?mode=form">Search Our Product Catalogue</a></p>
<?php 
	whodunnit()
?>
<p></p>
<?php
	groetjes_usr()
?>
<p></p>
<?php
	prodliste()
?>
</body>
<footer>
<p></p>
<b><?php
//insert proper check here later (fifth row in mysql?) Who are you? Who who? Who who?
	dealtd();
?></b>
<p></p>
<b>
<?php
	koffie_droit()
?>
</b>
</html>