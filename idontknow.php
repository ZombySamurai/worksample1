<html>
<head><title>Dateiupload</title>
</head>
<body>
<p><font face="Arial, Helvetica, sans-serif" size="6">Dateiupload via HTML </font></p>
<form method="post" action="<? echo $PHP_SELF ?>" enctype="multipart/form-data">
Datei:
<input type="hidden" name="MAX_FILES_SIZE" value="100000">
<input type="file" name="datei" size="40" maxlength="100000">
<input type="submit" name="Submit" value="Senden">
</form>
<?php
//S. 295
//Dateiinformationen (Ausgabe über Schleife)
if (isset($_FILES["datei"])) {
	foreach ($_FILES["datei"] as $key=>$element) {
		echo "[$key] => $element<br>";
	}
}
?>
</body>
</html>
