<?php
require_once 'essential.php';
//hier kommen alle Funktionen und sonstigen Abfragen zum Katalog hinein
function prodliste()
{
$prodrange = array("Suite 2020 Basic","OS Accounting Package","OS For Home Usage","OS Custom Editions (custom-tailored for your needs!)");
foreach ($prodrange as $prods) {
	echo "X-$prods<br>\n";
}
}
//hier soll später anhand von Plandaten der heutige Deal aus SQL abgefragt werden, noch ist nur Dummy
function dealtd()
{
$dealcurrent = "X-Suite Module: Pi-TC - Save Money AND energy!";
echo "Today's deal of the day is";
?>
<p></p>
<?php
echo $dealcurrent;
}
?>