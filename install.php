<?
include("config.inc.php");

$install_sql = "
CREATE TABLE $dbtabelle (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
Name VARCHAR(40),
Headline VARCHAR(100),
Datum VARCHAR(30),
Eintrag TEXT
)";
$db = mysqli_connect($dbserver,$nutzer,$passwort);

$satz = mysqli_select_db($datenbank, $install_sql);
$satz2 = mysqli_query($datenbank, $install_sql);
if (($satz) and ($satz2)) {
echo "Install war erfolgreich!";
} else {
echo "Problemo bei Installone - prüfen du bitte sämtlichen Angaben innerhalb die config.inc.php, por favore!";
}
?>

<!---s299-310 nachschlagen wie in PHP7