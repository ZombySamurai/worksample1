<?php
require_once 'essential.php';
IF (($_POST["name"] == 'admin') AND ($_POST["alter"] == '24')) 
{
	adp();
//admin page
} ELSE {
	goaway(); 
}
?>

