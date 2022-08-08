<?php
$prodrange = array("Suite 2020 Basic","OS Accounting Package","OS For Home Usage","OS Custom Editions (custom-tailored for your needs!)");
function prodliste()
{
foreach ($prodrange as $prods) {
	echo "X-$prods<br>\n";
}
}
?>