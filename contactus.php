<?php
require_once 'essential.php';
IF ($_REQUEST["mode"] == "inf") {
	
	echo '<title>ExcIDe-Support</title>';
	echo '<a href="mailto:'.mymail.'">KONTAKTIEREN SIE UNS/CONTACT US PER EMAIL';
	echo '<a href="?mode=cdat">ODER LASSEN SIE UNS SIE KONTAKTIEREN/OR LET US CONTACT YOU</a>';
	echo '<div align="center"><a href="?mode=goback">Zurück</a></div>';
}
//WARUM FUNZT DAT NET, DOH?
IF ($_REQUEST["mode"] == "cdat") {
	echo '<form action="contactus.php?mode=mailme" method="post">';
	echo '<input type="hidden" name="mode" value="cdat"';
	echo '<p>Ihr Name: <input type="text" name="kname"/></p>';
	echo '<p>Ihre Mailadresse: <input type="text" name="kmail" /></p>';
	echo '<p>Ihr Anliegen <input type="text" name="whazzup" /></p>';
	echo '<p>Priorität <input type="text" name="priority" /></p>';
	echo '<p><input type="submit" /></p>';
	echo '</form>';
	echo '<div align="center"><a href="?mode=inf">Zurück</a></div>';
}
IF ($_REQUEST["mode"] == "mailme") {
$mailtext = '<b>Sehr geehrter Kunde '.$_REQUEST["kname"].', <br><br>wenn Sie dies sehen, haben wir Sie erfolgreich kontaktiert. <br><br>Selbstverständlich werden wir uns unverzüglich um ihr Anliegen kümmern. Zur Kontrolle: Ihr Anliegen = '.$_REQUEST["whazzup"].', mit Priorität '.$_REQUEST["priority"];
$topic = 'Ihr Anliegen '.$_REQUEST["whazzup"];
$kma = $_REQUEST["kmail"];
$kna = $_REQUEST["kname"];
$emp = 'From: '.$kma.' ('.$kna.')\r\n';
$emp .= 'Content-Type: text/html\r\nContent-Transfer-Encoding: 8bit\r\n';
$emp .= 'X-Mailer: PHP '. phpversion();
/* if (mail($emp, $topic, $mailtext, '.mymail.')){
echo 'ok';
} ELSE { 
echo 'hmm';
}} */
IF ($_REQUEST["mode"] = "goback") {
	adp();
}}
?>