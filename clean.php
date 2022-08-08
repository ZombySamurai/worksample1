<?php
IF ($_REQUEST["mode"] = "sn") {
session_start();
$_SESSION = array();
session_destroy();
Echo 'Session destroyed! Muhahaha!'; }
?>