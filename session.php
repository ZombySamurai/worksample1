<?php
function ihreid() {
	$u_id = uniqid ("");
	$besser_id = uniqid (rand());
	echo "Ihre Session-ID ist ". $u_id ." ". $besser_id; 
}
function waw() {
	echo 'Exc</b><i>ellence</i> <b>I</b><i>n</i> <b>De</b><i>sign</i>'; 
}
if ($_REQUEST["mode"] = "sn") {
	ihreid();
	echo '<br>';
	waw();
}
?> 