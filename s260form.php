<html>
<head>
<title>Kontaktformular</title>
</head>
<body>
<?php

if (!$gesendet && !$name) {

?>
<form method="POST" action="<?php echo $PHP_SELF ?>">
<p<Name: 
<input type="text" name="name" size="30">
</p>
<p>E-Mail:
<input type="text" name="email" size="30">
</p>
<p>Buchbewertung: 1
<input type="radio" name="bewertung" value="1">
2
<input type="radio" name="bewertung" value="2">
3
<input type="radio" name="bewertung" value="3">
4
<input type="radio" name="bewertung" value="4">
5
<input type="radio" name="bewertung" value="5">
6
<input type="radio" name="bewertung" value="6">
</p>
<p>Kommentar:
<textarea name="kommentar" cols="30" rows="5"></textarea>
</p>
<p> lieblingsthema:
<select name="auswahl">
<option value="PHP">PHP</option>
<option value="MySQL">MySQL</option>
<option value="JAVA">JAVA</option>
<option value="ASP">ASP</option>
</select>
</p>
<p>
<input type="submit" name="Submit" value="Submit">
<input type="restet" name="reset" value="Reset">
<input type="hidden" name="gesendet" value="1">
</p>
</form>
<?php

} else {
echo "
Folgende Daten wurden übermittelt:<p>
<b>Name:</b> $name<br>
<b>E-Mail:</b> $email<br>
<b>Buchbewertung:</b> $bewertung<br>
<b>Kommentar:</b> $kommentar<br>
<b>Lieblingsthema:</b> $auswahl
<p>
<form method=POST action=$PHP_SELF>
<input type='submit' name='submit' value='Noch einen Kommentar?'>
</form>
</p>
";
}

?>
</body>
</html>