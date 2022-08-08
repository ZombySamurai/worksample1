<form action="ei.php?mode=ask" method="post">
<input type="hidden" name="mode" value="soft"/>
<input type="radio" name="ens"/>
<input type="hidden" name="mode" value="hart"/>
<input type="radio" name="enh"/>
</form>
<?php
	echo '<form action="ei.php?mode=ask" method="post">';
	IF ($_REQUEST["mode"] == "hart") {
		echo "Du toller Hecht!";
	} ELSE {
		echo "jojo"; }
?>