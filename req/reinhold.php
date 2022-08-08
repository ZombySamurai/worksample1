<?php> 
$usertype = "admin";
$username = "Reinhold Linde";
$pronoun = "Mr. ";
if ($usertype == "admin") {
echo "Welcome, ".$usertype."".$username;
} else {
echo "How can we help you, "$pronoun.$username"?";
?>.