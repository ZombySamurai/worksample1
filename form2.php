<?php include("./function.inc.php"); ?>
<html>
<head>
<title>Formular - 2</title>
</head>
<body>
<form method="post" action="senden.php">
<p>
Kreditinstitut <input type="text" name="bank"><br>
BLZ: <input type="text" name="blz"><br>
Konto-Nr.: <input type="text" name="kto_nr"><br>
<?php form_daten(); ?)
</p>
<p>
<input type="submit" value="absenden">
</p>
</form>
</body>
</html>
