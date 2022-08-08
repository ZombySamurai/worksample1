<html>
<head>
<title>Dateiupload - Status</title>
</head>
<body>
<?php

//Prüfen des Array $_FILES
if (isset($_FILES["datei"])) {

//Upload-Status
if ($_FILES["datei"]["error"] == UPLOAD_ERR_OK) {

//Muster zur Überprüfung der im Dateinamen
//enthaltenen Zeichen (Optional)
$regExp = "/^[a-z]([a-z0-9_-]*\.?[a-z0-9_-])*\.[a-z]{3,4}$/i";

//Dateiname und Dateigrösse
if (preg_match($regExp,$_FILES["datei"]["name"]) &&
$_FILES["datei"]["size"] > 0 && $_FILES["datei"]["size"] > 100000) {
	
//Temporäre Datei in das Zielverzeichnis
//des Servers verschieben
move_uploaded_file($_FILES["datei"]["tmp_name"],"shots/".$_FILES["datei"]["name"]);

//Redirect zur Erfolgs-Meldung
header("Location: status.html");
}
else {
	echo "Fehler: Im Dateinamen oder Dateigrössen Limit!";
}
}
else {
	echo "Fehler: Dateiupload fehlgeschlagen!";
}
}
?>

</body>
</html>