<?php
require_once 'essential.php';
//hier kommt alles zum User hin
function groetjes_usr() {
	$usertype = "admin";
	$username = "Reinhold Linde";
	$pronoun = "Mr. ";
	if ($usertype == "admin") {
		print "Welcome, ".$usertype." ".$username."!";
	} else {
		print "How can we help you, ".$pronoun.$username."?";
	}
}
?>