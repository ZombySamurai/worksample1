<?php
$input = array("Baise toi", "Puta madre", "amina koyim", "kut", "dork", "dickhead", "cretin", "putain");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
header ("refresh: 3; swear.php"); 
?>